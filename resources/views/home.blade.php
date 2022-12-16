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

        
        {{-- categories --}}
        <div class="col-md-5 align-self-center">

            <div class="row">

                <div class="category">
                    <a href="#badminton_section">
                        <img src="/img/categories/badmin.png" alt="">
                    </a>
                </div>

                <div class="category">
                    <a href="#basket_section">
                        <img src="/img/categories/basket.png" alt="">
                    </a>
                </div>

                <div class="category">
                    <a href="#voli_section">
                        <img src="/img/categories/voli.png" alt="">
                    </a>
                </div>

            </div>

            <div class="row mt-3">

                <div class="category">
                    <a href="#renang_section">
                        <img src="/img/categories/renang.png" alt="">
                    </a>
                </div>

                <div class="category">
                    <a href="#futsal_section">
                        <img src="/img/categories/futsal.png" alt="">
                    </a>
                </div>

                <div class="category">
                    <a href="#bowling_section">
                        <img src="/img/categories/bowling.png" alt="">
                    </a>
                </div>

            </div>

        </div>

    </div>

</div>

<br>

<div class="mt-5" id="badminton_section">
    
    <div class="section-header p-3">
        <h4 class="ms-2">
            Badminton
        </h4>
    </div>

    <div id="badminton" class="carousel slide mt-3" data-bs-interval="false">

        <div class="carousel-inner p-4">

            @for($i = 0; $i < 10; $i++)
            <div class="carousel-item @if($i == 0) active @endif">

                <div class="custom-card">

                    <div class="card__side card__side--front">

                        <img src="/img/lap_badminton.jpg" class="card-img-top" alt="..." style="height: 75%;">
                        <div class="card-body text-dark d-flex justify-content-center align-items-center"
                        style="height: 25%;">
                            <h5 class="card-title text-light">Dummy Data</>
                        </div>

                    </div>

                    <div class="card__side card__side--back p-3 d-flex flex-column align-items-center">
                        <table class="table table-borderless">
                            <tbody>
                                <tr>
                                    <th>
                                        <i class="bi bi-geo-alt-fill"></i>
                                    </th>
                                    <td>
                                        Jl. Sahabat Baru No.92 Daerah Khusus Ibukota Jakarta 11510, Indonesia
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        <i class="bi bi-clock"></i>
                                    </th>
                                    <td class="pb-3 pt-2">
                                        Opens @ 10 AM | Closes @ 9 PM
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        <i class="bi bi-cash living-coral-text">
                                    </th>
                                    <td>
                                        IDR 65K / Hour
                                    </td>
                                </tr>
                            </tbody>
                        </table>

                        <a href="#" class="custom-btn btn--white">BOOK</a>
                    </div>

                </div>

            </div>
            @endfor

        </div>
        
        <button class="carousel-control-prev" type="button" data-bs-slide="prev">
            <span><i class="bi bi-arrow-left-square-fill"></i></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-slide="next">
            <span><i class="bi bi-arrow-right-square-fill"></i></span>
        </button>
    </div>

</div>

<br>

<div class="mt-5" id="basket_section">
    
    <div class="section-header p-3">
        <h4 class="ms-2">
            Basket
        </h4>
    </div>

    <div id="basket" class="carousel slide mt-3" data-bs-interval="false">

        <div class="carousel-inner p-4">

            @for($i = 0; $i < 10; $i++)
            <div class="carousel-item @if($i == 0) active @endif">

                <div class="custom-card">

                    <div class="card__side card__side--front">

                        <img src="/img/lap_basket.jpg" class="card-img-top" alt="..." style="height: 75%;">
                        <div class="card-body text-dark d-flex justify-content-center align-items-center"
                        style="height: 25%;">
                            <h5 class="card-title text-light">Dummy Data</>
                        </div>

                    </div>

                    <div class="card__side card__side--back p-3 d-flex flex-column align-items-center">
                        <table class="table table-borderless">
                            <tbody>
                                <tr>
                                    <th>
                                        <i class="bi bi-geo-alt-fill"></i>
                                    </th>
                                    <td>
                                        Jl. Sahabat Baru No.92 Daerah Khusus Ibukota Jakarta 11510, Indonesia
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        <i class="bi bi-clock"></i>
                                    </th>
                                    <td class="pb-3 pt-2">
                                        Opens @ 10 AM | Closes @ 9 PM
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        <i class="bi bi-cash living-coral-text">
                                    </th>
                                    <td>
                                        IDR 65K / Hour
                                    </td>
                                </tr>
                            </tbody>
                        </table>

                        <a href="#" class="custom-btn btn--white">BOOK</a>
                    </div>

                </div>

            </div>
            @endfor

        </div>
        
        <button class="carousel-control-prev" type="button" data-bs-slide="prev">
            <span><i class="bi bi-arrow-left-square-fill"></i></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-slide="next">
            <span><i class="bi bi-arrow-right-square-fill"></i></span>
        </button>
    </div>

