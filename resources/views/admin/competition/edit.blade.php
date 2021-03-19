@extends('admin.layout')
@section('title', __($item->question))

@section('content')

    <div class="card shadow mb-4">
        <div class="card-header py-3 d-sm-flex align-items-center justify-content-between mb-4">
            <h6 class="m-0 font-weight-bold text-primary">{{$item->question}}</h6>
        </div>
        <div class="card-body">
            <div class="col-md-6 offset-md-3">
                <form class="user" method="POST" action="{{ route('competitor.update', $item->id) }}"  enctype="multipart/form-data">
                    @csrf
                    @method('PUT')


                    <div class="form-group row">
                        <div class="col-md-2">
                            <label for="name">Name</label>
                        </div>
                        <div class="col-md-10">
                            <input type="text" id="name" name="name" class="form-control @error('name') is-invalid @enderror" value="{{$item->name}}">
                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-2">
                            <label for="surname">Surname</label>
                        </div>
                        <div class="col-md-10">
                            <input type="text" id="surname" name="surname" class="form-control @error('surname') is-invalid @enderror" value="{{$item->surname}}">
                            @error('surname')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-2">
                            <label for="phone">Phone</label>
                        </div>
                        <div class="col-md-10">
                            <input type="text" id="phone" name="phone" class="form-control @error('phone') is-invalid @enderror" value="{{$item->phone}}">
                            @error('phone')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>


                    <button type="submit" class="btn btn-primary btn-block">
                        {{ __('Edit') }}
                    </button>
                </form>
            </div>
        </div>
    </div>


@endsection


@push('js')




    <script>
        $(".select2").select2({
            tags: true,
            tokenSeparators: [',', ' ']
        })
    </script>



@endpush
