@extends('adminlte::page')

@section('content')

<div class="container mt-5">

    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 24rem;">
            <div class="card-header">
                Tambah Member
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
                <form method="post" action="{{ route('files.store') }}" id="myForm" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="name">Nama</label> <input type="text" name="name" class="form-control" id="name"
                            aria-describedby="name" placeholder="Masukkan Nama">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label> <input type="email" name="email" class="form-control"
                            id="email" aria-describedby="email" placeholder="Masukkan Email">
                    </div>
                    <div class="form-group">
                        <label for="position">Jabatan</label> <input type="text" name="position" class="form-control"
                            id="position" aria-describedby="position" placeholder="Masukkan Jabatan">
                    </div>
                    <div class="form-group">
                        <label for="picture">Foto</label> <input type="file" name="picture" class="form-control"
                            id="picture" aria-describedby="picture">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection