<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use Illuminate\Http\Request; {
    class DosenController extends Controller
    {
        public function index()
        {
            return response()->json(Dosen::all());
        }

        public function show($no)
        {
            $dosen = Dosen::find($no);
            if (!$dosen) return response()->json(['message' => 'Data tidak ditemukan'], 404);
            return response()->json($dosen);
        }

        public function store(Request $request)
        {
            $this->validate($request, [
                'nip' => 'required|unique:dosens',
                'nama_lengkap' => 'required',
                'no_telepon' => 'required',
                'email' => 'required|email|unique:dosens',
                'alamat' => 'required'
            ]);

            $dosen = Dosen::create($request->all());
            return response()->json($dosen, 201);
        }

        public function update(Request $request, $no)
        {
            $dosen = Dosen::find($no);
            if (!$dosen) return response()->json(['message' => 'Data tidak ditemukan'], 404);

            $dosen->update($request->all());
            return response()->json($dosen);
        }

        public function destroy($no)
        {
            $dosen = Dosen::find($no);
            if (!$dosen) return response()->json(['message' => 'Data tidak ditemukan'], 404);

            $dosen->delete();
            return response()->json(['message' => 'Data berhasil dihapus']);
        }
    }
}
