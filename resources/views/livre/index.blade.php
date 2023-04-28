@extends('layout')
@section('content')
    <form action="{{ route('livres.index') }}" method="get">
        @csrf
        <label for="title">Search using title : </label>
        <input type="text" name="title" id="title">
        <button type="submit">Filter</button>
    </form>
    @if(session('msg')) {{ $msg }} @endif
    <table>
        <thea>
            <tr>
                <th>Image</th>
                <th>Titre</th>
                <th>Auteur</th>
                <th>Prix</th>
                <th>Annee</th>
                <th>Action</th>
            </tr>
        </thea>
        <tbod>
            @foreach($livres as $livre)
                <tr>
                    <td>
                        <img src="{{ $livre->couverture }}" alt="">
                    </td>
                    <td> {{ $livre->titre }} </td>
                    <td> {{ $livre->auteur }} </td>
                    <td> {{ $livre->prix }} </td>
                    <td> {{ $livre->annee }} </td>
                    <td>
                        <a href="{{ route('livres.show', $livre) }}">Show</a>
                        <a href="{{ route('livres.edit', $livre) }}">Edit</a>
                        <form action="{{ route('livres.destroy', $livre) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" onclick="return confirm('Are you sure you want to delete?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbod>
    </table>
@endsection
