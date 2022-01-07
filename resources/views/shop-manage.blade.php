@extends('admin.admin')
@section('main')

<div id="wrapper"> 
             <!-- /. ROW  -->
           
        <div class="row">
            <div class="col-md-12">
                <div class="col-md-12">
                    <h1 class="page-header">
                        Shop<small> Manager</small>
                    </h1>
                </div>
                <!-- Advanced Tables -->
                <div class="panel panel-default">
                
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>Id Produk</th>
                                        <th>Kode Produk</th>
                                        <th>Rating Produk</th>
                                        <th>Nama Produk</th>
                                        <th>Keterangan</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="odd gradeX">
                                        <td>1</td>
                                        <td>xxx</td>
                                        <td>******</td>
                                        <td>Face Toner</td>
                                        <td class="center">4</td>
                                        
                                        <td>
                                            <button type="button" class="btn btn-success" style="font-size:1rem;">Edit</button>
                                                <a> <input type="submit" value="Delete" class="btn btn-danger" style="font-size:1rem;" /></a>

                                        </td>
                                    </tr>
                                    <tr class="odd gradeX">
                                        <td>2</td>
                                        <td>xxx</td>
                                        <td>******</td>
                                        <td>Face Toner</td>
                                        <td class="center">4</td>
                                        
                                        <td>
                                            <button type="button" class="btn btn-success" style="font-size:1rem;">Edit</button>
                                                <a> <input type="submit" value="Delete" class="btn btn-danger" style="font-size:1rem;" /></a>

                                        </td>
                                    </tr>
                                    <tr class="odd gradeX">
                                        <td>3</td>
                                        <td>xxx</td>
                                        <td>******</td>
                                        <td>Face Toner</td>
                                        <td class="center">4</td>
                                        
                                        <td>
                                            <button type="button" class="btn btn-success" style="font-size:1rem;">Edit</button>
                                                <a> <input type="submit" value="Delete" class="btn btn-danger" style="font-size:1rem;" /></a>

                                        </td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                        
                    </div>
                </div>
                <!--End Advanced Tables -->
            </div>
        </div>
            <!-- /. ROW  -->
      
            <!-- /. ROW  -->
     
            <!-- /. ROW  -->
        
            <!-- /. ROW  -->
    
           {{-- <footer><p>All right reserved. Template by: <a href="http://webthemez.com">WebThemez</a></p></footer> --}}


@endsection