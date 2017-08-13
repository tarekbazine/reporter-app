@extends('layouts.master')

@section('content')
    <link href="/css/bootstrap-toggle.min.css" rel="stylesheet">

    <h2 class="col-md-3 pull-right"> النقاط {{ $label }} <em class="fa {{ $ic }}" aria-hidden="true"></em></h2>

    <ul class="list-group col-md-10 col-md-offset-1" >




        @foreach($notes as $note)
            <form class="form-horizontal" action="/notes/{{ $note->id }}" method="post">
                {{ csrf_field() }}
                {{ method_field('PUT') }}
        <li class="list-group-item row" ><input name="status" onchange="this.form.submit()" type="checkbox" {{ $st }} data-toggle="toggle" data-on="Done"
                                                     data-off="Not Yet" data-onstyle="success" data-offstyle="warning"
                                                         data-width="90" data-height="30"><p class="pull-right" style="font-size: 1.7em">{{ $note->body }}</p></li>
            </form>
        @endforeach


    </ul>


@endsection