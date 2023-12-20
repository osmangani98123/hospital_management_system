@extends('backend.layouts.includes.master')

{{-- backend hover , khubbeshi css edit korar dorkar nai --}}

@section('page_title')

Edit products


@endsection
@section('content')
<div class="card">

<div class="container mt-5">
    <h3 class="text-center mb-4">Edit Product</h3>

    <form action="{{route('updateproducts')}}" method="POST">
        @csrf

        <input type="hidden" value="{{$productsinfo->id}}" name="id">

        <br>


        <div class="form-group">
            <label for="productName">Product Name:</label>
            <input type="text" class="form-control" id="product_name" name="product_name" value="{{$productsinfo->product_name}}" required>
        </div><br>
        <div class="form-group">
            <label for="productDescription">Product Short Description:</label>
            <textarea class="form-control" id="product_short_des" name="product_short_des" rows="4" required>{{$productsinfo->product_short_des}}</textarea>
        </div><br>
        <div class="form-group">
            <label for="productLongDescription">Product Long Description:</label>
            <textarea class="form-control" id="product_long_des" name="product_long_des" rows="8" required>{{$productsinfo->product_long_des}}</textarea>
        </div><br>
        <div class="form-group">
            <label for="productQuantity">Product Quantity:</label>
            <input type="number" class="form-control" id="product_quantity" name="product_quantity" value="{{$productsinfo->product_quantity}}" required>
        </div><br>
        <div class="form-group">
            <label for="productPrice">Product Price:</label>
            <input type="number" class="form-control" id="product_price" name="product_price" value="{{$productsinfo->product_price}}" step="0.10" required>
        </div><br>

        <div class="d-grid gap-2 col-6 mx-auto">
            <button class="btn btn-success" type="submit">Update Product Info</button>

          </div>
    </form>


<br>

</div>




@endsection
