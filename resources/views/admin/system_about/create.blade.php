<form method="post" action="{{ url('admin/system_about/create/submit') }}" >
{{csrf_field()}}
Name : <input type="text" name="name"> <br>
Content : <textarea name="content"></textarea>
<input type="submit" value="submit">

</form>