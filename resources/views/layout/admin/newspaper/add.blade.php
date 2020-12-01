@extends('layout.admin.master')

@section('content')
    <div class="container-fluid">
    <form method="post" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="exampleFormControlInput1">Title</label>
        <input name="title" type="text" class="form-control" id="exampleFormControlInput1" placeholder="abc...">
    </div>
    <div class="form-group">
        <label for="exampleFormControlInput1">Intro</label>
        <input name="intro" type="text" class="form-control" id="exampleFormControlInput1" placeholder="abc...">
    </div>
    <div class="form-group">
        <label for="exampleFormControlSelect1">Image</label>
        <input type="file" accept=".png, .jpg, .jpeg" name="image" id="inputName"
               class="form-control">
    </div>
    <div class="form-group">
        <label for="exampleFormControlTextarea1">Description</label>
        <textarea name="description" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
    </div>
    <div class="form-group">
        <label for="exampleFormControlSelect1">Category</label>
        <select name="category_id" class="form-control custom-select">
            @foreach($categories as $key => $category)
                <option
                    value="{{$category->id}}">{{$category->name}}</option>
            @endforeach
        </select>
    </div>
    <button type="submit" class="btn btn-info">ADD</button>
</form>
    </div>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
@endsection
