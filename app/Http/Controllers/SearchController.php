<?php

namespace App\Http\Controllers;

use App\Models\Data;
use App\Models\Record;
use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;

class SearchController extends Controller
{

    public function searchPage(){
        return view('user.search');
    }


    public function search(Request $request){
        $search = strval($request->input('search'));

        $searcharray = explode(" ", $search);

        // dd($searcharray);
        $records = Data::query();
        $len = count($searcharray);
        $records = $records->where('stats', 'LIKE', isset($searcharray[0]) ? "%{$searcharray[0]}%" : null)->
                            where('stats', 'LIKE', isset($searcharray[1]) ? "%{$searcharray[1]}%" : null)->
                            where('stats', 'LIKE', isset($searcharray[2]) ? "%{$searcharray[2]}%" : null)->
                            where('stats', 'LIKE', isset($searcharray[3]) ? "%{$searcharray[3]}%" : null)->get();

        return view('user.search-result', compact('records'));
    }


    public function table(Request $request)
    {
        if ($request->ajax()) {
            $data = Record::select('id','name','email')->get();
            return DataTables::of($data)->addIndexColumn()
                ->addColumn('action', function($row){
                    $btn = '<a href="javascript:void(0)" class="btn btn-primary btn-sm">View</a>';
                    return $btn;
                })
                ->rawColumns(['action'])
                ->make(true);
                
        }

        return view('users');
    }
}
