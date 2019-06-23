@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card text-dark">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    <form action="/myarea" method="get">
                        <div class="form-group">
                            <label for="city">Выбрать город</label>
                            <select type="text" class="form-control" placeholder="Город" id="city">
                                <option id="krasnodar">Краснодар</option>
                                <option id="moskva">Москва</option>
                                <option id="piter">Санкт-Петербург</option>
                                <option id="nnovgor">Нижний Новгород</option>
                                <option id="chelyabinsk">Челябинск</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="region">Район проживания</label>
                            <select class="form-control" placeholder="Район" onselect="submit.this.form()" id="region">
                                <option id="center">Центральный</option>
                                <option id="pashkovskiy">Пашковский</option>
                                <option id="festival">Фестивальный</option>
                                <option id="jubelee">Юбилейный</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Посмотреть пропавших</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
