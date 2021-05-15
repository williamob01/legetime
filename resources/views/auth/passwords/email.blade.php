<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Sumi - Restaurant Food Order</title>
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
                                    <h4 class="text-center mb-4">Restablecer la contraseña</h4>
                                    {!! Form::open(['route' => 'password.email', 'method' => 'POST']) !!}
                                        <div class="form-group">
                                            <label><strong>Correo</strong></label>
                                            {{-- <input type="email" class="form-control" value="hola@sumi.com"> --}}
                                            {!! Form::email('email', null, ['class' => ['form-control', $errors->has('email') ? 'is-error' : ''], 'placeholder' => 'hola@sumi.com']) !!}
                                            {!! $errors->first('email', '<span class="invalid-feedback animated fadeInUp" style="display: block;">:message</span>') !!}
                                        </div>
                                        <div class="text-center">
                                            {{-- <button type="submit" class="btn btn-primary btn-block">Enviar</button> --}}
                                            {!! Form::submit('Enviar', ['class' => 'btn btn-primary btn-block']) !!}
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

    {{-- <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Restablecer la contraseña</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <form method="POST" action="{{ route('password.email') }}">
                            @csrf

                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">Correo</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">Enviar</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}

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
