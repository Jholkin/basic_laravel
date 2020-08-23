@csrf

<label for="title">
    Titulo del proyecto <br>
    <input type="text" name="title" id="title" value=" {{ old('title', $project->title) }} ">
</label>

<br>

<label for="url">
    URL del proyecto <br>
    <input type="text" name="url" id="url" value=" {{ old('url', $project->url) }} ">
</label>

<br>

<label for="description">
    Descripcion del proyecto <br>
    <textarea name="description" id="description">{{ old('description', $project->description) }}</textarea>
</label>

<br>

<button> {{$btnText}} </button>