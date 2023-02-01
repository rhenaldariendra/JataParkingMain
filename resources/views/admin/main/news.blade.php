@extends('admin.master.master')
@section('title', 'News & Blogs - Admin Jataparking')
@section('page-content', 'List of News & Blogs')
@section('content-form')
<form action="/admin/news/add" method="post" enctype="multipart/form-data">
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
            <input type="text" name="title" id="title" placeholder="Title">
            <textarea type="text" name="description" id="description" placeholder="Description" cols="5"></textarea>
            <select name="type" id="type">
                <option value="">Select Type</option>
                <option value="News">News</option>
                <option value="Blog">Blog</option>
            </select>
            <input type="text" name="date" id="date" placeholder="Date">

            <button type="submit">Upload</button>
        </div>
    </div>
</form>

@endsection
@section('contentt')
<div class="list-item">
    @foreach ($news as $data)
    <div class="placeholders listitem">
        <div class="left">
            <img class="imgs" src="{{Storage::url($data->photo)}}" alt="">
        </div>
        <div class="right a">
            <label for="">{{$data->type}} Title</label>
            <input type="text" value="{{$data->title}}" disabled>
            <label for="">Description</label>
            <textarea disabled>{{$data->description}}</textarea>
            <label for="">Location of Project</label>
            <input type="text" value="{{$data->type}}" disabled>
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




