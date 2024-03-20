@extends('Template.Main')

@section('container')
    <h1 class="text-center mb-4 fw-bold" style="color: rgb(85, 73, 57)">Semua Foto</h1>

    
        <div class="alert alert-success alert-dismissible fade show" role="alert">
    
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
    
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
    
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    
    <a href="" class="btn btn-success mb-3">Tambah</a>

    <div class="row">
    
            <div class="col-md-5 mb-3">
                <div class="card" style="width: 12rem;">
                    <img src="" class="card-img-top" alt="Judul Foto">
                    <div class="card-body">
                        <h5 class="card-title">judul Foto</h5>
                        <p class="card-text">Deskripsi Foto</p>
                        <a href="" class="btn btn-warning">Edit</a>

                        <form action="" method="POST" class="d-inline">
                           <button class="btn btn-danger">Delete</button>
                        </form>
                    </div>
                </div>
            </div>
        
    </div>
@endsection