@extends('layout.dashboard')
@section('container')
@if(Auth::guard('web')->check())
    <h1>Selamat Datang Kembali, {{ Auth::guard('web')->user()->name }}</h1>
@endif

@if(Auth::guard('sso_user')->check())
    <h1>Selamat Datang Kembali, {{ Auth::guard('sso_user')->user()->name }}</h1>
@endif
@endsection