select * from estudiantes
select * from respaldo_estudiantes

--crear funcion que retorne trigger

CREATE OR REPLACE FUNCTION insertar_trigger RETURNS TRIGGER AS $insertar$
DECLARE BEGIN
	INSERT INTO respaldo_estudiantes
	VALUES(OLD.nombre_estudiante, OLD.contraseña_estudiante, OLD.fecha_nacimiento_estudiante,
		OLD.correo_estudiante, OLD.telefono_estudiante, OLD.asignaturas_aprobadas, OLD.situacion_estudiante,
		OLD.nivel_estudiante, OLD.fecha_ingreso, OLD.ultima_matricula, OLD.id_direccion, OLD.id_malla);
	RETURN NULL;
END;
$insertar$ LANGUAJE plpsql;

CREATE TRIGGER insertar_respaldo AFTER DELETE
ON estudiantes FOR EACH ROW
EXECUTE PROCEDURE insertar_trigger();

