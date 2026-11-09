@extends('layouts.admin.app')
    @section('content')
    {{-- start main content --}}

    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    @if (session('error'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ session('error') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    @if ($errors->any())
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="row">
        <div class="col-12 mb-4">
            <div class="card border-0 shadow components-section">
                <div class="card-body">
                    <form action="{{ route('pelanggan.update', $dataPelanggan->pelanggan_id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="row mb-4">
                            <div class="col-lg-4 col-sm-6">
                                <!-- First Name -->
                                <div class="mb-3">
                                    <label for="first_name" class="form-label">First name</label>
                                    <input type="text" id="first_name" name="first_name" class="form-control" value="{{ old('first_name', $dataPelanggan->first_name) }}" required>
                                </div>

                                <div class="col-lg-4 col-sm-6">
                                    <!-- Birthday -->
                                    <div class="mb-3">
                                        <label for="birthday" class="form-label">Birthday</label>
                                        <input type="date" id="birthday" name="birthday"class="form-control"require value="{{ $dataPelanggan->last_name }}">
                                    </div>

                                    <!-- Gender -->
                                    <div class="mb-3">
                                        <label for="gender" class="form-label">Gender</label>
                                        <select id="gender" name="gender" class="form-select">
                                            <option value="">-- Pilih --</option>
                                            <option value="Male" {{$dataPelanggan->gender == 'Male' ?  'selected' :''}}>Male</option>
                                            <option value="Female" {{$dataPelanggan->gender == 'Female' ?  'selected' :''}}>Female</option>
                                            <option value="Other" {{$dataPelanggan->gender == 'Other' ?  'selected' :''}}>Other</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-sm-12">
                                    <!-- Email -->
                                    <div class="mb-3">
                                        <label for="email" class="form-label">Email</label>
                                        <input type="text" id="email" class="form-control"name="email" required value="{{ $dataPelanggan->email }}">
                                    </div>
                                    <!-- Phone -->
                                    <div class="mb-3">
                                        <label for="telephon" class="form-label">telephon</label>
                                        <input type="text" id="telephon" name="telephon"form-control" required value="{{ $dataPelanggan->phone }}">
                                    </div>
                                    <!-- Buttons -->
                                    <div class="">
                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                        <a href="/pelanggan" class="btn btn-outline-secondary ms-2">Batal</a>
<!-- ATAU jika menggunakan nama route: -->
<a href="{{ route('pelanggan.index') }}" class="btn btn-outline-secondary ms-2">Batal</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-sm-6">
                                <!-- Birthday -->
                                <div class="mb-3">
                                    <label for="birthday" class="form-label">Birthday</label>
                                    <input type="date" id="birthday" name="birthday" class="form-control" value="{{ old('birthday', $dataPelanggan->birthday) }}">
                                </div>

                                <!-- Gender -->
                                <div class="mb-3">
                                    <label for="gender" class="form-label">Gender</label>
                                    <select id="gender" name="gender" class="form-select">
                                        <option value="">-- Pilih --</option>
                                        <option value="Male" {{ old('gender', $dataPelanggan->gender) == 'Male' ? 'selected' : '' }}>Male</option>
                                        <option value="Female" {{ old('gender', $dataPelanggan->gender) == 'Female' ? 'selected' : '' }}>Female</option>
                                        <option value="Other" {{ old('gender', $dataPelanggan->gender) == 'Other' ? 'selected' : '' }}>Other</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-lg-4 col-sm-12">
                                <!-- Email -->
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" id="email" class="form-control" name="email" value="{{ old('email', $dataPelanggan->email) }}" required>
                                </div>

                                <!-- Phone -->
                                <div class="mb-3">
                                    <label for="telephon" class="form-label">Phone</label>
                                    <input type="text" id="telephon" name="telephon" class="form-control" value="{{ old('telephon', $dataPelanggan->telephon ?? $dataPelanggan->phone) }}">
                                </div>

                                <!-- Buttons -->
                                <div class="mt-4">
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                    <a href="{{ route('pelanggan.index') }}" class="btn btn-outline-secondary ms-2">Batal</a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
         <!-- end main content  -->


@endsection
       
