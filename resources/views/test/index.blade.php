@extends('layouts.master')

@section('title')

    <title>Test Page</title>

    @endsection

@section('content')

    <h1>This is My Test Page</h1>

@if(count($Beatles) > 0)

@foreach($Beatles as $Beatle)

    {{ $Beatle }} <br>

    @endforeach

@else

    <h1> Sorry, nothing to show...</h1>

@endif

    <h2>Moment Date</h2>
    <!-- container for Moment.js output -->
    <div id="displayMoment"></div>

    <h2>JavaScript Date</h2>
    <!-- container for JavaScript Date output -->
    <div id="displayJsDate"></div>


    @endsection

@section('scripts')

    <script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.6/moment.min.js"></script>

    <script type="text/javascript">
        (function()
        {
            // instantiate a moment object
            var NowMoment = moment("2015-07-02 00:29:36");

            // instantiate a JavaScript Date object
            var NowDate = new Date();

            // display value of moment object in #displayMoment div
            var eDisplayMoment = document.getElementById('displayMoment');
            eDisplayMoment.innerHTML = NowMoment.date() + "/" + NowMoment.month() + "/" + NowMoment.year();

            // display value of Date object in #displayJsDate div
            var eDisplayDate = document.getElementById('displayJsDate');
            eDisplayDate.innerHTML = NowDate;
        })();
    </script>

    @endsection