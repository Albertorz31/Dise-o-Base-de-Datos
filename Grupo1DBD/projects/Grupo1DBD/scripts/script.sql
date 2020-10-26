/*ELIMINAR BASE DE DATOS*/

DROP TABLE IF EXISTS mensajes;
DROP TABLE IF EXISTS seccions;
DROP TABLE IF EXISTS horarios;
DROP TABLE IF EXISTS asignaturas;
DROP TABLE IF EXISTS historial_de_usuarios;
DROP TABLE IF EXISTS utilidads;
DROP TABLE IF EXISTS matriculas;
DROP TABLE IF EXISTS arancels;
DROP TABLE IF EXISTS pagos;
DROP TABLE IF EXISTS administradors;
DROP TABLE IF EXISTS profesors;
DROP TABLE IF EXISTS coordinadors;
DROP TABLE IF EXISTS estudiantes;
DROP TABLE IF EXISTS carreras;
DROP TABLE IF EXISTS direccions;
DROP TABLE IF EXISTS mallas;
DROP TABLE IF EXISTS facultads;
/* CREAR BASE DE DATOS*/

CREATE DATABASE pruebascript;

/* CONECTAR A BASE DE DATOS */
\c pruebascript;

/* CREACION DE TABLAS*/

CREATE TABLE public.facultads(
    id integer NOT NULL PRIMARY KEY,
    nombre_facultad character varying(37) NOT NULL,
    numero_carreras integer NOT NULL,
    numero_estudiantes integer NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);

CREATE TABLE public.mallas(
    id integer NOT NULL PRIMARY KEY,
    total_asignaturas integer NOT NULL,
    cantidad_semestres integer NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);

CREATE TABLE public.direccions(
    id integer NOT NULL PRIMARY KEY,
    comuna_direccion character varying(50) NOT NULL,
    calle_direccion character varying(50) NOT NULL,
    nombre_direccion character varying(50) NOT NULL,
    numero_direccion integer NOT NULL,
    region character varying(50) NOT NULL,
    pais character varying(50) NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);

CREATE TABLE public.carreras(
    id integer NOT NULL PRIMARY KEY,
    nombre_carrera character varying(50) NOT NULL,
    duracion_semestres integer NOT NULL,
    jornada character varying(10) NOT NULL,
    arancel integer NOT NULL,
    grado_academico character varying(50) NOT NULL,
    titulo_profesional character varying(50) NOT NULL,
    acreditacion integer NOT NULL,
    numero_estudiantes integer  NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone,
    id_malla integer REFERENCES mallas(id) ON DELETE CASCADE,
    id_facultad integer REFERENCES facultads(id) ON DELETE CASCADE
);

CREATE TABLE public.estudiantes(
    id integer NOT NULL PRIMARY KEY,
    nombre_estudiante character varying(60) NOT NULL,
    contraseña_estudiante character varying(60) NOT NULL,
    fecha_nacimiento_estudiante date NOT NULL,
    correo_estudiante character varying(60) NOT NULL,
    telefono_estudiante character varying(60) NOT NULL,
    asignaturas_aprobadas integer NOT NULL,
    situacion_estudiante character varying(60) NOT NULL,
    nivel_estudiante integer NOT NULL,
    fecha_ingreso date NOT NULL,
    ultima_matricula date NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone,
    id_direccion integer REFERENCES direccions(id) ON DELETE CASCADE,
    id_carrera integer REFERENCES carreras(id) ON DELETE CASCADE
);

CREATE TABLE public.coordinadors(
    id integer NOT NULL PRIMARY KEY,
    nombre_coordinador character varying(60) NOT NULL,
    contraseña_coordinador character varying(60) NOT NULL,
    fecha_nacimiento_coordinador date NOT NULL,
    correo_coordinador character varying(60) NOT NULL,
    telefono_coordinador character varying(60) NOT NULL,
    tipo_coordinador character varying(60) NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone,
    id_direccion integer REFERENCES direccions(id) ON DELETE CASCADE
);

CREATE TABLE public.profesors(
    id integer NOT NULL PRIMARY KEY,
    nombre_profesor character varying(60) NOT NULL,
    contraseña_profesor character varying(60) NOT NULL,
    fecha_nacimiento_profesor date NOT NULL,
    correo_profesor character varying(60) NOT NULL,
    telefono_profesor character varying(90) NOT NULL,
    asignaturas_impartidas integer NOT NULL,
    especialidad_profesor character varying(90) NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone,
    id_direccion integer REFERENCES direccions(id) ON DELETE CASCADE
);

