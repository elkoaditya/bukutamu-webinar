<?php

namespace App\Http\Controllers;

use App\Mail\Gmail;
use App\Models\Kabupatens;
use App\Models\Webinar;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class LandingController extends Controller
{
    public function index(){
        $kabupatens = Kabupatens::all();
//        if (Carbon::now()->isSameDay(Carbon::parse('2022-05-18'))) {
//            if (Carbon::now()->isSameHour(Carbon::parse('07:00'))) {
//                return redirect('/zoom');
//            }
//        }


        return view('welcome', compact('kabupatens'));
    }
    public function register(Request $request){
        $validator = Validator::make($request->all(), [
            'namaSekolah' => 'string | required',
            'jabatan' => 'string | required',
//            'alamatSekolah' => 'string | required',
            'namaKepalaSekolah' => 'string | required',
            'notelpKapsek' => 'string | required',
//            'jenjang' => 'string | required',
//            'kabupaten' => 'string | required',
            'email' => 'email | required',
        ]);
        if ($validator->fails()) {
            dd($validator->errors());
            return "Harap isi data dengan benar";
        }
        try {
            $create = Webinar::create([
                'namaSekolah' => $request->namaSekolah,
                'namaKepalaSekolah' => $request->namaKepalaSekolah,
                'notelpKapsek' => $request->notelpKapsek,
                'jabatan' => $request->jabatan,
                'from' => "register",
                'email' => $request->email,
            ]);
//            Mail::to($create->email)->send(new Gmail($create));
//            return Storage::download('back.jpg');
            Session::flash('download.in.the.next.request', 'back.jpg');
            return redirect('/')->with('message', 'Terima kasih telah mengisi buku tamu, silahkan tunggu untuk mendapatkan foto yang dapat digunakan sebagai background webinar.');
        }catch (\Exception $e) {
            dd($e);
            return redirect('/')->with('error', "Maaf, email anda sudah pernah terdaftar sebelumnya.");;
        }
    }
}
