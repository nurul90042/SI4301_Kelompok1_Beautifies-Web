@extends('layouts.user')
@section('main')

<div id="page-content" style="margin-top:100px;">
    	<!--Page Title-->
    	<div class="page section-header text-center">
			<div class="page-title">
        		<div class="wrapper"><h1 class="page-width" style="background-color:#EFDEFC;">Login</h1></div>
      		</div>
		</div>
        <!--End Page Title-->
        @if(session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert" style="margin-left:590px; width:400px;">
                {{session('success')}}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close" style="margin-top:-5px;"></button>
            </div>
        @endif

        @if(session()->has('loginError'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert" style="margin-left:590px; width:400px;">
                {{session('loginError')}}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close" style="margin-top:-5px;"></button>
            </div>
        @endif
        
        <div class="container">
        	<div class="row">
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 main-col offset-md-3">
                	<div class="mb-4">
                       <form method="post" action="/login" id="CustomerLoginForm" accept-charset="UTF-8" class="contact-form">	
                          @csrf
                          <div class="row">
                            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="form-group">
                                    <label for="CustomerEmail">Email</label>
                                    <input type="email" name="email" placeholder=""  class="form-control @error('email') is-invalid @enderror" autocorrect="off" autocapitalize="off" autofocus="">
                                    @error('email')
                                        <div class="invalid-feedback">
                                            {{$message}}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="form-group">
                                    <label for="CustomerPassword">Password</label>
                                    <input type="password" value="" name="password" placeholder=""  class="">                        	
                                </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="text-center col-12 col-sm-12 col-md-12 col-lg-12">
                                <button type="submit" class="btn mb-3" style="background-color:#FB2E86;">Sign In</button>
                                <p class="mb-4">
									<a href="#" id="RecoverPassword">Forgot your password?</a> &nbsp; | &nbsp;
								    <a href="{{ route('register') }}" id="customer_register_link">Create account</a>
                                </p>
                            </div>
                         </div>
                     </form>
                    </div>
               	</div>
            </div>
        </div>
    </div>

@endsection