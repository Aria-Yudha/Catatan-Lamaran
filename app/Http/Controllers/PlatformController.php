<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Portal;
class PlatformController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $portals = Portal::withCount("lamaran")->orderBy('created_at', 'asc')->get();
        return view('portal.index', compact('portals','portals'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('portal.tambahdatapor');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_portal'=> 'required | string']);
        
        
        Portal::create([
            'nama_portal' => $request->nama_portal]);
        return redirect()->route('portal-lamaran')->with('success','Data berhasil ditambahkan');
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
        $portal = Portal::findOrFail($id);
        return view('portal.ubahdatapor', compact('portal'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nama_portal'=> 'required | string',
        ]);

        Portal::findOrFail($id)->update([
            'nama_portal'=> $request->nama_portal,
        ]);
        return redirect()->route('portal-lamaran')->with('success','');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $portal = Portal::findOrFail($id);
        $portal->delete();
        return redirect()->route('portal-lamaran')->with('success','');
    }
}
