@extends('templates.master')


@section('content')

	<div class="row">
		<div class="col-xs-12">
			<div class="app-wrapper">
				<div class="row animated fadeIn">
					<div class="col-xs-4">						
						<a href="/clients" class="card">
							<center><i class="fa fa-book fa-3x"></i></center>
							<center>Clients</center>
						</a>
					</div>
					<div class="col-xs-4">
						<a href="/projects" class="card">
							<center><i class="fa fa-hdd-o fa-3x"></i></center>
							<center>Projects</center>
						</a>
					</div>
					<div class="col-xs-4">
						<a href="/profile" class="card">
							<center><i class="fa fa-user fa-3x"></i></center>
							<center>Account</center>
						</a>
					</div>
				</div>
			</div>
		</div>	
	</div>

	<div class="app-wrapper latest-wrapper no-padding-left no-padding-right">
		<!-- Latest tasks -->
		<div class="col-xs-12 col-md-6 no-padding-left">
			<div class="panel panel-default">
			  <div class="panel-heading">
			    <h3 class="panel-title">Latest Tasks</h3>
			  </div>
			  <div class="panel-body">	
			  	@if ($latestTasks)
				  	@foreach ($latestTasks as $task)
				  		<p>
				  			<a href="/projects/{{ $task->project_id }}">{{ $task->name }}</a> 
				  			<span class="level level-medium pull-right">{{ $task->weight}}</span>
				  		</p>
				  	@endforeach			  			  	
				@else
				 	<div class="info">
				 		<p>You seem to have no tasks!</p>
				 	</div>
			  	@endif		  
			  </div>
			</div>			
		</div>

		<!-- Latest projects -->
		<div class="col-xs-12 col-md-6 no-padding-right">
			<div class="panel panel-default">
			  <div class="panel-heading">
			    <h3 class="panel-title">Latest Projects</h3>
			  </div>
			  <div class="panel-body">
			  	@if ($latestProjects)
				  	@foreach ($latestProjects as $project)
				  		<p><a href="/projects/{{ $project->id }}">{{ $project->name }}</a></p>
				  	@endforeach			  			  	
				@else
				 	<div class="info">
				 		<p>You seem to have no projects!</p>
				 	</div>
			  	@endif
			  </div>
			</div>			
		</div>
	</div>

@stop()