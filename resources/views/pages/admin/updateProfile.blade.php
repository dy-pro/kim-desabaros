@extends('layouts.admin.admin')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <!-- Profile Information Card -->
            <div class="card mb-4">
                <div class="card-header">
                    <h3 class="card-title"><strong>{{ __('Edit Profile') }}</strong></h3>
                </div>
                
                @if (session('status') === 'profile-updated')
                <script>
                    document.addEventListener("DOMContentLoaded", function() {
                        Swal.fire({
                            icon: 'success',
                            title: 'Profil Diperbarui',
                            text: 'Profil Anda telah berhasil diperbarui.'
                        });
                    });
                </script>
            @endif
                <div class="card-body">
                    <section>
                        <header>
                            <h4 class="text-lg font-medium text-gray-900">
                                {{ __('Informasi Profil') }}
                            </h4>
                            <p class="mt-1 text-sm text-gray-600">
                                {{ __("Perbarui informasi profil dan alamat email akun Anda.") }}
                            </p>
                        </header>

                        <form id="send-verification" method="post" action="{{ route('verification.send') }}">
                            @csrf
                        </form>

                        <form method="post" action="{{ route('profile.update') }}" class="mt-3">
                            @csrf
                            @method('patch')

                            <div class="mb-3">
                                <label for="name" class="form-label">{{ __('Nama Lengkap') }}</label>
                                <input id="name" name="name" type="text" class="form-control" value="{{ old('name', $user->name) }}" autofocus autocomplete="name">
                                @error('name')
                                    <div class="text-danger mt-2">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="email" class="form-label">{{ __('Email') }}</label>
                                <input id="email" name="email" type="email" class="form-control" value="{{ old('email', $user->email) }}" autocomplete="username">
                                @error('email')
                                    <div class="text-danger mt-2">{{ $message }}</div>
                                @enderror

                                @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
                                    <div class="mt-2">
                                        <p class="text-sm text-gray-800">
                                            {{ __('Alamat email Anda tidak diverifikasi.') }}
                                            <button form="send-verification" class="btn btn-link p-0 m-0 align-baseline">{{ __('Klik di sini untuk mengirim ulang email verifikasi.') }}</button>
                                        </p>

                                        @if (session('status') === 'verification-link-sent')
                                            <div class="alert alert-success mt-2">{{ __('Tautan verifikasi baru telah dikirim ke alamat email Anda.') }}</div>
                                        @endif
                                    </div>
                                @endif
                            </div>

                            <div class="mb-3">
                                <label for="address" class="form-label">{{ __('Alamat') }}</label>
                                <input id="address" name="address" type="text" class="form-control" value="{{ old('address', $user->address) }}">
                                @error('address')
                                    <div class="text-danger mt-2">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="whatsapp" class="form-label">{{ __('WhatsApp') }}</label>
                                <input id="whatsapp" name="whatsapp" type="text" class="form-control" value="{{ old('whatsapp', $user->whatsapp) }}">
                                @error('whatsapp')
                                    <div class="text-danger mt-2">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="d-flex justify-content-end">
                                <button type="submit" class="btn btn-primary">{{ __('Simpan') }}</button>
                            </div>
                        </form>
                    </section>
                </div>
            </div>

            <!-- Update Password Card -->
            <div class="card mb-4">
                <div class="card-header">
                    <h1 class="card-title"><strong>{{ __('Perbarui Password') }}</strong></h1>
                </div>
                @if (session('status') === 'password-updated')
                    <script>
                        document.addEventListener("DOMContentLoaded", function() {
                            Swal.fire({
                                icon: 'success',
                                title: 'Password Diperbarui',
                                text: 'Password Anda telah berhasil diperbarui.'
                            });
                        });
                    </script>
                @endif
                <div class="card-body">
                    <section>
                        <header>
                            <h4 class="text-lg font-medium text-gray-900">
                                {{ __('Perbarui Password') }}
                            </h4>
                            <p class="mt-1 text-sm text-gray-600">
                                {{ __('Pastikan akun Anda menggunakan password yang panjang dan acak agar tetap aman.') }}
                            </p>
                        </header>
                        <form method="post" action="{{ route('password.update') }}" class="mt-3">
                            @csrf
                            @method('put')

                            <div class="mb-3">
                                <label for="update_password_current_password" class="form-label">{{ __('Password saat ini') }}</label>
                                <input id="update_password_current_password" name="current_password" type="password" class="form-control" autocomplete="current-password">
                                @error('current_password')
                                    <div class="text-danger mt-2">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="update_password_password" class="form-label">{{ __('Password Baru') }}</label>
                                <input id="update_password_password" name="password" type="password" class="form-control" autocomplete="new-password">
                                @error('password')
                                    <div class="text-danger mt-2">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="update_password_password_confirmation" class="form-label">{{ __('Konfirmasi Password') }}</label>
                                <input id="update_password_password_confirmation" name="password_confirmation" type="password" class="form-control" autocomplete="new-password">
                                @error('password_confirmation')
                                    <div class="text-danger mt-2">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="d-flex justify-content-end">
                                <button type="submit" class="btn btn-primary">{{ __('Simpan') }}</button>
                            </div>
                        </form>
                    </section>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- SweetAlert CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">

<!-- SweetAlert JS -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

@endsection
