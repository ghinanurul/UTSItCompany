@extends('layouts.app')

@section('content')
<h2 class="text-center mb-4">Layanan Kami</h2>

<div class="row">
    @foreach([
        ['title' => 'Web Development', 'desc' => 'Website dinamis & SEO friendly.', 'img' => 'web-dev.png'],
        ['title' => 'Mobile App', 'desc' => 'Android/iOS dengan performa tinggi.', 'img' => 'mobile-app.png'],
        ['title' => 'UI/UX Design', 'desc' => 'Desain yang fokus pada kenyamanan pengguna.', 'img' => 'uiux.png'],
    ] as $service)
    <div class="col-md-4 mb-4" data-aos="zoom-in">
        <div class="card h-100 shadow-sm">
            <img src="/images/{{ $service['img'] }}" class="card-img-top p-3" style="height: 150px; object-fit: contain;">
            <div class="card-body text-center">
                <h5 class="card-title">{{ $service['title'] }}</h5>
                <p class="card-text">{{ $service['desc'] }}</p>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection
