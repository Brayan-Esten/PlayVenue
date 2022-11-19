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
                    <a href="#badminton">
                        <img src="/img/categories/badmin.png" alt="">
                    </a>
                </div>

                <div class="category">
                    <a href="#basket">
                        <img src="/img/categories/basket.png" alt="">
                    </a>
                </div>

                <div class="category">
                    <a href="#voli">
                        <img src="/img/categories/voli.png" alt="">
                    </a>
                </div>

            </div>

            <div class="row mt-3">

                <div class="category">
                    <a href="#renang">
                        <img src="/img/categories/renang.png" alt="">
                    </a>
                </div>

                <div class="category">
                    <a href="#futsal">
                        <img src="/img/categories/futsal.png" alt="">
                    </a>
                </div>

                <div class="category">
                    <a href="#bowling">
                        <img src="/img/categories/bowling.png" alt="">
                    </a>
                </div>

            </div>

        </div>

    </div>

</div>

<br>

<div class="mt-5">
    
    <div class="section-header p-3">
        <h4 class="ms-2">
            Badminton
        </h4>
    </div>

    <div id="badminton" class="carousel slide mt-3" data-bs-interval="false">

        <div class="carousel-inner p-4">

            @for($i = 0; $i < 10; $i++)
            <div class="carousel-item @if($i == 0) active @endif">

                <div class="card map-card">
                    
                    <div id="map-container-google-1" class="z-depth-1-half map-container" style="height: 500px; width: 100%">
                        <iframe src="https://maps.google.com/maps?q=Lapangan%20Bulutangkis%20Talenta&t=&z=19&ie=UTF8&iwloc=&output=embed" frameborder="0"
                        style="border:0" allowfullscreen></iframe>
                    </div>
                    
                    <div class="card-body closed px-0">
                        
                        <div class="button px-1 mt-2">
                            <a class="btn btn-floating btn-lg living-coral text-light float-end" style="margin-right: .75em;">
                                <i class="bi bi-caret-up-fill"></i>
                            </a>
                        </div>

                        <div class="bg-white px-4 pb-4 pt-3">

                            <h5 class="card-title living-coral-text">Lapangan Badminton Talenta</h5>
                            <div class="d-flex align-items-center justify-content-between living-coral-text">
                                <h6 class="card-subtitle font-weight-light">Badminton</h6>
                                <h6 class="font-small font-weight-light">
                                    <button class="btn living-coral text-white">Book</button>
                                </h6>
                            </div>
            
                            <hr>

                            <div class="d-flex justify-content-evenly text-uppercase living-coral-text">
                                <div class="d-flex flex-column align-items-center">
                                    <i class="bi bi-telephone"></i>
                                    <p class="mb-0">Call</p>
                                </div>
                                <div class="d-flex flex-column align-items-center">
                                    <i class="bi bi-whatsapp"></i>
                                    <p class="mb-0">WA</p>
                                </div>
                            </div>

                            <hr>
                            <table class="table table-borderless">
                                <tbody>
                                    <tr>
                                        <th>
                                            <i class="bi bi-geo-alt-fill living-coral-text"></i>
                                        </th>
                                        <td>
                                            Jl. Sahabat Baru No.92 Daerah Khusus Ibukota Jakarta 11510, Indonesia
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            <i class="bi bi-clock living-coral-text"></i>
                                        </th>
                                        <td class="pb-3 pt-2">
                                            Opens 10 AM | Closed 9 PM
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            <i class="bi bi-cash living-coral-text">
                                        </th>
                                        <td>
                                            IDR 65K - IDR 90K
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
            @endfor

        </div>
        
        <button class="carousel-control-prev" type="button" data-bs-slide="prev">
            <i class="bi bi-chevron-left"></i>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-slide="next">
            <i class="bi bi-chevron-right"></i>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

</div>

<br>

