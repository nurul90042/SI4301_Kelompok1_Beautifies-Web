@extends('admin.admin')
@section('main')

<div id="wrapper"> 
             <!-- /. ROW  -->
           
        <div class="row">
            <div class="col-md-12">
                <div class="col-md-12">
                    <h1 class="page-header">
                        About<small> Manager</small>
                    </h1>
                </div>
                <!-- Advanced Tables -->
                <div class="panel panel-default">
                
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Nama Perusahaan</th>
                                        <th>Tahun Berdiri</th>
                                        <th>Pemilik</th>
                                        <th>Sejarah Perusahaan</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="odd gradeX">
                                        <td>1</td>
                                        <td>CV. Beautifies Indonesia</td>
                                        <td>2022</td>
                                        <td class="center">4</td>
                                        <td class="center">X</td>
                                        <td>
                                            
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