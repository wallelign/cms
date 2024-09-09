<h1> user page</h1>
<h1> users see in the view page from oter API</h1>
<table border="1">
     <tr>
         <td> id</td>
         <td> name</td>
         <td> email</td>
         <td> phone</td>
     </tr>
     @foreach($collection as $item)  
     <tr>
         <td> {{$item['id']}}</td>
         <td> {{$item['name']}}</td>
         <td> {{$item['frist_name']}}</td>
         <td> {{$item['email']}}</td>
         <td> {{$item['avater']}}</td>
     </tr>
     @endforeach
</table>