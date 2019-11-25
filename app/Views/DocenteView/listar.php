<div class="container">


    <main role="main" class="col-md-12 ">

        <h2 class="mt-2">Docentes</h2>
        <div class="table-responsive">
            <table class="table table-striped table-sm table-hover">
                <thead>
                <tr>
                    <th>nombre</th>
                    <th>apellido 2</th>
                    <th>Nombre 2</th>
                    <th>Apellido 1</th>
                    <th>Cedula</th>
                    <th>Genero</th>
                    <th>Estado civil</th>
                    <th>Tipo de Sangre</th>
                    <th>Usuario</th>
                    <th>Provincia</th>
                    <th>Distrito</th>
                    <th>Corregimiento</th>
                    <th>Direccion</th>
                    <th>Telefono</th>
                    <th>Categoria</th>
                    <th>Ubicacion</th>
                    <th>Departamento</th>
                    <th>Cargo</th>
                    <th>Gobierno_rep</th>

                </tr>
                </thead>
                <tbody>
                <?php
                foreach ($resultados as $dato) { ?>
                    <tr>
                        <td><?php echo $dato["nombre"] ?></td>
                        <td><?php echo $dato["Segundo_apellido"] ?></td>
                        <td><?php echo $dato["primer_apellido"] ?></td>
                        <td><?php echo $dato["Segundo_nombre"] ?></td>
                        <td><?php echo $dato["cedula"] ?></td>
                        <td><?php echo $dato["genero"] ?></td>
                        <td><?php echo $dato["Estado_civil"] ?></td>
                        <td><?php echo $dato["Tipo_sangre"] ?></td>
                        <td><?php echo $dato["Usuario_Id_usuario"] ?></td>
                        <td><?php echo $dato["provincia"] ?></td>
                        <td><?php echo $dato["Distrito"] ?></td>
                        <td><?php echo $dato["corregimiento"] ?></td>
                        <td><?php echo $dato["Direccion_especifica"] ?></td>
                        <td><?php echo $dato["Telefono"] ?></td>
                        <td><?php echo $dato["categoria_administrativo"] ?></td>
                        <td><?php echo $dato["ubicacion"] ?></td>
                        <td><?php echo $dato["departamento"] ?></td>
                        <td><?php echo $dato["cargo_adm"] ?></td>
                        <td><?php echo $dato["Gobierno_Repre"] ?></td>
                    </tr>
                <?php }
                ?>
                </tbody>
            </table>
        </div>
    </main>
</div>