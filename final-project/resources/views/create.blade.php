@extends('home')
@section('title', 'New Post')
@section('content')
    {{ Form::open(['url' => 'post/store', 'method' => 'put']) }}
    <table class="table table-bordered" width='100%'>
        <tr>
            <td>ID</td>
            <td>[Auto]</td>
        </tr>
        <tr>
            <td>Judul</td>
            <td>{{ Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'judul']) }}</td>
        </tr>
        <tr>
            <td>Image URL</td>
            <td>{{ Form::text('imgUrl', null, ['class' => 'form-control', 'placeholder' => 'url']) }}</td>
        </tr>
        <tr>
            <td>Isi</td>
            <td>{{ Form::textarea('content', null, ['class' => 'form-control', 'placeholder' => 'isi']) }}</td>
        </tr>
        <tr>
            <td>Author</td>
            <td>{{ Form::text('author', null, ['class' => 'form-control', 'placeholder' => 'author']) }}</td>
        </tr>
    </table>
    <button type='submit' class="btn btn-md btn-primary">SIMPAN</button>
    <button type='reset' class='btn btn-md btn-warning'>RESET</button>
    {{ Form::close() }}
@endsection
