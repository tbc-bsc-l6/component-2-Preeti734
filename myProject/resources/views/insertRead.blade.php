@extends('crud')
@section('content')

<!-- Button trigger modal -->
<center>
<button type="button" class="btn btn-outline-danger fw-bold fs-4 rounded-pill" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
  Add Record
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
        <div class="mb-2">
            <input type="text" placeholder="Enter Product Price" class="form-control" name="ProductPrice" id="">
        </div>
        <div class="mb-2">
            <input type="file" class="form-control" name="ProductImage" id="">
        </div>
        <button type="submit" class="btn btn-outline-danger fw-bold fs-4 rounded-pill" >Add Record</button>
       </form>
      
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
</center>
<div class = "container">
<table class = "table mt-5">
  <thead class="bg-danger text-white fw-bold">
  <th>Id</th>
    <th>Product Name</th>
    <th>Product Price</th>
    <th>Product Image</th>
    <th>Update</th>
    <th>Delete</th>


  </thead>
  <tbody class = "text-danger bg-light fs-4">
  @foreach($data as $item)
    <tr>
      <form action="updatedelete" method="get">
      <td class="pt-5"><input type="hidden" name = "Id" value="{{$item ['Id']}}">{{$item ['Id']}}</td>
      <td class="pt-5"><input type="hidden" name = "ProductName" value="{{$item ['ProductName']}}">{{$item ['ProductName']}}</td>
      <td  class="pt-5"><input type="hidden" name = "ProductPrice" value="{{$item ['ProductPrice']}}">{{$item ['ProductPrice']}}</td>
      <td><img src = "productImages/{{$item ['ProductImage']}}" width = "100px" height ="100px" alt=""></td>
      <td class="pt-5"><input type="submit" class = "btn btn-outline-danger rounded-pill" name = "update" value="Update"></td>
      <td class="pt-5"><input type="submit" class = "btn btn-outline-danger rounded-pill" value="Delete"></td>
      </form>
    </tr>
    @endforeach
  </tbody>
</table>
</div>
@endsection