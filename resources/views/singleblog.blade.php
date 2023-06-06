<x-app-layout>
    <!-- Page Heading -->
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-black leading-tight">
            {{ __('Single Blog') }}
        </h2>
    </x-slot>
    <!-- ##### Blog Wrapper Area Start ##### -->
    <div class="single-blog-wrapper">

        <!-- Single Blog Post Thumb -->
        <div class="single-blog-post-thumb">
            <img src="img/bg-img/bg-7.jpg" alt="">
        </div>

        <!-- Single Blog Content Wrap -->
        <div class="single-blog-content-wrapper d-flex">

            <!-- Blog Content -->
            <div class="single-blog--text">
                <h1><strong>{{$post->title}}</strong></h1>
                <p>{{$post->content}}</p>

                <blockquote>
                    <h6><i class="fa fa-quote-left" aria-hidden="true"></i> Les vêtements ne signifient rien jusqu'à ce que quelqu'un les habite.</h6>
                    <span>
                        Crée le:
                        {{$post->created_at}}
                    </span>
                </blockquote>

                <img src="{{$post->image}}" alt="">
            </div>

            <!-- Related Blog Post -->
            <div class="related-blog-post">
                <!-- Single Related Blog Post -->
                <div class="single-related-blog-post">
                    <img src="{{$post->image}}" alt="">
                    <a href="">
                        <h5>{{$post->title}}</h5>
                    </a>
                </div>
            </div>

        </div>
    </div>
    <!-- ##### Blog Wrapper Area End ##### -->
</x-app-layout>
