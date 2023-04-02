

    SQL TAbla alumnos

INSERT INTO `alumnos` (`id`, `first_lastname`, `second_lastname`, `first_name`, `second_name`, `third_name`, `sex`, `document`, `date_born`, `year_income`, `cicle`, `is_delete`, `created_at`, `updated_at`) VALUES
(1, 'Apaza', 'Caceres', 'Jhoel', 'Emir', NULL, 1, '70812943', '2002-07-10', '2019', '1', 0, NULL, NULL),
(2, 'Barrera', 'Benetres', 'Antonio', 'Jesus', NULL, 1, '70444375', '1988-12-15', '2015', '1', 0, NULL, NULL),
(3, 'Benavente', 'Aguinaga', 'Rau', 'Sebastián', NULL, 1, '74297986', '2000-07-25', '2018', '1', 0, NULL, NULL),
(4, 'Castillo', 'Carlin', 'Daniel', 'Pedro', 'Jose', 1, '74324015', '2002-06-25', '2019', '1', 0, NULL, NULL),
(5, 'Castro', 'Tuesta', 'Maria', 'Elizabeth', NULL, 2, '71957100', '2002-02-23', '2019', '1', 0, NULL, NULL),
(6, 'Corcino', 'Castillo', 'Antonny', 'Fernando', NULL, 1, '73123261', '2001-03-13', '2019', '1', 0, NULL, NULL),
(7, 'Escalante', 'Carrion', 'Santiago', NULL, NULL, 1, '76143384\r\n', '2002-04-12', '2019', '1', 0, NULL, NULL),
(8, 'García', 'Ramirez', 'Miguel', 'Alejandro', NULL, 1, '72555174\r\n', '2002-06-10', '2019', '1', 0, NULL, NULL),
(9, 'Gonzales', 'Martinez', 'Marco', 'Antonio', NULL, 1, '41219578', '1981-12-10', '2017', '1', 0, NULL, NULL),
(10, 'Lopez', 'Guerrero', 'Marissa', 'Fiorella', NULL, 2, '75971934\r\n', '1999-10-20', '2016', '1', 0, NULL, NULL),
(11, 'Mendoza', 'Perez', 'Wendy', 'Jazmin', NULL, 2, '48331447\r\n', '1994-06-25', '2020', '1', 0, NULL, NULL),
(12, 'Pajuelo', 'Ventocilla', 'Carlos', 'Miguel', NULL, 1, '72471827\r\n', '1996-08-24', '2019', '2', 0, NULL, NULL),
(13, 'Perez', 'Matos', 'Joseph', 'Daniel', NULL, 1, '72466294', '2000-09-06', '2017', '2', 0, NULL, NULL),
(14, 'Verastegui', 'Santiago', 'Jesus', 'Osama', NULL, 1, '72873039', '2001-11-29', '2019', '1', 0, NULL, NULL);


    SQL TAbla Pregunta
INSERT INTO `preguntas` (`id`, `value`, `question`, `created_at`, `updated_at`) VALUES
(1, 'a', '¿Tu personaje ingreso a la universidad en el año 2019?', NULL, NULL),
(2, 'b', '¿El apellido materno de tu personaje empieza con la letra “C”?', NULL, NULL),
(3, 'c', '¿Tu personaje cumple años en el último trimestre del año?', NULL, NULL),
(4, 'd', '¿El apellido paterno de tu personaje empieza con la letra “C”?', NULL, NULL),
(5, 'e', '¿El primer nombre de tu personaje empieza con “M”?', NULL, NULL),
(6, 'f', '¿Tu personaje es mujer?', NULL, NULL),
(7, 'g', '¿Tu personaje cumple años en Marzo?', NULL, NULL),
(8, 'h', '¿Tu personaje solo tiene un nombre? ', NULL, NULL),
(9, 'i', '¿Tu personaje ingreso a la universidad en el primer ciclo del año 2019?', NULL, NULL),
(10, 'j', '¿Tu personaje ingreso a la universidad en el año 2017? ', NULL, NULL);
