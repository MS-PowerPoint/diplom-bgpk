@extends('layouts.index')

@section('title', '{{$schoolboy->name}}')

@section('content')
<a href="/" class="btn btn-primary" >☜(ﾟヮﾟ☜)BACK</a>
<a href="/schoolboys/create" class="btn btn-primary" >CREATE💹</a>


<div class="card mb-3" style="max-width: 540px;">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="{{asset('storage/img/space3/' . $schoolboy->img)}}" class="img-fluid rounded-start" alt="{{$schoolboy->img}}">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h4 class="card-title">Название: {{$schoolboy->name}}</h4>
        <p class="card-text">Категория: {{$schoolboy->school->name}}</p>
        <p class="card-text">Описание: {{$schoolboy->patronymic}}</p>
        <p class="card-text">Количество на складе: {{$schoolboy->estimation}}</p>
        <p class="card-text">Поставщик: {{$schoolboy->surname}} -</p>
        <p class="card-text">Цена: ${{$schoolboy->class}}</p>
        
      </div>
    </div>
  </div>
</div>


<!-- 
<div class="row row-cols-1 row-cols-md-3 g-4" style="margin: 100px">


  <div class="col" >
    <div class="card h-100">
      <img src="{{asset('storage/img/space3/' . $schoolboy->img)}}" class="card-img-top" alt="{{$schoolboy->img}}">
      <div class="card-body">

        <h4 class="card-title">Название: {{$schoolboy->name}}</h4>
        <p class="card-text">Категория: {{$schoolboy->school->name}}</p>
        <p class="card-text">Описание: {{$schoolboy->patronymic}}</p>
        <p class="card-text">Количество на складе: {{$schoolboy->estimation}}</p>
        <p class="card-text">Поставщик: {{$schoolboy->surname}} -</p>
        <p class="card-text">Цена: ${{$schoolboy->class}}</p>
      </div>
    </div>
  </div>
</div> -->






<!-- 
            <a href="/schoolboys/{{$schoolboy->id}}/update" class="btn btn-primary" > Изменить✍</a>
            
            <form action="{{ route('schoolboy.delete', ['schoolboy' => $schoolboy->id]) }}" method="post">
            @method('delete')
            @csrf 
            <input class="btn btn-primary" type="submit" value="Удалить😡">
            
            </form> -->
@endsection