<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>{{$tutor->nombre_consejero}}</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('css/general.css') }}">
</head>
<body>

</body>
</html>



{{ $tutor }}
<br />

@for($i=1; $i<5; $i++)
	@if($i%2==0)
		{{ "Es par:".$i }}
		<br />
	@endif
@endfor

<hr />



<h1>{{utf8_decode($tutor->nombre_consejero)}}</h1>

@foreach($tutor->estudiante as $estudiante)
	<h3>{{utf8_decode($estudiante->nombre)}}</h3>
@endforeach
