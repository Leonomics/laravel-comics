    <header class="container">
            <img class="dCLogo" src="{{asset('img/dc-logo.png')}}">

            <?php
                $links = [
                    [
                        'text' => 'CHARACTERS'
                    ],
                    [
                        'text' => 'COMICS'
                    ],
                    [
                        'text' => 'MOVIES'
                    ],
                    [
                        'text' => 'TV'
                    ],
                    [
                        'text' => 'GAMES'
                    ],
                    [
                        'text' => 'COLLECTIBLES'
                    ],
                    [
                        'text' => 'VIDEOS'
                    ],
                    [
                        'text' => 'FANS'
                    ],
                    [
                        'text' => 'NEWS'
                    ],
                    [
                        'text' => 'SHOP'
                    ],
                ]
            ?>

            <ul class="site_navigation_options">
                @foreach($links as $link)
                <li class="nav_item">
                    <a>
                        {{$link['text']}}
                    </a>
                </li>
                @endforeach
            </ul>
    </header>