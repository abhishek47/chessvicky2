@extends('layouts.app')

@section('css')

<link href='/css/fullcalendar.css' rel='stylesheet' />
<link href='/css/fullcalendar.print.css' rel='stylesheet' media='print' />
<link href='/css/bfc.css' rel='stylesheet' />

@endsection


@section('content')

<!-- start page-title -->
        <section class="page-title">
            <div class="container">
                <div class="title-box">
                    <h1>Chess Calendar</h1>
                    <ol class="breadcrumb">
                        <li><a href="/">Home</a></li>
                        <li>Calendar</li>
                    </ol>
                </div>
            </div> <!-- end container -->
        </section>
        <!-- end page-title -->
       
       <section class="featured section-padding">
        <div class="container">
            <div id='calendar'></div>
        </div>
       </section>



@endsection


@section('scripts')

<script src='/js/moment.min.js'></script>
<script src='/js/fullcalendar.js'></script>

    <style>

        
        #calendar {
            margin-bottom: 50px;

        }

    </style>

    <script>

        $(document).ready(function($) {
       


        // page is now ready, initialize the calendar...


        var zone = "05:30";
        $('#calendar').fullCalendar({
              defaultView: 'listMonth', // or 'agenda' or 'basic'
            header: {
                left: 'prev,next today',
                center: 'title',
                right: 'month,agendaDay,listMonth',
                
            },
            events: {!! json_encode($events) !!},

             eventClick: function(calEvent, jsEvent, view) {
                

                 window.location.href = "/calendar/" + calEvent.id ;

            }

            // put your options and callbacks here
        });

        

    });

    </script>


@endsection