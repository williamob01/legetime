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
                                    <h4 class="text-center mb-4">Iniciar sesión</h4>
                                    {!! Form::open(['route' => 'login', 'method' => 'POST']) !!}
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

                                        <div class="form-row d-flex justify-content-between mt-4 mb-2">
                                            <div class="form-group">
                                               <div class="custom-control custom-checkbox ml-1">
													{{-- <input type="checkbox" class="custom-control-input" id="basic_checkbox_1">
													<label class="custom-control-label" for="basic_checkbox_1">Recuérdame</label> --}}

                                                    {!! Form::checkbox('remember', null, null, ['class' => 'custom-control-input', 'id' => 'remember']) !!}
                                                    {!! Form::label('remember', 'Recuérdame', ['class' => 'custom-control-label']) !!}
												</div>
                                            </div>
                                            <div class="form-group">
                                                <a href="{{ route('password.request') }}">Olvidaste tu contraseña?</a>
                                            </div>
                                        </div>
                                        <div class="text-center">
                                            {!! Form::submit('Ingresar', ['class' => 'btn btn-primary btn-block']) !!}
                                        </div>
                                    </form>
                                    <div class="new-account mt-3">
                                        <p>No tienes una cuenta? <a class="text-primary" href="{{ route('register') }}">Regístrate</a></p>
                                    </div>
                                    {!! Form::close() !!}
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
