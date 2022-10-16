@extends('layouts.template')

@section('content')

    <div class="w-75 m-auto">

        {{-- business desc --}}
        <div class="mt-4">
            <h3>Apa itu <span style="color: blue;">PlayVenue</span> ?</h3>
            <div class="d-flex">
                <i class="bi bi-lightbulb"></i>
                <p class="w-75" style="margin-left: 1em;">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore, 
                    incidunt. Ullam error perferendis illum, nobis at nam et incidunt recusandae.
                </p>
            </div>
        </div>

        {{-- FAQs --}}
        <div class="questions mt-4">
            <h3>Frequently Asked <span style="color: blue;">Questions</span></h3>

            <div class="w-75 p-3 mt-3">
                <div class="d-flex">
                    <i class="bi bi-question-circle"></i>
                    <p style="margin-left: 1em;">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore, 
                        incidunt. Ullam error perferendis illum, nobis at nam et incidunt recusandae.
                    </p>
                </div>
                <div class="d-flex">
                    <i class="bi bi-lightbulb"></i>
                    <p style="margin-left: 1em;">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore, 
                        incidunt. Ullam error perferendis illum, nobis at nam et incidunt recusandae.
                    </p>
                </div>
            </div>

            <div class="w-75 p-3 mt-3">
                <div class="d-flex">
                    <i class="bi bi-question-circle"></i>
                    <p style="margin-left: 1em;">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore, 
                        incidunt. Ullam error perferendis illum, nobis at nam et incidunt recusandae.
                    </p>
                </div>
                <div class="d-flex">
                    <i class="bi bi-lightbulb"></i>
                    <p style="margin-left: 1em;">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore, 
                        incidunt. Ullam error perferendis illum, nobis at nam et incidunt recusandae.
                    </p>
                </div>
            </div>

             <div class="w-75 p-3 mt-3">
                <div class="d-flex">
                    <i class="bi bi-question-circle"></i>
                    <p style="margin-left: 1em;">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore, 
                        incidunt. Ullam error perferendis illum, nobis at nam et incidunt recusandae.
                    </p>
                </div>
                <div class="d-flex">
                    <i class="bi bi-lightbulb"></i>
                    <p style="margin-left: 1em;">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore, 
                        incidunt. Ullam error perferendis illum, nobis at nam et incidunt recusandae.
                    </p>
                </div>
            </div>

        </div>


        {{-- meet our team --}}
        <div class="mt-5">
            <h2>Meet Our <span style="color: blue">Team</span></h2>

            <div class="container w-75 m-auto mt-5">
                <div class="row justify-content-around">

                    <div class="col-md-5 team-card">

                        <!-- card header -->
                        <div class="rounded-top team-card-header">
                            <div class="photo-frame mt-3">
                                <img src="/img/team/brayan.jpg" class="rounded-circle text-center">
                            </div>
                        </div>

                        <!-- card body -->
                        <div class="rounded-bottom team-card-body">
                            <div class="pt-4">
                                <p class="fw-bold text-center" style="font-size: 1.1rem">
                                    Brayan Esten
                                    <br>
                                    CEO
                                    <br>
                                    brayan.esten@binus.ac.id
                                </p>
                            </div>
                        </div>
                    
                    </div>

                    <div class="col-md-5 team-card">

                        <!-- card header -->
                        <div class="rounded-top team-card-header">
                            <div class="photo-frame mt-3">
                                <img src="/img/team/cris.jpg" class="rounded-circle text-center">
                            </div>
                        </div>

                        <!-- card body -->
                        <div class="rounded-bottom team-card-body">
                            <div class="pt-4">
                                <p class="fw-bold text-center" style="font-size: 1.1rem">
                                    Cris Limpar
                                    <br>
                                    COO
                                    <br>
                                    cris.limpar@binus.ac.id
                                </p>
                            </div>
                        </div>
                    
                    </div>

                </div>

                <div class="row justify-content-around mt-5">

                    <div class="col-md-5 team-card">

                        <!-- card header -->
                        <div class="rounded-top team-card-header">
                            <div class="photo-frame mt-3">
                                <img src="/img/team/melvin.jpg" class="rounded-circle text-center">
                            </div>
                        </div>

                        <!-- card body -->
                        <div class="rounded-bottom team-card-body">
                            <div class="pt-4">
                                <p class="fw-bold text-center" style="font-size: 1.1rem">
                                    Melvin Siever
                                    <br>
                                    CTO
                                    <br>
                                    melvin.siever@binus.ac.id
                                </p>
                            </div>
                        </div>
                    
                    </div>


                    <div class="col-md-5 team-card">

                        <!-- card header -->
                        <div class="rounded-top team-card-header">
                            <div class="photo-frame mt-3">
                                <img src="/img/team/bryan.jpg" class="rounded-circle text-center">
                            </div>
                        </div>

                        <!-- card body -->
                        <div class="rounded-bottom team-card-body">
                            <div class="pt-4">
                                <p class="fw-bold text-center" style="font-size: 1.1rem">
                                    Bryan Sanejoyos Boenjamin
                                    <br>
                                    CMO
                                    <br>
                                    bryan.sanejoyos@binus.ac.id
                                </p>
                            </div>
                        </div>
                    
                    </div>

                </div>

            </div>
        </div>

    </div>

@endsection