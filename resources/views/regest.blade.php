<h1>Regestiration Form</h1>
<form action="rgform" method="post">
    @csrf
    id<input type="text" name="id" placeholder="enter ur id"><br><br>
    name<input type="text" name="name" placeholder="enter ur name"><br><br>
    phone<input type="text" name="phone" placeholder="enter ur phone number"><br><br>
    email<input type="email" name="email" placeholder="enter ur email"><br><br>
    address<input type="text" name="adderess" placeholder="enter ur adderess"><br><br>
    <button type="sumbit" name="regester">Registiration</button>
</form>