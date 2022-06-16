@extends('template')

@section('content')
    @include('sweetalert::alert')
    <div class="col-12">
        <div class="card recent-sales overflow-auto">



            <div class="card-body">

                <div class="d-flex justify-content-end" style="margin-block-start: -0.5%"><a class="btn btn-primary"
                        href="{{ route('toFormBerita') }}"> <i class="bi bi-plus"></i></a></div>
                <h5 class="card-title ">Berita Umum<span> | Zona Umum</span></h5>

                <table class="table table-borderless datatable">
                    <thead>
                        <tr>

                            <th scope="col">id</th>
                            <th scope="col">gambar</th>
                            <th scope="col">Judul</th>
                            <th scope="col">Isi Berita </th>
                            <th scope="col">Tanggal</th>
                            <th scope="col">kategori</th>
                            <th scope="col">Action</th>

                        </tr>
                    </thead>
                    <tbody>

                        <?php
                        $num = 10;
                        ?>
                        @foreach ($berita as $d)
                            <tr>
                                <th scope="row"><a href="#">{{ $i++ }}</a></th>
                                <td><img src="{{ url('/storage', $d->gambar) }}"
                                        style="max-width: 100px !important; border-radius:5px;"></td>
                                <td>{{ $d->judul }}</td>
                                <td><a href="">{!! substr($d->isi, 0, 70) !!}...</a></td>
                                <td>{{ $d->created_at }}</td>
                                <td>{{ $d->kategori_id }}</td>
                                <td><a href="{{ route('editBerita', $d->id) }}"><i class="bi bi-pencil"></i></a>


                                    {{-- <a href="{{route('deleteEmas',$d->id)}}" class="ms-4"><i class="bi bi-trash"></i></a></td> --}}
                                    <form action="{{ route('deleteBerita', $d->id) }}" method="POST">
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
