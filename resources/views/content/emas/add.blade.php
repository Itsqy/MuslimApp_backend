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
              <h5 class="card-title">Tambah Harga Emas</h5>
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
              <form action="{{route('storeEmas')}}" method="POST">
                @csrf
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-8 col-form-label">Harga Emas per gram</label>
                  <div class="col-sm-8">
                    <input type="text" name="hargaemas" value="" class="form-control">
                  </div>
                </div>
                
                <div class="row mb-3">
                  
                  <div class="d-flex justify-content-end">
                    <button type="submit" class="btn btn-primary">Submit
                      
                    </button>
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
