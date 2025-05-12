<?php
    require("db.php"); //Usar require o incluye es lo mismo, solo cambia la acción y mensaje en caso de error



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>App</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/5.3.3/darkly/bootstrap.min.css" integrity="sha512-HDszXqSUU0om4Yj5dZOUNmtwXGWDa5ppESlX98yzbBS+z+3HQ8a/7kcdI1dv+jKq+1V5b01eYurE7+yFjw6Rdg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <div class= "container">
        <div class= "row" >
            <div class= "col12" >
                <h1> Catálogo de Alumnos</h1>
            </div>
        </div>
        <div class= "row">
            <form id="frmBuscar" name="frmBuscar">
                <div class= "mb-3">
                    <label class="form-label" for="nombres">Nombres: </label>
                    <input class="form-control" type="text" id="nombres" name="nombres">
                </div>
                <div class="mb-3">
                    <button class="btn btn-success btn-sm"><i class="fa-solid fa-magnifying-glass"></i>Buscar</button>

                </div>

            </form>

        </div>
        <div class="row">
            <div class= "col12" id= "tablita" name= "tablita">
                <?php
                    //Vamos a crear una tabla
                    $query = "select * from alumnos where 1";
                    $result = $db->query($query);
                    
                    if($result->num_rows > 0) {


                        //Vamos a mostrar los datos como tabla, lo primero es la def de la tabla y el encabezado
                        echo '
                            <<table class="table table-hover">
                                 <thead>
                                    <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Pokemon</th>
                                    <th scope="col">Tipo</th>
                                    <th scope="col">Column heading</th>
                                    </tr>
                                </thead>
                            <tbody>
                        ';
                        //Recorremos los resultados con un while
                        while($row = $result->fetch_assoc()) {
                            echo '
                                <tr>
                                    <td>'.$row["id"].'</td>
                                    <td>'.$row["pokemon"].'</td>
                                    <td>'.$row["tipo"].'</td>
                                    <td>'.$row["color"].'</td>
                                    <td>'.$row["nombre"].'</td>
                                 </tr>
                            ';
                        }

                        echo '
                                </tbody>
                           </table> 
                        ';


                    } else {
                        echo '<div class="alert alert-dismissible alert-secondary">
                                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                                <strong>Well done!</strong> No hay regitros que mostrar<a href="#" class="alert-link">this important alert message</a>.
                                </div>';
                        
                    }
                ?>
            </div>
        </div>
    </div>
</body>
</html>