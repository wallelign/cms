@include("header")
<h1> new user page</h1>
<!--include one view in the other view-->
@include("inner")
{{10*10}}<br>
{{count($user)}}
@foreach($user as $eachuser)
<h1>{{$eachuser}}</h1>
@endforeach
@csrf
<script> 
var data=@json($user);// insert data in to js
// at index 0
document.write(data[0]);
//all value that inser in to js
document.write(data);

</script>
<!-- works on one value-->
@if($user=="wale")
<h1> hi {{$user}} </h1>
@elseif($user=="anli")
<h1> hi{{$user}}</h1
@else
<h1>unkown name</h1>
@endif
@for($i=0;$i<=10;$i++)
<h4>{{$i}}</h4>
@endfor
