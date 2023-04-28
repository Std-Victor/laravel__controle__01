@section('title', 'Edit')
@section('content')
    <form action="{{ route('livres.update') }}" method="post">
        @csrf
        @method('PUT')
        @include('livre._form')
        <button type="submit">Save</button>
    </form>

@endsection
