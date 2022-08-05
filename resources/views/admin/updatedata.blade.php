<!DOCTYPE html>
<html lang="en">
  <head>
    @include('admin.head')
  </head>
  <body>
    <div class="container-scroller">
        <!-- partial:partials/_navbar.html -->
        @include('admin.navbar')
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <!-- partial:partials/_sidebar.html -->
            @include('admin.sidebar')
            <!-- partial -->
            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="page-header">
                    <h3 class="page-title"> Edit Produk </h3>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Edit produk</li>
                        </ol>
                    </nav>
                    </div>
                    <div class="row">
                    <div class="col-12 grid-margin stretch-card">
                        <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Update Detail Produk</h4>
                            <p class="card-description"> Isi form untuk mengedit data produk </p>
                            @if(session()->has('pesan'))
                                <div class="alert alert-success">
                                    <button type="button" class="close" data-dismiss="alert">x</button>
                                    {{ session()->get('pesan') }}
                                </div>
                            @endif
                            <form class="forms-sample" method="post" action="{{ url('updateproduct', $data->id) }}" enctype="multipart/form-data">
                                @csrf
                            <div class="form-group">
                                <label for="exampleInputName1">Nama Produk</label>
                                <input type="text" class="form-control" id="exampleInputName1" name="nama" value="{{ $data->nama }}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail3">Harga Produk</label>
                                <input type="number" class="form-control" id="exampleInputEmail3" name="harga" value="{{ $data->harga }}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword4">Stok Produk</label>
                                <input type="number" class="form-control" id="exampleInputPassword4" name="stok" value="{{ $data->stok }}">
                            </div>
                            <div class="form-group">
                                <label for="exampleSelectGender">Kategori</label>
                                <select name="kategori" class="form-control" id="exampleSelectGender">
                                    <option>{{ $data->kategori }}</option>
                                    @include("admin.kategori")
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword4">Old Image</label>
                                <img height="200" width="200" src="/prodimg/{{ $data->imgurl }}" alt="">
                            </div>
                            <div class="form-group">
                                <label>New Image</label>
                                <input type="file" name="img" class="file-upload-default">
                                <div class="input-group col-xs-12">
                                <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
                                <span class="input-group-append">
                                    <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                                </span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="exampleTextarea1">Deskripsi Produk</label>
                                <textarea name="deskripsi" class="form-control" id="exampleTextarea1" rows="4">{{ $data->deskripsi }}</textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                            <button class="btn btn-light">Cancel</button>
                            </form>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
            <!-- content-wrapper ends -->
            <!-- partial:partials/_footer.html -->
            @include('admin.footer')
            <!-- partial -->
            </div>
            <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    @include('admin.plugin')
  </body>
</html>