<!DOCTYPE html>
<html>
<head>
	<title></title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> 
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 

</head>
<body>
<div class="container">
    <table class="table table-hover">
        <tr>

		<th>profile</th> 
		<th>pic	name</th>	
		<th>email</th>	
		<th>Emp_id</th>	        </tr>
        @foreach($third as $thirds)
        <tr>
            <td>
                <img src="{{url('../storage/app/images/'.$thirds->file_upload)}}" width="150px" height="150px" style="border-radius:50%">
            </td>
            <td>
                {{$thirds->emp_name}}
            </td>
        
         
            <td>
                {{$thirds->emp_email}}
            </td>        
         
            <td>
                {{$thirds->emp_id}}
            </td>
        </tr>
        @endforeach
    </table> 

</body>
</html>