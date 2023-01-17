<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Resources\HakaksesResource;
use App\Models\HakAkses;
use Illuminate\Support\Facades\Validator;

class HakaksesController extends Controller
{
    /**
     * index
     *
     * @return void
     */
    public function index()
    {
        $hakakses = HakAkses::latest()->paginate(5);
        return new HakaksesResource(true, 'list data hakakses', $hakakses);
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

        $hakakses = HakAkses::create([
            'nama' => $request->nama,
        ]);

        return new HakaksesResource(true, 'Data Hakakses Berhasil ditambahkan!', $hakakses);
    }

    /**
     * show
     * 
     * @param mixed $hakakses
     * @return void
     */

    public function show(HakAkses $hakakses)
    {
        return new HakaksesResource(true, 'Data Hakakses Ditemukan!', $hakakses);
    }

    /**
     * update
     * 
     * @param mixed $request
     * @param mixed $hakakses
     * @return void
     */

    public function update(Request $request, HakAkses $hakakses)
    {
        $validator = Validator::make($request->all(), [
            'nama' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        $hakakses->update([
            'nama' => $request->nama,
        ]);

        return new HakaksesResource(true, 'Data Hakakses Berhasil Diubah!', $hakakses);
    }

    /**
     * destroy
     * 
     * @param mixed $hakakses
     * @return void
     */

    public function destroy(HakAkses $hakakses)
    {
        $hakakses->delete();

        return new HakaksesResource(true, 'Data Hakakses Berhasil dihapuskan!', null);
    }
}
