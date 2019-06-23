@extends('layouts.app')

@section('content')
    <form>
        <div class="container">
            <div class="form-group">
                <label>Заявитель: ФИО, степень родства:</label>
                <input type="email" class="form-control">
                <small id="emailHelp" class="form-text text-muted">(обязательно)</small>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control">
            </div>
            <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>

<main itemprop="mainContentOfPage">


    <div role="form" lang="ru-RU" dir="ltr">
        <form action="#" method="post" class="form-group" enctype="multipart/form-data" novalidate="novalidate">
            <div class="container">
                <div class="row">
                    <div class="col-6">
                        <div class="container">
                            <div class="row">
                                <div class="col full">
                                    <div class="field"><label>Заявитель: ФИО, степень родства (обязательно):
                                            <em>*</em></label><span><input type="text" name="declarant" value=""
                                                                           size="40" aria-required="true"
                                                                           aria-invalid="false"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="container">
                            <div class="row">
                                <div class="col full">
                                    <div class="field"><label>Контакты заявителя: телефон для связи (обязательно):
                                            <em>*</em>&nbsp;</label><span><input type="text" name="contacts"
                                                                                 value="" size="40" aria-required="true"
                                                                                 aria-invalid="false"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="container">
                            <div class="row">
                                <div class="col full">
                                    <div class="field"><label>ФИО пропавшего (обязательно):
                                            <em>*</em></label><span><input type="text" name="fio" value="" size="40"
                                                                           aria-required="true"
                                                                           aria-invalid="false"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="container">
                            <div class="row">
                                <div class="col full">
                                    <div class="field"><label>Пол пропавшего:</label><span><span><span><input
                                                            type="radio" name="sex" value="мужской"
                                                            checked="checked"><span>мужской</span></span><span><input
                                                            type="radio" name="sex"
                                                            value="женский"><span>женский</span></span></span></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="container">
                            <div class="row">
                                <div class="col full">
                                    <div class="field"><label>Дата рождения:</label><span><input type="date"
                                                                                                 name="birthday"
                                                                                                 value=""
                                                                                                 aria-invalid="false"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="container">
                            <div class="row">
                                <div class="col full">
                                    <div class="field"><label>Область пропажи:</label><span><select name="region"
                                                                                                    aria-invalid="false">
<option value="">Выберите регион</option>
<option value="Алтайский край">Алтайский край</option>
<option value="Амурская область">Амурская область</option>
<option value="Респ. Башкортостан">Респ. Башкортостан</option>
<option value="Брянская область">Брянская область</option>
<option value="Владимирская область">Владимирская область</option>
<option value="Волгоградская область">Волгоградская область</option>
<option value="Воронежская область">Воронежская область</option>
<option
        value="Ивановская область">Ивановская область</option>
<option value="Калужская область">Калужская область</option>
<option value="Карачаево-Черкесия">Карачаево-Черкесия</option>
<option value="Кемеровская область">Кемеровская область</option>
<option value="Кировская область">Кировская область</option>
<option value="Краснодарский край">Краснодарский край</option>
<option value="Курская область">Курская область</option>

<option value="Костромская область">Костромская область</option>
<option value="Ленинградская область">Ленинградская область</option>
<option value="Липецкая область">Липецкая область</option>
<option value="Респ. Марий Эл">Респ. Марий Эл</option>
<option value="Респ. Мордовия">Респ. Мордовия</option>
<option value="Мурманская область">Мурманская область</option>
<option value="Новосибирская область">Новосибирская область</option>
<option value="Нижегородская область">Нижегородская область</option>
<option value="Омская область">Омская область</option>
<option value="Пензенская область">Пензенская область</option>
<option value="Приморский край">Приморский край</option>
<option value="Псковская область">Псковская область</option>
<option value="Пермский край">Пермский край</option>
<option value="Ростовская область">Ростовская область</option>
<option value="Рязанская область">Рязанская область</option>
<option value="Самарская область">Самарская область</option>
<option value="Саратовская область">Саратовская область</option>
<option value="Свердловская область">Свердловская область</option>
<option value="Ставропольский край">Ставропольский край</option>
<option value="Северная Осетия">Северная Осетия</option>
<option value="Смоленская область">Смоленская область</option>
<option value="Респ. Татарстан">Респ. Татарстан</option>
<option value="Тверская область">Тверская область</option>
<option value="Томская область">Томская область</option>
<option value="Тульская область">Тульская область</option>
<option value="Тюменская область">Тюменская область</option>
<option value="Хабаровский край">Хабаровский край</option>
<option value="Ханты-Мансийский автономный округ">Ханты-Мансийский
автономный округ</option>
<option value="Чувашская Респ.">Чувашская Респ.</option>
<option value="Челябинская область">Челябинская область</option>
<option value="Ямало-Ненецкий автономный округ">Ямало-Ненецкий
автономный округ</option>
<option value="Ярославская область">Ярославская область</option>
<option value="Крым">Крым</option>
<option value="Беларусь">Беларусь</option>
<option value="Украина">Украина</option>
<option value="Другое">Другое</option>
<option value="Одесса">Одесса</option>
<option value="Архангельская область">Архангельская область</option>
<option value="Астраханская область">Астраханская область</option>
<option value="Белгородская область">Белгородская область</option>
<option value="Вологодская область">Вологодская область</option>
<option value="Еврейская область">Еврейская область</option>
<option value="Забайкальский край">Забайкальский край</option>
<option value="Иркутская область">Иркутская область</option>
<option value="Кабардино-Балкария">Кабардино-Балкария</option>
<option value="Калининградская область">Калининградская область
</option>
<option value="Камчатский край">Камчатский край</option>
<option value="Красноярский край">Красноярский край</option>
<option value="Курганская область">Курганская область</option>
<option value="Магаданская область">Магаданская область</option>
<option value="Москва и МО">Москва и МО</option>
<option value="Новгородская область">Новгородская область</option>
<option value="Оренбургская область">Оренбургская область</option>
<option value="Орловская область">Орловская область</option>
<option value="Респ. Адыгея">Респ.

