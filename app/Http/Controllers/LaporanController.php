<?php

namespace App\Http\Controllers;

use App\Models\Laporan;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LaporanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Laporan::all();
        return view('user.laporan.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('user.laporan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $input = $request->all();

        $request->validate([
            'judul_laporan' => 'required|string|min:5|max:50',
            'jenis' => 'required',
            'dokumentasi' => 'required|file|max:10240',
            'detail_laporan' => 'required',
        ]);

        if($request->hasFile('dokumentasi'))
        {
            $gambar = $request->file('dokumentasi');
            $path = 'public/images/laporan';
            $ext = $gambar->getClientOriginalExtension();
            $name = 'laporan_'.Carbon::now()->format('Ymdhis').'.'.$ext;
            $gambar->storeAs($path, $name);
            $input['dokumentasi'] = $name;
        }

        //id user = user yang sedang login.
        $input['id_user'] = Auth::user()->id;
        $input['tanggal_laporan'] = Carbon::now()->format('Y-m-d H:i:s');

        Laporan::create($input);
        return redirect()->route('laporan.index');



    }

    /**
     * Display the specified resource.
     */
    public function show(Laporan $laporan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Laporan $laporan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Laporan $laporan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Laporan $laporan)
    {
        //
    }
}
