@extends('admin.template')
@section('title_Web', 'Halaman Admin')
@section('content')
    <table class="table table-bordered" width="100%">
        <tr>
            <th>ID</th>
            <th>JUDUL</th>
            <th>AUTHOR</th>
            <th>AKSI</th>
        </tr>
        @foreach ($posts as $post)
            <tr>
                <td>{{ $post->id }}</td>
                <td>{{ $post->judul }}</td>
                <td>{{ $post->author }}</td>
                <td>
                    <a href="./admin/detail/{{ $post->id }}" class="btn btn-primary">Detail</a>
                    <a href="/admin/editArtikel/{{ $post->id }}" class="btn btn-primary">Edit</a>
                    <a href="/admin/delete/{{ $post->id }}" class="btn btn-warning">Delete</a>
                </td>>
            </tr>
        @endforeach
    </table>
    <a href="./admin/create/" class="btn btn-primary">Create</a>
@endsection
