@extends('lauouts.app')

@section('content')
 <div class="container">
    <form method="post">
        @csrf
        <div class="mb-3">
            <label>Title</label>
            <input type="text" name="title" class="form-control">
        </div>
        <div class="mb-3">
            <label>Body</label>
            <textarea name="body" class="form-control"></textarea>
        </div>
        <div class="mb-3">
            <label>Category</label>
            <select name="category_id" id=""></select>
        </div>
    </form>
 </div>
@endsection
