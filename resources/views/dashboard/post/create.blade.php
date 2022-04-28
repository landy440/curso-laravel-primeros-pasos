@extends('dashboard.layout')

@section('content')
    <h1>Create post</h1>

    @include('dashboard/fragment._errors-from')


    <form action="{{ route('post.store') }}" method="post">
        @include('dashboard.post._form')
    </form>
@endsection