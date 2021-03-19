@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Edit {{ $model->name }}</h1>
        <form action="{{ route('users.update', ['user' => $model->id]) }}" method="post">
            @method('PUT')
            @csrf
            @foreach ($roles as $role)
                <div class="checkbox">
                    <label>
                        <input type="checkbox" name="roles[]" value="{{ $role->id }}"
                            {{ $model->hasRole($role->name) ? 'checked' : '' }}>
                        {{ $role->name }}
                    </label>
                </div>
            @endforeach
            <div class="form-group">
                <button type="submit" class="btn btn-dark">Submit</button>
            </div>
        </form>
    </div>
@endsection
