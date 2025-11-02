<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lamaran;
use App\Models\Portal;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Hitung total data untuk card statistik
        $totalDilamar     = Lamaran::count();
        $totalDiproses    = Lamaran::where('status', 'Diproses')->count();
        $totalWawancara   = Lamaran::where('status', 'Wawancara')->count();
        $totalPortal      = Portal::count();

        // Ambil 5 data lamaran terakhir (dengan relasi portal)
        $lamaranTerbaru = Lamaran::with('portal')
            ->orderBy('created_at', 'desc')
            ->take(5)
            ->get();

        return view('dashboard', compact(
            'totalDilamar',
            'totalDiproses',
            'totalWawancara',
            'totalPortal',
            'lamaranTerbaru'
        ));
    }
    

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
