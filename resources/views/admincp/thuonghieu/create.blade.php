@extends('admin_layout')
@section('admin_content')
<div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Thêm thương hiệu sản phẩm
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
                                <form role="form" method="post" action="{{route('thuonghieu.store')}}">
                                    @csrf
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tên thương hiệu</label>
                                    <input type="text" name="brand_name" id="slug" onkeyup="ChangeToSlug();" value="{{old('brand_name')}}" class="form-control" placeholder="Tên thương hiệu">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Slug thương hiệu</label>
                                    <input type="text" name="brand_slug" id="convert_slug" value="{{old('brand_slug')}}" class="form-control" placeholder="Slug thương hiệu">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Mô tả</label>
                                    <textarea style="resize:none" rows="8" class="form-control" value="{{old('brand_desc')}}" name="brand_desc" ></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Trạng thái</label>
                                    <select class="form-control input-lg m-bot15" name="brand_status">
                                        <option value="1">Hiển thị</option>
                                        <option value="0">Ẩn</option>
                                    </select>
                                </div>
                                <button type="submit" name="add_brand" class="btn btn-info">Thêm</button>
                            </form>
                            </div>

                        </div>
                    </section>

            </div>
</div>
@endsection