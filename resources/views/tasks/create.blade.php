@extends('layouts.main')
@section('content')

<div class="row">
    <div class="col-12">
        <h1>Create Task</h1>
    </div>
</div>

<div class="row">
    <div class="col-12">
        <form action="{{route('task.store')}}" method="POST">
        @csrf
        <input type="text" name="description">
        <input type="submit" value="Crear">
        </form>
    </div>
</div>

@endsection