CREATE TABLE public.administradors(
    id integer NOT NULL PRIMARY KEY,
    nombre_administrador character varying(60) NOT NULL,
    contraseña_administrador character varying(60) NOT NULL,
    fecha_nacimiento_administrador date NOT NULL,
    correo_administrador character varying(60) NOT NULL,
    telefono_adminstrador character varying(60) NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone,
    id_direccion integer REFERENCES direccions(id) ON DELETE CASCADE
);

CREATE TABLE public.pagos(
    id integer NOT NULL PRIMARY KEY,
    tipo_pago character varying(60) NOT NULL,
    num_cuenta integer NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone,
    id_estudiante integer REFERENCES estudiantes(id) ON DELETE CASCADE
);

CREATE TABLE public.arancels(
    id integer NOT NULL PRIMARY KEY,
    semestre_arancel integer NOT NULL,
    monto_arancel integer NOT NULL,
    fecha_vencimiento_arancel date NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);

CREATE TABLE public.matriculas(
    id integer NOT NULL PRIMARY KEY,
    semestre_matricula integer NOT NULL,
    monto_matricula integer NOT NULL,
    fecha_vencimiento_matricula date NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);

CREATE TABLE public.utilidads(
    id integer NOT NULL PRIMARY KEY,
    documentos_disponibles character varying(20) NOT NULL,
    certificados_disponibles character varying(20) NOT NULL,
    solicitudes_enviadas character varying(20) NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone,
    id_estudiante integer REFERENCES estudiantes(id) ON DELETE CASCADE
);

CREATE TABLE public.historial_de_usuarios(
    id integer NOT NULL PRIMARY KEY,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);

CREATE TABLE public.asignaturas(
    id integer NOT NULL PRIMARY KEY,
    nivel_asignatura integer NOT NULL,
    situacion_asignatura character varying(10) NOT NULL,
    calificacion_catedra integer NOT NULL,
    calificacion_laboratorio integer NOT NULL,
    calificacion_final integer NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone,
    id_malla integer REFERENCES mallas(id) ON DELETE CASCADE,
    id_estudiante integer REFERENCES estudiantes(id) ON DELETE CASCADE
);

CREATE TABLE public.horarios(
    id integer NOT NULL PRIMARY KEY,
    listado_cursos character varying(30) NOT NULL,
    dias integer NOT NULL,
    modulos integer NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);

CREATE TABLE public.seccions(
    id integer NOT NULL PRIMARY KEY,
    tipo_seccion character varying(10) NOT NULL,
    sala character varying(10) NOT NULL,
    modulo character varying(10) NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone,
    id_asignatura integer REFERENCES asignaturas(id) ON DELETE CASCADE,
    id_horario integer REFERENCES horarios(id) ON DELETE CASCADE
);

CREATE TABLE public.mensajes(
    id integer NOT NULL PRIMARY KEY,
    correo_asociado character varying(30) NOT NULL,
    texto text NOT NULL,
    mensajes_recibidos integer NOT NULL,
    mensajes_enviados integer NOT NULL,
    avisos_inicio text NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone,
    id_coordinador integer REFERENCES coordinadors(id) ON DELETE CASCADE,
    id_estudiante integer REFERENCES estudiantes(id) ON DELETE CASCADE,
    id_administrador integer REFERENCES administradors(id) ON DELETE CASCADE,
    id_profesor integer REFERENCES profesors(id) ON DELETE CASCADE
);

/*DATOS PARA POBLAR LA BASE DE DATOS*/
INSERT INTO facultads (id, nombre_facultad, numero_carreras, numero_estudiantes) 
VALUES (1, 'Ingenieria', 10, 1000), 
(2, 'Humanidades', 12, 1000), 
(3, 'Tecnologica', 11, 1000),
(4, 'Economia', 14, 1000),
(5, 'Negocio', 13, 1000);

INSERT INTO mallas (id, total_asignaturas, cantidad_semestres) 
VALUES (1, 45, 12),
(2, 60, 12),
(3, 43, 8),
(4, 62, 10),
(5, 44, 11);

INSERT INTO direccions (id, comuna_direccion, calle_direccion, nombre_direccion, numero_direccion, region, pais) 
VALUES (1, 'Maipu', 'Portales', 'Cerro huemul', 1077, 'Metropolitana', 'Chile'),
(2, 'Chicureo', 'Garden', 'Cerro lindo', 3867, 'Metropolitana', 'Chile'),
(3, 'Puente alto', 'Manuel', 'Cerro colorado', 9062, 'Metropolitana', 'Chile'),
(4, 'La florida', 'Jose', 'Cerro verde', 1753, 'Metropolitana', 'Chile'),
(5, 'Las condes', 'Semilla', 'Pasaje oeste', 8765, 'Metropolitana', 'Chile');


