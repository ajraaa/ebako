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
              <h3 class="page-title"> Stok Produk </h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Stok</li>
                </ol>
              </nav>
            </div>
            <div class="row">
              <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Stok Produk</h4>
                    <p class="card-description"> Produk-produk yang dijual
                    </p>
                    @if(session()->has('pesan'))
                            <div class="alert alert-success">
                                <button type="button" class="close" data-dismiss="alert">x</button>
                                {{ session()->get('pesan') }}
                            </div>
                        @endif
                    <table class="table table-hover">
                        <thead>
                            <tr>
                            <th>Nama</th>
                            <th>Kategori</th>
                            {{-- <th>Deskripsi</th> --}}
                            <th>Harga</th>
                            <th>Stok</th>
                            <th>Terjual</th>
                            <th>Update</th>
                            <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($products as $product)
                            <tr>
                            <td>{{ $product->nama }}</td>
                            <td>{{ $product->kategori }}</td>
                            {{-- <td>{{ $product->deskripsi }}</td> --}}
                            <td>{{ $product->harga }}</td>
                            <td>{{ $product->stok }}</td>
                            <td>{{ $product->terjual }}</td>
                            <td>
                                <a class="btn-sm btn-primary" href="{{ url('update', $product->id) }}">edit</a>
                            </td>
                            <td>
                                <a class="btn-sm btn-danger" href="{{ url('deleteproduct', $product->id) }}">hapus</a>
                            </td>
                            {{-- <td class="text-danger"> 28.76% <i class="mdi mdi-arrow-down"></i></td>
                            <td><label class="badge badge-danger">Pending</label></td> --}}
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                  </div>
                </div>
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