@extends('layouts.index')

@section('title', 'Каталог')

@section('content')
<a href="/" class="btn btn-primary" >☜(ﾟヮﾟ☜)BACK</a>
<a href="/schoolboys/create" class="btn btn-primary" >CREATE💹</a>
<div class="row">
<div class="row row-cols-1 row-cols-md-3 g-4">
    @foreach($schoolboys as $schoolboy)

  <div class="col">
    <div class="card h-100">
      <img src="{{asset('storage/img/space3/' . $schoolboy->img)}}" class="card-img-top" alt="{{$schoolboy->img}}">
      <div class="card-body">

        <h5 class="card-title">{{$schoolboy->name}}</h5>
        <p class="card-text">{{$schoolboy->school->name}}</p>
        <p class="card-text">{{$schoolboy->desk}}</p>

        <a href="schoolboys/{{$schoolboy->id}}" class="btn btn-primary" > Подробнее😲</a>
      </div>
    </div>
  </div>



    <!-- <div class="col-6  p-3">
        <div class="card text-center p-3">
        <div class="card-header p-3">
            <h1>Ученик {{$schoolboy->name}}</h1>
        </div>

        <div class="body-body">
            <a href="schoolboys/{{$schoolboy->id}}/update" class="btn btn-primary" > Изменить✍</a>
            
            <form action="{{ route('schoolboy.delete', ['schoolboy' => $schoolboy->id]) }}" method="post">
            @method('delete')
            @csrf 
            <input class="btn btn-primary" type="submit" value="Удалить😡">
            
            </form>

        </div>
        </div>
    </div>    -->
    @endforeach
</div>
</div>
@endsection