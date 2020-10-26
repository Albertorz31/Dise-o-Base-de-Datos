

<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Loa</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
        <!--Fontawesome CDN-->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
        <!------ Include the above in your HEAD tag ---------->

        <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        
        <!-- Styles -->
        <style>
            html,body{
            background-image: url('loa.jpg');
            background-size: 1537px 750px;
            background-repeat: no-repeat;
            height: 100%;
            font-family: 'Numans', sans-serif;
            }
            .full-height {
                height: 100vh;
            }
            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }
            .position-ref {
                position: relative;
            }
            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }
            .content {
                text-align: center;
            }
            .title {
                font-size: 60px;
                color: white;
            }
            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }
            .m-b-md {
                margin-bottom: 30px;
            }
            .btn-sq-lg {
              width: 150px !important;
              height: 150px !important;
            }
            .btn-sq {
              width: 100px !important;
              height: 100px !important;
              font-size: 10px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">

            <div class="content">
                <div class="title m-b-md">
                    Bienvenido al registro curricular
                </div>

                <div class="row">
                    <div class="col-lg-12">
                      <p>
                        <a href="{{url('/estudiantes/estudianteLogin')}}" class="btn btn-sq-lg btn-primary">
                            <i class="fas fa-user-graduate fa-5x"></i></i><br/>
                            Estudiante <br>Loa
                        </a>
                        <a href="{{url('/profesors/profesorLogin')}}" class="btn btn-sq-lg btn-danger">
                          <i class="fas fa-chalkboard-teacher fa-5x"></i><br/>
                            Profesor <br>Loa
                        </a>
                        <a href="{{url('/coordinadors/coordinadorLogin')}}" class="btn btn-sq-lg btn-warning">
                          <i class="fas fa-user-cog fa-5x"></i><br/>
                            Coordinador <br>Loa
                        </a>
                      </p>
                    </div>
                </div>
            </div>
        </div>
        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>