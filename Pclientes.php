<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>crud</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <style>
        body {
            background: linear-gradient(to bottom, #d3d3d3, #ffffff);
    color: black;
    margin: 0;
    min-height: 100vh;
    display: flex;
    flex-direction: column;
        }
    </style>
    <button type="button" data-bs-toggle="modal" data-bs-target="#agregar" class="btn btn-primary d-flex mx-auto mb-3">Agregar Cliente</button>
    <table class="table table-light table-hover" id="adm">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Numero</th>
                <th>Respuesta</th>
                <th>Comentarios</th>
                <th>Fecha</th>
                <th>Modificar</th>
                <th>Eliminar</th>
            </tr>
        </thead>

        <tbody>
            <?php 
            include("conexion2.php");

            $data = mysqli_query($conexion, "SELECT * FROM clientes");

            while($consulta = mysqli_fetch_array($data)) {

                $arreglo = $consulta['ID_cliente'].','.$consulta['nombre'].','.$consulta['numero'].','.$consulta['respuesta'].','.$consulta['comentarios'].','.$consulta['fecha'];


            ?>
                <tr>
                    <td><?php echo $consulta['ID_cliente']; ?></td>
                    <td><?php echo $consulta['nombre']; ?></td>
                    <td><?php echo $consulta['numero']; ?></td>
                    <td><?php echo $consulta['respuesta']; ?></td>
                    <td><?php echo $consulta['comentarios']; ?></td>
                    <td><?php echo $consulta['fecha']; ?></td>
                    <td>
                        <button type="button" data-bs-toggle="modal" data-bs-target="#editar" class="btn btn-success" onclick="Editar(' <?php echo $arreglo ?> ')">Modificar</button>
                    </td>
                    <td>
                        <button type="button" data-bs-toggle="modal" data-bs-target="#borrar" class="btn btn-danger" onclick="Eliminar(' <?php echo $arreglo ?> ')">Eliminar</button>
                    </td>
                </tr>

            <?php
            }
            ?>
        </tbody>
    </table>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Modal Agregar -->
    <div class="modal fade" id="agregar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Agregar Cliente</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="for_agg">
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Nombre:</label>
                            <input type="text" class="form-control" id="adm_nombre" name="adm_nombre">
                        </div>
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Numero:</label>
                            <input type="text" class="form-control" id="adm_numero" name="adm_numero">
                        </div>
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Comentarios:</label>
                            <input type="text" class="form-control" id="adm_comentarios" name="adm_comentarios">
                        </div>
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Fecha:</label>
                            <input type="text" class="form-control" id="adm_fecha" name="adm_fecha">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Respuesta</label>
                            <select id="adm_Respuesta" class="form-select form-control" name="adm_Respuesta">
                                <option>No Responde</option>
                                <option>Apagado</option>
                                <option>No Desea el servicio</option>
                                <option>Reservado</option>
                                <option>Pago Pendiente</option>
                                <option>Otra Fecha</option>
                                <option>Aun en Duda</option>
                                <option>No ve la Informacion</option>
                                <option>Volver a Llamar</option>
                            </select>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    <button type="button" class="btn btn-primary"id="agg_adm">Agregar</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Editar -->
    <div class="modal fade" id="editar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Editar Cliente</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="for_adm">
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">ID:</label>
                            <input type="text" class="form-control" id="ID_" name="ID_">
                        </div>
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Nombre:</label>
                            <input type="text" class="form-control" id="nombre_" name="nombre_">
                        </div>
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Numero:</label>
                            <input type="text" class="form-control" id="numero_" name="numero_">
                        </div>
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Comentarios:</label>
                            <input type="text" class="form-control" id="comentarios_" name="comentarios_">
                        </div>
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Fecha:</label>
                            <input type="text" class="form-control" id="fecha_" name="fecha_">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Respuesta</label>
                            <select id="Respuesta_" class="form-select form-control" name="Respuesta_">
                                <option>No Responde</option>
                                <option>Apagado</option>
                                <option>No Desea el servicio</option>
                                <option>Reservado</option>
                                <option>Pago Pendiente</option>
                                <option>Otra Fecha</option>
                                <option>Aun en Duda</option>
                                <option>No ve la Informacion</option>
                                <option>Volver a Llamar</option>
                            </select>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    <button type="button" class="btn btn-primary"id="editar_adm">Editar</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Borrar -->
<div class="modal fade" id="borrar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">¿Estás seguro de eliminar a este usuario?</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form id="enviar_eli">
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="recipient-name" id="id_eli_label" class="col-form-label">ID:</label>
                        <input type="text" class="form-control" id="id_eli" name="id_eli" hidden>
                        <br>
                        <label for="recipient-name" id="u_eli" class="col-form-label">nombre:</label>
                        <input type="text" class="form-control" id="nombre_eli" name="nombre_eli" hidden>
                    </div>
                </div>
                <p>¿Estás seguro de que deseas eliminar este usuario?</p>
            </form>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                <button type="button" id="eli_" class="btn btn-danger">Eliminar</button>
            </div>
        </div>
    </div>
</div>



<script type="text/javascript" src="JS/funcionesD.js"></script>


</body>
</html>
