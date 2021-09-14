<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel 8 Country State City Dropdown</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
    
	<div class="container">
	<h2>Laravel 8 Country State City Dropdown</h2>
	<form>
		<div class="form-group">

		<select id="classOne" class="form-control" >
			<option value="">Select Country</option>
			@foreach($classData as $list)
				<option value="{{$list->className}}">{{$list->className}}</option>
			@endforeach
		</select>
		
		<br/>
		<select id="subject" class="form-control" >
			<option value="">Select State</option>
		</select>
		<br/>
		
		<select id="section" class="form-control" >
			<option value="">Select City</option>
		</select>


		</div>
	  </form>
	</div>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" ></script>

		<script>
		jQuery(document).ready(function(){
			jQuery('#classOne').change(function(){
				let cid=jQuery(this).val();
				// alert(cid);
				jQuery('#section').html('<option value="">Select City</option>')
				jQuery.ajax({
					url:'/getSubject',
					type:'post',
					data:'cid='+cid+'&_token={{csrf_token()}}',
					success:function(result){
						alert('ts');
						jQuery('#subject').html(result);
					}
				});
			});
			
			// jQuery('#state').change(function(){
			// 	let sid=jQuery(this).val();
			// 	jQuery.ajax({
			// 		url:'/getCity',
			// 		type:'post',
			// 		data:'sid='+sid+'&_token={{csrf_token()}}',
			// 		success:function(result){
			// 			jQuery('#city').html(result)
			// 		}
			// 	});
			// });
			
		});
			
		</script>
  </body>
</html>
		
		