@include('theme.headear')
@include('name')

<body>
    {{-- <header class="bg-dark text-white p-3">
        <nav class="container">
            <ul class="nav">
                <li class="nav-item"><a class="nav-link text-white" href="#">ACCUEIL</a></li>
                <li class="nav-item"><a class="nav-link text-white" href="#">A PROPOS</a></li>
                <li class="nav-item"><a class="nav-link text-white" href="#">SERVICES</a></li>
                <li class="nav-item"><a class="nav-link text-white" href="#">CONTACT</a></li>
            </ul>
        </nav>
    </header> --}}

    <main>
        <section class="hero text-center py-5 bg-light">
            <div class="container">
                <h1>AUTO ÉCOLE LA DIASPORA</h1>
                <p>Conduire en toute sérénité</p>
                <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        @foreach ($carousels as $carousel)
                        <div class="carousel-item @if ($loop->first) active @endif">
                            <img src="{{ asset('storage/' . $carousel->image) }}" class="d-block w-100" alt="Carousel Image">
                            <div class="carousel-caption d-none d-md-block">
                                <p>{{ $carousel->content }}</p>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </section>




        {{-- **************************************
        ************************************** --}}


        <section class="content py-5">
            <div class="container">
                @foreach ($slogans as $slogan)
                <div class="slogan mb-4">
                    <h2>{{ $slogan->title }}</h2>
                    <p>{{ $slogan->description }}</p>
                    <img src="{{ asset('storage/' . $slogan->image) }}" class="img-fluid" alt="Slogan Image">
                </div>
                @endforeach
            </div>
        </section>
        <section class="testimonials py-5 bg-light">
            <div class="container">
                <h2 class="text-center mb-4">Témoignages</h2>
                <div class="row">
                    @foreach ($testimonials as $testimonial)
                    <div class="col-md-4">
                        <div class="testimonial mb-4">
                            <img src="{{ asset('storage/' . $testimonial->image) }}" class="img-fluid rounded-circle mb-3" alt="Testimonial Image">
                            <p>{{ $testimonial->content }}</p>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
        <section class="contact py-5">
            <div class="container">
                <h2 class="text-center mb-4">Nos agences</h2>
                <div class="row">
                    @foreach ($agencies as $agency)
                    <div class="col-md-4">
                        <div class="agency mb-4">
                            <p><strong>{{ $agency->name }}</strong></p>
                            <p>{{ $agency->address }}</p>
                            <p>{{ $agency->phone }}</p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>
    </main>
    <footer class="bg-dark text-white text-center py-3">
        <p>&copy; 2024 Auto École La Diaspora. Tous droits réservés.</p>
    </footer>


</body>

</html>
