@extends('administradors/layoutadmin')
@section('contenido')  
    <div class="container text-center">
        <div class="page-header">
            <center> . <h1><i class="fa fa-shopping-cart"></i> Administrar </h1> </center>
        </div>
        
        <div class="table-cart">
            

        <div class="table-responsive">
            <table class="table table-striped table-hover table-bordered">
                <thead>
                    <tr>
                        <th><center>ADMINISTRAR  </center></th>
                    </tr>
                </thead>
                <tbody>
                    
                        <td><a href="/facultads" class="btn btn-primary"style='width:130px; height:40px'>
                        Facultades <i class="fa fa-chevron-circle-left"></i>
                        </a>

                        <a href="/asignaturas" class="btn btn-primary"style='width:130px; height:40px'>
                        Asignaturas <i class="fa fa-chevron-circle-left"></i>
                        </a>
                        <a href="/carreras" class="btn btn-primary"style='width:130px; height:40px'>
                        Carreras <i class="fa fa-chevron-circle-left"></i>
                        </a>
                        <a href="/arancels" class="btn btn-primary"style='width:130px; height:40px'>
                        Aranceles <i class="fa fa-chevron-circle-left"></i>
                        </a>
                        <a href="/direccions" class="btn btn-primary"style='width:130px; height:40px'>
                        Direcciones <i class="fa fa-chevron-circle-left"></i>
                        </a>
                        <a href="/documentos/" class="btn btn-primary"style='width:130px; height:40px'>
                        Documentos <i class="fa fa-chevron-circle-left"></i>
                        </a>
                        <a href="/horarios/create" class="btn btn-primary"style='width:130px; height:40px'>
                        Horarios <i class="fa fa-chevron-circle-left"></i>
                        </a>
                        <br><br>
                        <a href="/mallas" class="btn btn-primary"style='width:130px; height:40px'>
                        Mallas <i class="fa fa-chevron-circle-left"></i>
                        </a>

                        <a href="/matriculas" class="btn btn-primary"style='width:130px; height:40px'>
                        Matriculas <i class="fa fa-chevron-circle-left"></i>
                        </a>

                        <a href="/mensajes" class="btn btn-primary"style='width:130px; height:40px'>
                        Mensajes <i class="fa fa-chevron-circle-left"></i>
                        </a>
                
                        <a href="/pagos" class="btn btn-primary"style='width:130px; height:40px'>
                        Pagos <i class="fa fa-chevron-circle-left"></i>
                        </a>

                        <a href="/seccions" class="btn btn-primary"style='width:130px; height:40px'>
                        Secciones <i class="fa fa-chevron-circle-left"></i>
                        </a>

                        <a href="/utilidads" class="btn btn-primary"style='width:130px; height:40px'>
                        Utilidades <i class="fa fa-chevron-circle-left"></i>
                        </a>
                        </td>
                        
                    
                </tbody>
            </table>
            <hr>

            <h3>
                

            </h3>
            
        </div>
        
        

    </div>
</button>
</td>
</tr>
</tbody>
</table>
</div>
</div>
</div>

    </div>

@endsection