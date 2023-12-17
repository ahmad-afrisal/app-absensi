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
                        <h5 class="card-title">Ubah Semester : <b>{{ $semester->name }}</b></h5>
          
                        <!-- Vertical Form -->
                        <form class="row g-3" action="{{ route('semesters.update', $semester->slug)}}" method="POST">
                            @csrf
                            @method('PUT')

                          <div class="col-12">
                            <label for="name" class="form-label">Semester</label>
                            <input type="text" class="form-control {{$errors->has('name') ? 'is-invalid' : ''}}"  value="{{ old('name', $semester->name) }}"  id="name"  name="name" placeholder="contoh : SEMETSER 2020/2023 GANJIL">
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