<div class="mt-5">
    
    <div class="section-header p-3">
        <h4 class="ms-2">
            Voli
        </h4>
    </div>

    <div id="volley" class="carousel slide mt-3" data-bs-interval="false">

        <div class="carousel-inner p-4">

            @for($i = 0; $i < 10; $i++)
            <div class="carousel-item @if($i == 0) active @endif">

                <div class="card map-card">
                    
                    <div id="map-container-google-1" class="z-depth-1-half map-container" style="height: 500px; width: 100%">
                        <iframe src="https://maps.google.com/maps?q=Lapangan%20Bulutangkis%20Talenta&t=&z=19&ie=UTF8&iwloc=&output=embed" frameborder="0"
                        style="border:0" allowfullscreen></iframe>
                    </div>
                    
                    <div class="card-body closed px-0">
                        
                        <div class="button px-1 mt-2">
                            <a class="btn btn-floating btn-lg living-coral text-light float-end" style="margin-right: .75em;">
                                <i class="bi bi-caret-up-fill"></i>
                            </a>
                        </div>

                        <div class="bg-white px-4 pb-4 pt-3">

                            <h5 class="card-title living-coral-text">Lapangan Voli Talenta</h5>
                            <div class="d-flex align-items-center justify-content-between living-coral-text">
                                <h6 class="card-subtitle font-weight-light">Voli</h6>
                                <h6 class="font-small font-weight-light">
                                    <button class="btn living-coral text-white">Book</button>
                                </h6>
                            </div>
            
                            <hr>

                            <div class="d-flex justify-content-evenly text-uppercase living-coral-text">
                                <div class="d-flex flex-column align-items-center">
                                    <i class="bi bi-telephone"></i>
                                    <p class="mb-0">Call</p>
                                </div>
                                <div class="d-flex flex-column align-items-center">
                                    <i class="bi bi-whatsapp"></i>
                                    <p class="mb-0">WA</p>
                                </div>
                            </div>

                            <hr>
                            <table class="table table-borderless">
                                <tbody>
                                    <tr>
                                        <th>
                                            <i class="bi bi-geo-alt-fill living-coral-text"></i>
                                        </th>
                                        <td>
                                            Jl. Sahabat Baru No.92 Daerah Khusus Ibukota Jakarta 11510, Indonesia
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            <i class="bi bi-clock living-coral-text"></i>
                                        </th>
                                        <td class="pb-3 pt-2">
                                            Opens 10 AM | Closed 9 PM
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            <i class="bi bi-cash living-coral-text">
                                        </th>
                                        <td>
                                            IDR 65K - IDR 90K
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
            @endfor

        </div>
        
        <button class="carousel-control-prev" type="button" data-bs-slide="prev">
            <i class="bi bi-chevron-left"></i>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-slide="next">
            <i class="bi bi-chevron-right"></i>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

</div>

<br>

<div class="mt-5">
    
    <div class="section-header p-3">
        <h4 class="ms-2">
            Basket
        </h4>
    </div>

    <div id="basket" class="carousel slide mt-3" data-bs-interval="false">

        <div class="carousel-inner p-4">

            @for($i = 0; $i < 10; $i++)
            <div class="carousel-item @if($i == 0) active @endif">

                <div class="card map-card">
                    
                    <div id="map-container-google-1" class="z-depth-1-half map-container" style="height: 500px; width: 100%">
                        <iframe src="https://maps.google.com/maps?q=Lapangan%20Bulutangkis%20Talenta&t=&z=19&ie=UTF8&iwloc=&output=embed" frameborder="0"
                        style="border:0" allowfullscreen></iframe>
                    </div>
                    
                    <div class="card-body closed px-0">
                        
                        <div class="button px-1 mt-2">
                            <a class="btn btn-floating btn-lg living-coral text-light float-end" style="margin-right: .75em;">
                                <i class="bi bi-caret-up-fill"></i>
                            </a>
                        </div>

                        <div class="bg-white px-4 pb-4 pt-3">

                            <h5 class="card-title living-coral-text">Lapangan Basket Talenta</h5>
                            <div class="d-flex align-items-center justify-content-between living-coral-text">
                                <h6 class="card-subtitle font-weight-light">Basket</h6>
                                <h6 class="font-small font-weight-light">
                                    <button class="btn living-coral text-white">Book</button>
                                </h6>
                            </div>
            
                            <hr>

                            <div class="d-flex justify-content-evenly text-uppercase living-coral-text">
                                <div class="d-flex flex-column align-items-center">
                                    <i class="bi bi-telephone"></i>
                                    <p class="mb-0">Call</p>
                                </div>
                                <div class="d-flex flex-column align-items-center">
                                    <i class="bi bi-whatsapp"></i>
                                    <p class="mb-0">WA</p>
                                </div>
                            </div>

                            <hr>
                            <table class="table table-borderless">
                                <tbody>
                                    <tr>
                                        <th>
                                            <i class="bi bi-geo-alt-fill living-coral-text"></i>
                                        </th>
                                        <td>
                                            Jl. Sahabat Baru No.92 Daerah Khusus Ibukota Jakarta 11510, Indonesia
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            <i class="bi bi-clock living-coral-text"></i>
                                        </th>
                                        <td class="pb-3 pt-2">
                                            Opens 10 AM | Closed 9 PM
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            <i class="bi bi-cash living-coral-text">
                                        </th>
                                        <td>
                                            IDR 65K - IDR 90K
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
            @endfor

        </div>
        
        <button class="carousel-control-prev" type="button" data-bs-slide="prev">
            <i class="bi bi-chevron-left"></i>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-slide="next">
            <i class="bi bi-chevron-right"></i>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

