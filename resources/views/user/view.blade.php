@extends('layouts.app', ['page' => __('Usuarios'), 'pageSlug' => 'user'])

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="title">{{ __($user->name) }}</h5>
                </div>

                <div class="card-body row">
                    @csrf

                    <div class="form-group{{ $errors->has('document') ? ' has-danger' : '' }} col-md-6">
                        <label>{{ __('Numero de Documento') }}</label>

                        <label class="form-control">{{ __($user->document) }}</label>

                    </div>

                    <div class="form-group{{ $errors->has('address') ? ' has-danger' : '' }} col-md-6">
                        <label>{{ __('Direccion') }}</label>
                        <label class="form-control">{{ __($user->address) }}</label>
                    </div>

                    <div class="form-group{{ $errors->has('phone') ? ' has-danger' : '' }} col-md-6">
                        <label>{{ __('Telefono') }}</label>
                        <label class="form-control">{{ __($user->phone) }}</label>
                    </div>

                    <div class="form-group{{ $errors->has('email') ? ' has-danger' : '' }} col-md-6">
                        <label>{{ __('Correo') }}</label>
                        <label class="form-control">{{ __($user->email) }}</label>

                    </div>



                </div>


            </div>
            <br>

            <div class="card">
                <div class="card-header">
                    <h5 class="title">{{ __('Tarjetas Asociadas') }}</h5>
                </div>

                <div class="card-body row">

                    <div class="table-responsive" style="margin-left: auto;">
                        <table class="table tablesorter  text-center" id="">
                            <thead class=" text-primary">
                                <tr class="row col-sm-12">
                                    <th class="col-sm-1">
                                        id
                                    </th>
                                    <th class="col-sm-3">
                                        Numero
                                    </th>
                                    <th class="col-sm-2">
                                        Franquisia
                                    </th>
                                    <th class="col-sm-2">
                                        Tipo
                                    </th>
                                    <th class="col-sm-2">
                                        Saldo
                                    </th>
                                    <th class="col-sm-2">
                                        Acciones
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                @foreach ($cardList as $card)
                                    <tr class="row col-sm-12 ">
                                        <td class="col-sm-1">{{ $card->card_id }}</td>
                                        <td class="col-sm-3">{{ $card->card_number }}</td>
                                        <td class="col-sm-2">{{ $card->card_type }}</td>
                                        <td class="col-sm-2">{{ $card->card_reference }}</td>
                                        <td class="col-sm-2">{{ $card->card_balance }}</td>
                                        <td class="col-sm-2">
                                            <div class="row">
                                                <a href="{{ route('cards.show', $card->card_id) }}"
                                                    class="btn btn-sm btn-primary">
                                                    <span>
                                                        <i class="fas fa-info"></i>
                                                    </span>
                                                </a>
                                                <a href="{{ route('cards.edit', $card->card_id) }}"
                                                    class="btn btn-sm btn-secondary">
                                                    <span>
                                                        <i class="fas fa-edit"></i>
                                                    </span>
                                                </a>
                                                {!! Form::model($card, ['route' => ['cards.destroy', $card->card_id], 'method' => 'DELETE']) !!}
                                                {{ Form::button('<i class="fas fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-sm btn-danger']) }}
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
@endsection
