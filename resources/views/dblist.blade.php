<h1> user list</h1>
<table border="1">
<tr>
    <td>id</td>
    <td>name</td>
    <td>email</td>
    <td>adress</td>
</tr>
@foreach( $members as $list)
<tr>
    <td>{{$list['id']}}</td>
    <td>{{$list['name']}}</td>
    <td>{{$list['email']}}</td>
     <td>{{$list['address']}}</td> 
   
</tr>
@endforeach
</table>


<!-- pagination -->
<!-- <span>
    {{$members->links()}}
</span>
<style>
    .w-5{
        display: none;
    }
</style> -->