</div>

<br>

<div class="mt-5">
    
    <div class="section-header p-3">
        <h4 class="ms-2">
            Renang
        </h4>
    </div>

    <div id="swim" class="carousel slide mt-3" data-bs-interval="false">

        <div class="carousel-inner p-4">

            @for($i = 0; $i < 10; $i++)
            <div class="carousel-item @if($i == 0) active @endif">

                <div class="card map-card">
                    
                    <div id="map-container-google-1" class="z-depth-1-half map-container" style="height: 500px; width: 100%">
                        <iframe src="https://maps.google.com/maps?q=Lapangan%20Bulutangkis%20Talenta&t=&z=19&ie=UTF8&iwloc=&output=embed" frameborder="0"
                        style="border:0" allowfullscreen>
                        </iframe>
                    </div>
                    
                    <div class="card-body closed px-0">
                        
                        <div class="button px-1 mt-2">
                            <a class="btn btn-floating btn-lg living-coral text-light float-end" style="margin-right: .75em;">
                                <i class="bi bi-caret-up-fill"></i>
                            </a>
                        </div>

                        <div class="bg-white px-4 pb-4 pt-3">

                            <h5 class="card-title living-coral-text">Swimming Pool Talenta</h5>
                            <div class="d-flex align-items-center justify-content-between living-coral-text">
                                <h6 class="card-subtitle font-weight-light">Renang</h6>
                                <h6 class="font-small font-weight-light">
                                    <button class="btn living-coral text-white">Book</button>
                                </h6>
                            </div>
            
                            <hr>

                            <div class="d-flex justify-content-evenly text-uppercase living-coral-text">
                                <div class="d-flex flex-column align-items-center">
                                    <i class="bi bi-telephone"></i>
                                    <p class="mb-0">Call</p>
                                </div>
                                <div class="d-flex flex-column align-items-center">
                                    <i class="bi bi-whatsapp"></i>
                                    <p class="mb-0">WA</p>
                                </div>
                            </div>

                            <hr>
                            <table class="table table-borderless">
                                <tbody>
                                    <tr>
                                        <th>
                                            <i class="bi bi-geo-alt-fill living-coral-text"></i>
                                        </th>
                                        <td>
                                            Jl. Sahabat Baru No.92 Daerah Khusus Ibukota Jakarta 11510, Indonesia
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            <i class="bi bi-clock living-coral-text"></i>
                                        </th>
                                        <td class="pb-3 pt-2">
                                            Opens 10 AM | Closed 9 PM
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            <i class="bi bi-cash living-coral-text">
                                        </th>
                                        <td>
                                            IDR 65K - IDR 90K
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
            @endfor

        </div>
        
        <button class="carousel-control-prev" type="button" data-bs-slide="prev">
            <i class="bi bi-chevron-left"></i>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-slide="next">
            <i class="bi bi-chevron-right"></i>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

</div>

<br>

