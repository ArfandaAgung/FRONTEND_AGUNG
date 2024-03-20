@extends('Template.Main')

@section('container')
    <h1 class="text-center mb-4">Form Edit Data</h1>


    <link rel="stylesheet" href="{{ '/' }}css/create.css">


    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <main class="form-signin w-100 m-auto">

                    <form action="" method="" enctype="multipart/form-data">
                        
                        <div class="mb-3">
                            <input type="hidden" name="oldImage" value="">
                            
                                <img src=""
                                    class="img-preview img-fluid mb-3 col-sm-3 d-block">
                            
                                <img class="img-preview img-fluid mb-3 col-sm-3 d-block">
                            
                            <img class="img-preview img-fluid mb-3 col-sm-3">
                            <input
                                class="form-control ">
                            
                                <div class="invalid-feedback">
                            
                                </div>
                            
                        </div>

                        <div class="form-floating">
                            <input type="text"
                                class="form-control">
                            <label for="judulFoto">Judul Foto</label>
                            
                                <div class="invalid-feedback">
                            
                                </div>
                            
                        </div>

                        <div class="form-floating">
                            <input type="text"
                                class="form-control">
                            <label for="deskripsiFoto">Deskripsi Foto</label>
                            
                                <div class="invalid-feedback">
                                    
                                </div>
                            
                        </div>

                        <button class="btn btn-brown w-100 py-2 fw-semibold mt-3" type="submit">Edit</button>

                    </form>
                </main>
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
                    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
                </script>

                <script>
                    function previewImage() {
                        const image = document.querySelector('#image');
                        const imgPreview = document.querySelector('.img-preview');

                        imgPreview.style.display = 'block';

                        const oFReader = new FileReader();
                        oFReader.readAsDataURL(image.files[0]);

                        oFReader.onload = function(ofREvent) {
                            imgPreview.src = ofREvent.target.result;
                        }
                    }
                </script>
            </div>
        </div>
    </div>
@endsection