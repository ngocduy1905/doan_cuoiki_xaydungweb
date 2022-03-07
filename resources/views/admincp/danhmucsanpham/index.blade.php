@extends('admin_layout')
@section('admin_content')
<div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
     Liệt kê danh mục sản phẩm
    </div>
    @if (session('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif
    <div class="row w3-res-tb">
      <div class="col-sm-4">
      </div>
      <div class="col-sm-3">
        <div class="input-group">
          <input type="text" class="input-sm form-control" placeholder="Tìm kiếm">
          <span class="input-group-btn">
            <button class="btn btn-sm btn-default" type="button">Tìm kiếm</button>
          </span>
        </div>
      </div>
    </div>
    <div class="table-responsive">
      <table class="table table-striped b-t b-light">
        <thead>
          <tr>
            <th style="width:20px;">
              <label class="i-checks m-b-none">
                <input type="checkbox"><i></i>
              </label>
            </th>
            <th>Tên danh mục</th>
            <th>Thuộc danh mục</th>
            <th>Slug danh mục</th>
            <th>Mô tả</th>
            <th>Trạng thái</th>
            <th style="width:30px;"></th>
          </tr>
        </thead>
        <tbody>
        @foreach($danhmucsanpham as $key => $danhmuc)
          <tr> 
            <td><label class="i-checks m-b-none"><input type="checkbox" name="post[]"><i></i></label></td>
            <td>{{$danhmuc->category_name}}</td>
            <td>
              @if($danhmuc->category_parent==0)
               <span style="color:red">Danh mục cha</span> 
              @else
                @foreach($danhmucsanpham as $key => $danhmuccon)
                  @if($danhmuccon->category_id==$danhmuc->category_parent)
                    <span style="color:green">{{$danhmuccon->category_name}}</span>
                  @endif
                @endforeach
              @endif
            </td>
            <td>{{$danhmuc->category_slug}}</td>
            <td><span class="text-ellipsis">{{$danhmuc->category_description}}</span></td>
            <td>
              <span class="text-ellipsis">
                @if($danhmuc->category_status==1)
                  <span class="text text-success">Hiển thị</span>
                @else
                  <span class="text text-danger">Ẩn</span>
                @endif
              </span>
            </td>
            <td>
                <a href="{{route('danhmuc.edit',[$danhmuc->category_id])}}"><button class="btn btn-success" >Cập nhật</button></a>
                <form action="{{route('danhmuc.destroy',[$danhmuc->category_id])}}" method="POST">
                  @method('DELETE')
                  @csrf
                  <button class="btn btn-danger" style="margin-top:10px" onclick="return confirm('Bạn muốn xóa danh mục sản phẩm này không?');">Xóa</button>
                </form>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
    <footer class="panel-footer">
      <div class="row">
        
        <div class="col-sm-5 text-center">
          <small class="text-muted inline m-t-sm m-b-sm">Hiển thị 20-30 của 50 danh mục sản phẩm</small>
        </div>
        <div class="col-sm-7 text-right text-center-xs">                
          <ul class="pagination pagination-sm m-t-none m-b-none">
            <li><a href=""><i class="fa fa-chevron-left"></i></a></li>
            <li><a href="">1</a></li>
            <li><a href="">2</a></li>
            <li><a href="">3</a></li>
            <li><a href="">4</a></li>
            <li><a href=""><i class="fa fa-chevron-right"></i></a></li>
          </ul>
        </div>
      </div>
    </footer>
  </div>
</div>
@endsection