@extends('layouts.blog-home')

@section('content')
<div class="container-fluid w-100">
    <div class="row">
        
            <div class="col-12">
                @if((category->name) equals "All Categories")
                    <img class="img-responsive w-100" src="{{ asset('images/1529155658home.png') }}" alt="home feature image">
                @elseif((category->name) equals "Advent")
                    <img class="img-responsive w-100" src="{{ asset('images/1529155657AdventBanner.jpg') }}" alt="home feature image">
                @elseif((category->name) equals "Christmas")
                    <img class="img-responsive w-100" src="{{ asset('images/1529155657christmas-banner.gif') }}" alt="home feature image">
                @elseif((category->name) equals "Easter")
                    <img class="img-responsive w-100" src="{{ asset('images/1529155658Easter banner.jpg') }}" alt="home feature image">
                @elseif((category->name) equals "Triduum")
                    <img class="img-responsive w-100" src="{{ asset('images/1529155658EasterTriduumBanner.jpg') }}" alt="home feature image">
                @elseif((category->name) equals "Lent")
                    <img class="img-responsive w-100" src="{{ asset('images/1529155658LentBanner.jpg') }}" alt="home feature image">
                @elseif((category->name) equals "Ordinary Time")
                    <img class="img-responsive w-100" src="{{ asset('images/1529155659Ordinarytimebanner.jpg') }}" alt="home feature image">
                @endif

        
            </div>
       
    </div>
</div>

    <div class="container">

<div class="row">
   
        <!-- Blog Entries Column -->
        <div class="col-md-8">

            

            <!-- First Blog Post -->
            

            @if($posts)

                @foreach($posts as $post)
                    <h2 ><a  href="/post/{{$post->slug}}">{{ucwords(strtolower($post->title))}}</a></h2>
                    <p class="text-muted"><em> {{ ucwords(strtolower($post->subtitle)) }}</em></p>
                    <p class="text-muted"><em> {{ $post->excerpt }}</em></p>
                    <p class="lead "><small> by {{ $post->author }}</small></p>
                    <p><span class="glyphicon glyphicon-time"></span> {{$post->created_at->diffForHumans()}}</p>
                    
                    
                    <hr>
                    <p class="lead">{!! str_limit($post->content, 500) !!}</p>
                    <a class="btn btn-primary" href="{{route('home.post', $post->slug)}}">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>
                    
                    <hr>
                @endforeach

            @endif

            <!-- Pagination -->
            <div class="row">
                <div class="col-sm-6 col-sm-offset-5">
                        {{$posts->render()}}

                </div>
            </div>
            

        </div>

        <!-- Blog Sidebar Widgets Column -->
        @include('includes.front_sidebar')

    </div>
    <!-- /.row -->

    <hr>
@endsection
