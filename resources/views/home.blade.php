@extends('layouts.app')

@section('content')
<div class="hero-section text-white text-center py-5" style="background: url('/images/hero-bg.jpg') no-repeat center center; background-size: cover;">
    <div class="bg-dark bg-opacity-50 py-5 px-3">
        <h1 class="display-4">Empowering Your Digital Future</h1>
        <p class="lead">Kami adalah mitra terbaik Anda dalam pengembangan teknologi dan transformasi digital.</p>
        <a href="/services" class="btn btn-primary btn-lg mt-3">Lihat Layanan Kami</a>
    </div>
</div>

<div class="row text-center mt-5">
    <div class="col-md-4" data-aos="fade-up">
        <img src="/images/web-dev.png" width="80">
        <h4 class="mt-3">Web Development</h4>
        <p>Membuat website modern dan profesional untuk bisnis Anda.</p>
    </div>
    <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
        <img src="/images/mobile-app.png" width="80">
        <h4 class="mt-3">Mobile Apps</h4>
        <p>Aplikasi Android/iOS dengan desain menarik dan performa optimal.</p>
    </div>
    <div class="col-md-4" data-aos="fade-up" data-aos-delay="400">
        <img src="/images/uiux.png" width="80">
        <h4 class="mt-3">UI/UX Design</h4>
        <p>Desain antarmuka pengguna yang intuitif dan user-friendly.</p>
    </div>
</div>
@endsection
