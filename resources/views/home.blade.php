@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-10 col-lg-10">

            <div class="card-columns">
                @can('product.list')
                    <div class="card text-center">
                        <div class="card-body">
                            <h5 class="card-title">Consultar Cupos</h5>
                            <p class="card-text">Consultar cupos para compras y avances de sus tarjetas</p>
                            <a class="btn btn-lg btn-danger" href="{{ route('users.index') }}">Consultar Cupos</a>
                        </div>
                    </div>
                @endcan
                @can('user.update')
                    <div class="card  text-center">
                        <div class="card-body">
                            <a class="btn btn-lg btn-danger" href="{{ route('users.index') }}">Administrar usuarios</a>
                            <p class="card-text"></p>
                        </div>
                    </div>
                @endcan
                @can('user.update')
                    <div class="card  text-center">
                        <div class="card-body">
                            <a class="btn btn-lg btn-success" href="{{ route('cards.index') }}">Administrar Tarjetas</a>
                            <p class="card-text"></p>
                        </div>
                    </div>
                @endcan
                @can('user.update')
                    <div class="card  text-center">
                        <div class="card-body">
                            <a class="btn btn-lg btn-success" href="{{ route('cards.index') }}">Administrar Tarjetas</a>
                            <p class="card-text"></p>
                        </div>
                    </div>
                @endcan
                @can('user.update')
                    <div class="card  text-center">
                        <div class="card-body">
                            <a class="btn btn-lg btn-success" href="{{ route('cards.index') }}">Administrar Tarjetas</a>
                            <p class="card-text"></p>
                        </div>
                    </div>
                @endcan
                @can('user.update')
                    <div class="card  text-center">
                        <div class="card-body">
                            <a class="btn btn-lg btn-success" href="{{ route('cards.index') }}">Administrar Tarjetas</a>
                            <p class="card-text"></p>
                        </div>
                    </div>
                @endcan
                @can('user.update')
                    <div class="card  text-center">
                        <div class="card-body">
                            <a class="btn btn-lg btn-success" href="{{ route('cards.index') }}">Administrar Tarjetas</a>
                            <p class="card-text"></p>
                        </div>
                    </div>
                @endcan
                @can('user.update')
                    <div class="card  text-center">
                        <div class="card-body">
                            <a class="btn btn-lg btn-success" href="{{ route('cards.index') }}">Administrar Tarjetas</a>
                            <p class="card-text"></p>
                        </div>
                    </div>
                @endcan

            </div>
        </div>
    </div>
@endsection
