@extends('_layouts.master')

<?php $page = 'home'; ?>

@section('body')

<header class="hero bgg05">
    <div class="container tac pv8">
        <div class="pv8">
            <h1 class="ft12 mb4 tcw">An On-site Team Building Experience</h1>
            <a href="/games" class="ft9 tcw pv1 ph2 br4 bg1">Learn More</a>
        </div>
    </div>
</header>

<div class="section-1 bgg05">
    <div class="container tac pt8 pb8">
        <h2 class="ft10 tc1 mb1">
        	<strong>You provide the space</strong>
        	<span>...we'll handle the rest.</span>
        </h2>
    </div>
</div>

<div class="section-1 bg1">
    <div class="container pb8 pt8 df jcsa">

        <div class="tac tcw df fdc jcsb">
            <p class="ft7 mb2">Setup</p>
            <p style="font-size: 70px;"><i class="fa fa-wrench"></i></p>
        </div>

        <div class="tac tcw df fdc jcsb">
            <p class="ft7 mb2">Pre-game<br>Briefing</p>
            <p style="font-size: 70px;"><i class="fa fa-bullhorn"></i></p>
        </div>

        <div class="tac tcw df fdc jcsb">
            <p class="ft7 mb2">Escape Room<br>Experience</p>
            <p style="font-size: 70px;"><i class="fa fa-lock"></i></p>
        </div>

        <div class="tac tcw df fdc jcsb">
            <p class="ft7 mb2">Post-game<br>Briefing</p>
            <p style="font-size: 70px;"><i class="fa fa-comments-o"></i></p>
        </div>

        <div class="tac tcw df fdc jcsb">
            <p class="ft7 mb2">Clean-up</p>
            <p style="font-size: 70px;"><i class="fa fa-cab"></i></p>
        </div>

    </div>
</div>

<div class="section-2 pv6 bgg05">
    <div class="container tac df fdr jcsa">

        <div>
            <h3 class="ft9 tc1 mb4 fw5">Birthday Memories</h3>
            <div class="br5 brdr1 bcg30 ofh mb3">
            	<img src="/img/game1.jpg" alt="">
            </div>
            <a href="/games" class="ft9 tcw pv1 ph2 br4 bg1">View Game</a>
        </div>

        <div>
            <h3 class="ft9 tc1 mb4 fw5">Until Proven Innocent</h3>
            <div class="br5 brdr1 bcg30 ofh mb3">
            	<img src="/img/game2.jpg" alt="">
            </div>
            <a href="/games" class="ft9 tcw pv1 ph2 br4 bg1">View Game</a>
        </div>

    </div>
</div>

<div class="section-3 pv6">
    <div class="container df jcc">

        <div class="ft8 tcg50 lh1-7 pv2 ph2 brdr3--left bcg50" style="font-style: italic">
            This event was a solid launch for our team employee engagement efforts for the year - I would highly recommend for any other department exploring options for their teams. Lots of team bonding, communication break through, and positive excitement from working together to "escape" the room.<br>
            <div class="mt1"><strong class="">- Jared Hojnacki, M&T Bank Vice President</strong></div>
        </div>

    </div>
</div>

<div class="section-4 pv8 bgg05">
    <div class="container">
        <h3 class="ft9 tac tc1">
            What are you waiting for? Let's get to team building!
            <a href="/contact" class="ft9 tcw pv1 ph2 br4 bg1 ml3">Get Quote</a>
        </h3>
    </div>
</div>

@endsection
