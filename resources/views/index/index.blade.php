@extends('master')

@section('title')

@endsection

@section('content')
    <section class="channel">
        <div class="row">
            <div class="column">
                <h3><sup></sup>Описание канала</h3>
            </div>
        </div>
        <div class="row">
            <div class="column col-md-5">
                <p>Цель создания судоходного канала — соединение бассейнов двух водоёмов в случае отсутствия такового, сокращение пути между двумя водоёмами, решение проблемы транспортной доступности по водным путям пунктов назначения.</p>
                <p>Цель создания судоходного канала — соединение бассейнов двух водоёмов в случае отсутствия такового, сокращение пути между двумя водоёмами, решение проблемы транспортной доступности по водным путям пунктов назначения.</p>
                <button class="button">Узнать больше</button>
            </div>
            <div class="column col-md-7">
                <img src="img/2.jpg" />
            </div>
        </div>
    </section>

    <section class="features">
        <div class="row">
            <div class="column">
                <div class="features__header row">
                    <div class="small-12 medium-10 column">
                        <h3><sup></sup>Почему наш канал</h3>
                    </div>
                    <div class="medium-text-right column">
                        <img src="img/rss.png" />
                    </div>
                </div>
            </div>
        </div>
        <div class="features__content">
            <div class="row">
                <div class="small-12 medium-4 column">
                    <img src="img/1.png" />
                    <div>
                        Cоединение бассейнов двух водоёмов в случае отсутствия такового
                    </div>
                </div>
                <div class="small-12 medium-4 column">
                    <img src="img/3.png" />
                    <div>
                        Cоединение бассейнов двух водоёмов в случае отсутствия такового
                    </div>
                </div>
                <div class="small-12 medium-4 column">
                    <img src="img/2.png" />
                    <div>
                        Cоединение бассейнов двух водоёмов в случае отсутствия такового
                    </div>
                </div>
            </div>
            <div class="features__button row">
                <div class="text-center column">
                    <button class="button">Получить консультацию</button>
                </div>
            </div>
        </div>
    </section>

    @if(!empty($calculatorData))
        <section class="calculator">
            <div class="row">
                <div class="small-12 medium-8 column">
                    <div class="row">
                        <div class="column medium-6">
                            <h3><sup></sup>Калькулятор</h3>
                        </div>
                        <div class="calculator__providers column medium-6">
                            <div class="row">
                                <div class="beeline column">
                                    <span></span>
                                </div>
                                <div class="megafon column">
                                    <span></span>
                                </div>
                                <div class="mts column">
                                    <span></span>
                                </div>
                            </div>
                        </div>
                    </div>

                    @foreach($calculatorData['targets'] as $row)
                        <div class="calculator__param row">
                            <div class="column medium-6">
                                {{ $row['name'] }}
                                @if(!empty($row['description']))
                                    <div class="calculator__param-comment">
                                        {{ $row['description'] }}
                                    </div>
                                @endif
                            </div>
                            <div class="column medium-6">
                                <div class="calculator__param-input row">
                                    @foreach($row['providers'] as $value)
                                        <div class="column">
                                            <input name="" value="{{ $value }}" type="checkbox">
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    @endforeach

                    <div class="calculator__param row">
                        <div class="column medium-6">
                            Текст сообщения
                        </div>
                        <div class="column medium-6">
                            <div class="calculator__param-input row">
                                <textarea></textarea>
                                <div class="calculator__message-length">
                                    115 символов, 2 сегмента
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="calculator__param row">
                        <div class="column medium-6">
                            Имя отправителя
                        </div>
                        <div class="column medium-6">
                            <div class="calculator__param-input row">
                                <input name="" value="" placeholder="Имя..." type="text">
                            </div>
                        </div>
                    </div>
                    <div class="calculator__param row">
                        <div class="column medium-6">
                            Стоимость
                        </div>
                        <div class="column medium-6">
                            <div class="row">
                                <div class="column">
                                    0 руб
                                </div>
                                <div class="column">
                                    0 руб
                                </div>
                                <div class="column">
                                    0 руб
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="calculator__result align-middle row">
                        <div class="column medium-6">
                            <button class="button">Заказать</button>
                        </div>
                        <div class="column medium-6">
                            <div class="row">
                                <div class="medium-4 column">
                                    Итого
                                </div>
                                <div class="medium-8 column">
                                    0 руб
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="small-12 medium-4 column">
                    <img src="img/phone.jpg" />
                </div>
            </div>
        </section>
    @endif

    <section class="questions">
        <div class="questions__header row">
            <img src="img/plus.png" />
            <div class="column">
                <h3><sup></sup>Ответы на вопросы</h3>
            </div>
        </div>
        <div class="questions__content">
            <div class="row">
                @for($i=0;$i<4;$i++)
                    <div class="small-12 medium-3 column">
                        <div>
                            <p class="questions__content--bold">ВОПРОС</p>
                            <p>Cоединение бассейнов двух водоёмов в случае отсутствия такового</p>
                            <p class="questions__content--bold">ОТВЕТ</p>
                            Cоединение бассейнов двух водоёмов в случае отсутствия такового
                        </div>
                    </div>
                @endfor
            </div>
        </div>
        <div class="features__button row">
            <div class="text-center column">
                <button class="button">Остались вопросы</button>
            </div>
        </div>
    </section>

    <section class="cases">
        <div class="row">
            <div class="column">
                <h3><sup></sup>Кейсы</h3>
            </div>
        </div>
        <div class="">
            <div class="row">
                <div class="small-12 medium-8 column">
                    <div class="row">
                        <div class="small-3 medium-3 column">
                            <img src="img/bmwLogo.png" />
                        </div>
                        <div class="small-9 medium-9 cases__content column">
                            @for($i=0;$i<3;$i++)
                                <div class="row">
                                    <div class="medium-6 column">
                                        <div class="cases__title">Cоединение бассейнов</div>
                                        Cоединение бассейнов двух водоёмов в случае отсутствия такового
                                    </div>
                                    <div class="medium-6 column">
                                        <div class="cases__title">ARPU</div>
                                        от 1000 руб/месяц
                                    </div>
                                </div>
                            @endfor
                            <div class="row">
                                <div class="column">
                                    <div class="input-group">
                                        <input class="input-group-field" type="text" placeholder="Ваш номер">
                                        <div class="input-group-button">
                                            <input type="submit" class="button" value="Перезвоните мне">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="small-12 medium-4 column">
                    <img src="img/phone.jpg" />
                </div>
            </div>
        </div>
    </section>
@endsection