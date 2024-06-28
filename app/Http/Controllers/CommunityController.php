<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Community;
use Illuminate\Support\Facades\Storage;

class CommunityController extends Controller
{
    public function createCommunity()
    {
        $data = [
            'id_user' => 1, // asumsikan ID user yang ada
            'name' => 'Komunitas Desa Baros',
            'description' => 'Komunitas Pemuda Desa Baros.'
            // ... isi nilai kolom lainnya sesuai dengan struktur tabel 'communities'
        ];

        $community = Community::create($data);

        // ... lakukan tindakan lain jika diperlukan, seperti redirect atau response

        return response()->json($community, 201); // contoh response JSON dengan status code 201
    }

    public function index() {
        // Mengambil data pengguna tabel Community
        $communities= Community::all();  

        return view('pages.admin.community_management', [
            'communities' => $communities
        ]);
    }

    public function show() {
        return view('pages.user.dinamis.detail_lembaga');
    }

    public function create() {
        return view('pages.admin.community.create');
    }

    public function store(Request $request) {

        // Validasi data yang dikirim
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'address' => 'required|string',
            'visi' => 'nullable|string',
            'misi' => 'nullable|string',
            'logo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048' // max 2MB
        ]);

         // Mengelola file upload
         $logoPath = $request->file('logo')->store('logos', 'public');

         // Menyimpan data ke database
        Community::create([
            'id_user' => auth()->id(), // Menggunakan ID pengguna yang sedang login
            // 'id_user' => 1, // Menggunakan ID pengguna yang sedang login
            'name' => $request->name,
            'description' => $request->description,
            'address' => $request->address,
            'logo' => $logoPath, // Menyimpan path logo
            'visi' => $request->visi,
            'misi' => $request->misi,
        ]);

        // Redirect ke halaman community management dengan pesan sukses
        return redirect()->route('community.index')->with('success', 'Komunitas berhasil ditambahkan!');

    }

    public function edit($communityId) {
        // Ambil data komunitas berdasarkan ID
        $community = Community::findOrFail($communityId);

        // Tampilkan form edit dengan data komunitas yang sudah ada
        return view('pages.admin.community.edit', [
            'community' => $community
        ]);
    }

    public function update(Request $request, $communityId) {
        // Validasi input
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'address' => 'required|string',
            'visi' => 'nullable|string',
            'misi' => 'nullable|string',
            'logo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);
    
        // Temukan komunitas berdasarkan ID
        $community = Community::findOrFail($communityId);
    
        // Update data komunitas
        $community->name = $request->name;
        $community->description = $request->description;
        $community->address = $request->address;
        $community->visi = $request->visi;
        $community->misi = $request->misi;
    
        // Jika ada file logo yang diunggah, proses dan simpan file tersebut
        if ($request->hasFile('logo')) {
            $logoPath = $request->file('logo')->store('public/logos');
            $community->logo = str_replace('public/', '', $logoPath); // Simpan path relatif ke logo
        }
    
        // Simpan perubahan
        $community->save();
    
        // Redirect ke halaman index dengan pesan sukses
        return redirect()->route('community.index')->with('success', 'Komunitas berhasil diupdate.');
    }

    public function destroy($communityId) {
        // Cari data komunitas berdasarkan ID
        $community = Community::findOrFail($communityId);
    
        // Hapus file logo jika ada
        if ($community->logo && Storage::exists('public/' . $community->logo)) {
            Storage::delete('public/' . $community->logo);
        }
    
        // Hapus data komunitas
        $community->delete();
    
        // Redirect ke halaman index dengan pesan sukses
        return redirect()->route('community.index')->with('success', 'Komunitas berhasil dihapus.');
    }

}
