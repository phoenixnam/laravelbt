<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-NEYX0JD2XB"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-NEYX0JD2XB');
</script>

<div id="header">
	<div class="header-top">
		<div class="container">
			<div class="pull-left auto-width-left">
				<ul class="top-menu menu-beta l-inline">
					<li><a href=""><i class="fa fa-home"></i> 90-92 Lê Thị Riêng, Bến Thành, Quận 1</a></li>
					<li><a href=""><i class="fa fa-phone"></i> 0163 296 7751</a></li>
				</ul>
			</div>
			<div class="pull-right auto-width-right">
				<ul class="top-details menu-beta l-inline">
					@if(Session::has('user'))
					<li><a href="logout"><i class="fa fa-user"></i>{{Session('user')->name}}</a></li>
					@else
					<li><a href="register">Đăng kí</a></li>
					<li><a href="login">Đăng nhập</a></li>
					@endif
				</ul>
			</div>

			<div class="clearfix"></div>
		</div> <!-- .container -->
	</div> <!-- .header-top -->
	<div class="header-body">
		<div class="container beta-relative">
			<div class="pull-left">
				<a href="index.html" id="logo"><img src="" alt=""></a>
			</div>
			<div class="pull-right beta-components space-left ov">
				<div class="space10">&nbsp;</div>
				<div class="beta-comp">
					<form role="search" method="get" id="searchform" action="/">
						<input type="text" value="" name="s" id="s" placeholder="Nhập từ khóa..." />
						<button class="fa fa-search" type="submit" id="searchsubmit"></button>
					</form>
				</div>

				<div class="beta-comp">
					@if(Session::has('cart'))
					<div class="cart">
						<div class="beta-select"><i class="fa fa-shopping-cart"></i> Giỏ hàng (@if(Session::has('cart')){{Session('cart')->totalQty}}@else Trong @endif) <i class="fa fa-chevron-down"></i></div>
						<div class="beta-dropdown cart-body">

							@foreach($product_cart as $product)
							<div class="cart-item" id="cart-item{{$product['item']['id']}}">
								<a class="cart-item-delete" href="{{route('xoagiohang',$product['item']['id'])}}" value="{{$product['item']['id']}}" soluong="{{$product['qty']}}"><i class="fa fa-times"></i></a>
								<div class="media">
									<a class="pull-left" href="#"><img src="source/assets/image/product/{{$product['item']['image']}}" alt=""></a>
									<div class="media-body">
										<span class="cart-item-title">{{$product['item']['name']}}</span>
										<span class="cart-item-amount">{{$product['qty']}}*<span id="dongia{{$product['item']['id']}}" value="@if($product['item']['promotion_price']==0){{($product['item']['unit_price'])}}@else {{($product['item']['promotion_price'])}}@endif">@if($product['item']['promotion_price']==0){{number_format($product['item']['unit_price'])}}@else {{number_format($product['item']['promotion_price'])}}@endif</span></span>
									</div>
								</div>
							</div>
							@endforeach

							<div class="cart-caption">
								<div class="cart-total text-right">Tổng tiền: <span class="cart-total-value" value="@if(Session::has('cart')){{($totalPrice)}}@else 0 @endif">@if(Session::has('cart')){{number_format($totalPrice)}}@else 0 @endif đồng</span></div>
								<div class="clearfix"></div>

								<div class="center">
									<div class="space10">&nbsp;</div>
									<a href="" class="beta-btn primary text-center">Đặt hàng <i class="fa fa-chevron-right"></i></a>
								</div>
							</div>
						</div>
					</div> <!-- .cart -->
					@endif
				</div>

			</div>
		</div>
			</div>
			<div class="clearfix"></div>
		</div> <!-- .container -->
	</div> <!-- .header-body -->
<div class="header-bottom" style="background-color: #0277b8;">
		<div class="container">
			<a class="visible-xs beta-menu-toggle pull-right" href="#"><span class='beta-menu-toggle-text'>Menu</span> <i class="fa fa-bars"></i></a>
			<div class="visible-xs clearfix"></div>
			<nav class="main-menu">
				<ul class="l-inline ov">
					<li><a href="/luan">Trang chủ</a></li>
					<li><a href="#">Sản phẩm</a>
						<ul class="sub-menu">
							<li><a href="product_type.html">Sản phẩm 1</a></li>
							<li><a href="product_type.html">Sản phẩm 2</a></li>
							<li><a href="product_type.html">Sản phẩm 4</a></li>
						</ul>
					</li>
					<li><a href="#">Loai Sản phẩm</a>
						<ul class="sub-menu">
							@foreach($loai_sp as $loai)
							<li><a href="/type/{{ $loai->id }}">{{ $loai->name }}</a></li>
							@endforeach
						</ul>
					</li>

					<li><a href="about.html">Giới thiệu</a></li>
					<li><a href="contacts.html">Liên hệ</a></li>
				</ul>
				<div class="clearfix"></div>
			</nav>
		</div> <!-- .container -->
	</div> <!-- .header-bottom -->
</div> <!-- #header -->