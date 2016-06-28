@extends('school.master')

@section('title',$title)
@section('content')
<div class="row">
	<div class="space-6"></div>

	<div class="col-sm-7 infobox-container">
		<div class="infobox infobox-green">
			<div class="infobox-icon">
				<i class="ace-icon fa fa-users"></i>
			</div>

			<div class="infobox-data">
				<span class="infobox-data-number">{{$athletes}}</span>
				<div class="infobox-content">Athletes</div>
			</div>

		</div>

		<div class="infobox infobox-blue">
			<div class="infobox-icon">
				<i class="ace-icon fa fa-user"></i>
			</div>

			<div class="infobox-data">
				<span class="infobox-data-number">{{$masters}}</span>
				<div class="infobox-content">Games Masters</div>
			</div>
		</div>

		<div class="space-6"></div>
	</div>

	<div class="vspace-12-sm"></div>
</div>
<div class="row">
	<div class="col-sm-6">
		<div class="widget-box">
			<div class="widget-header">
				<h4 class="smaller">Athletes</h4>
			</div>

			<div class="widget-body">
				<div class="widget-main">
					<div class="clearfix">
					@foreach($athletes_c as $athlete)
					<div class="itemdiv memberdiv">
						<div class="user">
							<img alt="Bob Doe's avatar" src="athletes/{{$athlete->photo}}" />
						</div>

						<div class="body">
							<div class="name">
								<a href="#">{{$athlete->name}}</a>
							</div>

							<div>
								<span class="label label-warning label-sm">Athlete</span>
							</div>
						</div>
					</div>
					@endforeach
					</div
				</div>
			</div>
		</div>
	</div>
</div>
@endsection