@extends('layouts.app')

@section('title')
  Create | Teacher
@endsection

@section('content')
<main id="main" class="main">

    <div class="pagetitle">
      <h1>Form Guru</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Tambah</a></li>
          <li class="breadcrumb-item">Form</li>
          <li class="breadcrumb-item active">Guru</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
   
    <section class="section dashboard">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                  <div class="card-body">
                    <h5 class="card-title">Tambah Data Guru</h5>

              <!-- Vertical Form -->
              <form class="row g-3" action="{{ route('teachers.store')}}" method="POST"  enctype="multipart/form-data">
                @csrf
                <div class="col-12">
                  <label for="nip" class="form-label">NIP</label>
                  <input type="text" name="nip" class="form-control" id="nip">
                </div>
                <div class="col-12">
                  <label for="fullname" class="form-label">Full Name</label>
                  <input type="text" name="fullname" class="form-control" id="fullname">
                </div>
            
                <div class="col-12">
                  <label for="gender" class="form-label">Gender</label><br>
                      <input class="form-check-input" type="radio" name="gender" id="female" value="0" {{ old('gender') == 0 ? 'checked' : '' }}>
                      <label class="form-check-label" for="female">Perempuan</label>
                      <input class="form-check-input" type="radio" name="gender" id="male" value="1" {{ old('gender') == 1 ? 'checked' : '' }}>
                      <label class="form-check-label" for="male">Laki-laki</label>
                </div>

                <div class="col-12">
                  <label for="phone_number" class="form-label">No Telepon</label>
                  <input type="text" name="phone_number" class="form-control" id="phone_number">
                </div>
                <div class="col-12">
                    <label for="level" class="form-label">Level</label>
                    <input type="text" name="level" class="form-control" id="level">
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