@extends('layouts.app', ['page' => __('Usuarios'), 'pageSlug' => 'customer'])

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card card-chart">
                <div class="card-header ">
                    <div class="row">
                        <div class="col-sm-6 text-left">
                            <h2 class="card-title">Ususarios</h2>
                        </div>
                        <div class="col-sm-6">
                            <div class=" float-right">
                                <a class="btn btn-sm btn-primary btn-simple" href="{{ route('users.create') }}">
                                    <p>{{ __('AGREGAR') }}</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="col-lg-12 col-md-12">
                        <div class="card ">
                            <div class="card-body">
                                <div class="table-responsive" style="margin-left: auto;">
                                    <table class="table tablesorter  text-center" id="">
                                        <thead class=" text-primary">
                                            <tr class="row col-sm-12">
                                                <th class="col-sm-1">
                                                    id
                                                </th>
                                                <th class="col-sm-2">
                                                    Nombre
                                                </th>
                                                <th class="col-sm-2">
                                                    Identificacion
                                                </th>
                                                <th class="col-sm-2">
                                                    Direccion
                                                </th>
                                                <th class="col-sm-2">
                                                    Correo
                                                </th>
                                                <th class="col-sm-2">
                                                    Telefono
                                                </th>
                                                <th class="col-sm-1">
                                                    Acciones
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody class="text-center">
                                            @foreach ($userList as $user)
                                                <tr class="row col-sm-12 ">
                                                    <td class="col-sm-1">{{ $user->id }}</td>
                                                    <td class="col-sm-2">{{ $user->name }}</td>
                                                    <td class="col-sm-2">{{ $user->document }}</td>
                                                    <td class="col-sm-2">{{ $user->address }}</td>
                                                    <td class="col-sm-2">{{ $user->email }}</td>
                                                    <td class="col-sm-1">{{ $user->phone }}</td>
                                                    <td class="col-sm-2">
                                                        <div class="row">

                                                            <a href="{{ route('users.show', $user->id) }}"
                                                                class="btn btn-sm btn-primary m-1">
                                                                <span>
                                                                    <i class="fas fa-info"></i>
                                                                </span>
                                                            </a>
                                                            <a href="{{ route('users.edit', $user->id) }}"
                                                                class="btn btn-sm btn-secondary m-1">
                                                                <span>
                                                                    <i class="fas fa-edit"></i>
                                                                </span>
                                                            </a>
                                                            {!! Form::model($user, ['route' => ['users.destroy', $user->id], 'method' => 'DELETE']) !!}
                                                            {{ Form::button('<i class="fas fa-trash-alt m-1"></i>', ['type' => 'submit', 'class' => 'btn btn-sm btn-danger']) }}
                                                            {!! Form::close() !!}
                                                        </div>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@push('js')
    <script src="{{ asset('black') }}/js/plugins/chartjs.min.js"></script>
    <script>
        $(document).ready(function() {
            demo.initDashboardPageCharts();
        });
    </script>
@endpush
