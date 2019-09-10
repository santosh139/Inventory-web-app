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
	<form method="post" action="{{url('emp_infosss')}}">
		{{csrf_field()}}
<input class="form-control" type="text" name="prd_name" placeholder="Enter product name" >
	<input class="form-control" type="number" name="prd_price" placeholder="enter product price">
	<input class="form-control" type="submit" name="submit" value="submit">
   </form>
</div>
</body>
</html>