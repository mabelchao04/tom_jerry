@extends('layouts.app')

@section('content')
<link href="css/home.css" rel="stylesheet">
<div class="container-fluid">
    <!-- 廣告大屏幕 -->
    <div class="row">
        <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="/images/animal-7.jpg" class="img-fluid" style="max-width:100%;height:auto;" alt="Responsive image">
                </div>
                <div class="carousel-item">
                    <img src="/images/animal-8.jpg" class="img-fluid" style="max-width:100%;height:auto;" alt="Responsive image">
                </div>
                <div class="carousel-item">
                    <img src="/images/animal-6.jpg" class="img-fluid" style="max-width:100%;height:auto;" alt="Responsive image">
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>
    <!-- 各色卡片欄 -->
    <div class="row">
        @for ($i = 0; $i < 6; $i++)
        <div class="col-sm col-md-4" style="padding:0;">
            <div class="{{ $card_array['bg_color'][$i] }} pt-5 pb-5 pl-4 pr-4">
                <h1 class="">{{ $card_array['title'][$i] }}</h1>
                <h5 class="mb-2">Card subtitle</h5>
                <p class="">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
        </div>
        @endfor
    </div>
    <!-- 最新消息 -->
    <div class="row mt-5">
        <div class="col" style="padding:0;">
            <div class="section-title">
                <span class="d-block" style="font-size:18px;">LASTEST NEWS</span>
                <span class="d-block" style="font-size:36px;">最新消息</span>
            </div>
        </div>
    </div>
    <div class="container mb-5">
        <div class="row">
            <div class="col-sm-4 mt-2">
                <div class="card">
                    <img src="/images/animal-1.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 mt-2">
                <div class="card">
                    <img src="/images/rock-1.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 mt-2">
                <div class="card">
                    <img src="/images/rock-2.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- First Parallax Section -->
<div class="jumbotron jumbotron-fluid paral paralsec">
    <div class="row mt-5">
        <div class="col" style="padding:0;">
            <div class="section-title">
                <span class="d-block text-light" style="font-size:18px;">SPECIAL PROJECTS</span>
                <span class="d-block text-light" style="font-size:36px;">主題活動</span>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row mb-2">
            <div class="col-sm-4 mt-2">
                <div class="card bg-dark">
                    <div class="card-body">
                    <h5 class="card-title">Special title treatment</h5>
                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 mt-2">
                <div class="card bg-dark">
                    <div class="card-body">
                    <h5 class="card-title">Special title treatment</h5>
                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 mt-2">
                <div class="card bg-dark">
                    <div class="card-body">
                    <h5 class="card-title">Special title treatment</h5>
                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col" style="padding:0;">
                <div class="section-title">
                    <a href="#" class="btn btn-secondary">READ MORE...</a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Second Parallax Section -->
<div class="jumbotron paral paralsec1">
    <div class="row mt-5">
        <div class="col" style="padding:0;">
            <div class="section-title">
                <span class="d-block text-light" style="font-size:18px;">VIDEO</span>
                <span class="d-block text-light" style="font-size:36px;">影音專區</span>
            </div>
        </div>
    </div>
    <div class="container">
        <p style="text-align:center;" class="video-container">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/3t-XAysFbNk" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </p>
    </div>
</div>

<!-- Third Parallax Section -->
<div class="jumbotron paral paralsec2">
    <div class="row mt-5">
        <div class="col" style="padding:0;">
            <div class="section-title">
                <span class="d-block text-light" style="font-size:18px;">CONTACT US</span>
                <span class="d-block text-light" style="font-size:36px;">聯絡我們</span>
            </div>
        </div>
    </div>
    <div class="container">
    <form>
        <div class="form-group">
            <label for="exampleInputName" class="text-light">Name</label>
            <input type="text" class="form-control" id="exampleInputName" placeholder="*Enter Name">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1" class="text-light">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="*Enter email">
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1" class="text-light">Message</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    </div>
</div>
            
<!-- Add More Parallax Sections Here -->
    <div class="container-fluid p-2 bg-dark text-light">
        <blockquote class="blockquote text-center mt-4">
            <p class="mb-0" style="font-size:14px;">本網站設計建議使用下列瀏覽器：IE11以上，Chrome、Edge、Firefox，以利正常顯示頁面內容，最佳瀏覽解析度為1024x768以上</p>
            <p class="mb-0" style="font-size:14px;">© 2020 湯姆與傑利 All Rights Reserved.　Designed by CCT.</P>
        </blockquote>
    </div>
@endsection

@section('dashboard')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
