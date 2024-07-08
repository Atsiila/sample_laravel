@extends('layouts.admin')

@section('content')
      <!--breadcrumb-->
      <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title pe-3">Components</div>
        <div class="ps-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Data Table</li>
                </ol>
            </nav>
        </div>
        <div class="ms-auto">
            <div class="btn-group">
                <button type="button" class="btn btn-primary">Settings</button>
                <button type="button" class="btn btn-primary split-bg-primary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown">	<span class="visually-hidden">Toggle Dropdown</span>
                </button>
                <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-end">	<a class="dropdown-item" href="javascript:;">Action</a>
                    <a class="dropdown-item" href="javascript:;">Another action</a>
                    <a class="dropdown-item" href="javascript:;">Something else here</a>
                    <div class="dropdown-divider"></div>	<a class="dropdown-item" href="javascript:;">Separated link</a>
                </div>
            </div>
        </div>
    </div>
    <!--end breadcrumb-->

<h6 class="mb-0 text-uppercase">DataTable produk</h6>
    <hr>
    <div class="card">
        <div class="card-body">
            <div class="table-responsive">

                        @php $no = 1; @endphp
                        <form action="{{route('produk.update', $produk->id)}}" {{--error cik--}} method="POST" enctype="multipart/form-data"> {{--//postnya badag!--}}
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label class="form-label">Masukkan nama</label>
                                <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name', $produk->name)}}">
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-2">
                                <label class="form-label">Masukkan slug</label>
                                <input type="text" class="form-control" @error('slug') is-invalid @enderror name="slug"
                                value="{{ old('slug') }}" placeholder="slug" required>
                                @error('slug')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="mb-2">
                                <label class="form-label">Masukkan dest</label>
                                <input type="text" class="form-control" @error('dest') is-invalid @enderror name="dest"
                                value="{{ old('dest') }}" placeholder="dest" required>
                                @error('dest')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="mb-2">
                                <label class="form-label">Masukkan price</label>
                                <input type="text" class="form-control" @error('price') is-invalid @enderror name="price"
                                value="{{ old('price') }}" placeholder="price" required>
                                @error('price')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="mb-2">
                                <label class="form-label">Masukkan stock</label>
                                <input type="text" class="form-control" @error('stock') is-invalid @enderror name="stock"
                                value="{{ old('stock') }}" placeholder="stock" required>
                                @error('stock')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="">Nama Penulis</label>
                                <select name="id_kategori" id="" class="form-control">
                                    @foreach ($kategori as $item)
                                        <option value="{{$item->id}}" {{$item->id == $produk->id_kategori ? 'selected': ''}}>{{ $item->nama_kategori }}</option>
                                    @endforeach
                                </select>
                            </div>
                            
                            <a href="{{route('produk.index')}}" class="btn btn-danger">Back</a>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
            </div>
        </div>
    </div>

@endsection