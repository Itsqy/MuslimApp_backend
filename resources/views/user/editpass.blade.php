@extends('template')

@section('content')
    <div class="pagetitle">
        <h1>Form Elements</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item">Forms</li>
                <li class="breadcrumb-item active">Elements</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-8">

                <div class="card">
                    <div class="card-body">


                        <h5 class="card-title">Form Password User</h5>


                        {{-- menampilkan error validasi --}}
                        @if (count($errors) > 0)
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        @if (Session::get('Success'))
                            <div class="alert alert-succsess alert-dismissible fade show" role="alert">
                                {{ Session::get('Success') }}
                            </div>
                        @endif
                        @if (Session::get('Failed'))
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                {{ Session::get('Failed') }}
                            </div>
                        @endif


                        <!-- General Form Elements -->
                        <form action="{{ route('storePass', Auth::user()->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')


                            <div class="row mb-3">
                                <label for="inputPassword" class="col-sm-2 col-form-label">Password Lama</label>
                                <div class="col-sm-10">
                                    <input type="password" name="old_password" class="form-control">

                                    @error('old_password')
                                        <div class="invalid-feedback">
                                            <strong>{{ $message }}</strong>
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputPassword" class="col-sm-2 col-form-label">Password Baru</label>
                                <div class="col-sm-10">
                                    <input type="password" name="password" class="form-control">

                                    @error('old_password')
                                        <div class="invalid-feedback">
                                            <strong>{{ $message }}</strong>
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputPassword" class="col-sm-2 col-form-label">Password Baru</label>
                                <div class="col-sm-10">
                                    <input type="password" name="password_confirmation" class="form-control input-fixed">
                                    @error('password_confirmation')
                                        <div class="invalid-feedback" style="margin-left: 35px; width: 30px !important;"
                                            role="alert">
                                            <strong>{{ $message }}</strong>
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">

                                <div class="d-flex justify-content-end">
                                    <button type="submit" class="btn btn-primary">Submit Form</button>
                                </div>
                            </div>

                        </form>

                    </div>
                </div>

            </div>


        </div>
    </section>
    \
@endsection
