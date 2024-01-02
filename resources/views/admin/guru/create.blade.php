@extends('layouts.app')

@section('title')
    Guru Create
@endsection

@section('content')
<main id="main" class="main">

    <div class="pagetitle">
      <h1>Form Guru</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Tambah</a></li>
          <li class="breadcrumb-item">Forms</li>
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
              <form class="row g-3">
                <div class="col-12">
                  <label for="inputNanme4" class="form-label">NIP</label>
                  <input type="text" class="form-control" id="inputNanme4">
                </div>
                <div class="col-12">
                  <label for="inputEmail4" class="form-label">Full Name</label>
                  <input type="text" class="form-control" id="inputEmail4">
                </div>
                <div class="col-12">
                  <label for="inputPassword4" class="form-label">No Telepon</label>
                  <input type="number" class="form-control" id="inputPassword4">
                </div>
                <div class="col-12">
                    <label for="inputPassword4" class="form-label">Level</label>
                    <input type="text" class="form-control" id="inputPassword4">
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