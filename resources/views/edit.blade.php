<h1>wellcome to update page</h1>
<form action="listt" method="post">
    @csrf
    <input type="hidden" name="id" value="{{$data['id']}}"><br>
    <input type="text" name="name" value="{{$data['name']}}" ><br><br>
    <input type="text" name="email" value="{{$data['email']}}"><br><br>
    <input type="text" name="address" value="{{$data['address']}}"><br><br>
    <button type="submit">update</button>
</form>
