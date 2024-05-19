<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap demo</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/8a31b174ad.js" crossorigin="anonymous"></script>
</head>

<body>
  <header data-bs-theme="dark">
    <div class="navbar navbar-dark bg-dark shadow-sm">
      <div class="container">
        <a href="#" class="navbar-brand d-flex align-items-center">

          <strong>Administrador</strong>
        </a>
        <a href="cerrar_sesion.php">
          <span>cerrar sesion</span>
        </a>
      </div>
    </div>
  </header>
   <form>
    <div class="col-8 p-4">
    <table class="table">
  <thead class="bg-info">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nombre del Estudiante</th>
      <th scope="col">Id Estudiante</th>
      <th scope="col">Correo Estudiante</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
      <td>
        <a href="" class="btn btn-small btn-warning"><i class="fa-regular fa-pen-to-square"></i></a>
        <a href="" class="btn btn-small btn-danger"><i class="fa-regular fa-trash-can"></i></a>
      </td>
    </tr>
 
  </tbody>
</table>

    </div>
   </form>
    

  <form>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">nombre</label>
    <input type="email" class="form" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">id</label>
    <input type="password" class="form" id="exampleInputPassword1">
    <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">email</label>
    <input type="password" class="form" id="exampleInputPassword1">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td colspan="2">Larry the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>

  



  <!--bootstrap js-->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
    <!--bootstrap js-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"></script>
</body>

</html>