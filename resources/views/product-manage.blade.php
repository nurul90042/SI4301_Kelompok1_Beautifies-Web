@extends('admin.admin')
@section('main')




<div id="wrapper"> 

           
        <div class="row">
            <div class="col-md-12">
                <div class="col-md-12">
                    <h1 class="page-header">
                        Product<small> Manager</small>
                    </h1>
                </div>
                <!-- Advanced Tables -->
                <div class="panel panel-default">
                
                    <div class="panel-body">
                        <a href="{{route('add-product')}}"><button type="button" class="btn btn-primary" style="margin-top:10px; margin-bottom:10px;">Tambah Produk</button></a>
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>Id Produk</th>
                                        <th>Kode Produk</th>
                                        <th>Nama Produk</th>
                                        <th>Harga</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    
                                    @foreach ($produks as $data)
                                    <tr class="odd gradeX">
                                        <td>{{$data->id}}</td>
                                        <td>{{$data->kode_produk}}</td>
                                        <td>{{$data->nama_produk}}</td>
                                        <td>Rp {{$data->harga_produk}}</td>
                                        
                                        
                                        <td>
                                            <button type="button" class="btn btn-success" style="font-size:1rem;">Edit</button>
                                                <a> <input type="submit" value="Delete" class="btn btn-danger" style="font-size:1rem;" /></a>

                                        </td>
                                    </tr>
                                    @endforeach
                            

                                </tbody>
                            </table>
                        </div>
                        
                    </div>
                </div>
                <!--End Advanced Tables -->
            </div>
        </div>
           
@endsection


