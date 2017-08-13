<?php

namespace App\Http\Controllers;

use App\Member;
use App\Report;
use Illuminate\Http\Request;

class ReportsController extends Controller {
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {

        $reports = Report::select('id', 'object', 'date_time', 'summary')
            ->withCount('presences','notes')
            ->orderBy('date_time', 'desc')
            ->get();

        return view('reports.index', compact('reports'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {

        $members = Member::all();

        return view('reports.create', compact('members'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {

        $report = Report::create([
            'object' => request("object"),
            'summary' => request("summary"),
            'date_time' => request("datetime"),
            'other_presence' => request("other_presence"),
            'location' => request("location"),
            'user_id' => 1
        ]);


        if ($request->notes)
            $report->addNotes($request->notes);

        if ($request->member_ids)
            $report->addPresences($request->member_ids);

        session()->flash('msg', 'You Report has been SAVED #see_you');

        return redirect()->home();
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show(Report $report) {

        return view('reports.show',compact('report'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        //
    }
}
