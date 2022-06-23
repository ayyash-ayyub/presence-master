<?php

namespace App\Http\Controllers;

use App\Kegiatan;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class KegiatanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Kegiatan::all();
        
        return view('kegiatan.index', [
            'items' => $items
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kegiatan.create');
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
            'nama_kegiatan' => 'required|min:5',
            'tanggal_waktu' => 'required',
            'koordinator' => 'required',
        ]);

        // save to database
        $data = $request->all();
        $data['slug'] = Str::slug($request->nama_kegiatan);
        Kegiatan::create($data);

        // redirect ke halaman list
        return redirect()->route('kegiatan.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Kegiatan  $kegiatan
     * @return \Illuminate\Http\Response
     */
    public function show(Kegiatan $kegiatan)
    {
        return view('kegiatan.show', [
            'kegiatan' => $kegiatan
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Kegiatan  $kegiatan
     * @return \Illuminate\Http\Response
     */
    public function edit(Kegiatan $kegiatan)
    {
        return view('kegiatan.edit', [
            'item' => $kegiatan
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Kegiatan  $kegiatan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kegiatan $kegiatan)
    {
        //buat validasi
        $request->validate([
            'nama_kegiatan' => 'required|min:5',
            'tanggal_waktu' => 'required',
            'koordinator' => 'required',
        ]);

        $data = $request->all();
        $data['slug'] = Str::slug($request->nama_kegiatan);
        $kegiatan->update($data);

        // redirect ke halaman list
        return redirect()->route('kegiatan.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Kegiatan  $kegiatan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kegiatan $kegiatan)
    {
        $kegiatan->delete();
        return redirect()->route('kegiatan.index');
    }
}
