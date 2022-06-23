<?php

namespace App\Http\Controllers;

use App\Peserta;
use App\Kegiatan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PesertaController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request, $slug)
    {
        $kegiatan = Kegiatan::where('slug', $slug)->firstOrFail();
        return view('peserta.create', [
            'kegiatan' => $kegiatan
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
            // dd($request); -> fungsi keren

        //buat validasi
        $request->validate([
            'nama_peserta' => 'required',
            'institusi' => 'required',
            'jabatan' => 'required',
            'pangkat' => 'required',
            'email' => 'required',
            'nohp' => 'required',
            'ttd' => 'required',
        ]);


        // upload image ttd
	    $image_parts = explode(";base64,", $request->ttd);
	    $image_type_aux = explode("image/", $image_parts[0]);
	    $image_type = $image_type_aux[1];
        $image_base64 = base64_decode($image_parts[1]);
        
	    $file = 'uploads/signature/' . uniqid() . '.'.$image_type;
	    Storage::disk('public')->put($file, $image_base64);

        // save to database
        $data = $request->all();
        $data['ttd'] = $file;
       // $data['slug'] = Str::slug($request->nama_kegiatan);
        Peserta::create($data);

        // redirect ke halaman list
        return redirect()->route('peserta.thanks');





    }

    public function thanks(Request $request) {
        return view('peserta.thanks');
    }
}
