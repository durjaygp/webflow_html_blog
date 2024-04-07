@extends('frontEnd.master')
@section('title')
     Privacy Policy
@endsection
@section('content')
    <section class="section-regular">
        <div class="container-large-4">
            <div class="title-wrapper-large">
                <div class="wrap-v-small">
                    <div class="heading-detail">Privacy Policy</div>
                    <h1 class="h1-heading">{{ $privacy->page_title }}</h1>
                </div>
            </div>
            <div class="blog-header-image"><img src="{{asset($privacy->image)}}" loading="lazy" sizes="(max-width: 1439px) 90vw, 1278px" srcset="{{asset($privacy->image)}} 500w, {{asset($privacy->image)}} 800w, {{asset($privacy->image)}} 2560w" alt="" class="image-cover"></div>
            <div class="container-x-small">
                <div class="wrap-v-x-large">
                    <div class="wrap-v-x-small">
                        <h5 class="h5-heading">{{$privacy->page_title}}</h5>
                        <div class="sub-heading-small-2">{{ $privacy->description }}</div>
                    </div>
                    <p class="paragraph-large">{!! $privacy->content!!}</p>
                </div>


            </div>
        </div>
    </section>
@endsection
