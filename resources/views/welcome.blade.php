@extends('layouts.app')

@section('title', 'DC - Home')

@section('section-title', 'current series')

@section('page-content')
<section class="comic-list">
    <div class="container">
        <div class="row row-cols-6 g-3">
            @foreach ($comics as $comic)
                <div class="col">
                    <div class="card">
                        <div class="card-img">
                            <img src="{{$comic['thumb']}}" alt="{{$comic['title']}}">
                        </div>
                        <div class="card-txt">
                            <div class="text-uppercase">{{$comic['title']}}</div>
                            <div class="sub">{{$comic['type']}}</div>
                        </div>
                        <div class="details">
                           <div class="det-wrap">
                               <div>{{$comic['price']}}</div>
                               <div>Sale date: {{$comic['sale_date']}}</div>
                           </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        
    </div>
    <button class="text-uppercase">load more</button>
</section>
<section class="blue-pt">
    <div class="container text-uppercase">
        @foreach ($buy as $merch)
            <div class="merch">
            <img src="{{Vite::asset('resources/img/'.$merch['imgPath'])}}" alt="{{$merch['title']}}">
            <div class="caps">{{$merch['title']}}</div>
        </div>
        @endforeach
        
    </div>
</section>


@endsection