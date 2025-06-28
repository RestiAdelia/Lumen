<?php

namespace App\Http\Controllers;

use App\Models\Kampus;
use Illuminate\Http\Request;

class KampusController extends Controller
{
    public function index()
    {
        return response()->json(Kampus::all());
    }

    public function show($id)
    {
        $kampus = Kampus::find($id);
        if (!$kampus) {
            return response()->json(['message' => 'Kampus not found'], 404);
        }
        return response()->json($kampus);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'nama_kampus' => 'required|string',
            'alamat_lengkap' => 'required|string',
            'no_telpon' => 'required|string',
            'kategori' => 'required|in:Swasta,Negeri',
            'latitude' => 'required|numeric',
            'longitude' => 'required|numeric',
            'jurusan' => 'required|string',
        ]);

        $kampus = Kampus::create($request->all());
        return response()->json([
            'message' => 'Data berhasil ditambahkan',
            'data'    => $kampus
        ], 201);
        // return response()->json($kampus, 201);
    }

    public function update(Request $request, $id)
{
    $kampus = Kampus::find($id);
    if (!$kampus) {
        return response()->json(['message' => 'Kampus not found'], 404);
    }

    $this->validate($request, [
        'nama_kampus' => 'string',
        'alamat_lengkap' => 'string',
        'no_telpon' => 'string',
        'kategori' => 'in:Swasta,Negeri',
        'latitude' => 'numeric',
        'longitude' => 'numeric',
        'jurusan' => 'string',
    ]);

    $kampus->update($request->all());

    return response()->json([
        'message' => 'Data berhasil Di Update',
        'data'    => $kampus
    ], 200); // GUNAKAN 200 untuk update
}


    public function destroy($id)
    {
        $kampus = Kampus::find($id);
        if (!$kampus) {
            return response()->json(['message' => 'Kampus not found'], 404);
        }

        $kampus->delete();
        return response()->json(['message' => 'Kampus Berhasil Di  Hapus']);
    }
}
