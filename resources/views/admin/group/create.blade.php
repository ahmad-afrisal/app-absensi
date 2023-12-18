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

                <div class="col-lg-12">

                    <div class="card">
                      <div class="card-body">
                        <h5 class="card-title">Semester Baru</h5>
          
                        <!-- Vertical Form -->
                        <form class="row g-3" action="{{ route('groups.store')}}" method="POST" novalidate>
                            @csrf

                            <div class="col-12">
                              <label for="inputState" class="form-label">Tingkat Semester</label>
                              <select id="inputState" class="form-select {{$errors->has('semester_id') ? 'is-invalid' : ''}}"  name="semester_id" required>
                                <option disabled>Pilih Semester</option>
                                <option disabled>--------------</option>
                                @foreach ($semesters as $semester)
                                  <option value="{{ $semester->id }}">{{ $semester->name }}</option>
                                @endforeach

                              </select>
                              @if ($errors->has('semester_id'))
                                <div class="invalid-feedback">
                                  {{$errors->first('name')}}
                                </div>
                              @endif
                            </div>

                          <div class="col-12">
                            <label for="name" class="form-label">Nama Kelas</label>
                            <input type="text" class="form-control {{$errors->has('name') ? 'is-invalid' : ''}}"  value="{{old('name') ?: ''}} " id="name"  name="name" placeholder="contoh : 6A">
                            @if ($errors->has('name'))
                              <div class="invalid-feedback">
                                {{$errors->first('name')}}
                              </div>
                            @endif
                          </div>

                          
                          <div class="text-start">
                            <button type="submit" class="btn btn-primary">Submit</button>
                            <button type="reset" class="btn btn-secondary">Reset</button>
                          </div>
                        </form><!-- Vertical Form -->
          
                      </div>
                    </div>
                </div>


            </div>
        </section>

     </main><!-- End #main -->
     
@endsection