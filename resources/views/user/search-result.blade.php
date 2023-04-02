@extends('layouts.app')

@section('content')
<div class="row">
    <div class="container">
        <section class="sec">
            <nav>
                <ul>
                    <li class="nav"><a href="{{ route('record.create') }}"><strong>Add data</strong></a></li>
                    <li class="nav"><a href="{{ route('record.searchPage') }}"><strong>Search</strong></a></li>
                    <li class="nav"><a href="{{ route('record.index') }}"><strong>Home</strong></a></li>
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
                                   <label style="font-size:100%;"> {{ $record->t1_score }} </label>
                                </div>
                                <div class="ph2">
                                   <label style="font-size:100%;"> {{ $record->t2_score }} </label>
                                </div> 
                            </div>
                        </div>
                    @empty
                        <h5>Data not found</h5>
                    @endforelse
            </div>
            </div>
    </section>
@endsection
