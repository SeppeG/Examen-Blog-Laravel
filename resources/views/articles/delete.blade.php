@extends('layout')

@section('content')
<div id="wrapper">
    <div id="page" class="container">
        @can('edit-article', $article)
        <h2></h2> article named "{{$article->title}}" has been removed.
        <form action="/articles">@csrf<button class="button is-link" type="submit">Back to articles</button></form>
        @else
        <h2 style="color: rgb(138, 34, 34)">You are not authorized to delete this article.</h2>
        @endcan
    </div>
</div>
@endsection
