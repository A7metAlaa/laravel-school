@extends('admin.admin_master')

@section('admin')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
	  <div class="container-full">
		<!-- Content Header (Page header) -->
		 

		<!-- Main content -->
		<section class="content">
		  <div class="row">
            <div class="col-12">
            <div class="box box-widget widget-user">
					<!-- Add the bg color to the header using any of the bg-* classes -->
					<div class="widget-user-header mb-2 bg-black" style="background: url('backend/images/gallery/full/10.jpg') center center;">
					  <h3 class="widget-user-username">User Name: {{$user?->name}}</h3>
              
					  <h6 class="widget-user-desc">User Type: {{$user?->usertype}}</h6>
					  <h6 class="widget-user-desc">User Email: {{$user?->email}}</h6>
                      <div class="d-flex justify-content-end align-item-end mx-5 ">
                          <button class="btn btn-info rounded ">
                              <a href="{{route('profile.edit')}}" class="text-white" >Edit Profile</a>
                            </button>
                        </div>


					</div>
                    
					<div class="widget-user-image" style="top:58px">
               
                    <img class="rounded-circle" 
                     src="{{auth()->user()->image ? asset('/upload/user_images/'.$user->image) :asset('upload/no_image.jpg')}}" alt="User Avatar">
					</div>
					<div class="box-footer">
					  <div class="row">
						<div class="col-sm-4">
						  <div class="description-block">
							<h5 class="description-header">Mobile No</h5>
							<span class="description-text">{{$user?->mobile}}</span>
						  </div>
						  <!-- /.description-block -->
						</div>
						<!-- /.col -->
						<div class="col-sm-4 br-1 bl-1">
						  <div class="description-block">
							<h5 class="description-header">Address</h5>
							<span class="description-text">{{$user?->address}}</span>
						  </div>
						  <!-- /.description-block -->
						</div>
						<!-- /.col -->
						<div class="col-sm-4">
						  <div class="description-block">
							<h5 class="description-header">Gender</h5>
							<span class="description-text">{{$user?->gender}}</span>
						  </div>
						  <!-- /.description-block -->
						</div>
						<!-- /.col -->
					  </div>
					  <!-- /.row -->
					</div>
				  </div>
            </div>
            <!-- /.box -->
        </div>	
        <!-- /.col -->
          
		  <!-- /.row -->
		</section>
		<!-- /.content -->
	  
	  </div>
  </div>
  <!-- /.content-wrapper -->
@endsection