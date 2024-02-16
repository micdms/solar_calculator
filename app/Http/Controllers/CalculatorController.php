<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use App\Http\Requests\StoreCalculatorRequest;
use App\Http\Requests\UpdateCalculatorRequest;
use App\Models\Calculator;
use Illuminate\Http\Request;
use App\Models\User;

class CalculatorController extends Controller
{
    public function ViewCalculator()
    {
        return view('ViewCalculator');
    }

    public function CountCalculator()
    {
    }

    public function AddCalculator(Request $request)
    {
        try {
            $response_provinsi = Http::withHeaders([
                'key' => '597753f92b40f70184c440f4ed974a9a',
            ])->get('https://api.rajaongkir.com/starter/province', ['id' => $request->provinsi]);

            if ($response_provinsi->successful()) {
                $provinsi = $response_provinsi->json()['rajaongkir']['results']['province'];
                $response_kota = Http::withHeaders([
                    'key' => '597753f92b40f70184c440f4ed974a9a',
                ])->get('https://api.rajaongkir.com/starter/city', ['id' => $request->kota, 'province' => $request->provinsi]);

                if ($response_kota->successful()) {
                    $kota = $response_kota->json()['rajaongkir']['results']['city_name'];
                    $kode_pos = $response_kota->json()['rajaongkir']['results']['postal_code'];

                    $response = Http::post('https://otp.deltamas-solusindo.my.id/generate-otp', ['telephone' => $request->telephone]);
                    $data = json_decode($response->body(), true);
                    $token = $data['token'];

                    $user = new User();
                    $user->nama = $request->nama;
                    $user->provinsi_id = $request->provinsi;
                    $user->provinsi = $provinsi;
                    $user->kota_id = $request->kota;
                    $user->kota = $kota;
                    $user->kode_pos = $kode_pos;
                    $user->alamat = $request->alamat;
                    $user->telephone = $request->telephone;
                    $user->email = $request->email;
                    $user->status = 'non_active';
                    $user->token = $token;
                    $user->save();

                    if ($user) {
                        $calculator = new Calculator();
                        $calculator->id_user = $user->id;
                        $calculator->biaya_listrik = $request->biaya_listrik;
                        $calculator->kapasitas_listrik = $request->kapasitas_listrik;
                        $calculator->rangka_atap = $request->rangka_atap;
                        $calculator->jenis_atap = $request->jenis_atap;
                        $calculator->save();

                        if ($calculator) {
                            return redirect()->route('ViewInvoice', $user->telephone);
                        } else {
                            return view('404');
                        }
                    } else {
                        return view('404');
                    }
                } else {
                    return view('404');
                }
            } else {
                return view('404');
            }
        } catch (\Exception $e) {
            dd($e);
            return view('404');
        }
    }


    public function ViewInvoice($token)
    {
        $harga_plts = [
            "1300" => ["35535400", 9.2, 13],
            "2200" => ["59453600", 10.9, 13],
            "3500" => ["71805900", 13.4, 9],
            "3900" => ["77392400", 14.2, 9],
            "4400" => ["84025700", 15, 8],
            "5500" => ["93058800", 16.7, 7],
            "6600" => ["103916200", 19.2, 7]
        ];
        $user = User::where('token', $token)->first();
        $user->status = 'active';
        $user->update();
        $calculator = Calculator::where('id_user', $user->id)->select('biaya_listrik', 'kapasitas_listrik', 'rangka_atap', 'jenis_atap')->first();
        $response = Http::withHeaders([
            'key' => '597753f92b40f70184c440f4ed974a9a',
        ])->post('https://api.rajaongkir.com/starter/cost', [
            'origin' => '456',
            'destination' => $user->kota_id,
            'weight' => '30000',
            'courier' => 'jne',
        ]);

        if ($response->successful()) {
            $harga_per30 = $responseData = $response->json()["rajaongkir"]["results"][0]["costs"][1]["cost"][0]["value"];
            $user_data_harga = $harga_plts[$calculator->kapasitas_listrik];
            $ongkir = $user_data_harga[1] * $harga_per30;
            // dd($ongkir,$ongkir+$user_data_harga[0]);
            return view('inv', ['calculator' => $calculator, 'ongkir' => $ongkir, 'total_biaya' => $user_data_harga[0], 'kapasitas_listrik' => $calculator->kapasitas_listrik, 'bep' => $user_data_harga[2]]);
        } else {
            // Gagal, Anda dapat mengakses kode status dengan $response->status()
            dd($responseStatus = $response->status());
        }
        // dd(json_decode($cek_ongkir,true));
        // $pv = [];
        // $boq = $pv[];
    }

    public function GetProvinsi()
    {
        $response = Http::withHeaders([
            'key' => '597753f92b40f70184c440f4ed974a9a',
        ])->get('https://api.rajaongkir.com/starter/province');
        $response->header('Access-Control-Allow-Origin', '*');
        return $response->json();
    }

    public function GetCity($id)
    {
        $response = Http::withHeaders([
            'key' => '597753f92b40f70184c440f4ed974a9a',
        ])->get('https://api.rajaongkir.com/starter/city', ['province' => $id]);
        return $response->json();
    }

    public function nama(Request $request)
    {
        return response()->json(['nama' => "oke", "biaya" => $request->biaya], 200);
    }
}
