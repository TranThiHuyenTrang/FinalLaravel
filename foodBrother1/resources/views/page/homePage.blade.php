@extends('master')
@section('content')
    <section id="home" class="slide_scroll" data-parallax="scroll" data-image-src="public/img_food/pa.jpg">
        <div class="slide_text_centrer">
            <h2 class="h2_text" >Order Food Online From the Best Restaurants</h2>
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
    <div class="container">
    <div class="row">
    @foreach($pro as $product)
        <div class="col-md-4">
              <div class="thumbnail" style="width: 320px ; padding:10px">
                <img style="height: 200px; " src="{{ $product->image }}" alt="" class="img-responsive">
                <div class="caption">
                  <h4 class="pull-right">{{ $product->unit_price }} VND</h4>
                  <h4><a href="#">{{ $product->title }}</a></h4>
                </div>
                <div class="ratings">
                  <p>
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star"></span>
                     (15 reviews)
                  </p>
                </div>
                <div class="space-ten"></div>
                <div class="btn-ground text-center">
                <a href="{{route('chitietsanpham',$product->id)}}" class="btn btn-primary"><i class="fa fa-cart-plus" aria-hidden="true"></i>Thêm</a>
                    <a href="{{route('chitietsanpham',$product->id)}}" class="btn btn-primary"><i class="fa fa-product-hunt" aria-hidden="true"></i>Chi tiết</a>
                </div>
                <div class="space-ten"></div>
              </div>
            </div>
            @endforeach
    </div>
</div>
@endsection

