<form action="{{ route('gallery.upload', ['gallery_id' => $gallery->id]) }}" method="POST" enctype="multipart/form-data">
    @csrf
    <input type="file" name="images[]" multiple>
    <button type="submit">Upload Images</button>
</form>
