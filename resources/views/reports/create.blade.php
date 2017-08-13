@extends('layouts.master')


@section('content')
        <div class="row">
            <ol class="breadcrumb">
                <li><a href="#">
                        <em class="fa fa-home"></em>
                    </a></li>
                <li class="active">New Report</li>
            </ol>
        </div><!--/.row-->

        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Add new Report</h1>
            </div>
        </div><!--/.row-->

        <div class="row">


            <div class="panel panel-default">

                <div class="panel-heading">
                    <ul class="pull-right panel-settings panel-button-tab-right">
                        <li class="dropdown"><a class="pull-right dropdown-toggle" data-toggle="dropdown" href="#">
                                <em class="fa fa-cogs"></em>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-right">
                                <li>
                                    <ul class="dropdown-settings">
                                        <li><a href="#">
                                                <em class="fa fa-cog"></em> Settings 1
                                            </a></li>
                                        <li class="divider"></li>
                                        <li><a href="#">
                                                <em class="fa fa-cog"></em> Settings 2
                                            </a></li>
                                        <li class="divider"></li>
                                        <li><a href="#">
                                                <em class="fa fa-cog"></em> Settings 3
                                            </a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>

                <div class="panel-body">
                    <form class="form-horizontal" action="/reports" method="post">

                        {{ csrf_field() }}

                        <fieldset>

                            <!-- dateTime input-->
                            <div class="form-group">
                                <label class="col-md-3 control-label">Date & Time</label>
                                <div class="col-md-9">

                                    <div class='input-group date' id='datetimepicker'>
                                        <input type='datetime' class="form-control" id='in_datetimepicker' name="datetime"/>
                                        <span class="input-group-addon">
                                        <span class="glyphicon glyphicon-calendar"></span>
                                    </span>
                                    </div>


                                </div>
                            </div>


                            <!-- presence input-->
                            <div class="form-group">
                                <label class="col-md-3 control-label">Presence</label>

                                <div class="col-md-offset-3">

                                    @foreach($members as $member)
                                        @include('reports.presence')
                                    @endforeach

                                <hr>
                                        </div>
                                <div class="col-md-offset-3 col-md-9">
                                    <input id="other_presence" name="other_presence" type="text"
                                           placeholder="Other person"
                                           class="form-control">
                                </div>

                            </div>


                            <!-- Name input-->
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="object">Object</label>
                                <div class="col-md-9">
                                    <input id="object" name="object" type="text" placeholder="Report object"
                                           class="form-control">
                                </div>
                            </div>

                            <!-- location input-->
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="location">Location</label>
                                <div class="col-md-9">
                                    <input id="location" name="location" type="text" placeholder="Meeting location"
                                           class="form-control">
                                </div>
                            </div>

                            <!-- summary body -->
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="summary">Report summary</label>
                                <div class="col-md-9">
                                <textarea class="form-control" id="summary" name="summary"
                                          placeholder="Please enter the summary here..." rows="5"></textarea>
                                </div>
                            </div>


                            <div class="form-group">


                                <div class="panel panel-default row" >

                                    <div class="panel-heading col-md-10 col-md-offset-2">
                                        <label>Report notes</label>

                                        <span class="pull-right clickable panel-toggle panel-button-tab-left"><em
                                                    class="fa fa-toggle-up"></em></span></div>

                                    <div class="col-md-9 col-md-offset-3">
                                        <div class="panel-body">
                                            <ul class="note-list">

                                                {{--notes-goes-here--}}

                                            </ul>
                                        </div>
                                        <div class="panel-footer">
                                            <div class="input-group">
                                                <input id="note-input" type="text" class="form-control input-md"
                                                       placeholder="Add new note"/>
                                                <span class="input-group-btn">
								<button type="button" class="btn btn-primary btn-md" id="btn-add-note">Add Note</button>
						                    </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                            </div><!--/.col-->


                            <hr>

                            <!-- Form actions -->
                            <div class="form-group">
                                <div class="col-md-offset-2 col-md-8 widget-right">
                                    <button type="submit" class="btn btn-lg btn-warning btn-block pull-right">Save</button>
                                </div>
                            </div>

                        </fieldset>
                    </form>
                </div>
            </div>

        </div><!--/.row-->


@endsection