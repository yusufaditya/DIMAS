@extends('layouts.dashboard')

@section('title', 'Dimas - Website')

@section('plugin')

@endsection

@section('content')
    <div>
        <button class="btn btn-primary m-2">
            Tambah Data
        </button>
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
                        <td><img src="{{ Storage::url($product->gambar) }}" alt="" width="50px" height="50px"></td>
                        <td>{{ $product->nama_produk }}</td>
                        <td>{{ $product->harga }}</td>
                        <td>
                            <a href="" class="btn btn-primary">
                                <i class="fas fa-edit"></i>
                                Edit
                            </a>

                            <a href="" class="btn btn-danger">
                                <i class="fas fa-trash-alt"></i>
                                Hapus
                            </a>
                        </td>
                    </tr>
                  @endforeach
              </tbody>
          </table>
    </div>
@endsection

@section('website', 'active')