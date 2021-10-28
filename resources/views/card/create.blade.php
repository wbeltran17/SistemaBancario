@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-10 col-lg-10">

                <form method="POST" action="{{ route('users.store') }}" autocomplete="off">
                    @csrf
                    <div class="form-group">
                        <label for="name">Nombre</label>
                        <input type="text" class="form-control" name="name" id="name" placeholder="Nombre de usuario">
                    </div>

                    <div class="form-group">
                        <label for="document">Numero de Documento</label>
                        <input type="number" class="form-control" name="document" id="document"
                            placeholder="Numero de Documento">
                    </div>

                    <div class="form-group">
                        <label for="address">Direccion</label>
                        <input type="text" class="form-control" name="address" id="address" placeholder="Direccion">
                    </div>

                    <div class="form-group">
                        <label for="mail">Correo Electonico</label>
                        <input type="email" class="form-control" name="email" id="email" placeholder="Correo Electonico">
                    </div>
                    <div class="form-group">
                        <label for="phone">Telefono</label>
                        <input type="number" class="form-control" name="phone" id="phone" placeholder="Telefono">
                    </div>
                    <div class="form-group">
                        <label for="rol">Perfil de Usuario</label>
                        <select class="form-control" name="rol" id="rol">
                            <option value="admin">Administrador</option>
                            <option value="op_manager">Dorector de Operaciones</option>
                            <option value="personal">Personal</option>
                            <option value="corporate">Corporativo</option>
                            <option value="student">Estudiante</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="password">Contraseña</label>
                        <input type="password" class="form-control" name="password" id="password"
                            placeholder="Contraseña">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-fill btn-primary">{{ __('Agregar Ususario') }}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
