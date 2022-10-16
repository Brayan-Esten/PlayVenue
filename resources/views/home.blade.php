@extends('layouts.template')

@section('content')

<div class="container mt-5">
    <div class="row justify-content-around">

        <div class="col-md-6">

            {{-- search bar --}}
            <form action="/post">
                @if (request('category'))
                    <input type="hidden" name="category" value={{ request('category') }}>
                @endif

                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Masukkan kata kunci" name="search"
                        value="{{ request('search') }}">
                    <button class="btn btn-primary" type="submit">Search</button>
                </div>
            </form>


            {{-- carousel --}}
            <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">

                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleInterval" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleInterval" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleInterval" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>


                <div class="carousel-inner rounded">
                    <div class="carousel-item active" data-bs-interval="5000">
                        <img src="/img/carousel/1.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item" data-bs-interval="5000">
                        <img src="/img/carousel/2.webp" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item" data-bs-interval="5000">
                        <img src="/img/carousel/3.webp" class="d-block w-100" alt="...">
                    </div>
                </div>

            </div>
        
        </div>


        <div class="col-md-5 align-self-center">

            <div class="row">

                <div class="category">
                    <img src="/img/categories/badmin.png" alt="">
                </div>

                <div class="category">
                    <img src="/img/categories/basket.png" alt="">
                </div>

                <div class="category">
                    <img src="/img/categories/voli.png" alt="">
                </div>

            </div>

            <div class="row mt-3">

                <div class="category">
                    <img src="/img/categories/renang.png" alt="">
                </div>

                <div class="category">
                    <img src="/img/categories/futsal.png" alt="">
                </div>

                <div class="category">
                    <img src="/img/categories/bowling.png" alt="">
                </div>

            </div>

        </div>

    </div>
</div>


@endsection