<!doctype html>
<html lang="en" data-bs-theme="auto">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Halaman login</title>


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">

    <link rel="stylesheet" href="css\sign.css">


    
  </head>
  <body class="d-flex align-items-center py-4 ">


    
<main class="form-signin w-100 m-auto">

  <form action="" method="">
    @csrf
    <h1 class="h3 mb-3 fw-normal text-center text-white"><b>LOGIN</b></h1>

    <div class="form-floating">
      <input type="text" class="form-control" id="" name="" placeholder="email@example.com">
      <label for="floatingPassword">Email address</label>
    </div>
    <div class="form-floating">
      <input type="password" class="form-control" id="" name="" placeholder="password">
      <label for="floatingPassword">Password</label>
    </div>
    <button class="btn btn-primary w-100 py-2 mb-4" type="submit">Sign in</button>
    <p class="text-black">Belum mempunyai akun?<a href="" class="text-decoration-none"> klik disini.</a></p>
    <p class="mt-3 mb-3 text-black">&copy; Agung 2024</p>
  </form>
  
</main>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </body>
</html>