@extends('layout.app')
    @section('header')
        @include('layout.header')
    @endsection
   

@section('content')      
<main>
    <h2>Le Lunghe</h2>
    <div id="lunghe" class="container d-flex">
        @foreach($pasta as $value)
        @if($value['tipo'] === 'lunga')
        <div class="col-3">
            <div class="item">
                <div class="overlay">
                    <div class="info">
                        <h5>{{ $value['titolo'] }}</h5>
                        <img src="" alt="">
                    </div>
                </div>
                <img src="{{ $value['src'] }}"  alt="">
            </div>
        </div>
        @endif
        @endforeach
    </div>
    <h2>Le Corte</h2>
    <div id="lunghe" class="container d-flex">
        @foreach($pasta as $value)
        @if($value['tipo'] === 'corta')
        <div class="col-3">
            <div class="item">
                <div class="overlay">
                    <div class="info">
                        <h5>{{ $value['titolo'] }}</h5>
                        <img src="" alt="">
                    </div>
                </div>
                <img src="{{ $value['src'] }}"  alt="">
            </div>
        </div>
        @endif
        @endforeach
    </div>
    <h2>Le Cortissime</h2>
    <div id="lunghe" class="container d-flex">
        @foreach($pasta as $value)
        @if($value['tipo'] === 'cortissima')
        <div class="col-3">
            <div class="item">
                <div class="overlay">
                    <div class="info">
                        <h5>{{ $value['titolo'] }}</h5>
                        <img src="" alt="">
                    </div>
                </div>
                <img src="{{ $value['src'] }}"  alt="">
            </div>
        </div>
        @endif
        @endforeach
    </div>
</main>        
@endsection