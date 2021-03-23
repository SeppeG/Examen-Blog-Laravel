@extends('layout')

@section('content')
<div id="wrapper">
	<div id="page" class="container">
		<div id="content">
			<div class="title">
				<h2>{{$article->title}}</h2>
				<br>
				<p>{{$article->body}}</p>
				@foreach ($article->tags as $tag)
				<a href="{{route('articles.index', ['tag' => $tag->name])}}">{{$tag->name}}</a>

				@endforeach
				@can('edit-article', $article)
				<form action="{{$article->path()}}/edit" method="get">
					<button class="button is-link" type="submit">Edit article</button>
				</form>
				<form action="{{$article->path()}}/delete" method="POST">
					@csrf
					@method('delete')
					<button class="button is-link" onclick="return confirm('Are you sure?')" type="submit">Delete article</button>
				</form>
				@endcan
			</div>
		</div>
	</div>

</div>
@endsection