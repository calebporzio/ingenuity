<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Meta Information -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta property="og:image" content="http://ingenuityescaperooms.com/img/logo_small.png">
    <meta property="og:title" content="Ingenuity Escape Rooms">
    <meta property="og:description" content="An on-site team building experience.">
    <meta name="description" content="An on-site team building experience.">
    <meta property="og:site_name" content="Ingenuity Escape Rooms">
    <meta property="og:url" content="http://ingenuityescaperooms.com/">
    <meta property="og:type" content="website">

    <title>Ingenuity Escape Rooms | An On-site Team Building Experience</title>

	<link rel="icon" type="image/png" href="/img/favicon-32x32.png" sizes="32x32">
	<link rel="icon" type="image/png" href="/img/favicon-16x16.png" sizes="16x16">

    <!-- Fonts -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600" rel="stylesheet" type="text/css">
    <link href="/css/main.css" rel="stylesheet">
</head>
<body>
    <nav class="bg1">
        <div class="container df jcsb">

            <div class="logo pv2">
                <a href="/"><img src="/img/logo.png" alt=""></a>
            </div>
            
            <nav class="ft6 df jcsa">
                <li class="df aic @if($page == 'games') active @endif" style="list-style: none"><a class="tcw ph2" href="/games">Games</a></li>
                <li class="df aic @if($page == 'faq') active @endif" style="list-style: none"><a class="tcw ph2" href="/faq">FAQ</a></li>
                <li class="df aic @if($page == 'about') active @endif" style="list-style: none"><a class="tcw ph2" href="/about">About</a></li>
                <li class="df aic @if($page == 'contact') active @endif" style="list-style: none"><a class="tcw ph2" href="/contact">Get Quote</a></li>
            </nav>
        </div>
    </nav>

	@yield('body')

    <footer class="pv6 bg1">
        <div class="container">

            <div class="frame">
                <div class="blk">
                    <p class="tcw ft5">
                        &copy; 2016 | Design by Caleb Porzio.
                    </p>
                </div>

                <div class="blk">
                    <div class="df jcfe">
                        <li class="df aic" style="list-style: none"><a class="tcw ft5 ph2" href="/games">Games</a></li>
                        <li class="df aic" style="list-style: none"><a class="tcw ft5 ph2" href="/faq">FAQ</a></li>
                        <li class="df aic" style="list-style: none"><a class="tcw ft5 ph2" href="/about">About</a></li>
                        <li class="df aic" style="list-style: none"><a class="tcw ft5 ph2" href="/contact">Get Quote</a></li>
                    </div>
                </div>
            </div>

        </div>
    </footer>
</body>
</html>
