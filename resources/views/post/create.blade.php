@extends('layouts.main')
@section('content')
    <form action="{{ route('post.store') }}" method="post">
        @csrf
        <div class="form-group">
            <label for="title">title</label>
            <input type="text" name="title" class="form-control" id="title" placeholder="title">
         </div>

        <div class="form-group">
            <label for="content">content</label>
            <textarea class="form-control" name="content" id="content" placeholder="content"> </textarea>
        </div>

        <div class="form-group">
            <label for="image">image</label>
            <input type="text" name="image" class="form-control" id="image" placeholder="image">
        </div>

        <button type="submit" class="btn btn-primary">Create</button>
    </form>


@endsection