</div>

<br>

<div class="mt-5" id="voli_section">
    
    <div class="section-header p-3">
        <h4 class="ms-2">
            Voli
        </h4>
    </div>

    <div id="volley" class="carousel slide mt-3" data-bs-interval="false">

        <div class="carousel-inner p-4">

            @for($i = 0; $i < 10; $i++)
            <div class="carousel-item @if($i == 0) active @endif">

                <div class="custom-card">

                    <div class="card__side card__side--front">

                        <img src="/img/lap_voli.jpg" class="card-img-top" alt="..." style="height: 75%;">
                        <div class="card-body text-dark d-flex justify-content-center align-items-center"
                        style="height: 25%;">
                            <h5 class="card-title text-light">Dummy Data</>
                        </div>

                    </div>

                    <div class="card__side card__side--back p-3 d-flex flex-column align-items-center">
                        <table class="table table-borderless">
                            <tbody>
                                <tr>
                                    <th>
                                        <i class="bi bi-geo-alt-fill"></i>
                                    </th>
                                    <td>
                                        Jl. Sahabat Baru No.92 Daerah Khusus Ibukota Jakarta 11510, Indonesia
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        <i class="bi bi-clock"></i>
                                    </th>
                                    <td class="pb-3 pt-2">
                                        Opens @ 10 AM | Closes @ 9 PM
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        <i class="bi bi-cash living-coral-text">
                                    </th>
                                    <td>
                                        IDR 65K / Hour
                                    </td>
                                </tr>
                            </tbody>
                        </table>

                        <a href="#" class="custom-btn btn--white">BOOK</a>
                    </div>

                </div>

            </div>
            @endfor

        </div>
        
        <button class="carousel-control-prev" type="button" data-bs-slide="prev">
            <span><i class="bi bi-arrow-left-square-fill"></i></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-slide="next">
            <span><i class="bi bi-arrow-right-square-fill"></i></span>
        </button>
    </div>

</div>

<br>

<div class="mt-5" id="renang_section">
    
    <div class="section-header p-3">
        <h4 class="ms-2">
            Renang
        </h4>
    </div>

    <div id="swim" class="carousel slide mt-3" data-bs-interval="false">

        <div class="carousel-inner p-4">

            @for($i = 0; $i < 10; $i++)
            <div class="carousel-item @if($i == 0) active @endif">

                <div class="custom-card">

                    <div class="card__side card__side--front">

                        <img src="/img/lap_renang.jpg" class="card-img-top" alt="..." style="height: 75%;">
                        <div class="card-body text-dark d-flex justify-content-center align-items-center"
                        style="height: 25%;">
                            <h5 class="card-title text-light">Dummy Data</>
                        </div>

                    </div>

                    <div class="card__side card__side--back p-3 d-flex flex-column align-items-center">
                        <table class="table table-borderless">
                            <tbody>
                                <tr>
                                    <th>
                                        <i class="bi bi-geo-alt-fill"></i>
                                    </th>
                                    <td>
                                        Jl. Sahabat Baru No.92 Daerah Khusus Ibukota Jakarta 11510, Indonesia
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        <i class="bi bi-clock"></i>
                                    </th>
                                    <td class="pb-3 pt-2">
                                        Opens @ 10 AM | Closes @ 9 PM
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        <i class="bi bi-cash living-coral-text">
                                    </th>
                                    <td>
                                        IDR 65K / Hour
                                    </td>
                                </tr>
                            </tbody>
                        </table>

                        <a href="#" class="custom-btn btn--white">BOOK</a>
                    </div>

                </div>

            </div>
            @endfor

        </div>
        
        <button class="carousel-control-prev" type="button" data-bs-slide="prev">
            <span><i class="bi bi-arrow-left-square-fill"></i></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-slide="next">
            <span><i class="bi bi-arrow-right-square-fill"></i></span>
        </button>
    </div>

