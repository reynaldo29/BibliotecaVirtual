<?php include_once 'crud.php'; ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="/css/master.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    <meta charset="utf-8">
    <title>Lab07</title>
  </head>

  <body>
    <nav class="nav bg-primary">
    <a  href="#">Libros</a>
    <a  href="#">Articulos</a>
    <a  href="#">Ciencia</a>
    <a>Tecnologia</a>
  </nav>
  <br>
  <header>
    <h1 align="center">LIBROS VIRTUALES</h1>
  </header>
    <center>
      <br>
      <br>
      <div class="" id="form">
        <form class="" method="post">
          <table width="100%" border="1" cellpading="15" >
            <div class="input-group flex-nowrap">
              <tr>
                <td><input type="text" name="titulo" class="form-control" placeholder="Titulo" aria-label="Username"
                  aria-describedby="addon-wrapping"   value="<?php if(isset($_GET['edit'])) echo $getfila['titulo'] ?>"></td>
              </tr>
              <tr>
                <td><input type="text" name="autor" class="form-control" placeholder="Autor" aria-label="Username"
                  aria-describedby="addon-wrapping"   value="<?php if(isset($_GET['edit'])) echo $getfila['autor'] ?>"></td>
              </tr>
              <tr>
                <td><input type="text" name="año" class="form-control" placeholder="Año" aria-label="Username"
                  aria-describedby="addon-wrapping"   value="<?php if(isset($_GET['edit'])) echo $getfila['año'] ?>"></td>
              </tr>
              <tr>
                <td><input type="text" name="url" class="form-control" placeholder="Url" aria-label="Username"
                  aria-describedby="addon-wrapping"   value="<?php if(isset($_GET['edit'])) echo $getfila['url'] ?>"></td>
              </tr>
              <tr>
                <td><input type="text" name="esp" class="form-control" placeholder="Especialidad" aria-label="Username"
                  aria-describedby="addon-wrapping"   value="<?php if(isset($_GET['edit'])) echo $getfila['esp'] ?>"></td>
              </tr>
              <tr>
                <td><input type="text" name="editorial" class="form-control" placeholder="Editorial" aria-label="Username"
                  aria-describedby="addon-wrapping"   value="<?php if(isset($_GET['edit'])) echo $getfila['editorial'] ?>"></td>
              </tr>
            </div>
          </table>
          <?php
          if(isset($_GET['edit'])){
            ?>
              <button class="btn btn-primary" name="update" type="submit">Actualizar</button>

           <?php
           }else{
            ?>
            <button class="btn btn-lg btn-block btn-primary" name="save">Agregar</button>

           <?php
           }
            ?>
        </form>
        <br>
        <br>

        <table class="table" id="table">
          <thead class="table-primary">
            <tr>
              <th>ID</th>
              <th>TITULO</th>
              <th>AUTOR</th>
              <th>AÑO</th>
              <th>ESPECIALIDAD</th>
              <th>EDITORIAL</th>
              <th colspan="3">ACCIONES</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $result=$MySql->query('SELECT * FROM data');
            while ($fila=$result->fetch_array()) {
            ?>
            <tr>
              <td><?php echo $fila['id'];?></td>
              <td><?php echo $fila['titulo'];?></td>
              <td><?php echo $fila['autor']; ?></td>
              <td><?php echo $fila['año']; ?></td>
              <td><?php echo $fila['esp']; ?></td>
              <td><?php echo $fila['editorial']; ?></td>


              <td><a href="?edit=<?php echo $fila['id'];?>"
              onclick="return confirm('Confirmar edicion')">Editar</a> </td>
              <td><a href="?del=<?php echo $fila['id'];?>"
              onclick="return confirm('Confirmar Eliminar')">Eliminar</a> </td>
              <td><a href="<?php echo $fila['url'];?>" target="_blank">Ver</a></td>

            </tr>
            <?php
            }
             ?>
          </tbody>
        </table>
      </div>
    </center>
  </body>
</html>
