<?php

namespace App\Http\Controllers;

use App\Models\Hospital;
use App\Models\RumahSakit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator; // Tambahkan ini

class RumahSakitController extends Controller
{
    // Menampilkan semua data rumah sakit
    public function index()
    {
        $rumahSakit = RumahSakit::all();
        return response()->json($rumahSakit);
    }

    // Menyimpan data rumah sakit baru
    public function store(Request $request)
    {
        // Validasi manual
        $validator = Validator::make($request->all(), [
            'nama_rumah_sakit' => 'required|string',
            'alamat_lengkap'   => 'required|string',
            'no_telpon'        => 'required|string',
            'type_rumah_sakit' => 'required|string',
            'latitude'         => 'required|numeric',
            'longitude'        => 'required|numeric',
        ]);

        // Cek error validasi
        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        // Simpan data
        $rumahSakit = RumahSakit::create($request->all());

        return response()->json([
            'message' => 'Data Rumah Sakit berhasil ditambahkan',
            'data'    => $rumahSakit
        ], 201);
    }

    // Menampilkan detail satu rumah sakit
    public function show($id)
    {
        $rumahSakit = RumahSakit::find($id);

        if (!$rumahSakit) {
            return response()->json(['message' => 'Data tidak ditemukan'], 404);
        }

        return response()->json($rumahSakit);
    }

    // Mengupdate data rumah sakit
    public function update(Request $request, $id)
    {
        $rumahSakit = RumahSakit::find($id);

        if (!$rumahSakit) {
            return response()->json(['message' => 'Data tidak ditemukan'], 404);
        }

        // Validasi manual
        $validator = Validator::make($request->all(), [
            'nama_rumah_sakit' => 'required|string',
            'alamat_lengkap'   => 'required|string',
            'no_telpon'        => 'required|string',
            'type_rumah_sakit' => 'required|string',
            'latitude'         => 'required|numeric|between:-90,90',
            'longitude'        => 'required|numeric|between:-180,180'
        ]);

        // Cek error validasi
        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        // Update data
        $rumahSakit->update($request->all());

        return response()->json([
            'message' => 'Data Rumah Sakit berhasil diupdate',
            'data'    => $rumahSakit
        ]);
    }

    // Menghapus data rumah sakit
    public function destroy($id)
    {
        $rumahSakit = RumahSakit::find($id);

        if (!$rumahSakit) {
            return response()->json(['message' => 'Data tidak ditemukan'], 404);
        }

        $rumahSakit->delete();

        return response()->json(['message' => 'Data Rumah Sakit berhasil dihapus']);
    }
}
