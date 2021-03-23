@extends('layout')
@section('content')
<div id="wrapper">
	<div id="page" class="container">
		<div id="content">
			<ul class="style1">
				@forelse ($articles as $article)
					<li class="first">
						<h3> <a href="{{$article->path()}}">{{$article->title}}</a></h3>
						<p><a href="#">{!!$article->excerpt!!}</a></p>
					</li>
				@empty
					<p>No relevant articles yet.</p>
				@endforelse
			</ul>
		</div>
	</div>
</div>
@endsection