@extends('app_flight')

@section('content')

<div class="">
<h1>Search Flight</h1>
	<div class="row">
		<div class="col s12">
			<div class="row">
				<div class="col s6">
				<select name="from" class="browser-default" id="from">
					@foreach($airport as $key)
						<option value="{{$key->airport_code}}">
							{{$key->airport_name}} ({{$key->airport_code}})
						</option>
					@endforeach
				</select></div>
				<div class="col s6">
				<select name="to" class="browser-default" id="to">					
				@foreach($airport as $key)
						<option value="{{$key->airport_code}}">
							{{$key->airport_name}} ({{$key->airport_code}})
						</option>
					@endforeach
				</select></div>
			</div>
		<div class="row">
			<div class="col s2">
				<select name="type" onchange="check_type()" id="type" class="">
					<option value="OW">OneWay</option>
					<option value="RT">Roundtrip</option>
				</select>
			</div>
			<div class="col s2">
				<input type="text" class="for_date" id="depart_date" name="depart_date">
			</div>
			<div class="col s2">
				<input type="text" class="for_date" id="return_date" name="return_date">
			</div>
			<div class="col s1">
				<select name="adult" id="adult" class="browser-default">
				@for($i=1;$i<6;$i++)
				<option value="{{$i}}"></option>
				@endfor	
				</select>
			</div>
			<div class="col s1">
				<select name="child" id="child" class="browser-default">
				@for($i=1;$i<6;$i++)
				<option value="{{$i}}"></option>
				@endfor	
				</select>
			</div>
			<div class="col s1">
				<select name="infant" id="infant" class="browser-default">
				@for($i=1;$i<6;$i++)
				<option value="{{$i}}"></option>
				@endfor	
				</select>
			</div>
			<div class="col s3">
				<span class="btn">Search</span>
			</div>
			</div>	
		</div>
	</div>
</div>


@endsection

@section('footer')

<script type="text/javascript">
	$(".for_date").datepicker();

	function check_type(){
		var tipe = $("#type").val();
		if(tipe=="OW"){
			$("#return_date").prop('disable',true);
		}else{
			$("#return_date").prop('disable',false);
		}
	}
	check_type();
</script>
@endsection