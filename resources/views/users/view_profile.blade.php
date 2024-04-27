@extends('users.current_user')
@section('users')

 <div class="content-wrapper">
	  <div class="container-full">
		<!-- Content Header (Page header) -->


		<!-- Main content -->
		<section class="content">
		  <div class="row">



			<div class="col-12">




<div class="box box-widget widget-user">
					<!-- Add the bg color to the header using any of the bg-* classes -->
 <div class="widget-user-header bg-black">
	  <h3 class="widget-user-username">Name : {{ $user->name }}</h3>

	   <a href="{{ route('profile.edit') }}" style="float: right;" class="btn btn-rounded btn-success mb-5">Modifier</a>

	  <h6 class="widget-user-desc">Role  : {{ $user->role }}</h6>



					</div>
					<div class="widget-user-image">
  <img class="rounded-circle"
   src="{{ (!empty($user->image))? url('upload/user_images/'.$user->image):url('upload/no_image.jpg') }} " alt="User Avatar">
					</div>
					<div class="box-footer">
					  <div class="row">
						<div class="col-sm-4">
						  <div class="description-block">
							<h5 class="description-header">Phone number</h5>
							<span class="description-text">{{ $user->Telephone }}</span>
						  </div>
						  <!-- /.description-block -->
						</div>
						<!-- /.col -->
						<div class="col-sm-4 br-1 bl-1">
						  <div class="description-block">
							<h5 class="description-header">Adress</h5>
							<span class="description-text">{{ $user->adresse }}</span>
						  </div>
						  <!-- /.description-block -->
						</div>
						<!-- /.col -->
						<div class="col-sm-4">
						  <div class="description-block">
							<h5 class="description-header">E-mail</h5>
							<span class="description-text">{{ $user->email }}</span>
						  </div>
						  <!-- /.description-block -->
						</div>
						<!-- /.col -->
					  </div>
					  <!-- /.row -->
					</div>
				  </div>







			</div>
			<!-- /.col -->
		  </div>
		  <!-- /.row -->
		</section>
		<!-- /.content -->

	  </div>
  </div>





@endsection
