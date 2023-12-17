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
            
            <!-- Recent Sales -->
            <div class="col-12">
              <div class="card recent-sales overflow-auto">

                <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                      <h6>Menu</h6>
                    </li>

                    <li><a class="dropdown-item" href="{{ route('semesters.create')}}">Tambah Semester</a></li>
                    {{-- <li><a class="dropdown-item" href="#">This Month</a></li>
                    <li><a class="dropdown-item" href="#">This Year</a></li> --}}
                  </ul>
                </div>

                <div class="card-body">
                  <h5 class="card-title">Recent Sales <span>| Today</span></h5>

                  <table class="table table-borderless datatable">
                    <thead>
                      <tr>
                        <th scope="col">Nomor</th>
                        <th scope="col">Semester</th>
                        <th scope="col">Status</th>
                        <th scope="col">Menu</th>
                      </tr>
                    </thead>
                    <tbody>
                      @forelse ($semesters as $semester)
                      <tr>
                        <th scope="row">{{ $loop->iteration}}</th>
                        <td>{{ $semester->name }}</td>
                        <td>
                        
                          @if ($semester->status == 1)
                            <span class="badge bg-success">Aktif</span>
                          @else
                            <span class="badge bg-danger">Tidak Aktif</span>
                          @endif
                        </td>
                        <td>
                          <a href="{{route('semesters.edit',$semester->slug)}}" class="btn btn-warning"><i class="bi bi-pencil-square"></i></a>
                          <a href="{{route('semesters.edit',$semester->slug)}}" class="btn btn-danger"><i class="bi bi-trash"></i></a>
                        </td>
                      </tr>
                      @empty
                          <td colspan="4">Belum ada data</td>
                      @endforelse
                    </tbody>
                  </table>

                </div>

              </div>
            </div><!-- End Recent Sales -->

          </div>
        </div><!-- End Left side columns -->


      </div>
    </section>

  </main><!-- End #main -->
     
@endsection