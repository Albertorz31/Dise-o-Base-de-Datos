create procedure verificar_correo @nombre_estudiante nvarchar(30), @correo_estudiante nvarchar(40)
	as
	begin

	Select * from estudiantes where nombre_estudiante = @nombre_estudiante 
	and correo_estudiante = @correo_estudiante
	print 'Verificado'

	end