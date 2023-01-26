<?php

namespace App\Http\Controllers;

use App\Models\Record;
use App\Http\Requests\StoreRecordRequest;
use App\Http\Requests\UpdateRecordRequest;
use App\Models\Data;

class RecordController extends Controller
{
    public function index()
    {
        $records = Data::all();
        return view('user.records', compact('records'));
    }

    public function create()
    {
        return view('user.create-record');
    }


    public function store(StoreRecordRequest $request)
    {
        $stats = $request->gf1." ".$request->ga1." ".$request->gf2." ".$request->ga2;
        $entry = Data::create([
            // 'goals_for_team_1' => $request->gf1,
            // 'goals_against_team_1' => $request->ga1,
            // 'goals_for_team_2' => $request->gf2,
            // 'goals_against_team_2' => $request->ga2,
            'stats' => $stats,
            't1_score' => $request->score1,
            't2_score' => $request->score2,
        ]);


        return redirect()->back()->with('message', "New record entered successfully");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Record  $record
     * @return \Illuminate\Http\Response
     */
    public function show(Record $record)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Record  $record
     * @return \Illuminate\Http\Response
     */
    public function edit(Record $record)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateRecordRequest  $request
     * @param  \App\Models\Record  $record
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRecordRequest $request, Record $record)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Record  $record
     * @return \Illuminate\Http\Response
     */
    public function destroy(Record $record)
    {
        //
    }
}
