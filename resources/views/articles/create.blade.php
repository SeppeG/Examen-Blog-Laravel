@extends('layout')

@section('head')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.1/css/bulma.min.css">
@endsection

@section('content')
<div id="wrapper">
    <div id="page" class="container">
        @guest
        <h2 style="color: rgb(148, 30, 30)">You have to be logged in to make a new article</h2>
        @else
        <h1 class="heading has-text-weight-bold is-size-4">New Article</h1>
        <form action="/articles" method="POST">
            @csrf

            <div class="field">
                <label for="title" class="label">Title</label>

                <div class="control">
                    <input type="text" class="input @error('title') 'is-danger' @enderror" name="title" id="title"
                        value="{{old('title')}}">

                    @error('title')
                    <p class="help is-danger">{{$errors->first('title')}}</p>
                    @enderror
                </div>
            </div>

            <div class="field">
                <label for="excerpt" class="input @error('excerpt') 'is-danger' @enderror">Excerpt</label>

                <div class="control">
                    <textarea class="textarea" name="excerpt" id="excerpt">{{old('excerpt')}}</textarea>

                    @error('excerpt')
                    <p class="help is-danger">{{$errors->first('excerpt')}}</p>
                    @enderror
                </div>
            </div>

            <div class="field">
                <label for="body" class="input @error('body') 'is-danger' @enderror">Body</label>

                <div class="control">
                    <textarea class="textarea" name="body" id="body">{{old('body')}}</textarea>

                    @error('body')
                    <p class="help is-danger">{{$errors->first('body')}}</p>
                    @enderror
                </div>
            </div>

            <div class="field">
                <label for="body" class="input @error('Tags') 'is-danger' @enderror">Tags</label>

                <div class="control">
                    <select name="tags[]" multiple>
                        @foreach ($tags as $tag)
                        <option value="{{$tag->id}}">{{$tag->name}}</option>
                        @endforeach
                    </select>

                    @error('tags')
                    <p class="help is-danger">{{$message}}</p> {{-- same as {{$errors->first('tags')}} --}}
                    @enderror
                </div>
            </div>

            <div class="field is-grouped">
                <div class="control">
                    <button class="button is-link" type="submit">Submit</button>
                </div>
            </div>
        </form>
        @endguest

    </div>
</div>
@endsection