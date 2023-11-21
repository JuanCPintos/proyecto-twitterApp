<h1> ¿Que estas pensando?</h1>
<form action="{{ route('tweets.store') }}" method="POST">
    @csrf
    <div>
        <label>Tweet:</label>
        <input name="tweet" value="{{ old('tweet') }}">
        @error('tweet')
        <div>{{ $message }}</div>
        @enderror
    </div>

    <div>
        <label>Tu nombre:</label>
        <input name="name" value="{{ old('name') }}">
        @error('name')
        <div>{{ $message }}</div>
        @enderror
    </div>
    <hr>
    <button type="submit">Tweet</button>
</form>
<p><a href=" {{route('tweets') }}">volver</a></p>