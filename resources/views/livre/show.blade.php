@section('title', 'Show')
@section('content')
    @if(session('msg')) {{ $msg }} @endif
    <div>
        <img src="{{ $livre->couverture }}" alt="">
    </div>
    <div>
        <p>Titre : {{ $livre->titre }}</p>
        <p>Auteur : {{ $livre->auteur }}</p>
        <p>Prix : {{ $livre->prix }}</p>
        <p>Annee : {{ $livre->annee }}</p>
    </div>
@endsection
