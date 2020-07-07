@extends('master')
@section('content')
<div class="panel panel-primary" style="margin:20px;">
    <div class="panel-heading">
        <h3 class="panel-title">Thêm món ăn</h3>
    </div>

    <div class="panel-body">
        <form action="{{route('themsanp')}}" enctype="multipart/form-data" method="POST" class="beta-form-checkout">
            <input type="hidden" name="_token" value="{{csrf_token()}}">
            <div class="col-md-12 col-sm-12">
                <div class="form-group col-md-6 col-sm-6">
                    <label for="name">Tên món ăn*</label>
                    <input type="text" class="form-control input-sm" name="ten" id="name" placeholder="">
                </div>
                <div class="form-group col-md-6 col-sm-6">
                    <label for="address">Thêm ảnh</label>
                    <input type="file" class="form-control" name="myFile" id="myFile">
                </div>
                <div class="form-group col-md-6 col-sm-6">
                    <label for="mobile">Giá*</label>
                    <input type="text" class="form-control input-sm" name="gia" id="mobile" placeholder="">
                </div>
                <div class="form-group col-md-6 col-sm-6">
                    <label for="city">Loại món ăn*</label>
                    <input type="text" class="form-control input-sm" name="loai" id="city" placeholder="">
                </div>
                <div class="form-group col-md-6 col-sm-6">
                    <label for="address">Giá giảm</label>
                    <input type="text" class="form-control input-sm" name="giagiam" id="" placeholder="">
                </div>
                <div class="form-group col-md-6 col-sm-6">
                    <label for="city">Số lượng*</label>
                    <input type="text" class="form-control input-sm" name="soluong" id="city" placeholder="">
                </div>

                <div class="form-group col-md-6 col-sm-6">
                    <label for="email">Mô tả</label>
                    <textarea class="form-control input-sm" id="address" name="mota" rows="3"></textarea>
                </div>
            </div>
            <div class="col-md-12 col-sm-12">
                <div class="form-group col-md-3 col-sm-3 pull-right">
                    <input type="submit" class="btn btn-primary" value="Thêm" />
                </div>
            </div>
        </form>

    </div>

</div>
@endsection