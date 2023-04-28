@section('title', 'Create')
@section('content')
    <form action="{{ route('livres.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        @include('livre._form')
        <div>
            <label for="couverture">Coverture</label>
            <input type="file" name="couverture" id="couverture" value="{{ old('couverture') }}">
            @error('couverture') {{ $message }} @enderror
        </div>
        <button type="submit">Create</button>
    </form>
@endsection
