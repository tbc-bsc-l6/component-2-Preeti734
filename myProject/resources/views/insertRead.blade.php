@extends('dashboard')
@section('content')
<!-- Button trigger modal -->
<center>
<button type="button" class="btn btn-outline-secondary fw-bold fs-4 rounded-pill" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
  Add Product
</button>


<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">CRUD</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
       <!-- form to insert the data -->
       
      <form action="insertData" method = "POST"  enctype="multipart/form-data">
      @csrf
        <div class="mb-2">
            <input type="text" placeholder="Enter Product Name" class="form-control" name="ProductName" id="">
        </div>
        
      <select class="form-select mb-2" aria-label="Default select example" id="Category" name="ProductCategory">
       <option selected>Category</option>
       <option value="Men">Men</option>
       <option value="Women">Women</option>
       <option value="Kids">Kids</option>
       </select>
       <div class="mb-2">
            <input type="text" placeholder="Enter Product Price" class="form-control" name="ProductPrice" id="">
        </div>
        <div class="mb-2">
            <input type="file" class="form-control" name="ProductImage" id="">
        </div>
        <button type="submit" class="btn btn-outline-secondary fw-bold fs-5 ">Add Product</button>
       </form>
      
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
</center>
<div class = "container">
<table class = "table mt-5">
  <thead class="bg-info text-white fw-bold">
  <th>Id</th>
    <th>Product Name</th>
    <th>Category</th>
    <th>Product Price</th>
    <th>Product Image</th>
    <th>Update</th>
    <th>Delete</th>


  </thead>
  <tbody class = "text-secondary bg-light fs-4">
  @foreach($data as $item)
    <tr>
      <form action="updatedelete" method="get">
      <td class="pt-5"><input type="hidden" name = "Id" value="{{$item ['Id']}}">{{$item ['Id']}}</td>
      <td class="pt-5"><input type="hidden" name = "ProductName" value="{{$item ['ProductName']}}">{{$item ['ProductName']}}</td>
      <td class="pt-5"><input type="hidden" name = "ProductCategory" value="{{$item ['Category']}}">{{$item ['Category']}}</td>
      <td  class="pt-5"><input type="hidden" name = "ProductPrice" value="{{$item ['ProductPrice']}}">{{$item ['ProductPrice']}}</td>
     
      <td><img src = "productImages/{{$item ['ProductImage']}}" width = "100px" height ="100px" alt=""></td>
      
      <td class="pt-5"><input type="submit" class = "btn btn-outline-secondary rounded-pill" name = "update" value="Update"></td>
      <td class="pt-5"><input type="submit" class = "btn btn-outline-secondary rounded-pill" value="Delete"></td>
      </form>
    </tr>
    @endforeach
  </tbody>
</table>
</div>
@endsection