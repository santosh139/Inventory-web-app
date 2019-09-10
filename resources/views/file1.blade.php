<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>hellow world</h1>
	{{$a=1}}
@php ($a=0)
@if ($a==0)
<h2>my first if condition</h2>
@elseif ($a==2)
<h2>my first else if condition</h2>
@else
<h2>my first else condition</h2>
@endif
@php($a=5)
<ul>
	@for($i=0;$i<$a;$i++)
	<li>
		{{$i}}
	</li>
	@endfor
</ul>
@php ($arr=[1,2,5,3,1,4,5,5,3,3])
@
</body>
</html>