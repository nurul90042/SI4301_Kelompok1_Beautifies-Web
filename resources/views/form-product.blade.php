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
                        <form method="post" action="/product/add/data" accept-charset="UTF-8" class="contact-form">	
                            <div class="row">
                              <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="form-group">
                                    <label for="CustomerEmail">Kode Produk</label>
                                    <input type="text" name="kode_produk" placeholder="" id="kode_produk" class="" autocorrect="off" autocapitalize="off" value="$randomString">
                                </div>
                                  <div class="form-group">
                                      <label for="CustomerEmail">Nama Produk</label>
                                      <input type="text" name="nama_produk" placeholder="" id="nama_produk" class="" autocorrect="off" autocapitalize="off" autofocus="">
                                  </div>
                              </div>
                              <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                  <div class="form-group">
                                      <label for="CustomerPassword">Harga Produk</label>
                                      <input type="number" value="" name="harga_produk" placeholder="" id="CustomerPassword" >                        	
                                  </div>
                              </div>
                              <label>Tambah Gambar</label><br>
                                <input type="file" id="gambarproduk" name="gambarproduk"><br>
                                <input type="submit" value="Submit" class="btn btn-primary" style="margin-top:10px; margin-bottom:80px;"/>
                            </div>
                            <div class="row">
                              <div class="text-center col-12 col-sm-12 col-md-12 col-lg-12">
                                  <input type="submit" class="btn mb-3" style="background-color:#FB2E86;" value="Sign In">
                                  
                              </div>
                           </div>
                       </form>
                        
                    </div>
                </div>
                <!--End Advanced Tables -->
            </div>
        </div>
           
@endsection


