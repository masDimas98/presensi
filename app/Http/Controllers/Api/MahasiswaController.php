<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Mahasiswa;
use Illuminate\Support\Facades\Validator;
use App\Http\Resources\MahasiswaResource;

class MahasiswaController extends Controller
{
    /**
     * index
     * 
     * @return void
     */

    public function index()
    {
        $mahasiswa = Mahasiswa::lasest()->paginate(5);
        return new MahasiswaResource(true, 'list Data Mahasiswa', $mahasiswa);
    }

    /**
     * store
     * 
     * @param mixed $request
     * @return void
     */

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'npm' => 'required|unique:mahasiswas',
            'nama' => 'required',
            'jenis_kelamin' => 'required',
            'tanggal_lahir' => 'required',
            'angkatan' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }
    }
}
