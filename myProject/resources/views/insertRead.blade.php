@extends('dashboard')
@section('content')
<div class = "col-md-4 m-auto border mt-3 p-2 border-info">
    <h2 class="text-center text-info">Add Products</h2>
<form action="insertData" method="POST" enctype="multipart/form-data">
  @csrf
  <div class="mb-3">
      <input type="text" placeholder="Enter Product Name" class="form-control" name="ProductName" id="">
  </div>
  <select class="form-select mb-3" aria-label="Default select example" id="Category" name="ProductCategory">
       <option selected>Category</option>
       <option value="Men">Men</option>
       <option value="Women">Women</option>
       <option value="Kids">Kids</option>
  </select>
  <div class="mb-3">
      <input type="text" placeholder="Enter Product Price" class="form-control" name="ProductPrice" id="">
  </div>
  <div class="mb-2">
      <input type="file" class="form-control" name="ProductImage" id="">
  </div>
  <button type="submit" class="btn bg-info fw-bold fs-5 ">Add Product</button>
</form>
</div>


