
<?php include("includes/header.php"); ?>

<div id="content" class="content pd-0">
			<!-- begin breadcrumb -->
			<!-- <ol class="breadcrumb pull-right">
				<li class="breadcrumb-item"><a href="javascript:;">Home</a></li>
				<li class="breadcrumb-item active">Manage Organizations</li>
			</ol> -->
			<!-- end breadcrumb -->
			<!-- begin page-header -->
			<!-- <h1 class="page-header">Manage Organizations <small>Manage All Organization here..</small></h1> -->
			<!-- end page-header -->
			
			<!-- begin row -->
			
			<!-- end row -->
			<!-- begin row -->
			<div class="row ">
				<!-- begin col-8 -->
				<div class="col-lg-12 ">
					<!-- begin panel -->
					<div class="panel panel-inverse pnlbrd"  data-sortable-id="index-1">
						<div class="panel-heading panelcolor">
							<div class="panel-heading-btn">
								<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
								<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-redo"></i></a>
								<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
								<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
							</div>
							<h2 class="panel-title">Manage Organizations <small>Manage All Organization here..</small></h2>
						</div>
						<div class="panel-body bgbdy pd-0">
							<div class="row mr-0 fltrclr" >
								<div class="col-md-12">
									<div class="col-md-3 pull-right"> 
										<ul class="filteroptions">
											<li class="d-inline-block col-sm-5 m-l-10 pr-0">
												<select class="form-control">
													<option>Abc </option>
													<option>XYZ </option>
												</select> 
											</li>
											
											<li class="d-inline-block m-l-10"> <a data-toggle="modal" data-target="#modal-dialog" class="btn btn-primary">
												<i class="fa fa-fw fa-plus"></i> Add Record</a>
											 </li>
											<li class="d-inline-block m-l-10"> <a class="btn btn-default mr-10 fltrbtn" href="javascript:;"><i class="fa fa-filter fa-lg"></i></a> </li>
											<li class="d-inline-block m-l-10"> 	<a href="#" data-toggle="dropdown" class="text-muted"><i class="fa fa-ellipsis-h f-s-14"></i></a>
											    <ul class="dropdown dropdown-menu">
											       <li> <a href="#" class=""> <i class="fa fa-fw m-r-10 fa-eye"></i> View </a> </li>
												   <li> <a href="#" class=""><i class="fa fa-pencil-alt m-r-10 fa-pencil"></i> Update  </a> </li>
												   <li> <a href="#" class=""><i class="fa fa-fw m-r-10 fa-trash-alt fa-trash"></i> Delete</a> </li>
											    </ul></li>
										</ul>
									</div>
								 </div>
							</div>
							
							<div class=" fltrdiv mt-2">
								<div class="row pd-n ">
									<div class="col-md-6" style="background-color: #f00; height:20px;"> 
									</div>
									<div class="col-md-6" style="background-color: #ff0;height:20px;"> 
									</div>
								</div>
							</div>
							<div class="row pd-n mt-3">
								<div class="table-responsive">
								    <table class="table table-hover table-bordered tabcontent">
								      <thead>
								        <tr>
								          <th><input type="checkbox" name="" id="checkall"></th>
								          <th>Edit / Delete </th>
								          <th>#</th>
								          <th>Firstname</th>
								          <th>Lastname</th>
								          <th>Age</th>
								          <th>City</th>
								          <th>Country</th>
								          <th>Sex</th>
								          <th>Example</th>
								          <th>Example</th>
								          <th>Example</th>
								          <th>Example</th>
								      	</tr>
								      </thead>
								      <tbody>
								        <tr>
								        	<td><input type="checkbox" name="" class="chckbx"></td>
							        	  	<td>
									          	<a href="#" data-toggle="dropdown" class="text-muted"><i class="fa fa-ellipsis-h f-s-14"></i></a>
											    <ul class="dropdown dropdown-menu">
											       <li> <a href="#" class=""> <i class="fa fa-fw m-r-10 fa-eye"></i> View </a> </li>
												   <li> <a href="#" class=""><i class="fa fa-pencil-alt m-r-10 fa-pencil"></i> Update  </a> </li>
												   <li> <a href="#" class=""><i class="fa fa-fw m-r-10 fa-trash-alt fa-trash"></i> Delete</a> </li>
											    </ul>
											</td>
								          	<td>1</td>
								          	<td>Anna</td>
								          	<td>Pitt</td>
								          	<td>35</td>
								          	<td>New York</td>
								         	 <td>USA</td>
								          	<td>Female</td>
								          	<td>Yes</td>
								          	<td>Yes</td>
								          	<td>Yes</td>
								         	<td>Yes</td>
										</tr>
										<tr>
								        	<td><input type="checkbox" name="" class="chckbx"></td>
							        	  	<td>
						        	  			<a href="#" data-toggle="dropdown" class="text-muted"><i class="fa fa-ellipsis-h f-s-14"></i></a>
											    <ul class="dropdown dropdown-menu">
											       <li> <a href="#" class=""> <i class="fa fa-fw m-r-10 fa-eye"></i> View </a> </li>
												   <li> <a href="#" class=""><i class="fa fa-pencil-alt m-r-10 fa-pencil"></i> Update  </a> </li>
												   <li> <a href="#" class=""><i class="fa fa-fw m-r-10 fa-trash-alt fa-trash"></i> Delete</a> </li>
											    </ul>
											</td>
								          	<td>2</td>
								          	<td>Anna</td>
								          	<td>Pitt</td>
								          	<td>35</td>
								          	<td>New York</td>
								         	 <td>USA</td>
								          	<td>Female</td>
								          	<td>Yes</td>
								          	<td>Yes</td>
								          	<td>Yes</td>
								         	<td>Yes</td>
										</tr>
								      </tbody>
								    </table>
				  				</div>
							</div>
						</div>
					</div>
					<!-- end panel -->
					
				
					
				</div>
				<!-- end col-8 -->
				<!-- begin col-4 -->
			
				<!-- end col-4 -->
			</div>
			<!-- end row -->
</div>
<script type="text/javascript">
	$(document).ready(function(){
		$(".fltrbtn").click(function(){
			// $(this).hide();
			 $(".fltrdiv").slideToggle('slow');
		});
	});

	$(document).ready(function(){
		$("#checkall").click(function(){
			if(this.checked){
				$(".chckbx").each(function(){
					this.checked = true;
				})
			}
			else {
				$(".chckbx").each(function(){
					this.checked = false;
				});
			}
		});
	});
 $(document).ready(function () {


        $("#modal-dialog").appendTo("body");


        });
</script>
<?php include("includes/footer.php"); ?>



<!-- Bootstrap Model Start Here  -->


	<div class="modal fade" id="modal-dialog">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">
											<h4 class="modal-title">Modal Dialog</h4>
											<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
										</div>
										<div class="modal-body">
											<p>
												Modal body content here...
											</p>
										</div>
										<div class="modal-footer">
											<a href="javascript:;" class="btn btn-white" data-dismiss="modal">Close</a>
											<a href="javascript:;" class="btn btn-success">Action</a>
										</div>
									</div>
								</div>
							</div>
	<!-- Modal -->
	<div class="modal right fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel2">
		<div class="modal-dialog" role="document">
			<div class="modal-content">

				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title" id="myModalLabel2">Right Sidebar</h4>
				</div>

				<div class="modal-body">
					<p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
					</p>
				</div>

			</div><!-- modal-content -->
		</div><!-- modal-dialog -->
	</div>
	
	
