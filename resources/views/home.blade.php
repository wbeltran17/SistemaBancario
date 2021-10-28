@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-10 col-lg-10">

            <div class="card-columns">
                @can('product.list')
                    <div class="card text-center">
                        <div class="card-body">
                            <h5 class="card-title">Informe de las tarjetas bloqueadas</h5>
                            <a class="btn btn-lg btn-danger" href="{{ route('cards.index', 'op=unactive') }}">GENERAR</a>
                        </div>
                    </div>
                    <div class="card text-center">
                        <div class="card-body">
                            <h5 class="card-title">Informe de las tarjetas activadas</h5>
                            <a class="btn btn-lg btn-danger" href="{{ route('cards.index', 'op=active') }}">GENERAR</a>
                        </div>
                    </div>
                    <div class="card text-center">
                        <div class="card-body">
                            <h5 class="card-title">Informe de las tarjetas en mora</h5>
                            <form method="POST" action="{{ route('users.index') }}">
                                <label for="day_counter">Seleccione los días de mora</label>
                                <select class="form-control" name="day_counter" id="day_counter">
                                    <Option value="30"> 30 días</Option>
                                    <Option value="60"> 60 días</Option>
                                    <Option value="90"> 90 días</Option>
                                </select>
                            </form>
                            <button class="btn btn-lg btn-danger m-1">GENERAR</button>
                        </div>
                    </div>

                    <div class="card text-center">
                        <div class="card-body">
                            <h5 class="card-title">Generar paz y salvo</h5>
                            <a class="btn btn-lg btn-danger" href="{{ route('users.index') }}">GENERAR</a>
                        </div>
                    </div>
                @endcan
                <div class="card text-center">
                    <div class="card-body">
                        <h5 class="card-title">Asignar cuentas</h5>
                        <a class="btn btn-lg btn-danger" href="{{ route('users.index') }}">GENERAR</a>
                    </div>
                </div>
                <div class="card text-center">
                    <div class="card-body">
                        <h5 class="card-title">Cerrar cuentas</h5>
                        <a class="btn btn-lg btn-danger" href="{{ route('users.index') }}">GENERAR</a>
                    </div>
                </div>
                @can('user.update')
                    <div class="card  text-center">
                        <div class="card-body">
                            <a class="btn btn-lg btn-danger" href="{{ route('users.index') }}">Administrar usuarios</a>
                            <p class="card-text"></p>
                        </div>
                    </div>
                @endcan

            </div>
        </div>
    </div>
@endsection
