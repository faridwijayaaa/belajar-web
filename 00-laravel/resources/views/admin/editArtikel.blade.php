@extends('admin.template')
@section('title_Web', 'Edit Artikel')
@section('content')
    @foreach ($post as $post)
        {{ Form::model($post, ['url' => 'admin/update/' . $post->id, 'method' => 'put']) }}
        <table class="table table-bordered" width='100%'>
            <tr>
                <td>ID</td>
                <td>{{ Form::text('id', $post->id, ['class' => 'form-control', 'disabled']) }}</td>
            </tr>
            <tr>
                <td>Judul</td>
                <td>{{ Form::text('judul', $post->judul, ['class' => 'form-control', 'placeholder' => 'judul']) }}</td>
            </tr>
            <tr>
                <td>Isi</td>
                <td>{{ Form::textarea('isi', $post->isi, ['class' => 'form-control', 'placeholder' => 'isi']) }}</td>
            </tr>
            <tr>
                <td>Author</td>
                <td>{{ Form::text('author', $post->author, ['class' => 'form-control', 'placeholder' => 'author']) }}</td>
            </tr>
        </table>
        <button type='submit' class="btn btn-md btn-primary">SIMPAN</button>
        <button type='reset' class='btn btn-md btn-warning'>RESET</button>
        {{ Form::close() }}
    @endforeach
@endsection
