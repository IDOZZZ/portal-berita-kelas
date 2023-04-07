@extends('frontend.parent')

@section('content')
    <!-- ======= Single Post Content ======= -->


    <div class="single-post">


        <div class="post-meta"><span class="date">{{ $news->created_at }}</span> <span class="mx-1">&bullet;</span>
            <span>Jul 5th '22</span></div>


        <h1 class="mb-5">{{$news->title}}</h1>


        <p><span class="firstcharacter">L</span>orem ipsum dolor sit, amet consectetur adipisicing elit. Ratione officia sed,
            suscipit distinctio, numquam omnis quo fuga ipsam quis inventore voluptatum recusandae culpa, unde doloribus
            saepe labore alias voluptate expedita? Dicta delectus beatae explicabo odio voluptatibus quas, saepe qui aperiam
            autem obcaecati, illo et! Incidunt voluptas culpa neque repellat sint, accusamus beatae, cumque autem tempore
            quisquam quam eligendi harum debitis.</p>





        <figure class="my-4">


            <img src="{{ $news->image }}" alt="" class="img-fluid">


            <figcaption>{!! $news-> description !!}</figcaption>


        </figure>


        <p>{!! $news-> description !!}</p>


        
    </div><!-- End Single Post Content -->
@endsection
