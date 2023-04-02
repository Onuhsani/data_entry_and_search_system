@extends('layouts.app')

@section('content')
<div class="row">
    <div class="container">
        <section class="sec">
            <nav>
                <ul>
                    <li class="nav"><a href="{{ route('record.searchPage') }}"><strong>Search records</strong></a></li>
                    <li class="nav"><a href="{{ route('record.index') }}"><strong>Home</strong></a></li>
                    <li class="nav">Total records: &nbsp;<strong>{{ $count }}</strong></a></li>
                </ul>
            </nav>
        </section>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-lg-3">

        </div>
        <div class="col-lg-6 mt-3">
                <center><h1 class="text-primary"> Enter record on <span class="text-warning">Genius</span></h1></center>
                <div class="form">
                    <form action="{{ route('record.store') }}" class="form" method="post" enctype="multipart/form-data" file="true">
                        @csrf
                        {{-- <h5>Team one</h5> --}}
                        <div class="form">
                            <label for="gf1" id="gf1-label">Goals for</label>
                            <input type="text" class="form-control" id="gf1" name="gf1" placeholder="Enter the goals for team 1" value="{{ old('gf1') }}"/>
                        </div>
                        <div class="form">
                            <label for="ga1" id="ga1-label">Goals Against</label>
                            <input type="text" class="form-control" id="ga1" name="ga1" placeholder="Enter the against for team 1" value="{{ old('ga1') }}"/>
                        </div>
                        {{-- <h5 class="mt-3">Team two</h5> --}}
                        <div class="form">
                            <label for="gf2" id="gf2-label">Goals for</label>
                            <input type="text" class="form-control" id="gf2" name="gf2" placeholder="Enter the goals for team 2" value="{{ old('gf2') }}"/>
                        </div>
                        <div class="form">
                            <label for="ga2" id="ga2-label">Goals Against</label>
                            <input type="text" class="form-control" id="ga2" name="ga2" placeholder="Enter the against for team 2" value="{{ old('ga2') }}"/>
                        </div>
                        <div class="form">
                            <h5 class="mt-3 text-primary"><label for="score1" id="score1-label">Score1</label></h5>
                            <input type="text" class="form-control" id="score1" name="score1" placeholder="Enter team 1 score" value="{{ old('score1') }}"/>
                        </div>
                        <div class="form">
                            <h5 class="mt-3 text-primary"><label for="score2" id="score2-label">Score2</label></h5>
                            <input type="text" class="form-control" id="score2" name="score2" placeholder="Enter team 2 score" value="{{ old('score2') }}"/>
                        </div>
                        <div class="form mt-4">
                            <button class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
        </div>
        <div class="col-lg-3">

        </div>
    </div>
</div>
@endsection