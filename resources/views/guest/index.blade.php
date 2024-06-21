@extends('layouts.guest')

@section('content')

<header>
    <div class="d-flex align-items-center bg-site-image mb-5">
        <div class="container align-items-center">
            <div class="col-lg-6">
                <h1 class="text-center text-lg-start text-gray mb-4 header-title">
                    We Help to 
                    <span class="text-site-gradient">Build</span> <br>
                    Your Dream 
                </h1>
                <p class="text-secondary mb-4 header-description">
                    We are always availed to consult on taking your higher education to the next <br>
                    level so you can stay competitive in the global world. We welcome the <br>
                    opportunity to work with you "today" for "tomorrow's" better career solutions. <br>
                </p>
                <div class="justify-content-center justify-content-lg-start mb-5">
                    <a  class="btn btn-purple px-4 py-2 me-3">
                        Apply Online <i class="fa-solid fa-arrow-right"></i>
                    </a>
                    <a href="{{ route('login') }}" class="btn">Login</a>
                    <a href="{{ route('register') }}" class="btn">Register</a>
                </div>
                <div class="fa-brands-icon justify-content-center justify-content-lg-start">
                    <a href="https://www.facebook.com/valeria.sinigur.1?locale=ru_RU" target="_blank"><i class="fa-brands fa-facebook-f"></i></a>
                    <span class="icon-space"></span>
                    <a href="https://twitter.com/?lang=rur" target="_blank"><i class="fa-brands fa-twitter"></i></a>
                    <span class="icon-space"></span>
                    <a href="https://www.instagram.com/_georgiyevna/?next=%2F" target="_blank"><i class="fa-brands fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </div>
</header>

<section >
<h2 class="text-gray text-center mb-5 text-bold"data-aos="fade-up" >Our Services</h2>
<p class="text-secondary text-center mb-5  section-description " data-aos="fade-up">Executive Trade International is an University Application Centre, guiding Bangladeshi <br>
    students to Australian, British, Canadian and Irish universities!</p>

    <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4 mb-4" data-aos="fade-up">
            <div class="card bg-card border-0 shadow">
                <div class="card-body">
                    <div class="circle-icon-violet text-gray d-flex align-items-center justify-content-center mb-5">
                        <i class="fa-solid fa-satellite-dish" style="font-size: 2rem;"></i>
                    </div>
                    <h5 class="text-gray mt-3">Career Counselling</h5>
                    <p class="text-secondary">Maiores voluptas laboriosam non dolorum perferendis fuga repellat aut. Blanditiis quos in minus. Voluptatum quia quia voluptas voluptatem vero ex possimus. Iure et consectetur dolorem dicta accusantium fugiat.</p>
                    <a  class="learn-more">Learn More <i class="fa-solid fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4" data-aos="fade-up">
            <div class="card bg-card border-0 shadow">
                <div class="card-body">
                    <div class="circle-icon-red text-gray d-flex align-items-center justify-content-center mb-5">
                        <i class="fa-solid fa-book-bookmark" style="font-size: 2rem;"></i>
                    </div>
                    <h5 class="text-gray mt-3">University Admissions</h5>
                    <p class="text-secondary">Maiores voluptas laboriosam non dolorum perferendis fuga repellat aut. Blanditiis quos in minus. Voluptatum quia quia voluptas voluptatem vero ex possimus. Iure et consectetur dolorem dicta accusantium fugiat.</p>
                    <a  class="learn-more">Learn More <i class="fa-solid fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4"data-aos="fade-up">
            <div class="card bg-card border-0 shadow">
                <div class="card-body">
                    <div class="circle-icon-green text-gray d-flex align-items-center justify-content-center mb-5">
                        <i class="fa-regular fa-square-check" style="font-size: 2rem;"></i>
                    </div>
                    <h5 class="text-gray mt-3">Visa Consultancy</h5>
                    <p class="text-secondary">Maiores voluptas laboriosam non dolorum perferendis fuga repellat aut. Blanditiis quos in minus. Voluptatum quia quia voluptas voluptatem vero ex possimus. Iure et consectetur dolorem dicta accusantium fugiat.</p>
                    <a class="learn-more">Learn More <i class="fa-solid fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4"data-aos="fade-up">
            <div class="card bg-card border-0 shadow">
                <div class="card-body">
                    <div class="circle-icon-blue text-gray d-flex align-items-center justify-content-center mb-5">
                        <i class="fa-solid fa-house" style="font-size: 2rem;"></i>
                    </div>
                    <h5 class="text-gray mt-3">Accommodation</h5>
                    <p class="text-secondary">Maiores voluptas laboriosam non dolorum perferendis fuga repellat aut. Blanditiis quos in minus. Voluptatum quia quia voluptas voluptatem vero ex possimus. Iure et consectetur dolorem dicta accusantium fugiat.</p>
                    <a  class="learn-more">Learn More <i class="fa-solid fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4"data-aos="fade-up">
            <div class="card bg-card border-0 shadow">
                <div class="card-body">
                    <div class="circle-icon-pink text-gray d-flex align-items-center justify-content-center mb-5">
                        <i class="fa-solid fa-plane" style="font-size: 2rem;"></i>
                    </div>
                    <h5 class="text-gray mt-3">Pre-Departure Briefing</h5>
                    <p class="text-secondary">Maiores voluptas laboriosam non dolorum perferendis fuga repellat aut. Blanditiis quos in minus. Voluptatum quia quia voluptas voluptatem vero ex possimus. Iure et consectetur dolorem dicta accusantium fugiat.</p>
                    <a  class="learn-more">Learn More <i class="fa-solid fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="news my-5 py-5 bg-gray" data-aos="fade-up">
  <h2 class="text-gray text-center mb-5 text-bold">News</h2>
  <p class="text-secondary text-center mb-5  section-description">
    Sunt autem nusquam hoc epicurus in gravissimo bello animadversionis metu degendae <br>
    praesidia firmissima. Torquatos nostros? quos tu paulo ante cum teneam sententiam, quid bonum esse vult. <br>
  </p>

@endsection