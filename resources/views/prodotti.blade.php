@extends('layout.app')
    @section('header')
        @include('layout.header')
    @endsection
   

@section('content')      
<main>
    <h2>LE LUNGHE</h2>
    <div id="lunghe" class="container d-flex">
        @foreach($pasta as $value)
        @if($value['tipo'] === 'lunga')
        <div class="col-3 card">
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
    <h2>LE CORTE</h2>
    <div id="lunghe" class="container d-flex">
        @foreach($pasta as $value)
        @if($value['tipo'] === 'corta')
        <div class="col-3 card">
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
    <h2>LE CORTISSIME</h2>
    <div id="lunghe" class="container d-flex">
        @foreach($pasta as $value)
        @if($value['tipo'] === 'cortissima')
        <div class="col-3 card">
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