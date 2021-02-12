
<main>
    <div id="lunghe" class="container d-flex">
        @foreach ($pasta as $value)
        <div class="col-3">
            <img src="{{ $value['src'] }}" alt="">
        </div>
        @endforeach
    </div>

    <div id="corte" class="container d-flex">
        <div class="col-3"></div>
    </div>

    <div id="cortissime" class="container d-flex">
        <div class="col-3"></div>
    </div>

</main>


