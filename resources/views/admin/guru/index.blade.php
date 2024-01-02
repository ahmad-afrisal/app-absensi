@extends('layouts.app')

@section('title')
Guru
@endsection

@section('content')

<main id="main" class="main">

    <div class="pagetitle">
      <h1>Data Guru</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
          <li class="breadcrumb-item">Guru</li>
          <li class="breadcrumb-item active">Data</li>
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
            
            <!-- Recent Sales -->
            <div class="col-12">
              <div class="card recent-sales overflow-auto">

                <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                      <h6>Menu</h6>
                    </li>

                    <li><a class="dropdown-item" href="{{ route('guru.create')}}">Tambah Data Guru</a></li>
                    {{-- <li><a class="dropdown-item" href="#">This Month</a></li>
                    <li><a class="dropdown-item" href="#">This Year</a></li> --}}
                  </ul>
                </div>

                <div class="card-body">
                <h5 class="card-title">Recent Sales <span>| Today</span></h5>

              <table class="table datatable">
                <thead>
                  <tr>
                    <th>NIP</th>
                    <th>Full Name</th>
                    <th>No Telepon</th>
                    <th>Level</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($guru as $pengajar)
                        <tr>
                            <td>{{$pengajar->nip}}</td>
                            <td>{{$pengajar->fullname}}</td>
                            <td>{{$pengajar->phone_number}}</td>
                            <td>{{$pengajar->level}}</td>
                            <td>
                              <a href="#" class="btn btn-warning"><i class="bi bi-pencil-square"></i></a>
                              <a href="#" class="btn btn-danger"><i class="bi bi-trash"></i></a>
                            </td>
                        </tr>
                    @endforeach
                
                </tbody>
              </table>
              <!-- End Table with stripped rows -->

            </div>
          </div>

        </div>
      </div>
    </section>

  </main><!-- End #main -->
@endsection