@extends('layouts.app')

@section('content')
    <div class="row p-2 text-dark">
        <div class="col-3 mr-auto">
            <img src='{{ url("jpg/07") }}.jpg' class="border-danger img-thumbnail rounded"
                 alt="...">
        </div>
        <div class="col-5">
            <div class="card text-center">
                <div class="card-header">
                    <h2 class="btn mb-0">
                        Жан
                    </h2>
                </div>
                <div class="card-body row">
                    <button type="button" class="btn btn-primary m-2 float-left col-4">
                        Возраст <span class="badge badge-light">8 лет</span>
                    </button>
                    <p class="m-2 col-7">Мой брат ушёл готовиться к экзаменам в 3 класс. На входе его никто не видел. Видимо он пропал по
                        дороге.</p>
                </div>
                <div class="card-footer">
                    <p class="card-text">
                        <small class="text-muted">25 дней назад</small>
                    </p>
                </div>
            </div>
        </div>
        <div class="col-4">
            <div class="chats" id="ap">
                <chat :user="{{ auth()->user() }}"></chat>
            </div>
        </div>
    </div>
@endsection