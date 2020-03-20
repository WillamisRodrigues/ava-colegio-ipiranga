@extends('layouts.ava')
@section('titulo', 'AVA | Login')
@section('conteudo')
<section id="wrapper" class="login-register login-sidebar" style="background-image:url(../assets/images/background/login-register.jpg);">
        <div class="login-box card">
            <div class="card-body">
                <form class="form-horizontal form-material" method="POST" action="{{ route('login') }}">
                @csrf    
                <a href="javascript:void(0)" class="text-center db"><img src="../assets/images/logo-icon.png" alt="Home"><br><img src="../assets/images/logo-text.png" alt="Home"></a>
                    <div class="form-group m-t-40">
                        <div class="col-xs-12">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email">

@error('email')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
@enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-12">

    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Sua Senha">

    @error('password')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror

                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                            <div class="checkbox checkbox-primary pull-left p-t-0">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old("remember") ? 'checked' : '' }}>

<label class="form-check-label" for="remember">
    {{ __('Lembrar Me') }}
</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group text-center m-t-20">
                        <div class="col-xs-12">
                            <button class="btn btn-info btn-lg btn-block text-uppercase waves-effect waves-light" type="submit">Entrar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection