@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    Hola: {{ Auth::user()->name }}<br>
                    Tus roles son: <br>
                    <?php
                    $rolesActuales = Auth::user()->rolesQueTienes(Auth::user()->id);
                    foreach($rolesActuales as $rolAct){
                        echo $rolAct['id'].' -> '.$rolAct['name'].'<br>';
                    }
                    ?>
                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