Адыгея</option>
<option value="Респ. Бурятия">Респ. Бурятия</option>
<option value="Респ. Дагестан">Респ. Дагестан</option>
<option value="Респ. Ингушетия">Респ. Ингушетия</option>
<option
        value="Респ. Калмыкия">Респ. Калмыкия</option>
<option value="Респ. Карелия">Респ. Карелия</option>
<option value="Респ. Коми">Респ. Коми</option>
<option value="Респ. Саха Якутия">Респ. Саха Якутия</option>
<option value="Респ. Тыва">Респ. Тыва</option>
<option value="Респ. Хакасия">Респ. Хакасия</option>
<option value="Сахалинская область">Сахалинская область</option>
<option value="Тамбовская область">Тамбовская область</option>
<option value="Удмуртская Респ.">Удмуртская Респ.</option>
<option value="Ульяновская область">Ульяновская область</option>
<option value="Чеченская Респ.">Чеченская Респ.</option>
<option value="Чукотский округ">Чукотский округ</option>
<option value="Казахстан">Казахстан</option>
</select></span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="container">
                            <div class="row">
                                <div class="col full">
                                    <div class="field"><label>Номер телефона пропавшего: </label><span><input
                                                    type="text" name="own_phone" value="" size="40"
                                                    aria-invalid="false"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="container">
                            <div class="row">
                                <div class="col full">
                                    <div class="field"><label>Местность пропажи: </label><span><input type="text"
                                                                                                      name="place"
                                                                                                      value="" size="40"
                                                                                                      aria-invalid="false"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="container">
                            <div class="row">
                                <div class="col full">
                                    <div class="field"><label>Дата пропажи: </label><span><input type="date"
                                                                                                 name="missing_since_date"
                                                                                                 value=""
                                                                                                 aria-invalid="false"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="container">
                            <div class="row">
                                <div class="col full">
                                    <div class="field"><label>Время пропажи: </label><span><input type="text"
                                                                                                  name="missing_since_time"
                                                                                                  value="" size="40"
                                                                                                  aria-invalid="false"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="container">
                            <div class="row">
                                <div class="col full">
                                    <div class="field"><label>Тип местности поиска: </label>
                                        <input type="radio" name="location_type" value="город"
                                               checked="checked"><span>город</span><span>
<input type="radio" name="location_type" value="лес"><span>лес</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="container">
                            <div class="row">
                                <div class="col full">
                                    <div class="field"><label>Обстоятельства пропажи: </label><span><textarea
                                                    name="circs" cols="40" rows="5"
                                                    aria-invalid="false"></textarea></span>
                                        <p class="info-tip"></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="container">
                            <div class="row">
                                <div class="col full">
                                    <div class="field"><label>Состояние здоровья пропавшего: </label><span><input
                                                    type="text" name="health" value="" size="40"
                                                    aria-invalid="false"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="container">
                            <div class="row">
                                <div class="col full">
                                    <div class="field"><label>Во что одет пропавший:</label><span><input type="text"
                                                                                                         name="clothes"
                                                                                                         value=""
                                                                                                         size="40"
                                                                                                         aria-invalid="false"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="container">
                            <div class="row">

                                <div class="col full">
                                    <div class="field"><label>Особые приметы:</label><span><input type="text"
                                                                                                  name="signs" value=""
                                                                                                  size="40"
                                                                                                  aria-invalid="false"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="container">
                            <div class="row">
                                <div class="col full">
                                    <div><label>Фото пропавшего</label><span class=""><input type="file" name="foto"
                                                                                             size="40"
                                                                                             accept=".gif,.png,.jpg,.jpeg"
                                                                                             aria-invalid="false"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="container">
                            <div class="row">
                                <div class="col full">
                                    <div class="field"><label>Дополнительная информация: </label><span><textarea
                                                    name="info" cols="40" rows="5"
                                                    aria-invalid="false"></textarea></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col full">
                            <div class="field"><label></label><input type="submit" value="Отправить!"
                                                                     class="wpcf7-form-control wpcf7-submit"><span
                                        class="ajax-loader"></span>
                                <p class="info-tip"></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </form>
    </div>
</main>
@endsection