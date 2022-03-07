@extends('admin_layout')
@section('admin_content')
<div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Thêm sản phẩm 
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
                                <form role="form" method="post" action="{{route('sanpham.store')}}" enctype="multipart/form-data">
                                    @csrf
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tên sản phẩm</label>
                                    <input type="text" name="product_name" id="slug" onkeyup="ChangeToSlug();" value="{{old('product_name')}}" class="form-control" placeholder="Tên sản phẩm">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Slug sản phẩm</label>
                                    <input type="text" name="product_slug" id="convert_slug" value="{{old('product_slug')}}" class="form-control" placeholder="Slug sản phẩm">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Mô tả</label>
                                    <textarea style="resize:none" rows="8" class="form-control" value="{{old('product_desc')}}" name="product_desc" ></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Giá</label>
                                    <input type="text" name="product_price" value="{{old('product_price')}}" class="form-control" placeholder="Giá sản phẩm">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Hình ảnh</label>
                                    <input type="file" name="product_img" class="form-control-file">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Trạng thái</label>
                                    <select class="form-control input-lg m-bot15" name="product_status">
                                        <option value="1">Hiển thị</option>
                                        <option value="0">Ẩn</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Danh mục sản phẩm</label>
                                        <select class="form-control input-lg m-bot15" name="category">
                                            @foreach($danhmucsanpham as $key => $value)
                                                @if($value->category_parent!=0)
                                                    <option value="{{$value->category_id}}">{{$value->category_name}}</option>
                                                @endif
                                            @endforeach
                                        </select>
                                   
                                </div>
                                <button type="submit" name="add_product" class="btn btn-info">Thêm</button>
                            </form>
                            </div>

                        </div>
                    </section>

            </div>
</div>
@endsection