<!DOCTYPE html>
<html>
<head>
	<title></title>
<link rel="stylesheet" type="text/css" href="{{url('css/app.css')}}">
<style type="text/css">
	.my-container{
		width:500px;
		border:2px solid;
		padding:20px;
		margin-top: 200px;
	}
</style>
</head>
<body>
	<div-class="container my-container">
	<form method="post" action="{{url('emp_infoss')}}">
		{{csrf_field()}}
<input class="form-control" type="text" name="mng_name" placeholder="Enter manager name" >
	<input class="form-control" type="number" name="mng_age" placeholder="enter manager age">
	<input class="form-control" type="text" name="mng_add" placeholder="enter manager address">
	<input class="form-control" type="submit" name="submit" value="submit">
   </form>
</div>
</body>
</html>