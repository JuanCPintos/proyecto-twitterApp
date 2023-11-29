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

    {{-- <div>
        <label>Tu nombre:</label>
        <input name="name" value="{{ old('name') }}">
        @error('name')
        <div>{{ $message }}</div>
        @enderror
    </div> --}}
    <hr>
    <button type="submit">Tweet</button>
</form>
<p><a href=" {{route('tweets') }}">volver</a></p>

<div class="">

</div>

<div class="alo aqw">
    <div class="gx tn ue">
        <div>
            <label for="comment" class="lu awa awe awp axv">Add your comment</label>
            <div class="lb">
                <textarea rows="4" name="comment" id="comment" class="lu tn adu afa arq axv bbn bbt bbx bcf bgd bne bnf bnr cid cif"></textarea>
            </div>
        </div>
    </div>
</div>