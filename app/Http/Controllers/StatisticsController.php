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

        $members_info = Member::select('name')
            ->withCount('reports')
            ->get();

        $notes_info = Note::select('status')
                ->get();

        $nb_notes_done=$nb_notes_not=0;
        foreach ($notes_info as $item){
            if ($item['status']==1)
                $nb_notes_done++;
            else
                $nb_notes_not++;
        }

        $data['labels'] = array();
        $data['data'] = array();
        foreach ($members_info as $m) {
            array_unshift($data['labels'], $m['name']);
            array_unshift($data['data'], $m['reports_count']);
        }

        return view('statistics',compact('nb_notes_done','nb_notes_not'))
            ->with('labels', json_encode($data['labels']))
            ->with('data', json_encode($data['data']));
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
            array_unshift($data['labels'], $dt->toFormattedDateString());
            array_unshift($data['data'], $m['presences_count']);
        }


        return view('dashboard', compact('nb_reports', 'nb_notes', 'nb_members'))
            ->with('labels', json_encode($data['labels']))
            ->with('data', json_encode($data['data']));

    }
}
