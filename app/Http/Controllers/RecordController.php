<?php

namespace App\Http\Controllers;

use App\Models\Record;
use App\Http\Requests\StoreRecordRequest;
use App\Http\Requests\UpdateRecordRequest;
use App\Models\Data;
use App\Models\StudyData;

class RecordController extends Controller
{
    public function index()
    {
        $records = Data::all();
        $count = count($records);
        return view('user.records', compact('records', 'count'));
    }

    public function create()
    {
        $count = count(Data::all());
        return view('user.create-record', compact('count'));
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

    public function transferRecords()
    {
        $points = Data::all();
        ini_set('max_execution_time', 300);

        foreach($points as $point){
            $stands = explode(" ", $point->stats);
            StudyData::create([
                'gft1' => $stands[0],
                'gat1' => $stands[1],
                'gft2' => $stands[2],
                'gat2' => $stands[3],
                'score1' => $point->t1_score,
                'score2' => $point->t2_score,
            ]);

        }

        return redirect()->back()->with('success', 'All records transffered successfully');
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
