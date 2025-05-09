@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <div class="card shadow">
                <div class="card-header bg-primary text-white">
                    <h4 class="mb-0">Dashboard</h4>
                </div>

                <div class="card-body text-center">
                    <h5 class="card-title">Selamat datang, <strong>{{ auth()->user()->name }}</strong>!</h5>
                    <p class="card-text">Anda telah berhasil login ke sistem. Silakan pilih tindakan di bawah ini:</p>

                    <div class="d-grid gap-2 col-6 mx-auto mt-4">
                        <a href="{{ route('projects.index') }}" class="btn btn-outline-primary">
                            <i class="bi bi-folder2-open"></i> Kelola Projects
                        </a>

                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="btn btn-outline-danger">
                                <i class="bi bi-box-arrow-right"></i> Logout
                            </button>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
