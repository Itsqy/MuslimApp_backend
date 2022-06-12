@extends('template')
@section('content')
<div class="col-12">
    <div class="card recent-sales overflow-auto">

     
      
      <div class="card-body">
        
        <h5 class="card-title ">Doa Harian <span>| Zona Anak</span></h5>
        <div class="d-flex justify-content-end mb-4"><a class="btn btn-primary " > <i class="bi bi-plus"></i></a></div>
        
       
        
        

        <table class="table table-borderless datatable">
          <thead>
            <tr>

              <th scope="col">id</th>
              <th scope="col">doa</th>
              <th scope="col">ayat </th>
              <th scope="col">latin</th>
              <th scope="col">Arti</th>
            </tr>
          </thead>
          <tbody>

            @foreach ($data as $d)
            <tr>
                <th scope="row"><a href="#">{{ $d['id'] }}</a></th>
                <td>{{ $d['doa'] }}</td>
                <td><a href="#" class="text-primary">{{ $d['ayat'] }}</a></td>
                <td>{{ $d['latin'] }}</td>
                <td>{{ $d['artinya'] }}</td>

              </tr>
            @endforeach


          </tbody>
        </table>

      </div>

    </div>
  </div><!-- End Recent Sales -->
@endsection
