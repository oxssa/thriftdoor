
    <div class="custom-col-style-2 custom-col-4">
    <div class="product-wrapper product-border mb-24">
        <div class="product-img-3">
            <a href="{{ route('products.detail', [$product->id]) }}">
                @if(!empty($product->cover_img))
                    <img src="{{asset('storage/'.$product->cover_img)}}" alt="">
                @else
                    <img src="/assets/img/product/electro/1.jpg" alt="">
                @endif
            </a>
            <div class="product-action-right">
                 <a class="animate-right" href="{{ route('products.detail', [$product->id]) }}" data-target="#exampleModal" data-toggletitle="Quick View">
                     <i class="pe-7s-look"></i>
                 </a>
                 <a class="animate-top" title="Add To Cart" href="{{route('cart.add', $product->id)}}">
                     <i class="pe-7s-cart"></i>
                 </a>
             </div>
         </div>
         <div class="product-content-4 text-center">
             <div class="product-rating-4">
                 <i class="icofont icofont-star yellow"></i>
                 <i class="icofont icofont-star yellow"></i>
                 <i class="icofont icofont-star yellow"></i>
                 <i class="icofont icofont-star yellow"></i>
                 <i class="icofont icofont-star"></i>
             </div>
             <h4><a href="{{ route('products.detail', [$product->id]) }}">{{$product->name}}</a></h4>
            <span>{!! $product->description !!}</span>
            <h5>Rp {{$product->price}}</h5>
        </div>
    </div>
</div>

