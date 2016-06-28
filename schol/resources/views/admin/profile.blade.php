@extends('admin.master')
@section('title',$title)
@section('content')
<div class="page-header">
	<h1>
		Athletes	 
	</h1>
</div>
<div class="row">
	<div class="col-xs-12">
		<!-- PAGE CONTENT BEGINS -->								
		<div class="hr dotted"></div>

		<div>
			<div id="user-profile-1" class="user-profile row">
				<div class="col-xs-12 col-sm-3 center">
					<div>
						<span class="profile-picture">
							<img id="avatar" class="editable img-responsive" alt="Alex's Avatar" src="athletes/{{$athlete->photo}}" />
						</span>

						<div class="space-4"></div>

						<div class="width-80 label label-info label-xlg arrowed-in arrowed-in-right">
							<div class="inline position-relative">
								<a href="#" class="user-title-label dropdown-toggle" data-toggle="dropdown">
									<i class="ace-icon fa fa-circle light-green"></i>
									&nbsp;
									<span class="white">Athlete</span>
								</a>

								
							</div>
						</div>
					</div>

					<div class="space-6"></div>



					<div class="hr hr12 dotted"></div>


					<div class="hr hr16 dotted"></div>
				</div>

				<div class="col-xs-12 col-sm-9">
					

					<div class="space-12"></div>

					<div class="profile-user-info profile-user-info-striped">
						<div class="profile-info-row">
							<div class="profile-info-name"> Fullname </div>

							<div class="profile-info-value">
								{{$athlete->name}}
							</div>
						</div>

						<div class="profile-info-row">
							<div class="profile-info-name"> Athlete Number </div>

							<div class="profile-info-value">
								{{$athlete->ath_num}}
							</div>
						</div>

						<div class="profile-info-row">
							<div class="profile-info-name"> Date Of Birth </div>

							<div class="profile-info-value">
								<span class="editable" id="age">{{$athlete->dob}}</span>
							</div>
						</div>

						<div class="profile-info-row">
							<div class="profile-info-name"> School </div>

							<div class="profile-info-value">
								<span class="editable" id="signup">{{$athlete->school->name}}</span>
							</div>
						</div>
						<div class="profile-info-row">
							<div class="profile-info-name"> Event </div>

							<div class="profile-info-value">
								<span class="editable" id="login">{{$athlete->class}}</span>
							</div>
						</div>

						<div class="profile-info-row">
							<div class="profile-info-name"> Event </div>

							<div class="profile-info-value">
								<span class="editable" id="login">{{$athlete->event}}</span>
							</div>
						</div>
						<div class="profile-info-row">
							<div class="profile-info-name"> Height </div>

							<div class="profile-info-value">
								<span class="editable" id="login">{{$athlete->height}}</span>
							</div>
						</div>
						<div class="profile-info-row">
							<div class="profile-info-name"> Weight </div>

							<div class="profile-info-value">
								<span class="editable" id="login">{{$athlete->weight}}</span>
							</div>
						</div>
					</div>

					<div class="space-20"></div>

					<div class="hr hr2 hr-double"></div>

					<div class="space-6"></div>
				</div>
			</div>
		</div>					
		<!-- PAGE CONTENT ENDS -->
	</div><!-- /.col -->
</div>
@endsection