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
	<form method="post" action="{{url('emp_info')}}">
		{{csrf_field()}}
<input class="form-control" type="text" name="emp_ssn" placeholder="Enter employee ssn" >
	<input class="form-control" type="text" name="emp_tax" placeholder="enter tax amount">
	<input class="form-control" type="submit" name="submit" value="submit">
   </form>
</div>
</body>
</html>

