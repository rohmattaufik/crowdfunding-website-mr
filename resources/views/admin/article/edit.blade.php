<form method="post" action="{{url('admin/article/edit/submit')}}" enctype="multipart/form-data">
{{ csrf_field() }}
<input type="hidden" name="id" value="{{$article->id}}">
Title : <input type="text" name="title" value="{{$article->title}}"> <br>
Content : <textarea name="content">{{$article->content}}</textarea> <br>
Image : <input type="file" name="image"> <br>
<input type="submit" value="submit">

</form>