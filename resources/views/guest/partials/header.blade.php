<header>
    {{-- banner blue --}}
    <div class="top-header"></div>

    {{-- links --}}
    <div class="container">
        <img src="{{ asset('images/dc-logo.png') }}" alt="">

        <ul>
            @php
                $linksMenu = [
                    [
                        'active'     =>  ['characters'],
                        'route'    =>  'characters',
                        'text'      =>  'CHARACTERS'
                    ],
                    [
                        'active'     =>  ['home', 'comic'],
                        'route'    =>  'home',
                        'text'      =>  'COMICS'
                    ],
                    [
                        'active'     =>  ['movies'],
                        'route'    =>  'movies',
                        'text'      =>  'MOVIES'
                    ],
                    [
                        'active'     =>  ['tv'],
                        'route'    =>  'tv',
                        'text'      =>  'TV'
                    ],
                    [
                        'active'     =>  ['games'],
                        'route'    =>  'games',
                        'text'      =>  'GAMES'
                    ],
                    [
                        'active'     =>  ['collectibles'],
                        'route'    =>  'collectibles',
                        'text'      =>  'COLLECTIBLES'
                    ],
                    [
                        'active'     =>  ['videos'],
                        'route'    =>  'videos',
                        'text'      =>  'VIDEOS'
                    ],
                    [
                        'active'     =>  ['fans'],
                        'route'    =>  'fans',
                        'text'      =>  'FANS'
                    ],
                    [
                        'active'     =>  ['news'],
                        'route'    =>  'news',
                        'text'      =>  'NEWS'
                    ],
                    [
                        'active'     =>  ['shop'],
                        'route'    =>  'shop',
                        'text'      =>  'SHOP'
                    ],

                ]
            @endphp

            @foreach ($linksMenu as $link)
            <li class="{{ in_array(Route::currentRouteName(), $link['active']) ? 'active' : ''}}">
                <a href="{{ Route($link['route']) }}">
                    {{ $link['text'] }}
                </a>
            </li>
            @endforeach

            <li class="input">
                <input type="text">
            </li>
        </ul>

    </div>

    {{-- cover --}}
    <div class="jumbotron">
        <img class="jumbotron-cover" src="{{ asset('images/jumbotron.jpg') }}" alt="">
    </div>
</header>
