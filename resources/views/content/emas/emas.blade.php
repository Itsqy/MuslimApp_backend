@extends('template')
@section('content')
@include('sweetalert::alert')
<div class="col-12">
    <div class="card recent-sales overflow-auto">

     
      
      <div class="card-body">
        
        

        @forelse ($emas as $item)
            
        @empty
            <div class="d-flex justify-content-end" style="margin-block-start: -0.5%"  ><a class="btn btn-primary" href="{{route('toFormEmas')}}" > <i class="bi bi-plus"></i></a></div>             
        @endforelse
        
        {{-- @if ($emas != emp)
          
        @endif --}}
        <h5 class="card-title ">API Emas <span> | Zona Umum</span></h5>

        <table class="table table-borderless datatable">
          <thead>
            <tr>

              <th scope="col">id</th>
              <th scope="col">Harga Emas</th>
              <th scope="col">Tanggal</th>
              <th scope="col">Action</th>
              
            </tr>
          </thead>
          <tbody>

            @foreach ($emas as $d)
            <tr>
                <th scope="row"><a href="#">{{$i++}}</a></th>
                <td>Rp. {{number_format($d->hargaemas)}}</td>
                <td>{{$d->created_at}}</td>
                <td><a href="{{route('editEmas',$d->id)}}"><i class="bi bi-pencil"></i></a>
                  
                  
                  {{-- <a href="{{route('deleteEmas',$d->id)}}" class="ms-4"><i class="bi bi-trash"></i></a></td> --}}
                   {{-- <form action="{{ route('deleteEmas', $d->id) }}" method="POST">
                   @csrf
                   @method('DELETE')
                   <button type="submit" data-toggle="tooltip" title="" class="btn btn-link btn-danger"><i class="bi bi-trash"></i></button> </form> --}}
                   </td>                                     

              </tr>
            @endforeach


          </tbody>
        </table>

      </div>

    </div>
  </div><!-- End Recent Sales -->
@endsection
