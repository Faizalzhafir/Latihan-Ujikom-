@extends('layouts.main')

@section('content')
    <div class="container-fluid">
        <!--  Header Start -->
        <header class="topbar sticky-top">
        <div class="with-vertical"><!-- ---------------------------------- -->
            <!-- Start Vertical Layout Header -->
            <!-- ---------------------------------- -->
            <h1 align="center" class="p-2 text-dark">Selamat Datang <a class="text-primary">{{ auth()->user()->name }}</a>!</h1>
            <h3 align="center" class="p-2 text-dark">Semoga harimu menyenangkan! | Awali dengan Bismillah ya </h3>
        </div>
        </header>
        <!--  Header End -->
    </div>
@endsection