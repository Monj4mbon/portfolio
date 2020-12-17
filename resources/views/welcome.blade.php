@extends('main.template')

@section('content')  
<!-- Page Content-->
<div class="container-fluid p-0">
    <!-- About-->
    <section class="resume-section" id="presentation">
        <div class="resume-section-content">
            <h1 class="mb-0">
                Turneer
                <span class="text-primary">Valentin</span>
            </h1>
            <div class="subheading mb-5">
                42 Edoras, Tatooine. 0 123 45 67 89.
                <a href="mailto:name@email.com">hotmail.yahoo@gmail.com</a>
            </div>
            <p class="lead mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam sed nulla quasi officia repellat temporibus quae voluptatibus ex quis quam quidem iure deleniti harum, earum voluptates, eos voluptatum vitae perspiciatis.</p>
        </div>
    </section>
    <hr class="m-0" />
    <!-- Experience-->
    <section class="resume-section" id="project">
        <div class="resume-section-content d-flex flex-column">
            <h2 class="mb-5">Projects :</h2>
            <div class="row">
                @foreach ($projectData as $project)
                    <div class="col-4">
                        <div class="card text-white bg-info mb-3" style="width: 18rem;">
                            <img width="200px" height="200px" src="{{asset('images/' .$project->src)}}" class="card-img-top">
                            <div class="card-header">
                                <h5 class="card-title">{{$project->name}}</h5>
                            </div>
                            <div class="card-body">
                              <p class="card-text">{{$project->text}}</p>
                            </div>
                        </div>
                    </div>
                    @if ($loop->iteration % 3 == 0)
                        </div>
                        <div class="row">
                    @endif
                @endforeach
            </div>
        </div>
    </section>
    <hr class="m-0" />
    <!-- Education-->
    <section class="resume-section" id="about">
        <div class="resume-section-content">
            <h2 class="mb-5">A propos :</h2>
            <div class="card mb-3">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
              </div>
        </div>
    </section>
    <hr class="m-0" />
    <!-- Skills-->
    <section class="resume-section" id="tags">
        <div class="resume-section-content">
            <h2 class="mb-5">Tags :</h2>
            <div class="subheading mb-3"></div>
            <ul class="list-inline dev-icons">
                <li class="list-inline-item"><i class="fab fa-html5"></i></li>
                <li class="list-inline-item"><i class="fab fa-css3-alt"></i></li>
                <li class="list-inline-item"><i class="fab fa-js-square"></i></li>
                <li class="list-inline-item"><i class="fab fa-react"></i></li>
                <li class="list-inline-item"><i class="fab fa-sass"></i></li>
                <li class="list-inline-item"><i class="fab fa-wordpress"></i></li>
                <li class="list-inline-item"><i class="fab fa-npm"></i></li>
                <li class="list-inline-item"><i class="fab fa-laravel"></i></li>
                <li class="list-inline-item"><i class="fab fa-php"></i></li>
            </ul>
            <a href="/allTags" class="btn btn-info">Visiter les projets par Tags</a>
        </div>
    </section>
    <hr class="m-0" />
    <!-- Interests-->
    <section class="resume-section" id="contact">
        <div class="resume-section-content">
            <h2 class="mb-5">Contact :</h2>
            <p>Apart from being a web developer, I enjoy most of my time being outdoors. In the winter, I am an avid skier and novice ice climber. During the warmer months here in Colorado, I enjoy mountain biking, free climbing, and kayaking.</p>
            <p class="mb-0">When forced indoors, I follow a number of sci-fi and fantasy genre movies and television shows, I am an aspiring chef, and I spend a large amount of my free time exploring the latest technology advancements in the front-end web development world.</p>
        </div>
        <p></p>
        <div class="social-icons">
            <a class="social-icon" href="#"><i class="fab fa-linkedin-in"></i></a>
            <a class="social-icon" href="#"><i class="fab fa-github"></i></a>
            <a class="social-icon" href="#"><i class="fab fa-twitter"></i></a>
            <a class="social-icon" href="#"><i class="fab fa-facebook-f"></i></a>
        </div>
    </section>
</div>
@endsection