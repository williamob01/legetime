<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Legetime - Gestión de Citas Médicas</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ URL::asset('images/favicon.png') }}">
    <link href="{{ URL::asset('css/style.css') }}" rel="stylesheet">

</head>

<body class="h-100">
    <div class="authincation h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-md-6">
                    <div class="authincation-content">
                        <div class="row no-gutters">
                            <div class="col-xl-12">
                                <div class="auth-form">
                                    <div class="text-center mb-3">
                                        <a href="#"><img src="{{ URL::asset('images/logo-full.png') }}" alt=""></a>
                                    </div>
                                    <h4 class="text-center mb-4">Crear una cuenta</h4>
                                    {!! Form::open(['route' => 'register', 'method' => 'POST']) !!}
                                        <div class="form-group">
                                            <label class="mb-1"><strong>Nombre</strong></label>
                                            {!! Form::text('name', null, ['class' => ['form-control', $errors->has('name') ? 'is-error' : ''], 'placeholder' => 'Ingrese su nombre']) !!}
                                            {!! $errors->first('name', '<span class="invalid-feedback animated fadeInUp" style="display: block;">:message</span>') !!}
                                        </div>
                                        <div class="form-group">
                                            <label class="mb-1"><strong>Correo</strong></label>
                                            {!! Form::email('email', null, ['class' => ['form-control', $errors->has('email') ? 'is-error' : ''], 'placeholder' => 'hola@sumi.com']) !!}
                                            {!! $errors->first('email', '<span class="invalid-feedback animated fadeInUp" style="display: block;">:message</span>') !!}
                                        </div>
                                        <div class="form-group">
                                            <label class="mb-1"><strong>Contraseña</strong></label>
                                            {!! Form::password('password', ['class' => ['form-control', $errors->has('password') ? 'is-error' : ''], 'placeholder' => 'Ingrese su contraseña']) !!}
                                            {!! $errors->first('password', '<span class="invalid-feedback animated fadeInUp" style="display: block;">:message</span>') !!}
                                        </div>
                                        <div class="form-group">
                                            <label class="mb-1"><strong>Confirmar contraseña</strong></label>
                                            {!! Form::password('password_confirmation', ['class' => 'form-control', 'placeholder'=>'Confirme su contraseña']) !!}
                                        </div>
                                        <div class="text-center mt-4">
                                            {!! Form::submit('Regístrate', ['class' => 'btn btn-primary btn-block']) !!}
                                        </div>
                                    {!! Form::close() !!}
                                    <div class="new-account mt-3">
                                        <p>Ya tienes una cuenta? <a class="text-primary" href="{{ route('login') }}">Iniciar sesión</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="{{ URL::asset('vendor/global/global.min.js') }}"></script>
    <script src="{{ URL::asset('vendor/bootstrap-select/dist/js/bootstrap-select.min.js') }}"></script>
    <script src="{{ URL::asset('js/custom.min.js') }}"></script>
    <script src="{{ URL::asset('js/deznav-init.js') }}"></script>
</body>
</html>
