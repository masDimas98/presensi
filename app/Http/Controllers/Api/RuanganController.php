<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Resources\RuanganResource;
use App\Models\Ruangan;
use Illuminate\Support\Facades\Validator;

class RuanganController extends Controller
{
    /**
     * index
     *
     * @return void
     */
    public function index()
    {
        $ruangan = Ruangan::latest()->paginate(5);
        return new RuanganResource(true, 'list data ruangan', $ruangan);
    }

    /**
     * store
     *
     * @param  mixed $request
     * @return void
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'kode_ruangan' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        $ruangan = Ruangan::create([
            'kode_ruangan' => $request->kode_ruangan,
        ]);

        return new RuanganResource(true, 'Data ruangan Berhasil ditambahkan!', $ruangan);
    }

    /**
     * show
     * 
     * @param mixed $ruangan
     * @return void
     */
    public function show(Ruangan $ruangan)
    {
        return new RuanganResource(true, 'Data Ruangan Ditemukan!', $ruangan);
    }

    /**
     * update
     * 
     * @param mixed $request
     * @param mixed $ruangan
     * @return void
     */

    public function update(Request $request, Ruangan $ruangan)
    {
        $validator = Validator::make($request->all(), [
            'kode_kelas' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        $ruangan->update([
            'kode_kelas' => $request->kode_kelas,
        ]);

        return new RuanganResource(true, 'Data Kelas Berhasil Diubah!', $ruangan);
    }

    /**
     * destroy
     * 
     * @param mixed $ruangan
     * @return void
     */

    public function destroy(Ruangan $ruangan)
    {
        $ruangan->delete();

        return new RuanganResource(true, 'Data Kelas Berhasil dihapuskan!', null);
    }
}
