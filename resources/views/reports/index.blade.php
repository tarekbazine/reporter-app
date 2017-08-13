@extends('layouts.master')


@section('content')
    <h2>All Reports</h2>
    <div class="list-group" id="report_list">
        @foreach($reports as $report)
            <a href="/reports/{{ $report->id }}" class="list-group-item">
                <h3 class="list-group-item-heading">{{ $report->object }}</h3>
                <span class="label label-default">{{ $report->date_time }}</span>
                <p class="list-group-item-text">{{ $report->summary }}</p>
                <h4>عدد النقاط المناقشة <span class="label label-success">{{ count($report->notes_count) }}</span> &emsp;&emsp;عدد
                    الحضور
                    <span class="label label-warning">{{ count($report->presences_count) }}</span>
                </h4>
            </a>
        @endforeach
    </div>

    {{--todo--}}
    <style type="text/css">

        div.list-group a:hover {
            background-color: #5bb8ff;
            margin-top: 15px;
            margin-bottom: 15px;
        }

        div.list-group a:hover h3, div.list-group a:hover p {
            color: #ffffff;
        }
    </style>

    <script>
        document.getElementById('btn-rep').className = "active";
        s = document.getElementById('search');
        s.type = 'text';
        s.focus();

        function mySearch(input) {
            // Declare variables
            var filter, list, object, date_time, summary, a, i;
            filter = input.value.toUpperCase();
            list = document.getElementById("report_list");
            object = list.querySelectorAll('a>h3');
            date_time = list.querySelectorAll('a>span');
            summary = list.querySelectorAll('a>p');


            // Loop through all list items, and hide those who don't match the search query
            for (i = 0; i < object.length; i++) {
                if ((object[i].innerHTML.toUpperCase().indexOf(filter) > -1) ||
                        (date_time[i].innerHTML.toUpperCase().indexOf(filter) > -1) ||
                        (summary[i].innerHTML.toUpperCase().indexOf(filter) > -1)
                ) {
                    object[i].parentElement.style.display = "";
                } else {
                    object[i].parentElement.style.display = "none";
                }
            }
        }

    </script>
@endsection