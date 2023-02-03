@extends('layouts.app')

@section('content')
<div class="row">
    <div class="container">
        <section class="sec">
            <nav>
                <ul>
                    <li class="nav"><a href="{{ route('record.create') }}"><strong>Add data</strong></a></li>
                    <li class="nav"><a href="{{ route('record.searchPage') }}"><strong>Search</strong></a></li>
                </ul>
            </nav>
        </section>
    </div>
</div>
    <section class="sec main">
        <div class="row border-rounded">
        <div class="col-md-12 box">
                @forelse ($records as $record)
                    {{-- {{ $vals = explode(" ",$record->stats) }} --}}
                    {{-- {{ $record->stats }} --}}
                    <div class="r">
                        <div class="stats stands">
                            {{-- {{ $val = explode(" ", strval($record->stats)) }} --}}
                            @foreach (explode(" ", $record->stats) as $recs)
                                <label class="lab">{{ $recs }}</label>
                            @endforeach
                        </div>
                        <div class="scores stands">
                            <div class="ph1">
                               <h4> {{ $record->t1_score }} </h4>
                            </div>
                            <div class="ph2">
                               <h4> {{ $record->t2_score }} </h4>
                            </div> 
                        </div>
                    </div>
                @empty
                    <h5>You dont have any data yet</h5>
                @endforelse
        </div>
        </div>
    </section>
@endsection
