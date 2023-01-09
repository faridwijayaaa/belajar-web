@extends('admin.template')
@section('title_Web', 'Edit')
@section('content')
    <table class="table table-bordered" width="100%">
        <tr>
            <th>JUDUL</th>
            <th>ISI</th>
            <th>AUTHOR</th>
        </tr>
        @foreach ($post as $p)
            {{-- ID MENU : {{ $p->id_menu }}<br>
        MENU : {{ $p->menu }}<br>
        URUTAN : {{ $p->urutan }}<br>
        ID PARENT : {{ $p->parent_id }}<br> --}}
            <tr>
                <td>{{ $p->judul }}</td>
                <td>{{ $p->isi }}</td>
                <td>{{ $p->author }}</td>
            </tr>
        @endforeach
    </table>
@endsection
