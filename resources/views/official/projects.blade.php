@extends('layouts.custom')
@section('title','Projects')
@section('content')

<div class="projects-container">
    <h2>My Projects</h2>
    <div class="list-projects">
        @if($project->count() > 0)
        @foreach($project as $projects)
<div class="wrapp-project">
    <div class="name-project">{{$projects->name}}</div>
        <div class="span-wrapper">
         <span>Type:</span>{{$projects->type}}
        </div>
        <div class="span-wrapper">
            <span>Year</span> {{$projects->year}}
        </div>

 <div class="span-wrapper">
            <span>what's here:</span>{{$projects->features}}
 </div>
 <div class="span-wrapper">
              <span>Language:</span>{{$projects->language}}
 </div>
        
        @if ($projects->visitable == 1)
        <a href="{{$projects->links}}"> Visit</a>
        @else
        <a href="{{$projects->links}}"> Download</a>
        @endif
 
</div>
@endforeach
    @else
    <div style="padding:20px;text-align:center">
    <h1>No Record</h1></div>
    @endif

        </div>

</div>
</div>



@endsection