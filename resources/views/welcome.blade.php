@extends('layouts.master')

@section('title', 'Page Title')

@section('sidebar')
     @parent
@stop

@section('content')
<div id="mycarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#mycarousel" data-slide-to="0" class="active"></li>
          <li data-target="#mycarousel" data-slide-to="1"></li>
          <li data-target="#mycarousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <iframe width="100%" height="800" src="https://www.youtube.com/embed/ic4efwWtmi0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
            <div class="carousel-caption d-none d-md-block">
              <h5>互動媒體-VR Spray 虛擬噴漆</h5>
              <p>專研特優作品</p>
            </div>
          </div>
          <div class="carousel-item">
            <iframe width="100%" height="800" src="https://www.youtube.com/embed/pnFd2p-kk68" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
          </div>
          <div class="carousel-item">
            <iframe width="100%" height="800" src="https://www.youtube.com/embed/pnFd2p-kk68" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
          </div>
        </div>
        <a class="carousel-control-prev" href="#mycarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#mycarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
    </div>
@stop
