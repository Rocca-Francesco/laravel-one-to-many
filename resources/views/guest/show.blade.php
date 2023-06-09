@extends('layouts.app')

@section('content')
    
<div class="container">
    <h2 class="fs-4 text-secondary my-4">
        {{ __('Projects') }}
    </h2>
    <div class="row justify-content-center">
        <div class="col g-4">
						<div class="card" style="width: 18rem;">
							<div class="card-body">
								<h5 class="card-title">{{$project->title}}</h5>
								<p class="card-text">Programming Lenguages used: {{$project->lenguages}} </p>
								<a href="{{$project->link}}" class="btn btn-primary">Go to project link</a>
							</div>
						</div>
				</div>
    </div>
</div>

@endsection