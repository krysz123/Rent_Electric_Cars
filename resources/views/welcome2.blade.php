@extends('layouts.app')
@section('content')
    <div class="container">
        <br>
        <br>
        <br>
        <div class="row row-cols-1 row-cols-md-2 g-4">
            <div class="col">
                <div class="card">
                    <img src="{{ asset('images/rental_terms.jpg') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="font-semibold text-xl text-gray-800 leading-tight">Flexible rental terms</h5>
                        <p class="card-text">We accommodate your schedule. You can rent our vehicles by the hour, day, or
                            even week. We provide competitive prices and attractive discounts for longer rental periods</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="{{ asset('images/ecofriendly.jpg') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="font-semibold text-xl text-gray-800 leading-tight">Wide range of eco-friendly vehicles
                        </h5>
                        <p class="card-text">We offer a diverse selection of electric vehicle models available in various
                            classes and sizes, providing tailored options for your preferences.We have the ideal electric
                            vehicle for any purpose, whether it's urban commuting or family excursions.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="{{ asset('images/service.jpg') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="font-semibold text-xl text-gray-800 leading-tight">Safety and professional service</h5>
                        <p class="card-text"> Our vehicle fleet undergoes regular inspections and is fully insured, ensuring
                            a safe and worry-free journey. Our friendly staff is ready to assist you and provide necessary
                            information about vehicle operation</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="{{ asset('images/rent.jpg') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="font-semibold text-xl text-gray-800 leading-tight">Convenient booking process</h5>
                        <p class="card-text">We offer a simple and convenient online booking process. You can also contact
                            us by phone or email for additional information or support. We ensure a smooth and hassle-free
                            rental experience</p>
                    </div>
                </div>
            </div>
        </div>

        <section class="team section-padding" id="team">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-header text-center pb-5">
                            <br>
                            <br>
                            <br>
                            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Our Team</h2>
                            <p>Our team consists of a group of professionals who are ready to deliver top-quality
                                services<br>
                                and create unforgettable experiences for our customers renting electric vehicles.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="d-flex justify-content-around">
                        <div class="col-12 col-md-6 col-lg-3 center">
                            <div class="card text-center">
                                <div class="card-body">
                                    <img alt="" class="img-fluid rounded-circle" src="img/team-3.jpg">
                                    <br>
                                    <h3 class="font-semibold text-xl text-gray-800 leading-tight">Konrad Rysz</h3><br>
                                    <p class="card-text">The owner of our rental service is a highly dedicated and
                                        meticulous individual who takes great pride in maintaining our fleet in excellent
                                        condition, ensuring our customers experience exceptional service and a remarkable
                                        atmosphere.</p>
                                    <p class="socials"><i class="bi bi-twitter text-dark mx-1"></i> <i
                                            class="bi bi-facebook text-dark mx-1"></i> <i
                                            class="bi bi-linkedin text-dark mx-1"></i> <i
                                            class="bi bi-instagram text-dark mx-1"></i></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="container my-5" id="contact">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Contact</h2><br>
            <form>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                        placeholder="Email">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Name</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Name">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Surname</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Surname">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Description</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
                <br>
                <button type="submit" class="btn btn-primary">Send!</button>
            </form>
        </div>

    </div>
@endsection
