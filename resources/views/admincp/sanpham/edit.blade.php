@extends('admin_layout')
@section('admin_content')
<div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Cập nhật sản phẩm 
                        </header>
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        @if (session('message'))
                            <div class="alert alert-success">
                                {{ session('message') }}
                            </div>
                        @endif
                        <div class="panel-body">
                            <div class="position-center">
                                <form role="form" method="post" action="{{route('sanpham.update',[$sanpham->product_id])}}" enctype="multipart/form-data">
                                    @method('PUT')
                                    @csrf
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tên sản phẩm</label>
                                    <input type="text" name="product_name" id="slug" onkeyup="ChangeToSlug();" value="{{$sanpham->product_name}}" class="form-control" placeholder="Tên sản phẩm">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Slug sản phẩm</label>
                                    <input type="text" name="product_slug" id="convert_slug" value="{{$sanpham->product_slug}}" class="form-control" placeholder="Slug sản phẩm">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Mô tả</label>
                                    <textarea style="resize:none" rows="8" class="form-control" value="{{$sanpham->product_description}}" name="product_desc" >{{$sanpham->product_description}}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Giá</label>
                                    <input type="text" name="product_price" value="{{$sanpham->product_price}}" class="form-control" placeholder="Giá sản phẩm">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Hình ảnh</label>
                                    <input type="file" name="product_img" class="form-control-file">
                                    <img src="{{asset('public/uploads/product/'.$sanpham->product_img)}}" height="150px" width="150px">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Trạng thái</label>
                                    <select class="form-control input-lg m-bot15" name="product_status">
                                        @if($sanpham->product_status==1)
                                            <option selected value="1">Hiển thị</option>
                                            <option value="0">Ẩn</option>
                                        @else
                                            <option value="1">Hiển thị</option>
                                            <option  selected value="0">Ẩn</option>
                                        @endif
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Danh mục sản phẩm con</label>
                                    <select class="form-control input-lg m-bot15" name="category">
                                        @foreach($danhmucsanpham as $key=> $danhmuc)
                                        <option {{  $danhmuc->category_id == $sanpham->category_id ? 'selected' : ''}} value="{{$danhmuc->category_id}}">{{$danhmuc->category_name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <button type="submit" name="update_product" class="btn btn-info">Cập nhật</button>
                            </form>
                            </div>

                        </div>
                    </section>

            </div>
</div>
@endsection