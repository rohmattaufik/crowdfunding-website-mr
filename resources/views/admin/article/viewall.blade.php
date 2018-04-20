<a href="{{url('admin/article/create')}}">create</a><br>
@foreach($articles as $article)
<img src="{{URL::asset($article->image)}}" style="width:100px;height:100px">
<h2>{{$article->title}}</h2>
<a href="{{url('admin/article/'.$article->id)}}">view</a> <a href="{{url('admin/article/edit/'.$article->id)}}">edit</a> <a href="{{url('admin/article/delete/'.$article->id)}}">delete</a>
<hr>
@endforeach