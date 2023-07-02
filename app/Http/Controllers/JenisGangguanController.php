<?php

namespace App\Http\Controllers;

use App\Models\JenisGangguan;
use App\Http\Requests\StoreJenisGangguanRequest;
use App\Http\Requests\UpdateJenisGangguanRequest;

class JenisGangguanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.gangguan.gangguan', [
            'gangguan' => JenisGangguan::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreJenisGangguanRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreJenisGangguanRequest $request)
    {
        $valid = $request->validate([
            'kode_gangguan' => 'required|unique:jenis_gangguan,kode_gangguan',
            'gangguan' => 'required'
        ]);
        JenisGangguan::create($valid);
        return redirect()->route('gangguan.index')->with('pesan', '<div class="alert alert-success p-3 mt-3" role="alert">
        Daftar gangguan telah ditambahkan
        </div>');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\JenisGangguan  $JenisGangguan
     * @return \Illuminate\Http\Response
     */
    public function show(JenisGangguan $JenisGangguan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\JenisGangguan  $JenisGangguan
     * @return \Illuminate\Http\Response
     */
    public function edit(JenisGangguan $JenisGangguan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateJenisGangguanRequest  $request
     * @param  \App\Models\JenisGangguan  $JenisGangguan
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateJenisGangguanRequest $request, $JenisGangguan)
    {
        $valid = $request->validate([
            'gangguan' => 'required'
        ]);
        $status = JenisGangguan::find($JenisGangguan)->update($valid);
        if ($status) {
            return redirect()->route('gangguan.index')->with('pesan', '<div class="alert alert-success p-3 mt-3" role="alert">Daftar gangguan telah diupdate</div>');
        }
        return redirect()->route('gangguan.index')->with('pesan', '<div class="alert alert-warning p-3 mt-3" role="alert">Daftar gangguan gagal diupdate</div>');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\JenisGangguan  $JenisGangguan
     * @return \Illuminate\Http\Response
     */
    public function destroy($JenisGangguan)
    {
        // dd($JenisGangguan);
        JenisGangguan::find($JenisGangguan)->delete();
        return redirect()->route('gangguan.index')->with('pesan', '<div class="alert alert-success p-3 mt-3" role="alert">
        Daftar gangguan telah dihapus
        </div>');
    }
}
