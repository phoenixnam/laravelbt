@extends('master')
@section('content')


 

    <div class="fullwidthbanner-container">
        <div class="fullwidthbanner">
            <div class="bannercontainer">
                <div class="banner">
                    <ul>
                        <!-- THE FIRST SLIDE -->
                        @foreach ($slide as $ss1)
                            <li data-transition="boxfade" data-slotamount="20" class="active-revslide"
                                style="width: 100%; height: 100%; overflow: hidden;
                        z-index: 18; visibility: hidden; opacity: 0;">
                                <div class="slotholder" style="width: 100%; height: 100%;" data-duration="undifined"
                                    data-zoomstart="undifined" data-zoomend="undifined" data-bgposition="undifined"
                                    data-kenburns="undifined" data-easeme="undifined" data-bgfit="undifined"
                                    data-bgfitend="undifined"></div>
                            </li>
                            <img style="width: 100%; height: 100%;" src="source/assets/image/slide/{{ $ss1->image }}"
                                alt="It'ok">
                        @endforeach
                    </ul>
                </div>
            </div>

            <div class="tp-bannertimer"></div>
        </div>
    </div>
    <!--slider-->
    </div>
    <div class="container">
<div id="content" class="space-top-none">
            <div class="main-content">
                <div class="space60">&nbsp;</div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="beta-products-list">
                            <h4 style="text-align: center;">New Products</h4>
                          

                            <div class="row">
                                @foreach ($new_product_array as $new)
                                    <div class="col-sm-3">
                                        <div class="single-item">
                                            <div class="single-item-header">
                                                <a href="product.html"><img width="200px"; height="200px"
                                                        src="source/assets/image/product/{{ $new['image'] }}" alt=""></a>
                                            </div>
                                            <div class="single-item-body">

                                                <p class="single-item-title"> {{ $new['name'] }}</p>
                                                <p class="single-item-price">
                                                    <span class="flash-del">{{ $new['unit_price'] }} đồng</span>
                                                    <!-- <span class="flash-del" >{{ $new['unit_price'] }} đồng</span> -->
                                                    <span class="flash-sale">{{ $new['promotion_price'] }} đồng</span>

                                                </p>
                                            </div>
                                            <div class="single-item-caption"~>
                                                <a class="add-to-cart pull-left" href="shopping_cart.html"><i
                                                        class="fa fa-shopping-cart"></i></a>
                                                <a class="beta-btn primary" href="detail/{{ $new['id'] }}">Details <i
                                                        class="fa fa-chevron-right"></i></a>
                                                <div class="clearfix"></div>
                                            </div><br />
                                        </div>
                                    </div>
                                @endforeach
                            </div>

                        </div>
                    </div><br /><br />



                    <div class="space50">&nbsp;</div>
                    <div class="beta-products-list">
                        <h4 style="text-align: center;">Top Products</h4>
                     

                        <div class="row">
                            @foreach ($sanpham_khuyenmai as $spkm)
                                <div class="col-sm-3">
                                    <div class="single-item">
<div class="single-item-header">
                                            <a href="product.html"><img width="200px"; height="200px"
                                                    src="source/assets/image/product/{{ $spkm['image'] }}" alt=""></a>
                                        </div>
                                        <div class="single-item-body">
                                            <p class="single-item-title"> {{ $spkm['name'] }}</p>
                                            <p class="single-item-price">
                                                <span class="flash-del">{{ $spkm['unit_price'] }} đồng</span>
                                                <!-- <span class="flash-del" >{{ $spkm['unit_price'] }} đồng</span> -->
                                                <span class="flash-sale">{{ $spkm['promotion_price'] }} đồng</span>
                                            </p>
                                        </div>
                                        <div class="single-item-caption">

                                            <a class="beta-btn primary" href="detail/{{ $spkm['id'] }}">Details <i
                                                    class="fa fa-chevron-right"></i></a>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>


            </div> <!-- .main-content -->
        </div> <!-- #content -->
    </div> <!-- .container -->
@endsection