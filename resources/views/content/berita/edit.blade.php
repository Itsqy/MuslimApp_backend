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
              <h5 class="card-title">Edit Berita</h5>

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

              <!-- General Form Elements -->
              <form action="{{route('updateBerita',$berita->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Judul </label>
                  <div class="col-sm-10">
                    <input type="text" name="judul" value="{{$berita->judul}}" class="form-control">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputEmail" class="col-sm-2 col-form-label">Isi Berita</label>
                  <div class="col-sm-10">
                     {{-- <div id="editor">This is some sample content.</div> --}}
                    <textarea id="editor" type="text" name="isi" value="{{!!$berita->isi!!}}" class="form-control"></textarea>
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputEmail" class="col-sm-2 col-form-label">Gambar Berita</label>
                  <div class="col-sm-10">
                     {{-- <div id="editor">This is some sample content.</div> --}}
                    <input type="file" name="isi" value="{{$berita->gambar}}" class="form-control">
                  </div>
                </div>
                <div class="row mb-3">
                  
                  <div class="d-flex justify-content-end">
                    <button type="submit" class="btn btn-primary">Submit Form</button>
                  </div>
                </div>

              </form><!-- End General Form Elements -->

            </div>
          </div>

        </div>


      </div>
    </section>
\


@endsection


