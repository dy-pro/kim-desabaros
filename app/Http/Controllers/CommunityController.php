<?php

namespace App\Http\Controllers;

use App\Models\Community;

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

    public function show() {
        return view('pages.user.dinamis.detail_lembaga');
    }

}
