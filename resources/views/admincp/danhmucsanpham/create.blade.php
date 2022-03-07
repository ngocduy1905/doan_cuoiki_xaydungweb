@extends('admin_layout')
@section('admin_content')
<div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Thêm danh mục sản phẩm
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
                                <form role="form" method="post" action="{{route('danhmuc.store')}}">
                                    @csrf
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tên danh mục</label>
                                    <input type="text" name="category_name" id="slug" onkeyup="ChangeToSlug();" value="{{old('category_name')}}" class="form-control" placeholder="Tên danh mục">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Slug danh mục</label>
                                    <input type="text" name="category_slug" id="convert_slug" value="{{old('category_slug')}}" class="form-control" placeholder="Slug danh mục">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Mô tả</label>
                                    <textarea style="resize:none" rows="8" class="form-control" value="{{old('category_desc')}}" name="category_desc" ></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Trạng thái</label>
                                    <select class="form-control input-lg m-bot15" name="category_status">
                                        <option value="1">Hiển thị</option>
                                        <option value="0">Ẩn</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Danh mục cha</label>
                                    <select class="form-control input-lg m-bot15" name="category_parent">
                                        <option value="0">Danh mục cha</option>
                                        @foreach($danhmucsanpham as $key => $value)
                                            @if($value->category_parent==0)
                                                <option value="{{$value->category_id}}">{{$value->category_name}}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>
                                <button type="submit" name="add_category" class="btn btn-info">Thêm</button>
                            </form>
                            </div>

                        </div>
                    </section>

            </div>
</div>
@endsection