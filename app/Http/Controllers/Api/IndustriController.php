<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Industri;
use Illuminate\Http\Request;

class IndustriController extends Controller
{
      public function index()
    {
        return Industri::all();
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'bidang_usaha' => 'required|string|max:255',
            'alamat' => 'required|string',
            'kontak' => 'nullable|string|max:20',
            'email' => 'nullable|email|unique:industri,email',
            'guru_pembimbing' => 'required|exists:guru,id',
            'website' => 'required|string|max:255',
            'foto' => 'nullable|string|max:255',
        ]);

        $industri = Industri::create([
            'nama' => $request->nama,
            'bidang_usaha' => $request->bidang_usaha,
            'alamat' => $request->alamat,
            'kontak' => $request->kontak,
            'email' => $request->email,
            'guru_pembimbing' => $request->guru_pembimbing,
            'website' => $request->website,
            'foto' => $request->foto,
        ]);

        return response()->json([
            'message' => 'Data industri berhasil disimpan',
            'industri' => $industri
        ], 201);
    }

    public function show(string $id)
    {
        $industri = Industri::with('guru')->find($id);

        if (!$industri) {
            return response()->json(['message' => 'Industri tidak ditemukan'], 404);
        }

        return response()->json([
            'industri' => $industri,
            'guru_pembimbing' => $industri->guru ? $industri->guru->nama : null,
        ]);
    }

    public function update(Request $request, string $id)
    {
        $industri = Industri::find($id);

        if (!$industri) {
            return response()->json(['message' => 'Industri tidak ditemukan'], 404);
        }

        $request->validate([
            'nama' => 'required|string|max:255',
            'bidang_usaha' => 'required|string|max:255',
            'alamat' => 'required|string',
            'kontak' => 'nullable|string|max:20',
            'email' => 'nullable|email|unique:industri,email,' . $id,
            'guru_pembimbing' => 'required|exists:guru,id',
            'website' => 'required|string|max:255',
            'foto' => 'nullable|string|max:255',
        ]);

        $industri->update([
            'nama' => $request->nama,
            'bidang_usaha' => $request->bidang_usaha,
            'alamat' => $request->alamat,
            'kontak' => $request->kontak,
            'email' => $request->email,
            'guru_pembimbing' => $request->guru_pembimbing,
            'website' => $request->website,
            'foto' => $request->foto,
        ]);

        $industri->load('guru');

        return response()->json([
            'message' => 'Data industri berhasil diperbarui',
            'industri' => $industri,
            'guru_pembimbing' => $industri->guru ? $industri->guru->nama : null,
        ]);
    }

    public function destroy(string $id)
    {
        $industri = Industri::find($id);

        if (!$industri) {
            return response()->json(['message' => 'Industri tidak ditemukan'], 404);
        }

        $industri->delete();

        return response()->json(['message' => 'Data industri berhasil dihapus']);
    }

}
