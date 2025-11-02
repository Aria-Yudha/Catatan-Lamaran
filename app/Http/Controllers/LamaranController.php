<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lamaran;
use App\Models\Portal;

class LamaranController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $lamarans = Lamaran::all();
        return view("lamaran.indexlamaran", compact("lamarans"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $portals = Portal::all();
        return view("lamaran.tambahdatalamar", compact("portals"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            "nama_perusahaan"=> "required|string",
            "posisi_dilamar"=> "required",
            "id_portal"=> "required|exists:data_portal,id",
            "tanggal_lamar"=> "required | date",
            "keterangan"=> "required | string",
        ]);

        Lamaran::create([
            "nama_perusahaan" => $request->nama_perusahaan,
            "posisi_dilamar" => $request->posisi_dilamar,
            "id_portal"=> $request->id_portal,
            "tanggal_lamar"=> $request->tanggal_lamar,
            "keterangan"=> $request->keterangan,
            "status"=> "Sudah Apply",
        ]);
        return redirect()->route("data-lamaran")->with("success","Data berhasil ditambahkan");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $portal = Portal::all();
        $lamaran = Lamaran::find($id);
        return view("lamaran.ubahdatalamaran", compact("lamaran","portal"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            "nama_perusahaan"=> "required|string",
            "posisi_dilamar"=> "required|string",
            "id_portal"=> "required|exists:data_portal,id",
            "tanggal_lamar" => "required|date",
            "status"=> "required|string",
            "keterangan" => "required|string",
            ]);

        Lamaran::find($id)->update([
            "nama_perusahaan" => $request->nama_perusahaan,
            "posisi_dilamar"=> $request->posisi_dilamar,
            "id_portal"=> $request->id_portal,
            "tanggal_lamar"=> $request->tanggal_lamar,
            "keterangan"=> $request->keterangan,
            "status"=> $request->status,
            ]);

        return redirect()->route("data-lamaran")->with("success","");
            
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $lamaran = Lamaran::find($id);
        $lamaran->delete();
        return redirect()->route("data-lamaran")->with("success","");
    }
}
