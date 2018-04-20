<form method="post" action="{{url('admin/article/create/submit')}}" enctype="multipart/form-data">
{{ csrf_field() }}

Title : <input type="text" name="title"> <br>
Content : <textarea name="content"></textarea> <br>
Image : <input type="file" name="image"> <br>
<input type="submit" value="submit">

</form>