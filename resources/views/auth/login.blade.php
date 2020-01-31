<!DOCTYPE html>
<html dir="ltr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/favicon.png">
    <title>Moltobella Escuelas | Acceso</title>
    <link href="{{asset('dist/css/style.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('assets/css/colors.css')}}">
</head>

<body>
    <div class="main-wrapper">
        <div class="preloader">
            <div class="lds-ripple">
                <div class="lds-pos"></div>
                <div class="lds-pos"></div>
            </div>
        </div>
        <div class="auth-wrapper d-flex no-block justify-content-center align-items-center position-relative"
            style="background:url({{asset('assets/images/big/auth-bg.jpg')}}) no-repeat center center;">
            <div class="auth-box row">
                <div class="col-lg-7 col-md-5 modal-bg-img" style="background-image: url({{asset('assets/images/big/3.jpg')}});">
                </div>
                <div class="col-lg-5 col-md-7 bg-white">
                    <div class="p-3">
                        <div class="text-center">
                            <img src="{{asset('assets/images/big/icon.png')}}" alt="wrapkit">
                        </div>
                        <h2 class="mt-3 text-center text-uppercase">Acceso al panel</h2>
                        <form action="{{asset('auth/login')}}" class="mt-4" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        {!! Form::label('email','Correo electronico',['class'=>"text-dark"]) !!}
                                        {!! Form::email('email',old('email'),['class'=>'form-control','placeholder'=>'Ingresa tu correo electronico']) !!}
                                        {!! $errors->first('email','<span class="help-block color-danger">:message</span>') !!}
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        {!! Form::label('password','Contraseña',['class'=>"text-dark"]) !!}
                                        {!! Form::password('password',['class'=>'form-control','placeholder'=>'Ingresa tu contraseña']) !!}
                                          {!! $errors->first('password','<span class="help-block color-danger">:message</span>') !!}
                                    </div>
                                </div>
                                <div class="col-lg-12 text-center">
                                    <button type="submit" class="btn btn-block btn-dark">Acceder</button>
                                </div>
                                <div class="col-lg-12 text-center mt-5">
                                    ¿Olvidaste tu contraseña? <a href="{{asset('auth/forgot-password')}}" class="text-danger">Recuperala</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- Login box.scss -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- All Required js -->
    <!-- ============================================================== -->
    <script src="{{asset('assets/libs/jquery/dist/jquery.min.js')}}"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="{{asset('assets/libs/popper.js/dist/umd/popper.min.js')}}"></script>
    <script src="{{asset('assets/libs/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <!-- ============================================================== -->
    <!-- This page plugin js -->
    <!-- ============================================================== -->
    <script>
        $(".preloader ").fadeOut();
    </script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
     @include('sweet::alert')
</body>
</html>
