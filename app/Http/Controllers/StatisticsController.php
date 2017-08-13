<?php

namespace App\Http\Controllers;


use App\Member;
use App\Note;
use App\Report;
use Carbon\Carbon;

class StatisticsController extends Controller {
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        //
    }


    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show() {
        $nb_reports = Report::all()->count();
        $nb_notes = Note::all()->count();

        //todo
        $nb_members = Member::all()->count();


        //data for chart
        $data['labels'] = array();
        $data['data'] = array();
        $res = Report::select('date_time')
            ->orderBy('date_time', 'desc')
            ->withCount('presences')
            ->limit(11)->get();

        foreach ($res as $m) {
            $dt = Carbon::parse($m['date_time']);
            array_unshift($data['labels'],$dt->toFormattedDateString());
            array_unshift($data['data'],$m['presences_count']);
        }


        return view('dashboard', compact('nb_reports', 'nb_notes', 'nb_members'))
            ->with('labels',json_encode($data['labels']))
            ->with('data',json_encode($data['data']));

    }
}
