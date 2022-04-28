@extends('guest.templates.base')

@section('title', 'Home')

@section('content')
    <main>
        <div class="main-grid">
            <div class="container">
                <div class="content-tag">CURRENT SERIES</div>
                @foreach ($comics as $comic)
                <div class="comic-card">
                    <a href="/comic/{{  $comic['title'] }}">
                        <img src="{{ $comic['thumb'] }}" alt="">
                        <h2>{{ $comic['title'] }}</h2>
                    </a>
                </div>

                @endforeach
            </div>
        </div>


        <div class="main-banner">
            <div class="container">
                <div class="banner">
                    <img src="images/buy-comics-digital-comics.png" :alt="">
                    <a href="#">
                        <div>text</div>
                    </a>
                </div>
                <div class="banner">
                    <img src="images/buy-comics-merchandise.png" :alt="">
                    <a href="#">
                        <div>text</div>
                    </a>
                </div>
                <div class="banner">
                    <img src="images/buy-comics-shop-locator.png" :alt="">
                    <a href="#">
                        <div>text</div>
                    </a>
                </div>
                <div class="banner">
                    <img src="images/buy-comics-subscriptions.png" :alt="">
                    <a href="#">
                        <div>text</div>
                    </a>
                </div>
                <div class="banner">
                    <img src="images/buy-dc-power-visa.svg" :alt="">
                    <a href="#">
                        <div>text</div>
                    </a>
                </div>
            </div>
        </div>
    </main>
@endsection
