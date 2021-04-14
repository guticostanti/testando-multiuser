@extends('layouts.welcome-app')
@section('content')
 <!-- start:form login -->
    <section class="panel panel-default">
        @if ($message = $request->session()->get('success'))
            <div class="custom-alerts alert alert-success fade in">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
                {!! $message !!}
            </div>
            <?php $request->session()->forget('success');?>
        @endif

        @if ($message = $request->session()->get('error'))
            <div class="custom-alerts alert alert-danger fade in">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
                {!! $message !!}
            </div>
            <?php $request->session()->forget('error');?>
        @endif

        <header class="panel-heading text-center">
            <h3><b>Carteira Digital</b></h3>
        </header>

        <div class="panel-body ">
            <div class="row" style="text-align: center;">
                <a href="{{ route('pf.login') }}" class="btn btn-primary" style="width: 300px; height: 300px; line-height: 300px; font-size: 20px;">Logar como Pessoa Física</a>
                <a href="{{ route('login') }}" class="btn btn-primary" style="width: 300px; height: 300px; line-height: 300px; font-size: 20px;">Logar como Pessoa Jurídica</a>
            </div>
            <div class="row" style="text-align: center;">
                <a href="{{ route('pf.register') }}" class="btn btn-primary" style="width: 300px; height: 300px; line-height: 300px; font-size: 20px; margin-top: 10px;">Criar conta Pessoa Física</a>
                <a href="{{ route('register') }}" class="btn btn-primary" style="width: 300px; height: 300px; line-height: 300px; font-size: 20px; margin-top: 10px;">Criar conta Pessoa Jurídica</a>
            </div>
        </div>
    </section>
@endsection
