@extends('layouts.app')

@section('content')


{{-- Particles Background --}}
<div class="particles" id="particles"></div>


{{-- Modal Section --}}
<section class="modal">
    <div class="wrap">
        <div class="text text-center">
            <h1>Coming Soon!</h1>
            <p>New content is around the corner -- stay tuned for exciting updates.</p>
        </div>
        <div class="countdown">
            <div class="timer">
                <div class="box" id="days"></div>
                <div class="type">Days</div>
            </div>
            <div class="timer">
                <div class="box" id="hours"></div>
                <div class="type">Hours</div>
            </div>
            <div class="timer">
                <div class="box" id="minutes"></div>
                <div class="type">Minutes</div>
            </div>
            <div class="timer">
                <div class="box" id="seconds"></div>
                <div class="type">Seconds</div>
            </div>
        </div>
        <div class="social">
            <a href="//codepen.io/Jesders88" target="_blank">@svg('codepen')</a>
            <a href="//www.linkedin.com/in/justin-esders-40818457/" target="_blank">@svg('linked-in')</a>
            <a href="//stackoverflow.com/story/jesders88" target="_blank">@svg('stack-overflow')</a>
        </div>
    </div>
    <div class="button-set">
        <a href="/assets/pdfs/resume.pdf" class="button" target="_blank">View Resume</a>
        <a href="mailto:justin.esders@gmail.com" class="button" target="_blank">Contact Me</a>
    </div>
</section>


@endsection


@push('script')
	<script src="//cdn.jsdelivr.net/npm/particles.js@2.0.0/particles.js"></script>

    <script>
    	var date = new Date("12/31/19")

		var countDownDate = date.getTime();

		// Update the count down every 1 second
		var x = setInterval(function() {

		    // Get todays date and time
		    var now = new Date().getTime();

		    // Find the distance between now and the count down date
		    var distance = countDownDate - now;

		    // Time calculations for days, hours, minutes and seconds
		    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
		    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
		    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
		    var seconds = Math.floor((distance % (1000 * 60)) / 1000);

		    // If the count down is finished
		    if (distance <= 0) {
		        this.clearInterval(x);
		        var days = hours = minutes = seconds = 0;
		    }

		    // Display the result in the element with id="demo"
		    document.getElementById("days").innerHTML = days;
		    document.getElementById("hours").innerHTML = hours;
		    document.getElementById("minutes").innerHTML = minutes;
		    document.getElementById("seconds").innerHTML = seconds;
		    document.getElementById("seconds-counter").dataset.seconds = seconds;

		}, 1000);
    </script>

    <script>
    	particlesJS("particles", {"particles":{"number":{"value":80,"density":{"enable":true,"value_area":800}},"color":{"value":"#ffffff"},"shape":{"type":"circle","stroke":{"width":0,"color":"#000000"},"polygon":{"nb_sides":3},"image":{"src":"img/github.svg","width":100,"height":100}},"opacity":{"value":0.5,"random":true,"anim":{"enable":false,"speed":1,"opacity_min":0.1,"sync":false}},"size":{"value":12,"random":true,"anim":{"enable":false,"speed":40,"size_min":0.1,"sync":false}},"line_linked":{"enable":false,"distance":150,"color":"#ffffff","opacity":0.4,"width":1},"move":{"enable":true,"speed":6,"direction":"none","random":false,"straight":false,"out_mode":"out","bounce":false,"attract":{"enable":false,"rotateX":600,"rotateY":1200}}},"interactivity":{"detect_on":"window","events":{"onhover":{"enable":false,"mode":"repulse"},"onclick":{"enable":false,"mode":"push"},"resize":true},"modes":{"grab":{"distance":400,"line_linked":{"opacity":1}},"bubble":{"distance":400,"size":40,"duration":2,"opacity":8,"speed":3},"repulse":{"distance":200,"duration":0.4},"push":{"particles_nb":4},"remove":{"particles_nb":2}}},"retina_detect":false});var count_particles, stats, update; stats = new Stats; stats.setMode(0); stats.domElement.style.position = 'absolute'; stats.domElement.style.left = '0px'; stats.domElement.style.top = '0px'; document.body.appendChild(stats.domElement); count_particles = document.querySelector('.js-count-particles'); update = function() { stats.begin(); stats.end(); if (window.pJSDom[0].pJS.particles && window.pJSDom[0].pJS.particles.array) { count_particles.innerText = window.pJSDom[0].pJS.particles.array.length; } requestAnimationFrame(update); }; requestAnimationFrame(update);
    </script>
@endpush

