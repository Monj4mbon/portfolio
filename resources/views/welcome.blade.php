@extends('main.template')

@section('content')  
<!-- Page Content-->
<div class="container-fluid p-0">
    <!-- Presentation-->
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
            @foreach ($presentationData as $presentation)
                <div>
                    <h3>{{$presentation->title}}</h3>
                    <p class="lead mb-5">{{$presentation->content}}</p>
                </div>
            @endforeach
        </div>
    </section>
    <hr class="m-0" />
    <!-- Project-->
    <div>
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
        <div>
            <div id="carouselExampleControls" class="carousel slide container" style="max-width: 50%
            ;text-align: center" data-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img class="d-block w-100" src="../../assets/img/profile.jpg" alt="First slide">
                      <div class="carousel-caption d-none d-md-block">
                        <h5>First slide</h5>
                        <p>...</p>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="../../assets/img/profile.jpg" alt="Second slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Second slide</h5>
                        <p>...</p>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="../../assets/img/profile.jpg" alt="Third slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Third slide</h5>
                        <p>...</p>
                    </div>
                  </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div>
        </div>
    </div>
    <hr class="m-0" />
    <!-- About-->
    <section class="resume-section" id="about">
        <div class="resume-section-content">
            <h2 class="mb-5">A propos :</h2>
            @foreach ($aboutData as $about)
                <div class="card mb-3">                        
                    <img src="{{$about->src}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{$about->title}}</h5>
                        <p class="card-text">{{$about->content}}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
    <hr class="m-0" />
    <!-- Tags-->
    <section class="resume-section" id="tags">
        <div class="resume-section-content">
            <h2 class="mb-5">Tags :</h2>
            <div class="subheading mb-3"></div>
            <ul class="list-inline dev-icons">
                @foreach ($showTag as $tag)
                    <li class="list-inline-item"><i class="{{$tag->HTML}}"></i></li>
                @endforeach
            </ul>
            <a href="/allTags" class="btn btn-info">Visiter les projets par Tags</a>
        </div>
    </section>
    <hr class="m-0" />
    <!-- Contact-->
    <div>
        <section class="resume-section mb-0 pb-0" id="contact">
            <div class="my-3 p-3 bg-white rounded shadow-sm">
                <h2 class="border-bottom border-gray pb-2 mb-0">Contact</h2>
                <form action="{{route('mails.store')}}" method="POST" class="mt-2">   
                    @csrf         
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmailSubject1">Email subject</label>
                        <input type="text" class="form-control" id="exampleInputEmailSubject1" aria-describedby="emailHelp" placeholder="Enter email subject" name="emailSubject">
                    </div>         
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Text</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="text"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Envoyer</button>
                </form>
            </div>
        </section>
        <div class="subheading  mx-5 mb-5">
            42 Edoras, Tatooine. 0 123 45 67 89.
            <a href="mailto:name@email.com">hotmail.yahoo@gmail.com</a>
        </div>
        <div class="social-icons mx-5 mb-5">
            <a class="social-icon" href="https://www.linkedin.com/feed/"><i class="fab fa-linkedin-in"></i></a>
            <a class="social-icon" href="https://github.com/"><i class="fab fa-github"></i></a>
            <a class="social-icon" href="https://twitter.com/?lang=fr"><i class="fab fa-twitter"></i></a>
            <a class="social-icon" href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
        </div>

    </div>
</div>
@endsection