@extends('layouts.master')
@section('content')
<nav class="navbar navbar-expand-lg navbar-light" style="background-color:#d2d5dc;">
    <a href="\"><img class="navbar-brand" src="{{ asset('logo.png')}}"></a>
  
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">
      
      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Hallo, {{Auth::user()->name}}
      </a>
      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit();">Logout</a>
        </form>
      </div>
    </ul>
    </div>
</nav>

<div class="container">
    <div class="d-flex justify-content-center mt-5">
        <h4>Menunggu Verifikasi Pembayaran</h4>
    </div>

    <div class="card mt-5 shadow rounded w-50 mx-auto" style="background-color:#e8f8eb;">
        <div class="card-body text-center">
            <p style="color: green">Verifikasi pesanan anda akan kami proses dalam 60 menit dan selambat-lambatnya 1x24 jam.</p>
            <h6 style="color: green">Hubungi kami jika kamu memiliki kendala.</h6>
            <a href="https://api.whatsapp.com/send/?phone=6287895493904&text=Halo%21+Saya+membutuhkan+bantuan+terkait+pembayaran+Sanedu." target="_blank" type="button" class="btn btn-success btn-lg mt-2">Bantuan</a>
        </div>
    </div>
</div>
@endsection