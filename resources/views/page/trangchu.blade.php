<!DOCTYPE html>
<html lang="en">
@extends('master')
@section('content')

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="fullwidthbanner-container">
        <!-- Banner code here -->
        <div class="fullwidthbanner">
            <div class="bannercontainer">
                <div class="banner">
                    <ul>
                        <!-- THE FIRST SLIDE -->
                        @foreach ($slide as $sl )
                        <li data-transition="boxfade" data-slotamount="20" class="active-revslide"
                            style="width: 100%; height: 100%; overflow: hidden; z-index: 18; visibility: hidden; opacity: 0;">
                            <div class="slotholder" style="width:100%;height:100%;" data-duration="undefined"
                                data-zoomstart="undefined" data-zoomend="undefined" data-rotationstart="undefined"
                                data-rotationend="undefined" data-ease="undefined" data-bgpositionend="undefined"
                                data-bgposition="undefined" data-kenburns="undefined" data-easeme="undefined"
                                data-bgfit="undefined" data-bgfitend="undefined" data-owidth="undefined"
                                data-oheight="undefined">
                                <div class="tp-bgimg defaultimg" data-lazyload="undefined" data-bgfit="cover"
                                    data-bgposition="center center" data-bgrepeat="no-repeat" data-lazydone="undefined"
                                    src="source/assets/image/slide/{{$sl->image}}"
                                    data-src="source/assets/image/slide/{{$sl->image}}"
                                    style="background-color: rgba(196, 35, 35, 0); background-repeat: no-repeat; background-image: url('source/assets/image/slide/{{$sl->image}}'); background-size: cover; background-position: center center; width: 100%; height: 100%; opacity: 1; visibility: inherit;">
                                </div>
                            </div>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
    
    </div>
    <!--slider-->
    <div class="container">
        <div id="content" class="space-top-none">
            <div class="main-content">
                <div class="space60">&nbsp;</div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="beta-products-list">
                            <h4>New Products</h4>
                            <div class="row">
                                @foreach ($new_product as $new )
                                <div class="col-sm-3">
                                    <div class="single-item">
                                        <div class="single-item-header">
                                            <a href="product.html"><img
                                                    src="source/assets/image/product/{{$new->image}}" alt=""></a>
                                        </div>
                                        <div class="single-item-body">
                                            <p class="single-item-title">{{$new->name}}</p>
                                            <p class="single-item-price">
                                                <span class="flash-del">{{$new->unit_price}}đồng</span>
                                                <span class="flash-sale">{{$new->promotion_price}}đồng</span>
                                            </p>
                                        </div>
                                        <div class="single-item-footer">
                                            <a href="detail/{{ $new['id'] }}" class="btn btn-primary">Detail</a>
                                        </div>
                                    </div>
                                </div>
                                @if ($loop->iteration % 4 === 0)
                                </div>
                                <div class="row">
                                @endif
                                @endforeach
                            </div>
                            <div class="space50">&nbsp;</div>
                            <div class="beta-products-list">
                                <h4>Top Products</h4>
                                <div class="row">
                                    @foreach ($sanpham_khuyenmai as $spkm)
                                    <div class="col-sm-3">
                                        <div class="single-item">
                                            <div class="single-item-header">
                                                <a href="product.html"><img
                                                        src="source/assets/image/product/{{$spkm->image}}" alt=""></a>
                                            </div>
                                            <div class="single-item-body">
                                                <p class="single-item-title">{{$spkm->name}}</p>
                                                <p class="single-item-price">
                                                    <span class="flash-del">{{number_format($spkm->unit_price)}}
                                                        đồng</span>
                                                    <span class="flash-sale">{{number_format($spkm->promotion_price)}}
                                                        đồng</span>
                                                </p>
                                            </div>
                                            <div class="single-item-footer">
                                                {{-- href="{{ route('page.chitiet_sanpham', ['id' => $spkm->id]) }}" --}}
                                                <a href="detail/{{ $spkm['id'] }}" class="btn btn-primary">Detail</a>
                                            </div>
                                        </div>
                                    </div>
                                    @if ($loop->iteration % 4 === 0)
                                </div>
                                <div class="row">
                                @endif
                                @endforeach
                            </div>
                        </div> <!-- .beta-products-list -->
                    </div> <!-- end section with sidebar and main content -->
                </div> <!-- .main-content -->
            </div> <!-- #content -->
        </div> <!-- .container -->
    </div>
@endsection
<!-- .container -->
</body>

</html>
