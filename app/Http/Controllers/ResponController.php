<?php

namespace App\Http\Controllers;

use App\Models\Laporan;
use App\Models\Respon;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ResponController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Laporan::all();
        return view('respon.index', compact('data'));
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
        $request->validate([
            'detail_respon' => 'required'
        ]);

        Respon::create([
            'detail_respon' => $request->detail_respon,
            'tanggal_respon' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        $status = Laporan::findOrFail($request->id_laporan);
        $status->status = $request->status;
        $status->save();

        return back()->with('success','Respon ditambahkan');

    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $data = Laporan::findOrFail($id);
        $respon = Respon::where('id_laporan', $id)->get()->all();
        return view('respon.detail', compact('data', 'respon'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Respon $respon)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Respon $respon)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Respon $respon)
    {
        //
    }
}
