@extends('layout')

@section('content')
<div id="wrapper">
    <div id="page" class="container">
        <h2></h2> article named "{{$article->title}}" has been removed.
        <form action="/articles">@csrf<button class="button is-link" type="submit">Back to articles</button></form>
    </div>
</div>
@endsection