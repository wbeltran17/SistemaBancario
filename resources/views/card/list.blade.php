@extends('layouts.app', ['page' => __('Usuarios'), 'pageSlug' => 'customer'])

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card card-chart">
                <div class="card-header ">
                    <div class="row">
                        <div class="col-sm-6 text-left">
                            <h2 class="card-title">Tarjetas</h2>
                        </div>
                        <div class="col-sm-6">
                            <div class=" float-right">
                                <a class="btn btn-sm btn-primary btn-simple" href="{{ route('cards.create') }}">
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
