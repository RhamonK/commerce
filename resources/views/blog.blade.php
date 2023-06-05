<x-app-layout>
    <!-- Page Heading -->
    <x-slot name="header">

    </x-slot>
    <!-- ##### Breadcumb Area Start ##### -->
    <div class="breadcumb_area breadcumb-style-two bg-img" style="background-image: url(img/bg-img/breadcumb2.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="page-title text-center">
                        <h2>Fashion Blog</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Breadcumb Area End ##### -->

    <!-- ##### Blog Wrapper Area Start ##### -->
    <div class="blog-wrapper section-padding-80">
        <div class="container">
            <div class="row">

                <!-- Single Blog Area -->
                @foreach ($posts as $post)
                <div class="col-12 col-lg-6">
                    <div class="single-blog-area mb-50">
                        <img src="{{$post->image}}" alt="">
                        <!-- Post Title -->
                        <div class="post-title">
                            <a href="{{route('singleblog', $post)}}">{{$post->title}}</a>
                        </div>
                        <!-- Hover Content -->
                        <div class="hover-content">
                            <!-- Post Title -->
                            <div class="hover-post-title">
                                <a href="{{route('singleblog', $post)}}">{{$post->title}}</a>
                            </div>
                            <p>{{$post->content}}</p>
                            <a href="{{route('singleblog', $post)}}">Continue reading <i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- ##### Blog Wrapper Area End ##### -->
</x-app-layout>
