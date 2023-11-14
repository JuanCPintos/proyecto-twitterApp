<h1> ¿Que estas pensando?</h1>
<form action="{{route('tweets.store') }}" method="POST">
    @csrf
    <input type="tweet">
    <button type="submit">Tweet</button>
</form>
<p><a href=" {{route('tweets') }}">volver</a></p>