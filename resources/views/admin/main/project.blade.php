@extends('admin.master.master')
@section('title', 'Project - Admin Jataparking')
@section('page-content', 'List of Project')
@section('content-form')
<form action="/admin/project/add" method="post" enctype="multipart/form-data">
    @csrf
    <input type="file" name="image" id="image" accept="image/png, image/gif, image/jpeg" hidden>
    <div class="placeholders">
        <div class="left">
            <label for="image">
                <img id="output" class="imgs" style="z-index: 9999;">
            </label>
            <label class="img" for="image" id="imginput">
                <i class="bi bi-plus-square"></i>
                Input Photo
            </label>
        </div>
        <div class="right">
            <input type="text" name="name" id="name" placeholder="Project Name">
            <textarea type="text" name="description" id="description" placeholder="Project Description" cols="5"></textarea>
            <select name="category" id="category">
                <option value="">Select Project Category</option>
                @foreach ($category as $test)
                    <option value="{{$test->id}}">{{$test->name}}</option>
                @endforeach
            </select>
            <input type="text" name="location" id="location" placeholder="Location of Project">
            <button type="submit">Upload</button>
        </div>
    </div>
</form>

@endsection
@section('contentt')
<div class="list-item">
    @foreach ($project as $data)
    <div class="placeholders listitem">
        <div class="left">
            <img class="imgs" src="{{Storage::url($data->photo)}}" alt="">
        </div>
        <div class="right a">
            <label for="">Project Name</label>
            <input type="text" value="{{$data->name}}" disabled>
            <label for="">Project Description</label>
            <textarea disabled>{{$data->description}}</textarea>
            <label for="">Project Category</label>
            <input type="text" value="{{$data->category->name}}" disabled>
            <label for="">Location of Project</label>
            <input type="text" value="{{$data->location}}" disabled>
            <form action="/admin/project/delete/{{$data->id}}" method="POST">
                @csrf
                @method('DELETE')
                <button class="delete" type="submit">Delete</button>
            </form>
        </div>
    </div>
    @endforeach
</div>
<script>
    image.onchange = evt => {
        const [file] = image.files
        if (file) {
            output.src = URL.createObjectURL(file)
            console.log(imginput);
            imginput.style.display = 'none';
        }
    }
</script>
@endsection
