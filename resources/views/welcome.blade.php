@extends('layouts.app')

@section('content')
<link href="css/welcome.css" rel="stylesheet">

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
                @for ($h = 0; $h < count($banners['src']); $h++)
                    @if ($h == 0)
                    <div class="carousel-item active">
                    @else 
                    <div class="carousel-item">
                    @endif
                        <img src="{{ $banners['src'][$h] }}" class="img-fluid" style="max-width:100%;height:auto;" alt="Responsive image">
                    </div>
                @endfor
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
    <!-- 各色方塊欄 -->
    <!--div class="row">
        @for ($i = 0; $i < count($blocks['bg_color']); $i++)
        <div class="col-sm col-md-4" style="padding:0;">
            <div class="{{ $blocks['bg_color'][$i] }} pt-5 pb-5 pl-4 pr-4">
                <h1>{{ $blocks['title'][$i] }}</h1>
                <h5 class="mb-2">Card subtitle</h5>
                <p>Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
        </div>
        @endfor
    </div-->
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
            @for ($j = 0; $j < count($news['src']); $j++)
            <div class="col-sm-4 mt-2">
                <div class="card">
                    <img src="{{ $news['src'][$j] }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            @endfor
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
            @for ($k = 0; $k < count($projects['title']); $k++)
            <div class="col-sm-4 mt-2">
                <div class="card bg-dark">
                    <div class="card-body">
                    <h5 class="card-title">{{ $projects['title'][$k] }}</h5>
                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            @endfor
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

@endsection