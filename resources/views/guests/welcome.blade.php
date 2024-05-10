@extends('layouts.app')

@section('content')
    <div class="container py-5">
        <div class="row">
            @foreach ($trains as $train)
                <div class="col-12 py-3">
                    <div class="card">
                        <div class="d-flex flex-column">
                            <div class="card rounded-0 p-4">
                                <div class="d-flex flex-row align-items-center justify-content-between">
                                    <h2 class="card-title">{{$train->company}}</h5>
                                    <div>
                                        <h4>Codice Biglietto</h4>
                                        <p class="card-text fw-bolder">{{$train->train_code}}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card rounded-0">
                                <div class="d-flex flex-row align-items-center">
                                    <div class="col-3">
                                        <div class="card m-2 p-3">
                                            <h4 class="card-title">Partenza</h4>
                                            <h5 class="card-text">{{$train->departure_station}}</h5>
                                            <p class="card-text fw-bold">{{$train->departure_time}}</p>
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="card m-2 p-3">
                                            <h4 class="card-title">Arrivo</h4>
                                            <h5 class="card-text">{{$train->arrival_station}}</h5>
                                            <p class="card-text fw-bold">{{$train->arrival_time}}</p>
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="card m-2 p-3">
                                            <h4 class="card-title">Carrozza</h4>
                                            <h5 class="card-text">{{$train->number_of_carriages}}</h5>
                                            <p class="card-text">#</p>
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="card m-2 p-3">
                                            <h4 class="card-title">In arrivo</h4>
                                            <h5 class="card-text">{{$train->on_time}}</h5>
                                            <p class="card-text">#</p>
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="card m-2 p-3">
                                            <h4 class="card-title">Stato</h4>
                                            <h5 class="card-text">{{$train->cancelled}}</h5>
                                            <p class="card-text">#</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
