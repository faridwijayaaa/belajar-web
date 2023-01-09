@extends('admin.template')
@section('title_Web', 'Post Baru')
@section('content')
    {{ Form::open(['url' => 'admin/store', 'method' => 'put']) }}
    <table class="table table-bordered" width='100%'>
        <tr>
            <td>ID</td>
            <td>[Auto]</td>
        </tr>
        <tr>
            <td>Judul</td>
            <td>{{ Form::text('judul', null, ['class' => 'form-control', 'placeholder' => 'judul']) }}</td>
        </tr>
        <tr>
            <td>Isi</td>
            <td>{{ Form::textarea('isi', null, ['class' => 'form-control', 'placeholder' => 'isi']) }}</td>
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
x
