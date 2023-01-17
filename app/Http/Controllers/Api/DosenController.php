<?php

namespace App\Http\Controllers\Api;

use App\Models\Dosen;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Resources\DosenResource;
use Illuminate\Support\Facades\Validator;

class DosenController extends Controller
{
    /**
     * index
     *
     * @return void
     */
    public function index()
    {
        $dosens = Dosen::latest()->paginate(5);

        return new DosenResource(true, 'list data dosen', $dosens);
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
            'nidn' => 'required|unique:dosens'
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        $dosen = Dosen::create([
            'nama' => $request->nama,
            'nidn' => $request->nidn
        ]);

        return new DosenResource(true, 'Data Dosen Berhasil ditambahkan!', $dosen);
    }

    /**
     * show
     * 
     * @param mixed $dosen
     * @return void
     */

    public function show(Dosen $dosen)
    {
        return new DosenResource(true, 'Data Dosen Ditemukan!', $dosen);
    }

    /**
     * update
     * 
     * @param mixed $request
     * @param mixed $dosen
     * @return void
     */
    public function update(Request $request, Dosen $dosen)
    {
        $validator = Validator::make($request->all(), [
            'nama' => 'required',
            'nidn' => 'required|unique:dosens'
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        $dosen->update([
            'nama' => $request->nama,
            'nidn' => $request->nidn
        ]);

        return new DosenResource(true, 'Data Dosen Berhasil Diubah!', $dosen);
    }

    /**
     * destroy
     * 
     * @param mixed $dosen
     * @return void
     */

    public function destroy(Dosen $dosen)
    {
        $dosen->delete();

        return new DosenResource(true, 'Data Dosen Berhasil dihapuskan!', null);
    }
}
