@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-10 col-lg-10">

            <div class="card-columns">
                @hasanyrole('admin|op_manager')
                    <div class="card text-center">
                        <div class="card-body">
                            <h5 class="card-title">Informe de las tarjetas bloqueadas</h5>
                            <a class="btn btn-lg btn-danger m-2" href="{{ route('cards.index', 'op=unactive') }}">GENERAR</a>
                        </div>
                    </div>
                    <div class="card text-center">
                        <div class="card-body">
                            <h5 class="card-title">Informe de las tarjetas activadas</h5>
                            <a class="btn btn-lg btn-danger m-2" href="{{ route('cards.index', 'op=active') }}">GENERAR</a>
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
                            <a class="btn btn-lg btn-danger m-2" href="{{ route('users.index') }}">GENERAR</a>
                        </div>
                    </div>
                    <div class="card text-center">
                        <div class="card-body">
                            <h5 class="card-title">Asignar cuentas</h5>
                            <a class="btn btn-lg btn-danger m-2" href="{{ route('users.index') }}">GENERAR</a>
                        </div>
                    </div>
                    <div class="card text-center">
                        <div class="card-body">
                            <h5 class="card-title">Cerrar cuentas</h5>
                            <a class="btn btn-lg btn-danger m-2" href="{{ route('users.index') }}">GENERAR</a>
                        </div>
                    </div>
                    <div class="card  text-center">
                        <div class="card-body">
                            <a class="btn btn-lg btn-danger m-2" href="{{ route('users.index') }}">Administrar usuarios</a>
                            <p class="card-text"></p>
                        </div>
                    </div>
                @else
                    <div class="card  text-center">
                        <div class="card-header">Consultar Cupos</div>
                        <div class="card-body">
                            <a class="btn btn-lg btn-danger m-2" href="{{ route('cards.index', 'op=user') }}">Compras</a>

                            <a class="btn btn-lg btn-danger m-2" href="{{ route('cards.index', 'op=user') }}">Avances</a>
                            <p class="card-text"></p>
                        </div>
                    </div>

                    <div class="card  text-center">
                        <div class="card-header">Consultar Pagos</div>
                        <div class="card-body">
                            <a class="btn btn-lg btn-danger m-2" href="{{ route('users.edit', Auth::user()->id) }}">Minimo</a>
                            <a class="btn btn-lg btn-danger m-2" href="{{ route('users.edit', Auth::user()->id) }}">Total</a>
                            <p class="card-text"></p>
                        </div>
                    </div>
                    <div class="card  text-center">
                        <div class="card-header">Acciones de Tarjeta</div>
                        <div class="card-body">
                            <a class="btn btn-lg btn-danger m-2"
                                href="{{ route('users.edit', Auth::user()->id) }}">Activar</a>
                            <a class="btn btn-lg btn-danger m-2"
                                href="{{ route('users.edit', Auth::user()->id) }}">Bloquear</a>
                            <a class="btn btn-lg btn-danger m-2" href="{{ route('users.edit', Auth::user()->id) }}">Activar
                                Pagos</a>
                            <a class="btn btn-lg btn-danger m-2"
                                href="{{ route('users.edit', Auth::user()->id) }}">Cancelar</a>
                            <p class="card-text"></p>
                        </div>
                    </div>
                    <div class="card text-center">
                        <div class="card-body">
                            <h5 class="card-title">Generar extracto</h5>
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
                    <div class="card  text-center">
                        <div class="card-body">
                            <a class="btn btn-lg btn-danger m-2" href="{{ route('users.edit', Auth::user()->id) }}">Inscribir
                                Pagos</a>
                            <p class="card-text"></p>
                        </div>
                    </div>
                    <div class="card  text-center">
                        <div class="card-body">
                            <a class="btn btn-lg btn-danger m-2" href="{{ route('users.edit', Auth::user()->id) }}">Consultar
                                Puntos</a>
                            <p class="card-text"></p>
                        </div>
                    </div>
                    <div class="card  text-center">
                        <div class="card-body">
                            <a class="btn btn-lg btn-danger m-2" href="{{ route('users.edit', Auth::user()->id) }}">Modificar
                                Usuario</a>
                            <p class="card-text"></p>
                        </div>
                    </div>

                @endhasanyrole
            </div>
        </div>
    </div>
@endsection
