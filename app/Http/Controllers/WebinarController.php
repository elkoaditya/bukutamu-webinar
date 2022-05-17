<?php

namespace App\Http\Controllers;

use App\Imports\ImportUser;
use App\Imports\ImportWebinar;
use App\Imports\WebinarExcel;
use App\Mail\Gmail;
use App\Models\Kabupatens;
use App\Models\Webinar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Excel;

class WebinarController extends Controller
{
    //
    public function index()
    {
        $webinars = Webinar::all();
        $kabupatens = Kabupatens::all();
        return view('superadmin.webinar.index', compact('webinars', 'kabupatens'));
    }
    public function create(Request $request){
        $validator = Validator::make($request->all(), [
            'namaSekolah' => 'string | required',
            'alamatSekolah' => 'string | required',
            'namaKepalaSekolah' => 'string | required',
            'notelpKapsek' => 'string | required',
            'jenjang' => 'string | required',
            'kabupaten' => 'string | required',
            'email' => 'email | required',
        ]);
        if ($validator->fails()) {
            return redirect()->back()->with('notiv', json_encode([
                'status' => 'error',
                'header' => 'Gagal menambah peserta webinar',
                'sub' => 'Silahkan cek semua field sudah di isi dengan benar atau belum.',
            ]));
        }
        try {
            $create = Webinar::create([
                'namaSekolah' => $request->namaSekolah,
                'alamatSekolah' => $request->alamatSekolah,
                'namaKepalaSekolah' => $request->namaKepalaSekolah,
                'notelpKapsek' => $request->notelpKapsek,
                'email' => $request->email,
                'jenjang' => $request->jenjang,
                'kabupaten' => $request->kabupaten,
                'from' => "admin",
            ]);
            if ($create) {
                Mail::to($create->email)->send(new Gmail($create));

                return redirect()->back()->with('notiv', json_encode([
                    'status' => 'success',
                    'header' => 'Berhasil menambah peserta webinar',
                    'sub' => 'Peserta webinar berhasil ditambahkan.',
                ]));
            }else{
                return redirect()->back()->with('notiv', json_encode([
                    'status' => 'error',
                    'header' => 'Gagal menambah peserta webinar',
                    'sub' => 'Peserta webinar gagal ditambahkan.',
                ]));
            }


        } catch (\Exception $e) {
            return redirect()->back()->with('notiv', json_encode([
                'status' => 'error',
                'header' => 'Gagal menambah peserta webinar',
                'sub' => 'Silahkan hubingui administrator Afreso system ( webinar )',
            ]));
        }
    }

    public function view($id){
        $webinar = Webinar::find($id);
        return view('superadmin.webinar.view', compact('webinar'));
    }
    public function delete(Request $request)
    {
        // create function to delete webinar
        $webinar = Webinar::find($request->id);
        if ($webinar->delete()) {
            return redirect('/superadmin/webinar')->with('notiv', json_encode([
                'status' => 'success',
                'header' => 'Berhasil menghapus peserta webinar',
                'sub' => 'Peserta webinar berhasil dihapus.',
            ]));
        }
    }
    public function import(Request $request){
        $test = Excel::toArray(new ImportWebinar, $request->file('file'));
        $emails = [];

        foreach ($test[0] as $key => $value) {
            if ($key != 0) {
                if ($value[0] != null || $value[1] != null || $value[2] != null || $value[3] != null || $value[4] != null || $value[5] != null || $value[6] != null) {
                    if (Webinar::where('email', $value[2])->count() == 0) {
                        Webinar::create([
                            'namaSekolah' => $value[0],
                            'alamatSekolah' => $value[1],
                            'email' => $value[2],
                            'namaKepalaSekolah' => $value[3],
                            'notelpKapsek' => $value[4],
                            'from' => "admin",
                            'jenjang' => $value[5],
                            'kabupaten' => $value[6],
                        ]);
                    }
                }
            }
        }
        return redirect()->back()->with('notiv', json_encode([
            'status' => 'success',
            'header' => 'Berhasil import peserta webinar',
            'sub' => 'Peserta webinar berhasil ditambahkan.',
        ]));
    }
    public function Laporan(Request $request){
        $webinars = Webinar::all();
        return view('superadmin.webinar.laporan', compact('webinars'));
    }
}
