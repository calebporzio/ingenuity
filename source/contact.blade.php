@extends('_layouts.master')

<?php $page = 'contact'; ?>

@section('body')

<div class="section-4 pv4 ph8 bgg05">
    <div class="container lh1-8 ph8">
        <h3 class="ft7 tac tc1 ph8">
        	<strong>Please Note</strong>
            <p class="ft6">Because there is so much flexibility with amount of people, length of game, and location it is very hard to list costs. We would love to give you a personal quote after we know more about your needs and group size. </p>
        </h3>
    </div>
</div>

<section class="ft6 pt4 pb8">
	<div class="container lh1-8 ph8">

		<div id="wufoo-z1jjhs1y0g5y0ab">
		Fill out my <a href="https://ingenuityescaperooms.wufoo.com/forms/z1jjhs1y0g5y0ab">online form</a>.
		</div>
		<div id="wuf-adv" style="font-family:inherit;font-size: small;color:#a7a7a7;text-align:center;display:block;">HTML Forms powered by <a href="http://www.wufoo.com">Wufoo</a>.</div>
		<script type="text/javascript">var z1jjhs1y0g5y0ab;(function(d, t) {
		var s = d.createElement(t), options = {
		'userName':'ingenuityescaperooms',
		'formHash':'z1jjhs1y0g5y0ab',
		'autoResize':true,
		'height':'497',
		'async':true,
		'host':'wufoo.com',
		'header':'show',
		'ssl':true};
		s.src = ('https:' == d.location.protocol ? 'https://' : 'http://') + 'www.wufoo.com/scripts/embed/form.js';
		s.onload = s.onreadystatechange = function() {
		var rs = this.readyState; if (rs) if (rs != 'complete') if (rs != 'loaded') return;
		try { z1jjhs1y0g5y0ab = new WufooForm();z1jjhs1y0g5y0ab.initialize(options);z1jjhs1y0g5y0ab.display(); } catch (e) {}};
		var scr = d.getElementsByTagName(t)[0], par = scr.parentNode; par.insertBefore(s, scr);
		})(document, 'script');</script>

	</div>
</section>

@endsection