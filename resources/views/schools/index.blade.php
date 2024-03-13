@extends('layouts.index')

@section('title', 'Главная')

@section('content')

<!-- <a href="/" class="btn btn-primary" >☜(ﾟヮﾟ☜)BACK</a>
<a href="/schools/create" class="btn btn-primary" >CREATE💹</a> -->
<div class="row row-cols-12 row-cols-md-4 g-4 "  >
    @foreach($schools as $school)
    <a href="/schoolboys" style="padding: 0px; margin: 60px; margin-bottom: 50px;">

        <div class="card text-center" >
            <img class="img-fluid" style="height: 200px;" src="{{asset('storage/img/categori-img/' . $school->desk)}}" alt="{{$school->desk}}">
            <div class="card-header" style="width: 100%">
                <h4 >{{$school->name}}</h4>
            </div>
        </div>

        <!-- <div class="body-body">
            <h5 class="card-title">{{$school->name}}</h5>
            <p class="card-text">{{$school->desk}}</p>
            <a href="schools/{{$school->id}}" class="btn btn-primary" > Подробнее😲</a>
            <a href="schools/{{$school->id}}/update" class="btn btn-primary" > Изменить✍</a>
            
            <form action="{{ route('schools.delete', ['school' => $school->id]) }}" method="post">
            @method('delete')
            @csrf 
            <input class="btn btn-primary" type="submit" value="Удалить😡">
            
            </form>

        </div> -->
  
    </a>
    @endforeach
</div>
@endsection