@extends('school.master')
@section('extracss')
<link rel="stylesheet" href="assets/css/bootstrap-duallistbox.min.css" />
<link rel="stylesheet" href="assets/css/bootstrap-multiselect.min.css" />
<link rel="stylesheet" href="assets/css/select2.min.css" />
<link rel="stylesheet" href="assets/css/datepicker.min.css" />
@endsection
@section('title',$title)
@section('content')
<div class="page-header">
	<h1>
		Games Master's Registration
	</h1>
</div>
<div class ='row'>	
	@if(Session::has('flash_message'))
	   <div class="alert alert-success fade in">
	        <button class="close" data-dismiss="alert">
	            ×
	        </button>
	        <i class="fa-fw fa fa-check"></i>
	        <strong>{{ Session::get('flash_message') }}</strong>
	    </div>
	   @endif
	@if($errors->any())
	<ul class="alert alert-danger unstyled alert-short  col-xs-6">
		@foreach($errors->all() as $error)
			<li>
				{{ $error }}
			</li>	
		@endforeach
		</ul>
	@endif									
</div>
	{!!Form::open(['action'=>'post','url'=>'school/newmaster','class'=>'form-horizontal','files' => true])!!}
		<div class="form-group">
			<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Name </label>
			<div class="col-sm-9">
				{!! Form::text('name',null,['class'=>'col-xs-10 col-sm-5','id'=>'form-field-1']) !!}
				<span class="help-inline col-xs-12 col-sm-7">
					<span class="middle">E.g Ajani Babatunde</span>
				</span>
			</div>
		</div>
		<div class="form-group">
			<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Phone Number </label>
			<div class="col-sm-9">
				{!! Form::text('phone',null,['class'=>'col-xs-10 col-sm-5','id'=>'form-field-1']) !!}
				<span class="help-inline col-xs-12 col-sm-7">
					<span class="middle">e.g 08098190928</span>
				</span>
			</div>
		</div>
		<div class="form-group">
			<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Email Address</label>
			<div class="col-sm-9">
				{!! Form::text('email',null,['class'=>'col-xs-10 col-sm-5','id'=>'form-field-1']) !!}
				<span class="help-inline col-xs-12 col-sm-7">
					<span class="middle">e.g kazeem@heritage.com</span>
				</span>
			</div>
		</div>
		<div class="form-group">
			<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Event(s)</label>
			<div class="col-sm-9">
				<div class="col-xs-12 col-sm-12">
					<select multiple="" id="state" name="event[]" class="select2" data-placeholder="Click to Choose...">
						@foreach($events as $event)
						<option value="{{$event->name}}">{{$event->name}}</option>
						@endforeach
					</select>							
				</div>

			</div>
		</div>
		<div class="form-group">
			<label class="col-sm-3 control-label no-padding-right" for="form-field-1"></label>
			<div class="col-sm-4">
				<input type="file" name='image' id="id-input-file-2" />
			</div>
		</div>
		<div class="clearfix form-actions">
			<div class="col-md-offset-3 col-md-9">
				<button class="btn btn-info" type="submit">
					<i class="ace-icon fa fa-check bigger-110"></i>
					Submit
				</button>
				&nbsp; &nbsp; &nbsp;
				<button class="btn" type="reset">
					<i class="ace-icon fa fa-undo bigger-110"></i>
					Reset
				</button>
			</div>
		</div>
		<div class="hr hr-24"></div>
	{!!Form::close()!!}
@endsection
@section('extrajs')
<script src="assets/js/jquery-ui.custom.min.js"></script>
<script src="assets/js/jquery.ui.touch-punch.min.js"></script>
<script src="assets/js/chosen.jquery.min.js"></script>
<script src="assets/js/fuelux.spinner.min.js"></script>
<script src="assets/js/bootstrap-datepicker.min.js"></script>
<script src="assets/js/bootstrap-timepicker.min.js"></script>
<script src="assets/js/moment.min.js"></script>
<script src="assets/js/daterangepicker.min.js"></script>
<script src="assets/js/bootstrap-datetimepicker.min.js"></script>
<script src="assets/js/bootstrap-colorpicker.min.js"></script>
<script src="assets/js/jquery.knob.min.js"></script>
<script src="assets/js/jquery.autosize.min.js"></script>
<script src="assets/js/jquery.inputlimiter.1.3.1.min.js"></script>
<script src="assets/js/jquery.maskedinput.min.js"></script>
<script src="assets/js/bootstrap-tag.min.js"></script>
<script src="assets/js/bootstrap-multiselect.min.js"></script>
<script src="assets/js/select2.min.js"></script>
<script type="text/javascript">
$('#id-input-file-1 , #id-input-file-2').ace_file_input({
					no_file:'No File ...',
					btn_choose:'Choose',
					btn_change:'Change',
					droppable:false,
					onchange:null,
					thumbnail:false //| true | large
					//whitelist:'gif|png|jpg|jpeg'
					//blacklist:'exe|php'
					//onchange:''
					//
});
$('.multiselect').multiselect({
 enableFiltering: true,
 buttonClass: 'btn btn-white btn-primary',
 templates: {
	button: '<button type="button" class="multiselect dropdown-toggle" data-toggle="dropdown"></button>',
	ul: '<ul class="multiselect-container dropdown-menu"></ul>',
	filter: '<li class="multiselect-item filter"><div class="input-group"><span class="input-group-addon"><i class="fa fa-search"></i></span><input class="form-control multiselect-search" type="text"></div></li>',
	filterClearBtn: '<span class="input-group-btn"><button class="btn btn-default btn-white btn-grey multiselect-clear-filter" type="button"><i class="fa fa-times-circle red2"></i></button></span>',
	li: '<li><a href="javascript:void(0);"><label></label></a></li>',
	divider: '<li class="multiselect-item divider"></li>',
	liGroup: '<li class="multiselect-item group"><label class="multiselect-group"></label></li>'
 }
});
$(document).one('ajaxloadstart.page', function(e) {
	$('[class*=select2]').remove();
	$('select[name="duallistbox_demo1[]"]').bootstrapDualListbox('destroy');
	$('.rating').raty('destroy');
	$('.multiselect').multiselect('destroy');
});

//select2
$('.select2').css('width','200px').select2({allowClear:true})
$('#select2-multiple-style .btn').on('click', function(e){
	var target = $(this).find('input[type=radio]');
	var which = parseInt(target.val());
	if(which == 2) $('.select2').addClass('tag-input-style');
	 else $('.select2').removeClass('tag-input-style');
});
//datepicker plugin
				//link
				$('.date-picker').datepicker({
					autoclose: true,
					todayHighlight: true
				})
				//show datepicker when clicking on the icon
				.next().on(ace.click_event, function(){
					$(this).prev().focus();
				});
			
				//or change it into a date range picker
				$('.input-daterange').datepicker({autoclose:true});
			
			
				//to translate the daterange picker, please copy the "examples/daterange-fr.js" contents here before initialization
				$('input[name=date-range-picker]').daterangepicker({
					'applyClass' : 'btn-sm btn-success',
					'cancelClass' : 'btn-sm btn-default',
					locale: {
						applyLabel: 'Apply',
						cancelLabel: 'Cancel',
					}
				})
				.prev().on(ace.click_event, function(){
					$(this).next().focus();
				});
			
			
				$('#timepicker1').timepicker({
					minuteStep: 1,
					showSeconds: true,
					showMeridian: false
				}).next().on(ace.click_event, function(){
					$(this).prev().focus();
				});
				
				$('#date-timepicker1').datetimepicker().next().on(ace.click_event, function(){
					$(this).prev().focus();
				});

</script>
@endsection