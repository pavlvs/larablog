    @csrf
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="form-group">
        <label for="title">Title</label>
        <input type="text" class="form-control" name="title" id="title" value="{{ $model->title }}">
    </div>

    <div class="form-group">
        <label for="url">URL</label>
        <input type="text" class="form-control" name="url" id="url" value="{{ $model->url }}">
    </div>

    <div class="form-group">
        <label for="content">Content</label>
        <textarea class="form-control" name="content" id="content">{{ $model->content }}</textarea>
    </div>

    <div class="form-group">
        <button type="submit" class="btn btn-dark">Submit</button>
    </div>
