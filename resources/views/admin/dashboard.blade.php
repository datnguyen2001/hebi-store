@extends('layout.admin.index')
@section('main')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Dashboard</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"></li>
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
            </nav>

            @if (session('success'))
                <div class="alert alert-primary alert-dismissible fade show" role="alert">
                    {{session('success')}}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
        </div><!-- End Page Title -->

        <section class="section dashboard">

        </section>

    </main><!-- End #main -->
@endsection
