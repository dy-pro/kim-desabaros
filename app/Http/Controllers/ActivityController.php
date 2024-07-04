<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use App\Models\Community;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

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
        // Ambil semua komunitas untuk dropdown
        $communities = Community::all();

        return view('pages.admin.activity.create', compact('communities'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi data
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'location' =>'nullable|string|max:255',
            'id_community' => 'nullable|integer|exists:communities,id',
            'eventStartDate' => 'nullable|date',
            'eventStartTime' => 'nullable',
            'eventEndDate' => 'nullable|date',
            'eventEndTime' => 'nullable',
            'contact_name' => 'required|string|max:255',
            'contact_phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'image' => 'required|file|mimes:jpeg,png,jpg,gif|max:1024', // maksimal 1MB
            'new_community_name' => 'nullable|string|max:255'
        ], [
            'name.required' => 'Nama kegiatan harus diisi.',
            'name.string' => 'Nama kegiatan harus berupa teks.',
            'name.max' => 'Nama kegiatan maksimal 255 karakter.',
            
            'description.string' => 'Deskripsi harus berupa teks.',
            'description.max' => 'Deskripsi maksimal 500 karakter.',
            
            'location.string' => 'Lokasi harus berupa teks.',
            'location.max' => 'Lokasi maksimal 255 karakter.',
            
            'eventStartDate.date' => 'Tanggal mulai acara tidak valid.',                        
            'eventEndDate.date' => 'Tanggal akhir acara tidak valid.',

            'contact_name.required' => 'Nama kontak harus diisi.',
            'contact_phone.required' => 'Nomor telepon harus diisi.',
            
            'image.required' => 'Image harus diupload.',
            'image.file' => 'File yang diunggah harus berupa file.',
            'image.mimes' => 'Gambar harus berformat jpeg, png, jpg, atau gif.',
            'image.max' => 'Ukuran file maksimal 1MB.',
            
            'new_community_name.string' => 'Nama komunitas baru harus berupa teks.',
            'new_community_name.max' => 'Nama komunitas baru maksimal 255 karakter.'
        ]);
    
        // Mengelola file upload
        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('posters', 'public');
            Log::info('Image Uploaded', ['path' => $imagePath]);
        }

        // Menggabungkan tanggal dan waktu mulai
        $datetimeStart = $request->eventStartDate . ' ' . $request->eventStartTime;

        // Menggabungkan tanggal dan waktu berakhir
        $datetimeEnd = $request->eventEndDate . ' ' . $request->eventEndTime;

        // Menyimpan komunitas baru jika ada
        if ($request->filled('new_community_name')) {
            $community = Community::create([
                'name' => $request->new_community_name,
                'id_user' => auth()->id(), // Atur id_user ke pengguna yang sedang login
                'address' => null, 
                'logo' => null,    
                'description' => null,
                'visi' => null,
                'misi' => null,
            ]);

            // Tetapkan id komunitas baru ke request untuk disimpan dalam aktivitas
            $request->merge(['id_community' => $community->id]);
        }


        // Menyimpan data ke database
        $activity = Activity::create([
            'id_community' => $request->id_community,
            'name' => $request->name,
            'description' => $request->description,
            'location'=> $request->location,
            'contact_name'=> $request->contact_name,
            'contact_phone'=> $request->contact_phone,
            'datetime_start' => $datetimeStart,
            'datetime_end' => $datetimeEnd,
            'image' => $imagePath, // Menyimpan path Poster
        ]);

        // Redirect ke halaman community management dengan pesan sukses
        return redirect()->route('activity.index')->with('success', 'Aktivitas berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($activityId)
    {
        // Ambil data komunitas berdasarkan ID
        $activity = Activity::findOrFail($activityId);

        // Ambil semua komunitas
        $communities = Community::all();

         // Pisahkan datetime menjadi date dan time
        $startDate = $activity->datetime_start ? Carbon::parse($activity->datetime_start)->format('Y-m-d') : null;
        $startTime = $activity->datetime_start ? Carbon::parse($activity->datetime_start)->format('H:i') : null;
        $endDate = $activity->datetime_end ? Carbon::parse($activity->datetime_end)->format('Y-m-d') : null;
        $endTime = $activity->datetime_end ? Carbon::parse($activity->datetime_end)->format('H:i') : null;

        // Tampilkan form edit dengan data komunitas yang sudah ada
        return view('pages.admin.activity.edit', [
            'activity' => $activity,
            'communities' => $communities,
            'startDate' => $startDate,
            'startTime' => $startTime,
            'endDate' => $endDate,
            'endTime' => $endTime,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $activityId)
    {
        // Validasi data
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'location' =>'nullable|string|max:255',
            'id_community' => 'nullable|integer|exists:communities,id',
            'eventStartDate' => 'required|date',
            'eventStartTime' => 'required',
            'eventEndDate' => 'required|date',
            'eventEndTime' => 'required',
            'contact_name' => 'required|string|max:255',
            'contact_phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'image' => 'file|mimes:jpeg,png,jpg,gif|max:1024', // maksimal 1MB
            'new_community_name' => 'nullable|string|max:255'
        ], [
            'name.required' => 'Nama kegiatan harus diisi.',
            'name.string' => 'Nama kegiatan harus berupa teks.',
            'name.max' => 'Nama kegiatan maksimal 255 karakter.',
            
            'description.required' => 'Deskripsi harus diisi.',
            'description.string' => 'Deskripsi harus berupa teks.',
            'description.max' => 'Deskripsi maksimal 500 karakter.',
            
            'location.required' => 'Lokasi harus diisi.',
            'location.string' => 'Lokasi harus berupa teks.',
            'location.max' => 'Lokasi maksimal 255 karakter.',
            
            'eventStartDate.required' => 'Tanggal mulai acara harus diisi.',
            'eventStartDate.date' => 'Tanggal mulai acara tidak valid.',
            
            'eventStartTime.required' => 'Waktu mulai acara harus diisi.',
            
            'eventEndDate.required' => 'Tanggal akhir acara harus diisi.',
            'eventEndDate.date' => 'Tanggal akhir acara tidak valid.',
            
            'eventEndTime.required' => 'Waktu akhir acara harus diisi.',

            'contact_name.required' => 'Nama kontak harus diisi.',
            'contact_phone.required' => 'Nomor telepon harus diisi.',
            
            'image.file' => 'File yang diunggah harus berupa file.',
            'image.mimes' => 'Gambar harus berformat jpeg, png, jpg, atau gif.',
            'image.max' => 'Ukuran file maksimal 1MB.',
            
            'new_community_name.string' => 'Nama komunitas baru harus berupa teks.',
            'new_community_name.max' => 'Nama komunitas baru maksimal 255 karakter.'
        ]);

        // Cari data kegiatan
        $activity = Activity::findOrFail($activityId);

        // Menyimpan komunitas baru jika ada
        if ($request->filled('new_community_name')) {
            $community = Community::create([
                'name' => $request->new_community_name,
                'id_user' => auth()->id(), // Atur id_user ke pengguna yang sedang login
                'address' => null, 
                'logo' => null,    
                'description' => null,
                'visi' => null,
                'misi' => null,
            ]);

            // Tetapkan id komunitas baru ke request untuk disimpan dalam aktivitas
            $request->merge(['id_community' => $community->id]);
        }

        // Update data
        $activity->name = $request->name;
        $activity->description = $request->description;
        $activity->location = $request->location;
        $activity->contact_name = $request->contact_name;
        $activity->contact_phone = $request->contact_phone;
        $activity->id_community = $request->id_community;

        // Kombinasikan tanggal dan waktu untuk datetime_start dan datetime_end
        $activity->datetime_start = $request->eventStartDate . ' ' . $request->eventStartTime;
        $activity->datetime_end = $request->eventEndDate . ' ' . $request->eventEndTime;

        // Cek apakah ada file gambar baru yang di-upload
        if ($request->hasFile('image')) {
            // Hapus gambar lama jika ada
            if ($activity->image) {
                Storage::disk('public')->delete($activity->image);
            }
        
            // Simpan gambar baru
            $imagePath = $request->file('image')->store('posters', 'public');
            $activity->image = $imagePath;
        }

        // Simpan perubahan
        $activity->save();

        // Redirect ke halaman daftar kegiatan dengan pesan sukses
        return redirect()->route('activity.index')->with('success', 'Kegiatan berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($activityId)
    {
         // Cari data komunitas berdasarkan ID
         $activity = Activity::findOrFail($activityId);
    
         // Hapus file logo jika ada
         if ($activity->image && Storage::exists('public/' . $activity->image)) {
             Storage::delete('public/' . $activity->image);
         }
     
         // Hapus data komunitas
         $activity->delete();
     
         // Redirect ke halaman index dengan pesan sukses
         return redirect()->route('activity.index')->with('success', 'Kegiatan berhasil dihapus.');
    }
}
