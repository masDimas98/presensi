@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <div class="row">
        <div class="col-sm">
            One of three columns
        </div>
        <div class="col-sm text-center">
            Dosen
        </div>
        <div class="col-sm text-right">
            <x-btn_add url="DosenWebController@create" />
        </div>
    </div>
@stop

@section('content')
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Nama</th>
                <th scope="col">NIDN</th>
                {{-- <th scope="col">Aksi</th> --}}
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        @foreach ($data as $item)
            <tbody>
                <tr>
                    <td>{{ $item->nama }}</td>
                    <td>{{ $item->nidn }}</td>
                    <td>
                        <x-tableaction url="dosen" :id="$item->id" />
                    </td>
                </tr>
            </tbody>
        @endforeach
    </table>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script>
        console.log('Hi!');
    </script>
@stop
