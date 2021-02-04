@extends('layouts.custom')
@section('title','Projects')
@section('content')

<div class="projects-container">
    <h2>Projects</h1>
        <div class="list-projects">
        @if($project->count() > 0)
        @foreach($project as $projects)

<div class="projectac">
    <h5>{{$projects->name}}</h5>

    <ul>
        <li> <span>Type:</span>{{$projects->type}}</li>
        <li>
            <span>Year</span> {{$projects->year}}

        </li>
        <li>

            <span>what's here:</span>{{$projects->features}}
        </li>
        <li>
            <span>Language:</span>{{$projects->language}}
        </li>
        @if ($projects->name == 'Understanding God')
        <a href="{{$projects->links}}"> Visit</a>
        @else
        <a href="{{$projects->links}}"> Download</a>
        @endif
    </ul>

</div>
@endforeach
    @else
    <div style="padding:20px;text-align:center">
    <h1>No Record</h1></div>
    @endif

        </div>

</div>



@endsection