@include('template.header')

<!-- Carousel Start -->
<div class="container-fluid p-0 wow fadeIn" data-wow-delay="0.1s">
    <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            {{-- <div class="carousel-item active">
                <img class="w-100" src="{{ asset('assets/img/carousel-1.jpg') }}" alt="Image">
                <div class="carousel-caption">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-7">
                                <h1 class="display-2 text-light mb-5 animated slideInDown">Learn To Drive With
                                    Confidence</h1>
                                <a href="" class="btn btn-primary py-sm-3 px-sm-5">Learn More</a>
                                <a href="" class="btn btn-light py-sm-3 px-sm-5 ms-3">Our Courses</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}


            @foreach ($carousels as $carousel)
            <div class="carousel-item @if ($loop->first) active @endif">
                <img class="w-100" src="{{ asset('storage/' . $carousel->image) }}" alt="Carousel Image">
                <div class="carousel-caption">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-7">
                                <h1 class="display-2 text-light mb-5 animated slideInDown">{{ $carousel->title }}</h1>
                                <h3 class="text-light mb-2">{{ $carousel->description }}</h3>
                                <a href="{{ $carousel->link1_url }}" class="btn btn-primary py-sm-3 px-sm-5">Learn more{{ $carousel->link1_text }}</a>
                                {{-- <a href="{{ $carousel->link2_url }}" class="btn btn-light py-sm-3 px-sm-5 ms-3">{{ $carousel->link2_text }}</a> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach

            {{-- <div class="carousel-item">
                <img class="w-100" src="{{ asset('assets/img/carousel-2.jpg') }}" alt="Image">
                <div class="carousel-caption">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-7">
                                <h1 class="display-2 text-light mb-5 animated slideInDown">Safe Driving Is Our Top
                                    Priority</h1>
                                <a href="" class="btn btn-primary py-sm-3 px-sm-5">Learn More</a>
                                <a href="" class="btn btn-light py-sm-3 px-sm-5 ms-3">Our Courses</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>
<!-- Carousel End -->

<!-- About Start -->
<div class="container-xxl py-6">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="position-relative overflow-hidden ps-5 pt-5 h-100" style="min-height: 400px;">
                    <img class="position-absolute w-100 h-100" src="{{ asset('assets/img/about-1.jpg') }}"
                        alt="" style="object-fit: cover;">
                    <img class="position-absolute top-0 start-0 bg-white pe-3 pb-3"
                        src="{{ asset('assets/img/about-2.jpg') }}" alt="" style="width: 200px; height: 200px;">
                </div>
            </div>
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="h-100">
                    <h6 class="text-primary text-uppercase mb-2">About Us</h6>
                    <h1 class="display-6 mb-4">We Help Students To Pass Test & Get A License On The First Try</h1>
                    <p>Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita
                        erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet</p>
                    <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam
                        et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat
                        amet</p>
                    <div class="row g-2 mb-4 pb-2">
                        <div class="col-sm-6">
                            <i class="fa fa-check text-primary me-2"></i>Fully Licensed
                        </div>
                        <div class="col-sm-6">
                            <i class="fa fa-check text-primary me-2"></i>Online Tracking
                        </div>
                        <div class="col-sm-6">
                            <i class="fa fa-check text-primary me-2"></i>Afordable Fee
                        </div>
                        <div class="col-sm-6">
                            <i class="fa fa-check text-primary me-2"></i>Best Trainers
                        </div>
                    </div>
                    <div class="row g-4">
                        <div class="col-sm-6">
                            <a class="btn btn-primary py-3 px-5" href="">Read More</a>
                        </div>
                        <div class="col-sm-6">
                            <a class="d-inline-flex align-items-center btn btn-outline-primary border-2 p-2"
                                href="tel:+0123456789">
                                <span class="flex-shrink-0 btn-square bg-primary">
                                    <i class="fa fa-phone-alt text-white"></i>
                                </span>
                                <span class="px-3">+012 345 6789</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About End -->

<!-- Courses Start -->
<div class="container-xxl courses my-6 py-6 pb-0">
    <div class="container">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
            <h6 class="text-primary text-uppercase mb-2">Tranding Courses</h6>
            <h1 class="display-6 mb-4">Our Courses Upskill You With Driving Training</h1>
        </div>
        <div class="container">
            <h2 class="text-center">Permis de Conduire</h2>
        
            <!-- Dropdown for Categories -->
            <div class="text-center mb-4">
                <select id="category-filter" class="form-select w-auto d-inline-block">
                    <option value="">Toutes les Catégories</option>
                    @foreach($categories as $category)
                        <option value="{{ $category }}">{{ $category }}</option>
                    @endforeach
                </select>
            </div>
        
            <div class="row g-4 justify-content-center">
                @foreach($permis as $permisItem)
                <div class="col-lg-4 col-md-6 permis-item" data-category="{{ $permisItem->categorie }}">
                    <div class="courses-item d-flex flex-column bg-white overflow-hidden h-100">
                        <div class="text-center p-4 pt-0">
                            <div class="d-inline-block bg-primary text-white fs-5 py-1 px-4 mb-4">{{ $permisItem->prix }}</div>
                            <h5 class="mb-3">{{ $permisItem->categorie }}</h5>
                            <p>{{ $permisItem->description }}</p>
                            <ol class="breadcrumb justify-content-center mb-0">
                                <li class="breadcrumb-item small"><i class="fa fa-signal text-primary me-2"></i>{{ $permisItem->niveau }}</li>
                                <li class="breadcrumb-item small"><i class="fa fa-calendar-alt text-primary me-2"></i>{{ $permisItem->duree }}</li>
                            </ol>
                        </div>
                        <div class="position-relative mt-auto">
                            <img class="img-fluid" src="{{ asset('assets/img/courses-1.jpg') }}" alt="">
                            <div class="courses-overlay">
                                <a class="btn btn-outline-primary border-2" href="">En savoir plus</a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        
           
            {{-- render-vous start --}}
            <div class="col-lg-8 my-6 mb-0 wow fadeInUp" data-wow-delay="0.1s">
                <div class="bg-primary text-center p-5">
                    <h1 class="mb-4">Make Appointment</h1>
                    <form>
                        <div class="row g-3">
                            <div class="col-sm-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control border-0" id="gname"
                                        placeholder="Gurdian Name">
                                    <label for="gname">Your Name</label>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-floating">
                                    <input type="email" class="form-control border-0" id="gmail"
                                        placeholder="Gurdian Email">
                                    <label for="gmail">Your Email</label>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control border-0" id="cname"
                                        placeholder="Child Name">
                                    <label for="cname">Courses Type</label>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control border-0" id="cage"
                                        placeholder="Child Age">
                                    <label for="cage">Car Type</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control border-0" placeholder="Leave a message here" id="message" style="height: 100px"></textarea>
                                    <label for="message">Message</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-dark w-100 py-3" type="submit">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            {{-- render-vous end --}}




        </div>
    </div>
</div>
<!-- Courses End -->

<!--pourquoi nous?-->
<!-- Features Start -->
<div class="container-xxl py-6">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="text-primary text-uppercase mb-2">Why Choose Us!</h6>
                <h1 class="display-6 mb-4">Best Driving Training Agency In Your City</h1>
                <p class="mb-5">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et
                    eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet</p>
                <div class="row gy-5 gx-4">
                    <div class="col-sm-6 wow fadeIn" data-wow-delay="0.1s">
                        <div class="d-flex align-items-center mb-3">
                            <div class="flex-shrink-0 btn-square bg-primary me-3">
                                <i class="fa fa-check text-white"></i>
                            </div>
                            <h5 class="mb-0">Fully Licensed</h5>
                        </div>
                        <span>Magna sea eos sit dolor, ipsum amet ipsum lorem diam eos</span>
                    </div>
                    <div class="col-sm-6 wow fadeIn" data-wow-delay="0.2s">
                        <div class="d-flex align-items-center mb-3">
                            <div class="flex-shrink-0 btn-square bg-primary me-3">
                                <i class="fa fa-check text-white"></i>
                            </div>
                            <h5 class="mb-0">Online Tracking</h5>
                        </div>
                        <span>Magna sea eos sit dolor, ipsum amet ipsum lorem diam eos</span>
                    </div>
                    <div class="col-sm-6 wow fadeIn" data-wow-delay="0.3s">
                        <div class="d-flex align-items-center mb-3">
                            <div class="flex-shrink-0 btn-square bg-primary me-3">
                                <i class="fa fa-check text-white"></i>
                            </div>
                            <h5 class="mb-0">Afordable Fee</h5>
                        </div>
                        <span>Magna sea eos sit dolor, ipsum amet ipsum lorem diam eos</span>
                    </div>
                    <div class="col-sm-6 wow fadeIn" data-wow-delay="0.4s">
                        <div class="d-flex align-items-center mb-3">
                            <div class="flex-shrink-0 btn-square bg-primary me-3">
                                <i class="fa fa-check text-white"></i>
                            </div>
                            <h5 class="mb-0">Best Trainers</h5>
                        </div>
                        <span>Magna sea eos sit dolor, ipsum amet ipsum lorem diam eos</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="position-relative overflow-hidden pe-5 pt-5 h-100" style="min-height: 400px;">
                    <img class="position-absolute w-100 h-100" src="{{ asset('assets/img/about-1.jpg') }}"
                        alt="" style="object-fit: cover;">
                    <img class="position-absolute top-0 end-0 bg-white ps-3 pb-3"
                        src="{{ asset('assets/img/about-2.jpg') }}" alt=""
                        style="width: 200px; height: 200px">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Features End -->
<!--pourquoi nous?-->



<!-- Testimonial Start -->
<div class="container-xxl py-6">
    <div class="container">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
            <h6 class="text-primary text-uppercase mb-2">Testimonial</h6>
            <h1 class="display-6 mb-4">What Our Clients Say!</h1>
        </div>
        {{-- <div class="row justify-content-center">
            <div class="col-lg-8 wow fadeInUp" data-wow-delay="0.1s">
                <div class="owl-carousel testimonial-carousel">
                    <div class="testimonial-item text-center">
                        <div class="position-relative mb-5">
                            <img class="img-fluid rounded-circle mx-auto"
                                src="{{ asset('assets/img/testimonial-1.jpg') }}" alt="">
                            <div class="position-absolute top-100 start-50 translate-middle d-flex align-items-center justify-content-center bg-white rounded-circle"
                                style="width: 60px; height: 60px;">
                                <i class="fa fa-quote-left fa-2x text-primary"></i>
                            </div>
                        </div>



                        <p class="fs-4">Dolores sed duo clita tempor justo dolor et stet lorem kasd labore dolore
                            lorem ipsum. At lorem lorem magna ut et, nonumy et labore et tempor diam tempor erat.</p>
                        <hr class="w-25 mx-auto">
                        <h5>Client Name</h5>
                        <span>Profession</span>
                    </div>
                    <div class="testimonial-item text-center">
                        <div class="position-relative mb-5">
                            <img class="img-fluid rounded-circle mx-auto"
                                src="{{ asset('assets/img/testimonial-2.jpg') }}" alt="">
                            <div class="position-absolute top-100 start-50 translate-middle d-flex align-items-center justify-content-center bg-white rounded-circle"
                                style="width: 60px; height: 60px;">
                                <i class="fa fa-quote-left fa-2x text-primary"></i>
                            </div>
                        </div>
                        <p class="fs-4">Dolores sed duo clita tempor justo dolor et stet lorem kasd labore dolore
                            lorem ipsum. At lorem lorem magna ut et, nonumy et labore et tempor diam tempor erat.</p>
                        <hr class="w-25 mx-auto">
                        <h5>Client Name</h5>
                        <span>Profession</span>
                    </div>
                    <div class="testimonial-item text-center">
                        <div class="position-relative mb-5">
                            <img class="img-fluid rounded-circle mx-auto"
                                src="{{ asset('assets/img/testimonial-3.jpg') }}" alt="">
                            <div class="position-absolute top-100 start-50 translate-middle d-flex align-items-center justify-content-center bg-white rounded-circle"
                                style="width: 60px; height: 60px;">
                                <i class="fa fa-quote-left fa-2x text-primary"></i>
                            </div>
                        </div>
                        <p class="fs-4">Dolores sed duo clita tempor justo dolor et stet lorem kasd labore dolore
                            lorem ipsum. At lorem lorem magna ut et, nonumy et labore et tempor diam tempor erat.</p>
                        <hr class="w-25 mx-auto">
                        <h5>Client Name</h5>
                        <span>Profession</span>
                    </div>
                </div>
            </div>
        </div> --}}

        <div class="row justify-content-center">
            <div class="col-lg-8 wow fadeInUp" data-wow-delay="0.1s">
                <div class="owl-carousel testimonial-carousel">
                    @foreach ($testimonials as $testimonial)
                    <div class="testimonial-item text-center">
                        <div class="position-relative mb-5">
                            <img class="img-fluid rounded-circle mx-auto" src="{{ asset('storage/' . $testimonial->image) }}" alt="">
                            <div class="position-absolute top-100 start-50 translate-middle d-flex align-items-center justify-content-center bg-white rounded-circle" style="width: 60px; height: 60px;">
                                <i class="fa fa-quote-left fa-2x text-primary"></i>
                            </div>
                        </div>

                         <h5>{{ $testimonial->author }}</h5>
                        <p class="fs-4">{{ $testimonial->content }}</p>
                        <hr class="w-25 mx-auto">
                        <span>{{ $testimonial->profession }}</span>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Testimonial End -->



@include('template.footer')
</body>
