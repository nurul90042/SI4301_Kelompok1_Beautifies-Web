@extends('admin.admin')

@section('main')


<div class="row">
    <div class="col-md-3 col-sm-12 col-xs-12">
        <div class="panel panel-primary text-center no-boder bg-color-green">
            <div class="panel-body">
                <i class="fa fa-bar-chart-o fa-5x"></i>
                <h3>XXX</h3>
            </div>
            <div class="panel-footer back-footer-green">
                Grafik Penjualan 

            </div>
        </div>
    </div>
    <div class="col-md-3 col-sm-12 col-xs-12">
        <div class="panel panel-primary text-center no-boder bg-color-blue">
            <div class="panel-body">
                <i class="fa fa-shopping-cart fa-5x"></i>
                <h3>XXXX</h3>
            </div>
            <div class="panel-footer back-footer-blue">
                Transaksi 

            </div>
        </div>
    </div>
    <div class="col-md-3 col-sm-12 col-xs-12">
        <div class="panel panel-primary text-center no-boder bg-color-red">
            <div class="panel-body">
                <i class="fa fa fa-comments fa-5x"></i>
                <h3>XXXX</h3>
            </div>
            <div class="panel-footer back-footer-red">
                Feedback

            </div>
        </div>
    </div>
    <div class="col-md-3 col-sm-12 col-xs-12">
        <div class="panel panel-primary text-center no-boder bg-color-brown">
            <div class="panel-body">
                <i class="fa fa-users fa-5x"></i>
                <h3>XXX</h3>
            </div>
            <div class="panel-footer back-footer-brown">
                Jumlah Member

            </div>
        </div>
    </div>
</div>


<div class="row">
   
    <div class="col-md-12 col-sm-12 col-xs-12">

        <div class="panel panel-default">
            <div class="panel-heading">
                Data Member Saat Ini
            </div> 
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>S No.</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>User Name</th>
                                <th>Email ID.</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>John</td>
                                <td>Doe</td>
                                <td>John15482</td>
                                <td>name@site.com</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Kimsila</td>
                                <td>Marriye</td>
                                <td>Kim1425</td>
                                <td>name@site.com</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Rossye</td>
                                <td>Nermal</td>
                                <td>Rossy1245</td>
                                <td>name@site.com</td>
                            </tr>
                            

                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
</div> 
@endsection