</div>

<br>

<div class="mt-5" id="futsal_section">
    
    <div class="section-header p-3">
        <h4 class="ms-2">
            Futsal
        </h4>
    </div>

    <div id="futsal" class="carousel slide mt-3" data-bs-interval="false">

        <div class="carousel-inner p-4">

            @for($i = 0; $i < 10; $i++)
            <div class="carousel-item @if($i == 0) active @endif">

                <div class="custom-card">

                    <div class="card__side card__side--front">

                        <img src="/img/lap_futsal.jpg" class="card-img-top" alt="..." style="height: 75%;">
                        <div class="card-body text-dark d-flex justify-content-center align-items-center"
                        style="height: 25%;">
                            <h5 class="card-title text-light">Dummy Data</>
                        </div>

                    </div>

                    <div class="card__side card__side--back p-3 d-flex flex-column align-items-center">
                        <table class="table table-borderless">
                            <tbody>
                                <tr>
                                    <th>
                                        <i class="bi bi-geo-alt-fill"></i>
                                    </th>
                                    <td>
                                        Jl. Sahabat Baru No.92 Daerah Khusus Ibukota Jakarta 11510, Indonesia
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        <i class="bi bi-clock"></i>
                                    </th>
                                    <td class="pb-3 pt-2">
                                        Opens @ 10 AM | Closes @ 9 PM
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        <i class="bi bi-cash living-coral-text">
                                    </th>
                                    <td>
                                        IDR 65K / Hour
                                    </td>
                                </tr>
                            </tbody>
                        </table>

                        <a href="#" class="custom-btn btn--white">BOOK</a>
                    </div>

                </div>

            </div>
            @endfor

        </div>
        
        <button class="carousel-control-prev" type="button" data-bs-slide="prev">
            <span><i class="bi bi-arrow-left-square-fill"></i></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-slide="next">
            <span><i class="bi bi-arrow-right-square-fill"></i></span>
        </button>
    </div>

</div>

<br>

<div class="mt-5" id="bowling_section">
    
    <div class="section-header p-3">
        <h4 class="ms-2">
            Bowling
        </h4>
    </div>

    <div id="bowling" class="carousel slide mt-3" data-bs-interval="false">

        <div class="carousel-inner p-4">

            @for($i = 0; $i < 10; $i++)
            <div class="carousel-item @if($i == 0) active @endif">

                <div class="custom-card">

                    <div class="card__side card__side--front">

                        <img src="/img/lap_bowling.jpg" class="card-img-top" alt="..." style="height: 75%;">
                        <div class="card-body text-dark d-flex justify-content-center align-items-center"
                        style="height: 25%;">
                            <h5 class="card-title text-light">Dummy Data</>
                        </div>

                    </div>

                    <div class="card__side card__side--back p-3 d-flex flex-column align-items-center">
                        <table class="table table-borderless">
                            <tbody>
                                <tr>
                                    <th>
                                        <i class="bi bi-geo-alt-fill"></i>
                                    </th>
                                    <td>
                                        Jl. Sahabat Baru No.92 Daerah Khusus Ibukota Jakarta 11510, Indonesia
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        <i class="bi bi-clock"></i>
                                    </th>
                                    <td class="pb-3 pt-2">
                                        Opens @ 10 AM | Closes @ 9 PM
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        <i class="bi bi-cash living-coral-text">
                                    </th>
                                    <td>
                                        IDR 65K / Hour
                                    </td>
                                </tr>
                            </tbody>
                        </table>

                        <a href="#" class="custom-btn btn--white">BOOK</a>
                    </div>

                </div>

            </div>
            @endfor

        </div>
        
        <button class="carousel-control-prev" type="button" data-bs-slide="prev">
            <span><i class="bi bi-arrow-left-square-fill"></i></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-slide="next">
            <span><i class="bi bi-arrow-right-square-fill"></i></span>
        </button>
    </div>

</div>

<br>

@endsection