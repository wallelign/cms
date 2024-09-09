<h1>user form </h1>
@if(session('name')){
  <h3 style=color:"green">{{session}} is is added </h3>
}
<form action="fs" method="post">
    @csrf
    <input type="text" name="name" placeholder="enter ur name"><br><br>
    <input type="password" name="password" placeholder="enter ur password"><br><br>
    <input type="text" name="email" placeholder="enter ur email"><br><br>
    <button >login</button>

</form>