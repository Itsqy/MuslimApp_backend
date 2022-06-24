@extends('template')

@section('content')
    @include('sweetalert::alert')
    <div class="col-12">
        <div class="card recent-sales overflow-auto">



            <div class="card-body">

                <div class="d-flex justify-content-end" style="margin-block-start: -0.5%"><a class="btn btn-primary"
                        href="{{ route('toFormDzikirpp') }}"> <i class="bi bi-plus"></i></a></div>
                <h5 class="card-title ">Dzikir Pagi Petang<span> | Zona Umum</span></h5>

                <table class="table table-borderless datatable">
                    <thead>
                        <tr>

                            <th scope="col">id</th>
                            <th scope="col">Judul</th>
                            <th scope="col">Arab</th>
                            <th scope="col">Latin</th>
                            <th scope="col">Arti</th>
                            <th scope="col">Riwayat</th>
                            <th scope="col">Tanggal</th>
                            <th scope="col">Action</th>

                        </tr>
                    </thead>
                    <tbody>

                        <?php
                        $num = 10;
                        ?>
                        @foreach ($dzikir as $d)
                            <tr>
                                <th scope="row"><a href="#">{{ $i++ }}</a></th>
                                <td>{{ $d->judul }}</td>
                                <td><a>{!! substr($d->arab, 0, 70) !!}...</a></td>
                                <td><a>{!! substr($d->latin, 0, 70) !!}...</a></td>
                                <td><a>{!! substr($d->arti, 0, 70) !!}...</a></td>
                                <td>{{ $d->riwayat}}</td>
                                <td>{{ $d->created_at }}</td>
                                <td><a href="{{ route('editDzikirpp', $d->id) }}"><i class="bi bi-pencil"></i></a>


                                    {{-- <a href="{{route('deleteEmas',$d->id)}}" class="ms-4"><i class="bi bi-trash"></i></a></td> --}}
                                    <form action="{{ route('deleteDzikirpp', $d->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" data-toggle="tooltip" title=""
                                            class="btn btn-link btn-danger"><i class="bi bi-trash"></i></button>
                                    </form>
                                </td>


                            </tr>
                        @endforeach


                    </tbody>
                </table>

            </div>

        </div>
    </div><!-- End Recent Sales -->
@endsection