<div class="mt-5">
    
    <div class="section-header p-3">
        <h4 class="ms-2">
            Futsal
        </h4>
    </div>

    <div id="futsal" class="carousel slide mt-3" data-bs-interval="false">

        <div class="carousel-inner p-4">

            @for($i = 0; $i < 10; $i++)
            <div class="carousel-item @if($i == 0) active @endif">

                <div class="card map-card">
                    
                    <div id="map-container-google-1" class="z-depth-1-half map-container" style="height: 500px; width: 100%">
                        <iframe src="https://maps.google.com/maps?q=Lapangan%20Bulutangkis%20Talenta&t=&z=19&ie=UTF8&iwloc=&output=embed" frameborder="0"
                        style="border:0" allowfullscreen></iframe>
                    </div>
                    
                    <div class="card-body closed px-0">
                        
                        <div class="button px-1 mt-2">
                            <a class="btn btn-floating btn-lg living-coral text-light float-end" style="margin-right: .75em;">
                                <i class="bi bi-caret-up-fill"></i>
                            </a>
                        </div>

                        <div class="bg-white px-4 pb-4 pt-3">

                            <h5 class="card-title living-coral-text">Lapangan Futsal Talenta</h5>
                            <div class="d-flex align-items-center justify-content-between living-coral-text">
                                <h6 class="card-subtitle font-weight-light">Futsal</h6>
                                <h6 class="font-small font-weight-light">
                                    <button class="btn living-coral text-white">Book</button>
                                </h6>
                            </div>
            
                            <hr>

                            <div class="d-flex justify-content-evenly text-uppercase living-coral-text">
                                <div class="d-flex flex-column align-items-center">
                                    <i class="bi bi-telephone"></i>
                                    <p class="mb-0">Call</p>
                                </div>
                                <div class="d-flex flex-column align-items-center">
                                    <i class="bi bi-whatsapp"></i>
                                    <p class="mb-0">WA</p>
                                </div>
                            </div>

                            <hr>
                            <table class="table table-borderless">
                                <tbody>
                                    <tr>
                                        <th>
                                            <i class="bi bi-geo-alt-fill living-coral-text"></i>
                                        </th>
                                        <td>
                                            Jl. Sahabat Baru No.92 Daerah Khusus Ibukota Jakarta 11510, Indonesia
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            <i class="bi bi-clock living-coral-text"></i>
                                        </th>
                                        <td class="pb-3 pt-2">
                                            Opens 10 AM | Closed 9 PM
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            <i class="bi bi-cash living-coral-text">
                                        </th>
                                        <td>
                                            IDR 65K - IDR 90K
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
            @endfor

        </div>
        
        <button class="carousel-control-prev" type="button" data-bs-slide="prev">
            <i class="bi bi-chevron-left"></i>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-slide="next">
            <i class="bi bi-chevron-right"></i>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

</div>

<br>

<div class="mt-5">
    
    <div class="section-header p-3">
        <h4 class="ms-2">
            Bowling
        </h4>
    </div>

    <div id="bowling" class="carousel slide mt-3" data-bs-interval="false">

        <div class="carousel-inner p-4">

            @for($i = 0; $i < 10; $i++)
            <div class="carousel-item @if($i == 0) active @endif">

                <div class="card map-card">
                    
                    <div id="map-container-google-1" class="z-depth-1-half map-container" style="height: 500px; width: 100%">
                        <iframe src="https://maps.google.com/maps?q=Lapangan%20Bulutangkis%20Talenta&t=&z=19&ie=UTF8&iwloc=&output=embed" frameborder="0"
                        style="border:0" allowfullscreen></iframe>
                    </div>
                    
                    <div class="card-body closed px-0">
                        
                        <div class="button px-1 mt-2">
                            <a class="btn btn-floating btn-lg living-coral text-light float-end" style="margin-right: .75em;">
                                <i class="bi bi-caret-up-fill"></i>
                            </a>
                        </div>

                        <div class="bg-white px-4 pb-4 pt-3">

                            <h5 class="card-title living-coral-text">Arena Bowling Talenta</h5>
                            <div class="d-flex align-items-center justify-content-between living-coral-text">
                                <h6 class="card-subtitle font-weight-light">Bowling</h6>
                                <h6 class="font-small font-weight-light">
                                    <button class="btn living-coral text-white">Book</button>
                                </h6>
                            </div>
            
                            <hr>

                            <div class="d-flex justify-content-evenly text-uppercase living-coral-text">
                                <div class="d-flex flex-column align-items-center">
                                    <i class="bi bi-telephone"></i>
                                    <p class="mb-0">Call</p>
                                </div>
                                <div class="d-flex flex-column align-items-center">
                                    <i class="bi bi-whatsapp"></i>
                                    <p class="mb-0">WA</p>
                                </div>
                            </div>

                            <hr>
                            <table class="table table-borderless">
                                <tbody>
                                    <tr>
                                        <th>
                                            <i class="bi bi-geo-alt-fill living-coral-text"></i>
                                        </th>
                                        <td>
                                            Jl. Sahabat Baru No.92 Daerah Khusus Ibukota Jakarta 11510, Indonesia
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            <i class="bi bi-clock living-coral-text"></i>
                                        </th>
                                        <td class="pb-3 pt-2">
                                            Opens 10 AM | Closed 9 PM
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            <i class="bi bi-cash living-coral-text">
                                        </th>
                                        <td>
                                            IDR 65K - IDR 90K
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
            @endfor

        </div>
        
        <button class="carousel-control-prev" type="button" data-bs-slide="prev">
            <i class="bi bi-chevron-left"></i>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-slide="next">
            <i class="bi bi-chevron-right"></i>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

</div>

@endsection