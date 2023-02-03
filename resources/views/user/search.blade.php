@extends('layouts.app')

@section('content')
<div class="row">
    <div class="container">
        <section class="sec">
            <nav>
                <ul>
                    <li class="nav"><a href="{{ route('record.create') }}"><strong>Add data</strong></a></li>
                    <li class="nav"><a href="{{ route('record.index') }}"><strong>Home</strong></a></li>
                </ul>
            </nav>
        </section>
    </div>
</div>
    <section class="sec main">
        <div class="row mt-5">
            <h1 class="text-center text-primary">Search <span class="text-warning"> Genius</span></h1>
        </div>
        <div class="row mt-2">
            <div class="col-md-3"></div>
            <div class="col-md-6 col-sm-12 ">
                <form class="form-control border-0 fm" action="{{ route('record.search') }}" method="post" enctype="multipart/form-data" form="true">
                    @csrf
                    <input type="text" class="form-control st" name="search" id="search" placeholder="Search genius" value="{{ old('search') }}" required/>
                    <button class="btn btn-primary st" id="butt">
                         Search
                    </button>
                </form>
            </div>
            <div class="col-md-3"></div>
        </div>
    </section>

    {{-- <div class="row border-rounded mt-5">
        <div class="col-md-12 box">
            @if(isset($posts))
                @forelse ($posts as $post)
                    <p>{{ $post->goals_for_team_1 }}</p>
                @empty
                    <h4>Genius couldn't find any result for your search</h4>
                @endforelse
            @endif
        </div>
    </div> --}}
@endsection
