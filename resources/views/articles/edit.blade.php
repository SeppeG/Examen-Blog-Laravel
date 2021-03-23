@extends('layout')
@section('content')
<div id="wrapper">
    <div id="page" class="container">
        @can('edit-article', $article)
        <h1 class="heading has-text-weight-bold is-size-4">Update Article</h1><br>
        <form action="/articles/{{$article->id}} " method="POST">
            @csrf
            @method('PUT') {{-- Maakt van de POST een PUT request --}}

            <div class="field">
                <label for="title" class="label">Title</label>

                <div class="control">
                    <input type="text" class="input" name="title" id="title" value="{{$article->title}}" required>
                </div>
            </div>

            <div class="field">
                <label for="excerpt" class="label">Excerpt</label>

                <div class="control">
                    <textarea class="textarea" name="excerpt" id="excerpt" required>{{$article->excerpt}}</textarea>
                </div>
            </div>

            <div class="field">
                <label for="body" class="label">Body</label>

                <div class="control">
                    <textarea class="textarea" name="body" id="body" required>{{$article->body}}</textarea>
                </div>
            </div>

            <div class="field is-grouped">
                <div class="control">
                    <button class="button is-link" type="submit">Submit</button>
                </div>
            </div>
        </form>
        @endcan
        @cannot('edit-article', $article)
            <h2 style="color: rgb(138, 34, 34)">You are not authorized to edit this article.</h2>
        @endcannot
    </div>
</div>
@endsection