@extends('admin.master.master')
@section('title', 'Teams - Admin Jataparking')
@section('page-content', 'Greatest Teams')
@section('content-form')
<form action="/admin/teams/add" method="post" enctype="multipart/form-data">
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
            <input type="text" name="name" id="name" placeholder="Name">
            <input type="text" name="instagram" id="instagram" placeholder="Instagram Link">
            <input type="text" name="facebook" id="facebook" placeholder="Facebook Link">
            <input type="text" name="twitter" id="twitter" placeholder="Twitter Link">
            <button type="submit">Upload</button>
        </div>
    </div>
</form>

@endsection
@section('contentt')
<div class="list-item">
    @foreach ($team as $data)
    <div class="placeholders listitem">
        <div class="left">
            <img class="imgs" src="{{Storage::url($data->photo)}}" alt="">
        </div>
        <div class="right a">
            <label for="">Name</label>
            <input type="text" value="{{$data->name}}" disabled>
            <label for="">Instagram Link</label>
            <input type="text" value="{{$data->instagram}}" disabled>
            <label for="">Facebook Link</label>
            <input type="text" value="{{$data->facebook}}" disabled>
            <label for="">Twitter Link</label>
            <input type="text" value="{{$data->twitter}}" disabled>
            <form action="/admin/teams/delete/{{$data->id}}" method="POST">
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
