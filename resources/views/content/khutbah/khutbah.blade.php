@extends('template')
@section('content')
<div class="col-12">
    <div class="card recent-sales overflow-auto">

     
      
      <div class="card-body">
        
         <div class="d-flex justify-content-end" style="margin-block-start: -0.5%"  ><a class="btn btn-primary" href="{{route('toFormKhutbah')}}" > <i class="bi bi-plus"></i></a></div>
        <h5 class="card-title ">Khutbah <span> | Zona Umum</span></h5>

        <table class="table table-borderless datatable">
          <thead>
            <tr>

              <th scope="col">id</th>
              <th scope="col">Judul</th>
              <th scope="col">Isi Khutbah </th>
              <th scope="col">Pemateri</th>
              <th scope="col">Tanggal</th>
              <th scope="col">Action</th>
              
            </tr>
          </thead>
          <tbody>

            @foreach ($khutbah as $d)
            <tr>
                <th scope="row"><a href="#">{{$d->id}}</a></th>
                <td>{{$d->judul}}</td>
                <td>{!!$d->isi!!}</td>
                <td>{{$d->pemateri}}</td>
                <td>{{$d->created_at}}</td>
                 <td><a href="{{route('editKhutbah',$d->id)}}"><i class="bi bi-pencil"></i></a>
                  
                  
                  {{-- <a href="{{route('deleteEmas',$d->id)}}" class="ms-4"><i class="bi bi-trash"></i></a></td> --}}
                   <form action="{{ route('deleteKhutbah', $d->id) }}" method="POST">
                   @csrf
                   @method('DELETE')
                   <button type="submit" data-toggle="tooltip" title="" class="btn btn-link btn-danger"><i class="bi bi-trash"></i></button> </form>
                   </td>                                     


              </tr>
            @endforeach


          </tbody>
        </table>

      </div>

    </div>
  </div><!-- End Recent Sales -->
@endsection
