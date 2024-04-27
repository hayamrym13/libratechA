@extends('users.current_user')
@section('users')

 <div class="content-wrapper">
	  <div class="container-full">
		<!-- Content Header (Page header) -->
		 

		<!-- Main content -->
		<section class="content">
		  <div class="row">
			  
			 

			<div class="col-12">

			 <div class="box">
				<div class="box-header with-border">
				  <h3 class="box-title">List des utilisateurs </h3>

				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<div  class="table-responsive">
					  <table id="example1" class="table table-bordered table-striped">
						<thead>
			<tr>
				<th width="5%">Code</th>
				<th>Nom</th>
				<th>Prenom</th>
				<th width="8%">Role</th>
				<th width="10%">Num Téléphone</th>
				<th width="10%">Departement</th>
				<th width="10%">Filier</th>
				<th width="60%"></th>
			
			</tr>
		</thead>
		<tbody>
			<tr>
			@foreach($allData as $key => $users )
			@if($users->role!="admin"&&$users->inv==1 )
				<td>{{$users->code}}</td>
				<td>{{$users->name}}</td>
				<td>{{$users->prenom}}</td>
				<td>{{$users->role}}</td>
				<td>{{$users->Telephone}}</td>
				<td>{{$users->departement}}</td>
				<td>{{$users->filier}}</td>
				<td>
<a href="{{ route('users.delete',[$users->id , $user->id]) }}" class="btn btn-danger" id="delete">Supprimer</a>


				</td>
			</tr>
			@endif
			@endforeach
							 
						</tbody>
						<tfoot>
							 
						</tfoot>
					  </table>
					</div>
				</div>
				<!-- /.box-body -->
			  </div>
			  <!-- /.box -->

			       
			</div>
			<!-- /.col -->
		  </div>
		  <!-- /.row -->
		</section>
		<!-- /.content -->
	  
	  </div>
  </div>
  @endsection






