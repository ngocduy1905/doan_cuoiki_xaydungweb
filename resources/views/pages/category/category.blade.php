@extends('layout')
@section('content')

<div class="new_product_area">
                                    <div class="block_title text-center">
                                            <h3>{{$danhmuc_id->category_name}}</h3>
                                        </div>
                                       
                                        <div class="row">
                                            @foreach($sanpham as $key => $value)
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
                                    
@endsection