INSERT INTO carreras (id, nombre_carrera, duracion_semestres, jornada, 
    arancel, grado_academico, titulo_profesional, acreditacion, 
    numero_estudiantes, id_malla, id_facultad) 
VALUES (1, 'Informatica', 8, 'Diurna', 4000000, 'Licenciado', 'Ingeniero', 5, 1234, 1, 1),
(2, 'Industrial', 8, 'Diurna', 5000000, 'Licenciado', 'Ingeniero', 5, 1211, 1, 1),
(3, 'Mecanica', 8, 'Diurna', 3000000, 'Licenciado', 'Ingeniero', 5, 1671, 1, 1),
(4, 'Minas', 8, 'Diurna', 4000000, 'Licenciado', 'Ingeniero', 5, 1532, 1, 1),
(5, 'Ambiental', 8, 'Diurna', 2000000, 'Licenciado', 'Ingeniero', 5, 567, 1, 1);

INSERT INTO estudiantes (id, nombre_estudiante, contraseña_estudiante, 
    fecha_nacimiento_estudiante, correo_estudiante, telefono_estudiante, 
    asignaturas_aprobadas, situacion_estudiante, nivel_estudiante, 
    fecha_ingreso, ultima_matricula,id_direccion, id_carrera) 
VALUES (1, 'Franco', '123', DATE'1995-11-11', 'franco@usach.cl', 
    '123456789', 20, 'Regular', 6, DATE'2015-03-03', DATE'2019-03-04', 1, 1),
(2, 'Juan', '123', DATE'1995-11-11', 'juan@usach.cl', 
    '123456789', 20, 'Regular', 6, DATE'2015-03-03', DATE'2019-03-04', 1, 1),
(3, 'Pedro', '123', DATE'1995-11-11', 'pedro@usach.cl', 
    '123456789', 20, 'Regular', 6, DATE'2015-03-03', DATE'2019-03-04', 1, 1),
(4, 'Alberto', '123', DATE'1995-11-11', 'alberto@usach.cl', 
    '123456789', 20, 'Regular', 6, DATE'2015-03-03', DATE'2019-03-04',  1, 1),
(5, 'Diego', '123', DATE'1995-11-11', 'diego@usach.cl', 
    '123456789', 20, 'Regular', 6, DATE'2015-03-03', DATE'2019-03-04', 1, 1);

INSERT INTO coordinadors (id, nombre_coordinador, contraseña_coordinador, 
    fecha_nacimiento_coordinador, correo_coordinador, telefono_coordinador, tipo_coordinador, id_direccion) 
VALUES (1, 'Juan', '123', DATE'1995-11-11', 'coordinador1@usach.cl', 
'12334567', 'Academico', 1),
(2, 'Pedro', '123', DATE'1995-11-11', 'coordinador2@usach.cl', 
'12334567', 'Academico', 1),
(3, 'Eren', '123', DATE'1995-11-11', 'coordinador3@usach.cl', 
'12334567', 'Academico', 1),
(4, 'Boku', '123', DATE'1995-11-11', 'coordinador4@usach.cl', 
'12334567', 'Academico', 1),
(5, 'Miguel', '123', DATE'1995-11-11', 'coordinador5@usach.cl', 
'12334567', 'Academico', 1);

INSERT INTO profesors (id, nombre_profesor, contraseña_profesor, fecha_nacimiento_profesor, 
    correo_profesor, telefono_profesor, asignaturas_impartidas, especialidad_profesor, id_direccion) 
VALUES (1, 'Juan', '123', DATE'1995-11-11', 'profesor1@usach.cl', 
'12334567', 2, 'Doctor', 1),
(2, 'Eren', '123', DATE'1995-11-11', 'profesor2@usach.cl', 
'12334567', 2, 'Doctor', 1),
(3, 'Boku', '123', DATE'1995-11-11', 'profesor3@usach.cl', 
'12334567', 2, 'Doctor', 1),
(4, 'Miguel', '123', DATE'1995-11-11', 'profesor4@usach.cl', 
'12334567', 2, 'Doctor', 1),
(5, 'Alberto', '123', DATE'1995-11-11', 'profesor5@usach.cl', 
'12334567', 2, 'Doctor', 1);

INSERT INTO administradors (id, nombre_administrador, contraseña_administrador, 
    fecha_nacimiento_administrador, correo_administrador,telefono_adminstrador, id_direccion) 
