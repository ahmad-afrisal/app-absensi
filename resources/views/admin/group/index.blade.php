@extends('layouts.app')

@section('title')
    Index
@endsection

@section('content')
<main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-12">
          <div class="row">
            
            {{-- Alert --}}
            @include('components.alert')

            <div class="d-grid gap-2  mb-4">
              <a href="{{ route('groups.create')}}" class="btn btn-primary" > <i class="bi bi-plus me-1"></i>Buat Kelas</a>
            </div>


            @forelse ($groups as $group)
              <!-- Sales Card -->
              
              <div class="col-xxl-4 col-md-6">
                <div class="card info-card sales-card">

                  <div class="filter">
                    <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                      <li class="dropdown-header text-start">
                        <h6>Menu</h6>
                      </li>

                      <li><a class="dropdown-item" href="#">Detail</a></li>
                      <li><a class="dropdown-item" href="#">Edit</a></li>
                    </ul>
                  </div>

                  <div class="card-body">
                    <h5 class="card-title">Kelas {{ $group->name }} {{ $group->semester->name }}<span class="text-success">| Aktif</span></h5>

                    <div class="d-flex align-items-center">
                      <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                        <i class="bi bi-cart"></i>
                      </div>
                      <div class="ps-3">
                        <h6>145</h6>
                        <span class="text-success small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">increase</span>

                      </div>
                    </div>
                  </div>

                </div>
              </div><!-- End Sales Card -->
            @empty
              <p>Belum ada kelas dibuat</p>
            @endforelse
            
             

            

          </div>
        </div><!-- End Left side columns -->


      </div>
    </section>

  </main><!-- End #main -->
     
@endsection