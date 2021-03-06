@extends('layouts.master')

@section('content')

<!--=== Slider ===-->
<div class="slider-inner">
<div id="da-slider" class="da-slider">
    @foreach($slider as $values)
    <div class="da-slide">
        <h2 style="width: 30%"><i> {{ $values->title }}</i></h2>
        <p><i> {{ $values->description }} </i></p>
        <div class="da-img" style="margin-top: -2%;">
            {{ HTML::image( $values->image, $values->title, ['width'=>"73%"] ) }}
        </div>
    </div>
    @endforeach

    <nav class="da-arrows">
        <span class="da-arrows-prev"></span>
        <span class="da-arrows-next"></span>
    </nav>
</div><!--/da-slider-->
</div><!--/slider-->
<!--=== End Slider ===-->

<!--=== Content Part ===-->
<div class="container">
<!-- Service Blocks -->
{{--<div class="row-fluid">--}}
    {{--<div class="span4">--}}
        {{--<div class="service clearfix">--}}
            {{--<!--<i class="icon-resize-small"></i>-->--}}
            {{--{{ HTML::image( '/assets/img/lock.png', 'Ecies.co.uk', ['width'=>"80"] ) }}--}}
            {{--<div class="desc">--}}
                {{--<h4>{{ Str::upper($data_security->title) }}</h4>--}}
                {{--<p>{{ substr($data_security->description, 0, 130) }} ...</p>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
    {{--<div class="span4">--}}
        {{--<div class="service clearfix">--}}
            {{--<!--<i class="icon-cogs"></i>-->--}}
            {{--{{ HTML::image( '/assets/img/process.png', 'Ecies.co.uk', ['width'=>"80"] ) }}--}}
            {{--<div class="desc">--}}
                {{--<h4>{{ Str::upper($data_consultancy->title) }}</h4>--}}
                {{--<p>{{ substr($data_consultancy->description, 0, 130) }} ...</p>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
    {{--<div class="span4">--}}
        {{--<div class="service clearfix">--}}
            {{--<!--<i class="icon-plane"></i>-->--}}
            {{--{{ HTML::image( $data_ict_workshop->image, 'Ecies.co.uk', ['width'=>"80"] ) }}--}}
            {{--<div class="desc">--}}
                {{--<h4>{{ Str::upper($data_ict_workshop->title) }}</h4>--}}
                {{--<p>{{ substr($data_ict_workshop->description, 0, 130) }} ...</p>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</div><!--/row-fluid-->--}}
<!-- //End Service Blokcs -->

<!-- Recent Works -->
<div class="headline"><h3>Skills</h3></div>
<ul class="thumbnails">
    @foreach($recent_work as $values)
    <li class="span3">
        <div class="thumbnail-style thumbnail-kenburn">
            <div class="thumbnail-img">
                <div class="overflow-hidden">
                    {{ HTML::image( $values->image, $values->title ) }}
                </div>
                <a class="btn-more hover-effect" href="{{ URL::route('home-recent-work', ['id'=>$values->id]) }}">read more +</a>
            </div>
            <h3><a class="hover-effect" href="{{ URL::route('home-recent-work', ['id'=>$values->id]) }}">{{$values->title}}</a></h3>
            <p> {{ $values->short_description }}</p>
        </div>
    </li>
    @endforeach

</ul><!--/thumbnails-->
<!-- //End Recent Works -->

<!-- Information Blokcs -->
<div class="row-fluid margin-bottom-20">
    <!-- Who We Are -->
    <div class="span8">
        <div class="headline"><h3>About Us</h3></div>
        <p>
            {{ HTML::image( '/assets/img/mustafa_737_490.png', 'Ecies.co.uk', ['class'=>'pull-left lft-img-margin img-width-200'] ) }}
            Ecies is private limited company, it is based in London United Kingdom. It provides Training and Consultancy services for not-for-profit organizations, small and medium-sized enterprises, Started it operations in 2011. We offer core specialist expertise includes, Training in different sectors and industries, Consultancy, Web design, ICT Support services such as Server support, Policies analysis, Risk assessment, securing your ICT assets and framework.</p>
        <ul class="unstyled">
            <li><i class="icon-ok color-green"></i> Female Training </li>
            <li><i class="icon-ok color-green"></i> Special Needs Training </li>
        </ul><br />

        <blockquote class="hero-unify">
            <p>Ecies development team have a huge amount of collective experience having delivered numerous projects for different clients, including commercial, government, public sector and not-for-profit organizations, The company strives to provide "Quality ICT Security Solutions" to its clients as the core value.</p>
            <p> Our strong association with successful business houses, companies and other job consultants in United Kingdom & Arab countries has enabled us to build a technical expertise and industry excellence.</p>
        </blockquote>
    </div><!--/span8-->

    <!-- Latest Shots -->
    <div class="span4">
        <div class="headline"><h3>Latest Shots</h3></div>
        <div id="myCarousel" class="carousel slide">
            <div class="carousel-inner">
                @foreach($recent_work as $values)
                  <div class="item {{$values->id >3 ? 'active' : ''}}">
                      {{ HTML::image( $values->image, $values->title ) }}
                    {{--<div class="carousel-caption">
                      <p>{{$values->title}}</p>
                    </div>--}}
                  </div>
                @endforeach

            </div>

            <div class="carousel-arrow">
                <a class="left carousel-control" href="#myCarousel" data-slide="prev"><i class="icon-angle-left"></i></a>
                <a class="right carousel-control" href="#myCarousel" data-slide="next"><i class="icon-angle-right"></i></a>
            </div>
        </div>
    </div><!--/span4-->
</div><!--/row-fluid-->
<!-- //End Information Blokcs -->

</div><!--/container-->
<!-- End Content Part -->

</div>

@stop