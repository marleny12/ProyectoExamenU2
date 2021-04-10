<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <title>REGISTRO DE ALUMNO </title>
</head>
<body>
     <hr>
        <h2></h2>
        <form method="POST">
            <h3>REGISTRO DE ALUMNO </h3>
            <br/>
            <br/>
            <div class="form-floating">
                <input type="text" class="form-control" name="id"/>
                <label for="floatingPassword">Clave del Alumno</label>
            </div>
            <br/>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" name="nombre"/>
                <label for="floatingInput">Nombre</label>
            </div>
            <br/>
            <div class="form-floating">
                <input type="text" class="form-control" name="apelli"/>
                <label for="floatingPassword">Apellidos</label>
                <br/>
                <div class="form-floating">
                <input type="text" class="form-control" name="edad"/>
                <label for="floatingPassword">Edad</label>
            </div>
            <br/>
            <div class="form-floating">
                <input type="text" class="form-control" name="email"/>
                <label for="floatingPassword">Email</label>
            </div>
            <br/>
            <div class="form-floating">
                <input type="text" class="form-control" name="curp"/>
                <label for="floatingPassword">Curp</label>
                </div>
                <br/>

                <form action="#" method="post">
<p><input type="radio" name="ing" value="sistemas" /> Sistemas Computacionales.</p>
<p><input type="radio" name="ing" value="adm" /> Administracion</p>
<p><input type="radio" name="ing" value="ind" /> Industrial</p>
<p><input type="radio" name="ing" value="elec" /> Electromecanica</p>
<br/>
<p><input type="submit" value="Registrar datos"/>
<input type="reset" value="Borrar"/>
</form>
<br/>
                <?php  

$tuing=$_POST['ing'];
if ($tuing=="sistemas")
   {echo "Bienvenidos al semestre 2021 es un placer tenerte como alumno de la carrera, Ing.Sistemas Computacionales, tu jefe de carrera es el Ing. Victor Olgin Zarate favor de presentarte con el para mas datos.";}
   elseif ($tuing=="adm")
   {echo "Bienvenidos al semestre 2021 es un placer tenerte como alumno de la carrera, Ing.Administracion, tu jefe de carrera es el Ing.Edaly castañeda Mendez favor de presentarte con el para mas datos.";}
   elseif ($tuing=="ind")
   {echo "Bienvenidos al semestre 2021 es un placer tenerte como alumno de la carrera, Ing.Industrial, tu jefe de carrera es el Ing.Jose Antonio Morales Flores favor de presentarte con el para mas datos.";}
   else if ($tuing=="elec")
   {echo "Bienvenidos al semestre 2021 es un placer tenerte como alumno de la carrera, Ing.Electromecanica, tu jefe de carrera es Ing.Christian Palmar Cifuentes favor de presentarte con el para mas datos.";}
   else ($tuing=="")
   
?>
 <br/>
 <br/>
<h2>Resultado</h2>
        <?php
            
                $nombre = "";
                $apelli = "";
                $edad = "";
                $curp = "";
                $email = "";
                $id = "";
                $ing = "";
                
                if($_POST){
                    $nombre = $_POST["nombre"];
                    $apelli = $_POST["apelli"];
                    $edad = $_POST["edad"];
                    $curp= $_POST["curp"];
                    $email= $_POST["email"];
                    $id = $_POST["id"];
                    $ing = $_POST["ing"];
                    
                    echo "<p> Tu credencia quedara con los siguentes datos: </p>";
                    echo "<p> Nombre: ".$nombre." ".$apelli."</p>";
                    echo "<p> Edad:" .$edad."</p>";
                    echo "<p> Clave de estuduante: ".$id."</p>";
                    echo "<p> Curp: ".$curp."</p>";
                    echo "<p> Correo : ".$email."</p>";
                    echo "<p> Correo Instirucional: ".$id."".$ing."@.tecnm.mx </p>";
                
              }
    ?><br/><br/>
</body>
</html>