VALUES (1, 'Juan', '123', DATE'1995-11-11', 'profesor1@usach.cl', 
'12334567', 1),
(2, 'Eren', '123', DATE'1995-11-11', 'profesor2@usach.cl', 
'12334567', 1),
(3, 'Boku', '123', DATE'1995-11-11', 'profesor3@usach.cl', 
'12334567', 1),
(4, 'Miguel', '123', DATE'1995-11-11', 'profesor4@usach.cl', 
'12334567', 1),
(5, 'Alberto', '123', DATE'1995-11-11', 'profesor5@usach.cl', 
'12334567', 1);

INSERT INTO pagos (id, tipo_pago, num_cuenta, id_estudiante)
VALUES (1, 'Efectivo', 1234, 1),
(2, 'Cuotas', 1234, 1),
(3, 'Transferencia', 1234, 1),
(4, 'Efectivo', 1234, 1),
(5, 'Efectivo', 1234, 1);

INSERT INTO arancels (id, semestre_arancel, monto_arancel, fecha_vencimiento_arancel)
VALUES (1, 3, 2000000, DATE'2019-11-11'),
(2, 4, 3000000, DATE'2019-11-11'),
(3, 5, 2004500, DATE'2019-11-11'),
(4, 6, 1000000, DATE'2019-11-11'),
(5, 7, 3032000, DATE'2019-11-11');

INSERT INTO matriculas (id, semestre_matricula, monto_matricula, fecha_vencimiento_matricula) 
VALUES (1, 3, 2000000, DATE'2019-11-11'),
(2, 4, 3000000, DATE'2019-11-11'),
(3, 5, 2004500, DATE'2019-11-11'),
(4, 6, 1000000, DATE'2019-11-11'),
(5, 7, 3032000, DATE'2019-11-11');

INSERT INTO utilidads (id, documentos_disponibles, certificados_disponibles, solicitudes_enviadas, 
    id_estudiante)
VALUES (1, 'Documentos', 'Certificados', 'Solicitudes enviadas', 1),
(2, 'Documentos', 'Certificados', 'Solicitudes enviadas', 1),
(3, 'Documentos', 'Certificados', 'Solicitudes enviadas', 1),
(4, 'Documentos', 'Certificados', 'Solicitudes enviadas', 1),
(5, 'Documentos', 'Certificados', 'Solicitudes enviadas', 1);

INSERT INTO historial_de_usuarios (id)
VALUES (1),
(2),
(3),
(4),
(5);


INSERT INTO asignaturas (id, nivel_asignatura, situacion_asignatura, 
    calificacion_catedra, calificacion_laboratorio, calificacion_final, 
    id_malla, id_estudiante)
VALUES (1, 4, 'Aprobada', 40, 40, 40, 1, 1),
(2, 4, 'Aprobada', 50, 60, 55, 1, 1),
(3, 4, 'Aprobada', 60, 60, 60, 1, 1),
(4, 4, 'Aprobada', 50, 50, 50, 1, 1),
(5, 4, 'Aprobada', 40, 40, 40, 1, 1);

INSERT INTO horarios (id, listado_cursos, dias, modulos) 
VALUES (1, 'Curso 1', 3, 3),
(2, 'Curso 2', 3, 3),
(3, 'Curso 3', 2, 3),
(4, 'Curso 4', 1, 3),
(5, 'Curso 5', 2, 3);

INSERT INTO seccions (id, tipo_seccion, sala, modulo, id_asignatura, id_horario) 
VALUES (1, 'Seccion 1', '517', '3', 1, 1),
(2, 'Seccion 2', '519', '1',  1, 1),
(3, 'Seccion 3', '526', '4',  1, 1),
(4, 'Seccion 4', '510', '3',  1, 1),
(5, 'Seccion 5', '520', '3',  1, 1);

INSERT INTO mensajes (id, correo_asociado, texto, mensajes_recibidos, 
    mensajes_enviados, avisos_inicio, id_coordinador, id_estudiante, id_administrador, id_profesor) 
VALUES (1, 'franco@usach.cl', 'Texto 1', 10, 1, 'Aviso 1', 1, 1, 1, 1),
(2, 'alberto@usach.cl', 'Texto 2', 24, 3, 'Aviso 2', 1, 1, 1, 1),
(3, 'dany@usach.cl', 'Texto 3', 6, 2, 'Aviso 3', 1, 1, 1, 1),
(4, 'alex@usach.cl', 'Texto 4', 11, 0, 'Aviso 4', 1, 1, 1, 1),
(5, 'huaso@usach.cl', 'Texto 5', 12, 5, 'Aviso 5', 1, 1, 1, 1);

