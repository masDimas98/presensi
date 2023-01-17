<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Http\Resources\GedungResource;
use Illuminate\Http\Request;
use App\Models\Gedung;
use Illuminate\Support\Facades\Validator;

class GedungController extends Controller
{
    /**
     * index
     *
     * @return void
     */
    public function index()
    {
        $gedung = Gedung::latest()->paginate(5);
        return new GedungResource(true, 'list data gedung', $gedung);
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
            'nama' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        $gedung = Gedung::create([
            'nama' => $request->nama,
        ]);

        return new GedungResource(true, 'Data Gedung Berhasil ditambahkan!', $gedung);
    }

    /**
     * show
     * 
     * @param mixed $gedung
     * @return void
     */
    public function show(Gedung $gedung)
    {
        return new GedungResource(true, 'Data Gedung Ditemukan!', $gedung);
    }

    /**
     * update
     * 
     * @param mixed $request
     * @param mixed $gedung
     * @return void
     */

    public function update(Request $request, Gedung $gedung)
    {
        $validator = Validator::make($request->all(), [
            'nama' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        $gedung->update([
            'nama' => $request->nama,
        ]);

        return new GedungResource(true, 'Data Gedung Berhasil Diubah!', $gedung);
    }

    /**
     * destroy
     * 
     * @param mixed $gedung
     * @return void
     */

    public function destroy(Gedung $gedung)
    {
        $gedung->delete();

        return new gedungResource(true, 'Data Gedung Berhasil dihapuskan!', null);
    }
}
