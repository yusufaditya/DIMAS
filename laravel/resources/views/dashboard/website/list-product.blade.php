@extends('layouts.dashboard')

@section('title', 'Dimas - Website')

@section('plugin')

@endsection

@section('content')
    <div>
        <a href="#" data-toggle="modal" data-target="#exampleModal">
        <button class="btn btn-primary m-2" >
            Tambah Data
        </button>
        </a>
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Foto</th>
                  <th scope="col">Nama</th>
                  <th scope="col">Harga</th>
                  <th scope="col">Action</th>
                </tr>
              </thead>
              <tbody>
                  @foreach ($products as $product)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        {{-- <td><img src="storage/app/{{$product->image}}" alt="" width="50px" height="50px"></td> --}}
                        <td><img src="{{ Storage::url($product->image) }}" alt="" width="100px" height="100px"></td>
                        <td>{{ $product->nama }}</td>
                        <td>{{ $product->harga }}</td>
                        <td>
                            <a href="{{ route('/list-product-edit', $product->id) }}" class="btn btn-primary">
                                <i class="fas fa-edit"></i>
                                Edit
                            </a>
                            <form action="{{ route('/list-product-delete', $product->id) }}" method="POST">
                                @csrf    
                                @method('delete')
                                <button type="submit" class="btn btn-danger">
                                    <i class="fas fa-trash-alt"></i>
                                    Hapus
                                </button>
                            </form>
                        </td>
                    </tr>
                  @endforeach
              </tbody>
          </table>
    </div>

    
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add Product</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <form action="{{ route('/list-product-store') }}" method="POST" enctype="multipart/form-data">   
                    @csrf
                    <div class="modal-body">
                    <div class="form-row mb-4">
                        <div class="col-3 align-self-center">
                            Product Name
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" name="name"  placeholder="Name">
                        </div>
                    </div>
                    <div class="form-row mb-4">
                        <div class="col-3 align-self-center">
                            Product Detail
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" name="detail" placeholder="Detail">
                        </div>
                    </div>
                    <div class="form-row mb-4">
                        <div class="col-3 align-self-center">
                            Product Type
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" name="type"  placeholder="Type">
                        </div>
                    </div>
                    <div class="form-row mb-4">
                        <div class="col-3 align-self-center">
                            Price
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" name="price"  placeholder="Price">
                        </div>
                    </div>
                    <div class="form-row mb-4">
                        <div class="col-3 align-self-center">
                            Description
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" name="description"  placeholder="description">
                        </div>
                    </div>
                    <div class="form-row mb-4">
                        <div class="col-3 align-self-center">
                            Image
                        </div>
                        <div class="col custom-file">
                            <input type="file" class="form-control"  name="image">
                        </div>
                    </div> 
                     <div class="input-group mb-3">
                        <input type="hidden" class="form-control" style="width:300px" name="id_user"
                        value="{{$id_user}}">
                    </div> 
                </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary" data-toggle="modal" id="addMenu" >Add Content</button>
                    </div>
            </form>
        </div>
    </div>
</div>
@endsection

@section('website', 'active')