@extends('layouts.app', ['page' => __('Usuarios'), 'pageSlug' => 'user'])

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="title">{{ __('Editar Usuario') }}</h5>
                </div>

                {!! Form::model($user, ['route' => ['users.update', $user->id], 'method' => 'PUT']) !!}
                <div class="card-body row">
                    @csrf

                    <div class="form-group{{ $errors->has('document') ? ' has-danger' : '' }} col-md-6">
                        <label>{{ __('Numero de Documento') }}</label>
                        {!! Form::text('document', null, ['class' => 'form-control', 'placeholder' => 'Numero de Documento']) !!}

                    </div>

                    <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }} col-md-6">
                        <label>{{ __('Nombre') }}</label>
                        {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Nombre']) !!}

                    </div>

                    <div class="form-group{{ $errors->has('address') ? ' has-danger' : '' }} col-md-6">
                        <label>{{ __('Direccion') }}</label>
                        {!! Form::text('address', null, ['class' => 'form-control', 'placeholder' => 'Direccion']) !!}

                    </div>

                    <div class="form-group{{ $errors->has('phone') ? ' has-danger' : '' }} col-md-6">
                        <label>{{ __('Telefono') }}</label>
                        {!! Form::text('phone', null, ['class' => 'form-control', 'placeholder' => 'Telefono']) !!}

                    </div>

                    <div class="form-group{{ $errors->has('email') ? ' has-danger' : '' }} col-md-6">
                        <label>{{ __('Correo') }}</label>
                        {!! Form::text('email', null, ['class' => 'form-control', 'placeholder' => 'Correo']) !!}

                    </div>

                    <div class="form-group{{ $errors->has('role') ? ' has-danger' : '' }} col-md-6">
                        <label>{{ __('Perfil de Usuario') }}</label>
                        <select class="form-control" name="rol" id="rol">
                            <option value="admin">Administrador</option>
                            <option value="op_manager">Dorector de Operaciones</option>
                            <option value="personal">Personal</option>
                            <option value="corporate">Corporativo</option>
                            <option value="student">Estudiante</option>
                        </select>
                    </div>

                </div>

                <div class="form-group{{ $errors->has('password') ? ' has-danger' : '' }} col-md-6">
                    <label>{{ __('Contraseña') }}</label>
                    <input type="password" name="password"
                        class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
                        placeholder="{{ __('Contraseña') }}">

                </div>


            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-fill btn-primary">{{ __('Guardar edicion') }}</button>
            </div>
            {!! Form::close() !!}
        </div>

    </div>
    </div>
@endsection
