@extends('master')
@section('content')
<section id="home" class="slide_scroll" data-parallax="scroll" data-image-src="public/img_food/pa.jpg">
    <div class="slide_text_centrer">
        <h2 class="h2_text">Mua b</h2>
    </div>
    <img src="public/img_food/clouds.png" alt="">
</section>
<section>
    <div class="top_restaurent">
        <h5>Website for Restaurant and Cafe</h5>
        <h3>TOP RESTAURANTS</h3>
        <p><span>that get tricky are things like burgers and fries, or things that are deep-fried.</span><span> We do have a couple of burger restaurants that are capable of doing a good job</span><span> transporting but it's Fries are almost impossible.</span></p>
        <div class="row item">
            <div class="col-ms-3 food_item">
                <a href=""><img src="public/img_food/food_item/restaurant1.png" alt=""></a>
            </div>
            <div class="col-ms-3 food_item">
                <a href=""><img src="public/img_food/food_item/restaurant2.png" alt=""></a>
            </div>
            <div class="col-ms-3 food_item">
                <a href=""><img src="public/img_food/food_item/restaurant3.png" alt=""></a>
            </div>
            <div class="col-ms-3 food_item">
                <a href=""><img src="public/img_food/food_item/restaurant4.png" alt=""></a>
            </div>
            {{-- <div class="col-ms-3 food_item">
                    <a href=""><img src="public/img_food/food_item/restaurant5.png" alt=""></a>
                </div> --}}
        </div>
    </div>
</section>
<button type="button" class="btn btn-default btn-sm">
    <span class="fa fa-eyedropper"></span> <a href="{{route('themsanp')}}">Thêm sản phẩm</a>
</button>
<div class="container mt-2">
    <div class="row">
        @foreach($pro as $product)
        <div class="col-md-3 col-sm-6">
            <div class="card card-block">
                <h4 class="card-title text-right"><i class="material-icons"></i></h4>
                <img src="{{ $product->image }}" alt="Photo of sunset">
                <h5 class="card-title mt-3 mb-3">{{ $product->title }}</h5>
                <div class="form">
                    <button type="button" class="btn btn-default btn-sm">
                        <span class="glyphicon glyphicon-remove-sign"></span> <a href="{{route('xoasanpham',$product->id)}}">Xóa</a>
                    </button>
                    <button type="button" class="btn btn-default btn-sm">
                        <span class="fa fa-edit"></span> <a href="{{route('chitietsanpham',$product->id)}}">Sửa</a>
                    </button>
                </div>
            </div>
        </div>
        @endforeach
    </div>

</div>

@endsection