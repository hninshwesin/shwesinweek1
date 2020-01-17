@extends('layouts.main')

@section('content')

    <div class="col-md-12">
        @foreach($tags as $id=>$name)
            <a href="/tag/{{$id}}">{{$name}}</a>
        @endforeach
    </div>

    @foreach($products as $product)
        <product-list-item
            image_url="{{$product->image_url}}"
            detail_url="{{route('product.show',$product->id)}}">
            <template slot="name">{{$product->name}}</template>
            <template slot="description">{{$product->description}}</template>
        </product-list-item>
    @endforeach

@endsection
