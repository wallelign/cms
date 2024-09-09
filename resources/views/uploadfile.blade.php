<h1>upload file</h1>
<form action="fileupload" method ="post" enctype="multipart/form-data">
@csrf
<input type="file" name="file">
<button type="submit">upload file</button>
</form>