@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-10 col-lg-10">

                <form method="POST" action="{{ route('users.store') }}" autocomplete="off">
                    @csrf
                    <div class="form-group">
                        <label for="rol">Tarjeta</label>
                        <select class="form-control" name="rol" id="rol">
                            <option value="admin">Administrador</option>
                            <option value="op_manager">Dorector de Operaciones</option>
                            <option value="personal">Personal</option>
                            <option value="corporate">Corporativo</option>
                            <option value="student">Estudiante</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-fill btn-primary">{{ __('Agregar Ususario') }}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
