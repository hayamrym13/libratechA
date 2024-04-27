@extends('documents.current_document')
@section('documents')

 <div class="content-wrapper">
	  <div class="container-full">
		<!-- Content Header (Page header) -->
		 

		<!-- Main content -->
		<section class="content">
		  <div class="row">
			  
			 

			<div class="col-12">

			 <div class="box">
				<div class="box-header with-border">
				  <h3 class="box-title">List des documents </h3>

				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<div  class="table-responsive">
					  <table id="example1" class="table table-bordered table-striped">
						<thead>
			<tr>
				<th width="5%">ISBN</th>
				<th>Titre</th>
				<th>Editeur</th>
				<th>Type</th>
				<th width="30%"></th>
			
			</tr>
		</thead>
		<tbody>
			<tr>
				<td></td>
				<td> </td>
				<td></td>
				<td></td>
				<td>
 <a href="" class="btn btn-info">Modifier</a> 
<a href="" class="btn btn-danger" id="delete">Supprimer</a>


				</td>
			</tr>
		
							 
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






