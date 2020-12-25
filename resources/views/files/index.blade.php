@extends('adminlte::page')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb mt-3 mb-3">
        <div class="text-left">
            <h2>Data Member</h2>
        </div>
        <div class="text-right">
            <a class="btn btn-success" href="{{ route('files.create') }}">Tambah Member</a>
        </div>
    </div>
</div>

@if ($message = Session::get('success'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>
        <p>{{ $message }}</p>
    </strong>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@endif

<table class="table table-striped table-bordered">
    <tr>
        <th>ID</th>
        <th>Foto</th>
        <th>Nama</th>
        <th>Email</th>
        <th>Jabatan</th>
        <th width="280px">Action</th>
    </tr>
    @foreach ($data as $key => $datas)
    <tr>

        <td>{{ $key+1 }}</td>
        <td><img src="{{ url('uploadgambar')}}/{{ $datas->picture }}"
                style="width: 50px; height: 50px; border-radius: 50%;">
        </td>
        <td>{{ $datas->name }}</td>
        <td>{{ $datas->email }}</td>
        <td>{{ $datas->position }}</td>
        <td>
            <form action="{{ route('files.destroy',$datas->id) }}" method="POST">

                <a class="btn btn-info" href="{{ route('files.show',$datas->id) }}">Show</a>

                <a class="btn btn-primary" href="{{ route('files.edit',$datas->id) }}">Edit</a>

                @csrf
                @method('DELETE')

                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>

@endsection