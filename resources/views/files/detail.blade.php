@extends('adminlte::page')

@section('content')

<div class="container mt-5">

    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 24rem;">
            <div class="card-header">
                Detail Member
            </div>
            <div class="card-body">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><b>Nama: </b>{{$data->name}}</li>
                    <li class="list-group-item"><b>Email: </b>{{$data->email}}</li>
                    <li class="list-group-item"><b>Jabatan: </b>{{$data->position}}</li>
                    <li class="list-group-item"><b>Foto: </b><img
                            src=src="{{ url('uploadgambar')}}/{{ $data->picture }}"
                            style="width: 50px; height: 50px; border-radius: 50%;"></li>
                </ul>
            </div>
            <a class="btn btn-success" href="{{ route('files.index') }}">Kembali</a>

        </div>
    </div>
</div>
@endsection