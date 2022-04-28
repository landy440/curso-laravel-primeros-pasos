@extends('dashboard.layout')

@section('content')
    <h1>Actualizar post: {{ $post->title }}</h1>

    @include('dashboard/fragment._errors-from')


    <form action="{{ route('post.update', $post->id) }}" method="post" enctype="multipart/form-data">
        @method("PUT")
        @include('dashboard.post._form',["task" => "edit"])
    </form>
@endsection