@extends('layout')
@section('content')
<!--new product area start-->
<div class="new_product_area">
                                    <div class="block_title">
                                            <h3>Sản phẩm mới</h3>
                                        </div>
                                        <div class="row">
                                            <div class="product_active owl-carousel">
                                                @foreach($sanphammoi as $key=>$value)
                                                <div class="col-lg-3">
                                                    <div class="single_product">
                                                        <div class="product_thumb">
                                                           <a href="single-product.html"><img src="{{asset('public/uploads/product/'.$value->product_img)}}" alt=""></a> 
                                                           <div class="img_icone">
                                                               <img src="{{asset('public/frontend/img/cart/span-new.png')}}" alt="">
                                                           </div>
                                                           <div class="product_action">
                                                               <a href="#"> <i class="fa fa-shopping-cart"></i> Thêm vào giỏ hàng</a>
                                                           </div>
                                                        </div>
                                                        <div class="product_content">
                                                            <h3 class="product_title"><a href="single-product.html">{{$value->product_name}}</a></h3>
                                                            <span class="product_price">{{$value->product_price}} VND</span>
                                                        </div>
                                                        <div class="product_info">
                                                            <ul>
                                                                <li><a href="#" title=" Add to Wishlist ">Thêm vào danh sách yêu thích</a></li>
                                                                <li><a href="#" data-toggle="modal" data-target="#modal_box" title="Quick view">Xem chi tiết</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                @endforeach
                                            </div> 
                                        </div>       
                                    </div> 
                                    <!--new product area start--> 
                                     <!--featured product start--> 
                                     <div class="featured_product">
                                        <div class="block_title">
                                            <h3>Sản phẩm nổi bật</h3>
                                        </div>
                                        <div class="row">
                                            <div class="product_active owl-carousel">
                                                @foreach($sanphamnoibat as $key =>$value)
                                                <div class="col-lg-3">
                                                    <div class="single_product">
                                                        <div class="product_thumb">
                                                           <a href="single-product.html"><img src="{{asset('public/uploads/product/'.$value->product_img)}}" alt=""></a> 
                                                           <div class="hot_img">
                                                               <img src="{{asset('public/frontend/img/cart/span-hot.png')}}" alt="">
                                                           </div>
                                                           <div class="product_action">
                                                               <a href="#"> <i class="fa fa-shopping-cart"></i>  Thêm vào giỏ hàng</a>
                                                           </div>
                                                        </div>
                                                        <div class="product_content">
                                                            <h3 class="product_title"><a href="single-product.html">{{$value->product_name}}</a></h3>
                                                            <span class="product_price">{{$value->product_price}} VND</span>
                                                        </div>
                                                        <div class="product_info">
                                                            <ul>
                                                                <li><a href="#" title=" Add to Wishlist ">Thêm vào danh sách yêu thích</a></li>
                                                                <li><a href="#" data-toggle="modal" data-target="#modal_box" title="Quick view">Xem chi tiết</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                @endforeach
                                            </div> 
                                        </div> 
                                    </div>     
                                    <!--featured product end-->  
@endsection
