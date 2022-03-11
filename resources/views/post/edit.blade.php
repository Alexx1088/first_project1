@extends('layouts.main')
@section('content')
    <form action="{{ route('post.update', $post->id ) }}" method="post">
        @csrf
        @method('patch')
        <div class="form-group">
            <label for="title">title</label>
            <input type="text" name="title" class="form-control" id="title" placeholder="title" value="{{ $post->title }}">
         </div>

        <div class="form-group">
            <label for="content">content</label>
            <textarea class="form-control" name="content" id="content" placeholder="content"> {{ $post->content }} </textarea>
        </div>

        <div class="form-group">
            <label for="image">image</label>
            <input type="text" name="image" class="form-control" id="image" placeholder="image" value="{{ $post->image }}">
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
    </form>


@endsection