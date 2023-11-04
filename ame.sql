CREATE TABLE `Aulas`  (
  `id_aula` int NOT NULL,
  `numero` int NOT NULL,
  `piso` int NOT NULL,
  `materias_id` int NOT NULL,
  `cursos_id` int NOT NULL,
  PRIMARY KEY (`id_aula`, `cursos_id`, `materias_id`)
);

CREATE TABLE `Cursos`  (
  `id_curso` int NOT NULL,
  `Grado` varchar(255) NOT NULL,
  `nivel` varchar(255) NOT NULL,
  `paralelo` varchar(255) NOT NULL,
  `id_estudiantes` int NOT NULL,
  PRIMARY KEY (`id_curso`, `id_estudiantes`)
);

CREATE TABLE `Estudiantes`  (
  `id_estudiante` int NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `apellido` varchar(255) NOT NULL,
  `ci` int NOT NULL,
  `RUE` varchar(255) NOT NULL,
  PRIMARY KEY (`id_estudiante`)
);

CREATE TABLE `Materias`  (
  `id_materia` int NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `horario` varchar(100) NULL,
  PRIMARY KEY (`id_materia`)
);

CREATE TABLE `Profesores`  (
  `id_profesor` int NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `apellido` varchar(255) NOT NULL,
  `ci` int NOT NULL,
  `correo` varchar(255) NOT NULL,
  `contraseña` varchar(255) NOT NULL,
  `id_materias` int NOT NULL,
  PRIMARY KEY (`id_profesor`, `id_materias`)
);

CREATE TABLE `Registros_Asistencias`  (
  `id_registro` int NOT NULL,
  `fecha` datetime NOT NULL,
  `estado` char NOT NULL,
  `estudiante` int NOT NULL,
  PRIMARY KEY (`id_registro`, `estudiante`)
);

CREATE TABLE `Reportes_Asistencias`  (
  `id_reporte` int NOT NULL,
  `estado` varchar(255) NOT NULL,
  `fecha` datetime NOT NULL,
  `descripcion` varchar(255) NULL,
  `estudiante` int NOT NULL,
  PRIMARY KEY (`id_reporte`)
);

CREATE TABLE `Tutores`  (
  `id_tutor` int NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `apellido` varchar(255) NOT NULL,
  `ci` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contraseña` varchar(255) NOT NULL,
  `id_hijos` int NOT NULL,
  PRIMARY KEY (`id_tutor`, `id_hijos`)
);

CREATE TABLE `Materia_Cursos`  (
  `materias_id_materias` int NOT NULL,
  `cursos_id_cursos` int NOT NULL,
  `Registro_Asistencia_id` int NOT NULL,
  PRIMARY KEY (`cursos_id_cursos`, `materias_id_materias`, `Registro_Asistencia_id`)
);

ALTER TABLE `Materia_Cursos` ADD CONSTRAINT `fk_Cursos_Materia_Cursos_1` FOREIGN KEY (`cursos_id_cursos`) REFERENCES `Cursos` (`id_curso`);
ALTER TABLE `Registros_Asistencias` ADD CONSTRAINT `fk_Estudiantes_Registros_Asistencias_1` FOREIGN KEY (`estudiante`) REFERENCES `Estudiantes` (`id_estudiante`);
ALTER TABLE `Tutores` ADD CONSTRAINT `fk_Estudiantes_Tutores_1` FOREIGN KEY (`id_hijos`) REFERENCES `Estudiantes` (`id_estudiante`);
ALTER TABLE `Cursos` ADD CONSTRAINT `fk_Estudiantes_Cursos_1` FOREIGN KEY (`id_estudiantes`) REFERENCES `Estudiantes` (`id_estudiante`);
ALTER TABLE `Profesores` ADD CONSTRAINT `fk_Materias_Profesores_1` FOREIGN KEY (`id_materias`) REFERENCES `Materias` (`id_materia`);
ALTER TABLE `Materia_Cursos` ADD CONSTRAINT `fk_Materias_Materia_Cursos_1` FOREIGN KEY (`materias_id_materias`) REFERENCES `Materias` (`id_materia`);
ALTER TABLE `Materia_Cursos` ADD CONSTRAINT `fk_Registros_Asistencias_Materia_Cursos_1` FOREIGN KEY (`Registro_Asistencia_id`) REFERENCES `Registro_Asistencias` (`id_registro`);
ALTER TABLE `Aulas` ADD CONSTRAINT `fk_Materia_Cursos_Aulas_1` FOREIGN KEY (`materias_id`) REFERENCES `Materia_Cursos` (`materias_id_materias`);
ALTER TABLE `Aulas` ADD CONSTRAINT `fk_Materia_Cursos_Aulas_2` FOREIGN KEY (`cursos_id`) REFERENCES `Materia_Cursos` (`cursos_id_cursos`);

