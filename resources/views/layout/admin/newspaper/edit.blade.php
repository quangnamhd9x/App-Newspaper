@extends('layout.admin.master')

@section('content')
    <form action="{{route('newspaper.edit', $newspaper->id)}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="exampleFormControlInput1">Title</label>
            <input name="title" type="text" class="form-control" value="{{$newspaper->title}}" id="exampleFormControlInput1" placeholder="abc...">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Intro</label>
            <input name="intro" type="text" class="form-control" value="{{$newspaper->intro}}" id="exampleFormControlInput1" placeholder="abc...">
        </div>
        <div class="form-group">
            <label for="exampleFormControlSelect1">Image</label>
            <input type="file" accept=".png, .jpg, .jpeg" name="image" id="inputName"
                   class="form-control">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Description</label>
            <input name="description" type="text" class="form-control" value="{{$newspaper->description}}" id="exampleFormControlInput1" placeholder="abc...">
        </div>
        <button type="submit" class="btn btn-info">ADD</button>
    </form>
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
