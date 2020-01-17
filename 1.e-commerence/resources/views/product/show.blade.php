@extends('layouts.main')

@section('content')

<product-detail-holder
        image_url="{{$product->image_url}}"
        name="{{$product->name}}"
        price="{{$product->price}}">
        {{$product->description}}
        <template slot="buynow_form">
                <form method="POST" action="{{route('cart-item.store')}}">
                        @csrf
                        <input type="hidden" value="{{$product->id}}" name="product_id"/>
                        <button class="btn btn-primary" type="submit">Buy now with {{$product->price}} USD</button>
                </form>
        </template>
</product-detail-holder>

{{--    @foreach($product->tags as $tag)--}}
{{--            {{ $tag->name }}--}}
{{--    @endforeach--}}

@endsection
