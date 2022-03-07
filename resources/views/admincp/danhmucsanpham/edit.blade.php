@extends('admin_layout')
@section('admin_content')
<div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Cập nhật danh mục sản phẩm
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
                                <form role="form" method="POST" action="{{route('danhmuc.update',[$danhmuc->category_id])}}">
                                    @method('PUT')
                                    @csrf
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tên danh mục</label>
                                    <input type="text" name="category_name" id="slug" onkeyup="ChangeToSlug();" value="{{$danhmuc->category_name}}" class="form-control" placeholder="Tên danh mục">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Slug danh mục</label>
                                    <input type="text" name="category_slug" id="convert_slug" value="{{$danhmuc->category_slug}}" class="form-control" placeholder="Slug danh mục">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Mô tả</label>
                                    <textarea style="resize:none" rows="8" class="form-control" value="{{$danhmuc->category_description}}"  name="category_desc" >{{$danhmuc->category_description}}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Trạng thái</label>
                                    <select class="form-control input-lg m-bot15" name="category_status">
                                        @if($danhmuc->category_status==1)
                                            <option selected value="1">Hiển thị</option>
                                            <option value="0">Ẩn</option>
                                        @else
                                            <option value="1">Hiển thị</option>
                                            <option  selected value="0">Ẩn</option>
                                        @endif
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Danh mục sản phẩm</label>
                                    <select class="form-control input-lg m-bot15" name="category_parent">
                                        <option value="0">Danh mục cha</option>
                                        @foreach($danhmucsanpham as $key => $value)
                                            @if($danhmuc->category_parent!=0)
                                                <option {{  $danhmuc->category_parent == $value->category_id ? 'selected' : ''}}  value="{{$value->category_id}}">{{$value->category_name}}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>
                                <button type="submit" name="update_category" class="btn btn-info">Cập nhật</button>
                            </form>
                            </div>

                        </div>
                    </section>

            </div>
</div>
@endsection