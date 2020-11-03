@extends('layouts.app')
@section('content')

        <div class="row">
            <div class="col-md-5"></div>
            <div class="col-md-4">
                <label>Correct: <small>{{Session::get('correctans') }}</small> </label>
                <label>Incorrect: <small>{{Session::get('wrongans') }}</small> </label>
                <label>Result: <small>{{Session::get('correctans') }}/{{Session::get('correctans') + Session::get('wrongans') }}</small></label>
                <br>
                <a href="{{ route('leadboard') }}"><button style="margin-left: 10%" class="btn btn-primary">Leadboard</button></a>
            </div>

            <div class="col-md-3"></div>
        </div>

        <script>
            var config = {
                routes: {
                    score_store: "{!! route('score.detail') !!}",
                }
            };
            $(document).ready(function () {
                var score = $('#score').text();
                console.log(score);
                $.ajax({
                        url: config.routes.score_store,
                        type: "get",
                    data:
                        {
                           score:score
                        },
                    success: function (data)
                    {
                        console.log(data);
                    }
                });
            });
        </script>
@endsection
