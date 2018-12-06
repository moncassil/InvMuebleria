SELECT `articulo`.`id_articulo`,
    `articulo`.`articulo`,
    `articulo`.`precio`,
    `articulo`.`id_tipo`,
    `articulo`.`existencia`
FROM `Muebleria`.`articulo`;

SELECT `tipo_articulo`.`id_tipo`,
    `tipo_articulo`.`tipo`,
    `tipo_articulo`.`marca`,
    `tipo_articulo`.`tamano`,
    `tipo_articulo`.`color`,
    `tipo_articulo`.`descripcion`
FROM `Muebleria`.`tipo_articulo`;

SELECT `usuarios`.`usuario`,
    `usuarios`.`contrasena`,
    `usuarios`.`tipo_usuario`
FROM `Muebleria`.`usuarios`;
