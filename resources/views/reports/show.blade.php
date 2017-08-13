@extends('layouts.master')


@section('content')


    <div class="row" style="display: flex;
                            align-items: center;">
        <h4 class="col-md-7 text-center"><span class="label label-default">
                <?php
                $t=\Carbon\Carbon::parse($report->date_time);
                \Carbon\Carbon::setLocale('ar');
                echo $t->diffForHumans(); ?></span> {{ $report->date_time }}
        </h4>
        <h2 class="col-md-4 pull-right">{{ $report->object }}</h2>
    </div>
    <hr>
    <h3></h3>
    <div class="row" style="padding: 8px;
                            border: solid;
                            margin: 0 10px 0 10px;">
        <div class="col-md-10">
            <ul>
                @foreach($report->presences as $m)
                    <li class="col-md-4">
                        {{ $m->name }}
                        {{ $m->family_name }}
                    </li>
                @endforeach
            </ul>
        </div>
        <h3 class="col-md-2"> الحضور </h3>
    </div>

    <h4 class="text-center" style="margin: 20px">
        {{ $report->summary }}
    </h4>

    <hr>
    <div class="row" >
        <ul class="col-md-10" style="direction: rtl;  padding-right:40px">
            @foreach($report->notes as $note)
                <li style="direction: rtl;">
                    {{ $note->body }}
                </li>
            @endforeach
        </ul>
        <h3 class="col-md-2"> النقاط المناقشة </h3>
    </div>

@endsection