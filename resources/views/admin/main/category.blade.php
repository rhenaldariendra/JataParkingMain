@extends('admin.master.master')
@section('title', 'Category - Admin Jataparking')
@section('page-content', 'List of Project Categories')
@section('content-form')
<form action="/admin/category/add" method="post">
    @csrf
    <h3>Add Category</h3>
    <input class="category-add" type="text" name="name" id="name" placeholder="Category Name">
    <button class="category-submit" type="submit">UPLOAD</button>
</form>
@endsection

@section('contentt')
<div class="list-item-category">
    @foreach ($category as $data)
    <div class="category-placeholder">
        <p>{{$data->name}}</p>
        <form action="/admin/category/delete/{{$data->id}}" method="post">
            @method('DELETE')
            @csrf
            <button class="delete" type="submit">DELETE</button>
        </form>
    </div>
    @endforeach
</div>
@endsection
