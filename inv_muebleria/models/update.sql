UPDATE `Muebleria`.`articulo`
SET
`id_articulo` = <{id_articulo: }>,
`articulo` = <{articulo: }>,
`precio` = <{precio: }>,
`id_tipo` = <{id_tipo: }>,
`existencia` = <{existencia: }>
WHERE `id_articulo` = <{expr}>;

UPDATE `Muebleria`.`tipo_articulo`
SET
`id_tipo` = <{id_tipo: }>,
`tipo` = <{tipo: }>,
`marca` = <{marca: }>,
`tamano` = <{tamano: }>,
`color` = <{color: }>,
`descripcion` = <{descripcion: }>
WHERE `id_tipo` = <{expr}>;

UPDATE `Muebleria`.`usuarios`
SET
`usuario` = <{usuario: }>,
`contrasena` = <{contrasena: }>,
`tipo_usuario` = <{tipo_usuario: }>
WHERE `usuario` = <{expr}>;
