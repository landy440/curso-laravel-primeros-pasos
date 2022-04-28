@extends('dashboard.layout')

@section('content')
    <h1>Create category</h1>

    @include('dashboard/fragment._errors-from')


    <form action="{{ route('category.store') }}" method="post">
        @include('dashboard.category._form')
    </form>
@endsection