<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use Illuminate\Http\Request;

class ActivityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Mengambil data pengguna tabel Community
        $activities= Activity::all();  

        return view('pages.admin.activity_management', [
            'activities' => $activities
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.admin.activity.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         // Validasi data yang dikirim
         $request->validate([
            'name' => 'required|string|max:255',
            'id_community' =>  'nullable|int|',
            'description' => 'nullable|string',
            'images' =>'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // max 2MB
            'datetime_start' => 'nullable|string',
            'datetime_end' => 'nullable|string'
        ]);

         // Mengelola file upload
         $imagePath = $request->file('image')->store('poster', 'public');

         // Menyimpan data ke database
        Activity::create([
            'id_community' => 1,
            'name' => $request->name,
            'description' => $request->description,
            'image' => $imagePath, // Menyimpan path Poster
            'datetime_start' => $request->visi,
            'datetime_end' => $request->misi
        ]);

        // Redirect ke halaman community management dengan pesan sukses
        return redirect()->route('activity.index')->with('success', 'Aktivitas berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
         
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($activityId)
    {
        // Ambil data komunitas berdasarkan ID
        $activity = Activity::findOrFail($activityId);

        // Tampilkan form edit dengan data komunitas yang sudah ada
        return view('pages.admin.activity.edit', [
            'activity' => $activity
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
