@extends("admin.layout")
@section('title', 'Competitions')
@section('content')
    <div class="card shadow mb-4">
        <div class="card-header py-3 d-sm-flex align-items-center justify-content-between mb-4">
            <h6 class="m-0 font-weight-bold text-primary">Competitions</h6>

        </div>
        <div class="card-body">
            <div class="table-responsive" style="overflow-x: hidden">
                <table class="table table-bordered display nowrap" id="data-table" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Ad</th>
                        <th>Soyad</th>
                        <th>Mobil</th>
                        <th>Qeydiyyat</th>
                        <th>Əməliyyatlar</th>
                    </tr>
                    </thead>
                    <tfoot>
                    <tr>
                        <th>#</th>
                        <th>Ad</th>
                        <th>Soyad</th>
                        <th>Mobil</th>
                        <th>Qeydiyyat</th>
                        <th>Əməliyyatlar</th>
                    </tr>
                    </tfoot>
                    <tbody>
                    @foreach ($items as $i)
                        <tr>
                            <td>{{$i->id}}</td>
                            <td>{{$i->name}}</td>
                            <td>{{$i->surname}}</td>
                            <td>{{$i->phone}}</td>
                            <td>{{$i->created_at->format('H:i d.m.Y')}}</td>
                            <td>
                                <form id="delete-form" action="{{ route('competitor.destroy', $i->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <a class="btn btn-primary btn-circle btn-sm" href="{{ route('competitor.edit', $i->id) }}">
                                        <i class="far fa-edit"></i>
                                    </a>
{{--                                    <a href="{{route('article-category.show',$cat->id)}}" class="btn btn-primary btn-circle btn-sm">--}}
{{--                                        <i class="far fa-eye"></i>--}}
{{--                                    </a>--}}
                                    <button class="btn btn-danger btn-circle btn-sm"><i class="fas fa-trash"></i></button>
                                </form>
                            </td>
                        </tr>
                    @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection


@section('js')

    <script>
        $(document).ready(function() {
            $('#data-table').DataTable( {
                dom: 'Bfrtip',
                "pageLength": 20,
                buttons: [
                    'copy', 'csv', 'excel', 'pdf', 'print'
                ]
            } );
        } );
    </script>
@endsection
