@extends('adminlte::page')

@section('content')

<div class="container mt-5">

    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 24rem;">
            <div class="card-header">
                Edit Member
            </div>
            <div class="card-body">
                @if ($errors->any())
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <form method="post" action="{{ route('files.update', $data->id) }}" id="myForm"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="name">Nama</label> <input type="text" name="name" class="form-control" id="name"
                            value="{{ $data->name }}" aria-describedby="name" placeholder="Masukkan Nama">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label> <input type="email" name="email" class="form-control"
                            id="email" value="{{ $data->email }}" aria-describedby="email" placeholder="Masukkan Email">
                    </div>
                    <div class="form-group">
                        <label for="position">Jabatan</label> <input type="text" name="position" class="form-control"
                            id="position" value="{{ $data->position }}" aria-describedby="position"
                            placeholder="Masukkan Jabatan">
                    </div>
                    <div class="form-group">
                        <label for="picture">Foto Lama:</label>
                        <img src="{{ url('uploadgambar')}}/{{ $data->picture }}" style="width: 50px; height: 50px;">
                    </div>
                    <div class="form-group">
                        <label for="picture">Pilih Foto Baru:</label> <input type="file" class="form-control"
                            id="picture" name="picture">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection