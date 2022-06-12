@extends('template')
@section('content')
<div class="col-12">
    <div class="card recent-sales overflow-auto">

      <div class="filter">

        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
          <li class="dropdown-header text-start">
            <h6>Filter</h6>
          </li>

          <li><a class="dropdown-item" href="#">Doa</a></li>
          <li><a class="dropdown-item" href="#">This Month</a></li>
          <li><a class="dropdown-item" href="#">This Year</a></li>
        </ul>
      </div>

      <div class="card-body">
        <h5 class="card-title">Doa Harian <span>| Zona Anak</span></h5>

        <table class="table table-borderless datatable">
          <thead>
            <tr>

              <th scope="col">id</th>
              <th scope="col">tahun</th>
              <th scope="col">bulan </th>
              <th scope="col">tanggal</th>
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
