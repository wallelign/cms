<h1>login page</h1>
<!-- @if($errors->any())
@foreach($errors->all()  as $err)
{{$err}}
@endforeach
@endif -->
<form action="form"method="post">
    @csrf
   name <input type="text" name="name" placeholder="enter user name"><br>
    <span style="color:red">@error ('name'){{$message}} @enderror</span><br>
   password <input type="password" name="password" placeholder="enter user password"><br>
   <span style="color:red">@error ('password'){{$message}} @enderror</span><br><br>
       <button type="submit">login</button>

</form>
<style> 
   form{
       background-color:black;
       color: white;
       padding:50px;
       margin-left:100px;
       margin-top:100px;
       margin-right:500px;
   } 
</style>
<script>
    //we can write script file
</script>