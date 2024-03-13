@extends('layouts.index')

@section('title', 'Ученик')

@section('content')
<a href="/" class="btn btn-primary" >☜(ﾟヮﾟ☜)BACK</a>
<a href="/schoolboys/create" class="btn btn-primary" >CREATE💹</a>
<div class="row">

    <div class="col-6  p-3">
        <div class="card text-center p-3">
        <div class="card-header p-3">
            <h1>Ученик {{$schoolboy->name}}</h1>
        </div>

        <div class="body-body">
            <h5 class="card-title">{{$schoolboy->school->id}}</h5>
            <p class="card-text">{{$schoolboy->desk}}</p>

            <a href="/schoolboys/{{$schoolboy->id}}/update" class="btn btn-primary" > Изменить✍</a>
            
            <form action="{{ route('schoolboy.delete', ['schoolboy' => $schoolboy->id]) }}" method="post">
            @method('delete')
            @csrf 
            <input class="btn btn-primary" type="submit" value="Удалить😡">
            
            </form>

        </div>
        </div>
    </div>   

</div>
@endsection