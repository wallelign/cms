<h1>user list</h1>
<table border="1">
<tr>
    <td>id</td>
    <td>name</td>
    <td>email</td>
    <td>adderee</td>
    <td>opperation</td>
</tr>
@foreach($members as $item)
<tr>
    <td>{{$item['id']}}</td>
    <td>{{$item['name']}}</td>
    <td>{{$item['email']}}</td>
    <td>{{$item['adderess']}}</td>
    <td> <a href={{"delete/" .$item['id']}}>Delete</a>
         <a href={{"edit/" .$item['id']}}>Edit</a></td>
</tr>
@endforeach
</table>
<a href="regform">add member </a>