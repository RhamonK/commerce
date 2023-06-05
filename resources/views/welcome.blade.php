<x-app-layout>
    <!-- Page Heading -->
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-black leading-tight">
            {{ __('Habille Toi bien') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <!-- ##### Welcome Area Start ##### -->
                    <section class="welcome_area bg-img background-overlay"
                        style="background-image: url(img/bg-img/bg-1.jpg);">
                        <div class="container h-100">
                            <div class="row h-100 align-items-center">
                                <div class="col-12">
                                    <div class="hero-content">
                                        <h6></h6>
                                        <h2>Nouvelle Collection</h2>
                                        <a href="{{ route('products.index') }}" class="btn essence-btn">Voir la
                                            collection</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- ##### Welcome Area End ##### -->

                    <!-- ##### Top Catagory Area Start ##### -->
                    <div class="top_catagory_area section-padding-80 clearfix">
                        <div class="container">
                            <div class="row justify-content-center">
                                <!-- Single Catagory -->
                                <div class="col-12 col-sm-6 col-md-4">
                                    <div class="single_catagory_area d-flex align-items-center justify-content-center bg-img"
                                        style="background-image: url(img/bg-img/bg-2.jpg);">
                                        <div class="catagory-content">
                                            <a href="#">Vêtements</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- Single Catagory -->
                                <div class="col-12 col-sm-6 col-md-4">
                                    <div class="single_catagory_area d-flex align-items-center justify-content-center bg-img"
                                        style="background-image: url(img/bg-img/nbbb.webp);">
                                        <div class="catagory-content">
                                            <a href="#">Chaussures</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- Single Catagory -->
                                <div class="col-12 col-sm-6 col-md-4">
                                    <div class="single_catagory_area d-flex align-items-center justify-content-center bg-img"
                                        style="background-image: url(img/bg-img/bg-4.jpg);">
                                        <div class="catagory-content">
                                            <a href="#">Accessoires</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ##### Top Catagory Area End ##### -->

                    <!-- ##### CTA Area Start ##### -->
                    <div class="cta-area">
                        <div class="container">
                            <div class="row">
                                <div class="col-12">
                                    <div class="cta-content bg-img background-overlay"
                                        style="background-image: url(img/bg-img/bg-5.jpg);">
                                        <div class="h-100 d-flex align-items-center justify-content-end">
                                            <div class="cta--text">
                                                <h6>-20%</h6>
                                                <h2>Vente globale</h2>
                                                <a href="#" class="btn essence-btn">Acheter maintenant</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ##### CTA Area End ##### -->

                    <!-- ##### New Arrivals Area Start ##### -->
                    <section class="new_arrivals_area section-padding-80 clearfix">
                        <div class="container">
                            <div class="row">
                                <div class="col-12">
                                    <div class="section-heading text-center">
                                        <h2>Produits populaires</h2>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="container">
                            <div class="row">
                                <div class="col-12">
                                    <div class="popular-products-slides owl-carousel">

                                        @foreach ($products as $product)
                                            <div class="single-product-wrapper">
                                                <!-- Product Image -->
                                                <div class="product-img">
                                                    <img src="{{$product->image}}" alt="">
                                                    <!-- Hover Thumb -->
                                                    <img class="hover-img" src="{{$product->image}}"
                                                        alt="">
                                                    <!-- Favourite -->
                                                    <div class="product-favourite">
                                                        <a href="#" class="favme fa fa-heart"></a>
                                                    </div>
                                                </div>
                                                <!-- Product Description -->
                                                <div class="product-description">
                                                    <span>topshop</span>
                                                    <a href="single-product-details.html">
                                                        <h6>{{$product->name}}</h6>
                                                    </a>
                                                    <p class="product-price">{{$product->getFormattedPriceAttribute()}}</p>

                                                    <!-- Hover Content -->
                                                    <div class="hover-content">
                                                        <!-- Add to Cart -->
                                                        <div class="add-to-cart-btn">
                                                            <add-to-cart :product-id="{{ $product->id }}"></add-to-cart>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach

                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- jQuery (Necessary for All JavaScript Plugins) -->
                    <script src="js/jquery/jquery-2.2.4.min.js"></script>
                    <!-- Popper js -->
                    <script src="js/popper.min.js"></script>
                    <!-- Bootstrap js -->
                    <script src="js/bootstrap.min.js"></script>
                    <!-- Plugins js -->
                    <script src="js/plugins.js"></script>
                    <!-- Classy Nav js -->
                    <script src="js/classy-nav.min.js"></script>
                    <!-- Active js -->
                    <script src="js/active.js"></script>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
