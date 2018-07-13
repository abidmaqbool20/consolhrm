
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
								<div class="col-md-12 d-flex">
									<div class="col-md-4 ml-auto "> 
										<ul class="pt-2 mr-0 pb-2">
											<li class="d-inline-block col-sm-5 m-l-10 pr-0">
												<select class="form-control">
													<option>Abc </option>
													<option>XYZ </option>
												</select> 
											</li>
											
											<li class="d-inline-block m-l-10">
												<a data-toggle="modal" data-target="#RghtMdl" class="btn btn-primary">
												<i class="fa fa-fw fa-plus"></i> Add Record</a>
											</li>
											<li class="d-inline-block m-l-10"> 
												<a class="btn btn-default mr-10 fltrbtn" href="javascript:;"><i class="fa fa-filter fa-lg"></i></a>
											</li>
											<li class="d-inline-block m-l-10"> 	
												<a href="#" data-toggle="dropdown" class="text-muted"><i class="fa fa-ellipsis-h f-s-14"></i></a>
											    <ul class="dropdown dropdown-menu">
											       <li> <a href="#" class=""> <i class="fa fa-fw m-r-10 fa-eye"></i> View </a> </li>
												   <li> <a href="#" class=""><i class="fa fa-pencil-alt m-r-10 fa-pencil"></i> Update  </a> </li>
												   <li> <a href="#" class=""><i class="fa fa-fw m-r-10 fa-trash-alt fa-trash"></i> Delete</a> </li>
											    </ul>
											</li>
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
								          <th> Edit / Delete </th>
								          <th> ORG ID</th>
								          <th>Company Name</th>
								          <th>Logo</th>
								          <th>Address</th>
								          <th>City</th>
								          <th>State</th>
								          <th>Country</th>
								          <th>Services</th>
								          <th>NTN</th>
								          <th>Phone #.</th>
								          <th>Owner Name </th>
								          <th>Email </th>
								          <th>Password </th>
								          <th>Mobile # </th>
								      	</tr>
								      	 <tr>
								        
								         
										 <th>

										 	<select class="default-select2 form-control">
	                                            <optgroup label="Alaskan/Hawaiian Time Zone">
	                                                <option value="AK">Alaska</option>
	                                                <option value="HI">Hawaii</option>
	                                            </optgroup>
	                                            <optgroup label="Pacific Time Zone">
	                                                <option value="CA">California</option>
	                                                <option value="NV">Nevada</option>
	                                                <option value="OR">Oregon</option>
	                                                <option value="WA">Washington</option>
	                                            </optgroup>
	                                            <optgroup label="Mountain Time Zone">
	                                                <option value="AZ">Arizona</option>
	                                                <option value="CO">Colorado</option>
	                                                <option value="ID">Idaho</option>
	                                                <option value="MT">Montana</option>
	                                                <option value="NE">Nebraska</option>
	                                                <option value="NM">New Mexico</option>
	                                                <option value="ND">North Dakota</option>
	                                                <option value="UT">Utah</option>
	                                                <option value="WY">Wyoming</option>
	                                            </optgroup>
	                                            <optgroup label="Central Time Zone">
	                                                <option value="AL">Alabama</option>
	                                                <option value="AR">Arkansas</option>
	                                                <option value="IL">Illinois</option>
	                                                <option value="IA">Iowa</option>
	                                                <option value="KS">Kansas</option>
	                                                <option value="KY">Kentucky</option>
	                                                <option value="LA">Louisiana</option>
	                                                <option value="MN">Minnesota</option>
	                                                <option value="MS">Mississippi</option>
	                                                <option value="MO">Missouri</option>
	                                                <option value="OK">Oklahoma</option>
	                                                <option value="SD">South Dakota</option>
	                                                <option value="TX">Texas</option>
	                                                <option value="TN">Tennessee</option>
	                                                <option value="WI">Wisconsin</option>
	                                            </optgroup>
	                                            <optgroup label="Eastern Time Zone">
	                                                <option value="CT">Connecticut</option>
	                                                <option value="DE">Delaware</option>
	                                                <option value="FL">Florida</option>
	                                                <option value="GA">Georgia</option>
	                                                <option value="IN">Indiana</option>
	                                                <option value="ME">Maine</option>
	                                                <option value="MD">Maryland</option>
	                                                <option value="MA">Massachusetts</option>
	                                                <option value="MI">Michigan</option>
	                                                <option value="NH">New Hampshire</option>
	                                                <option value="NJ">New Jersey</option>
	                                                <option value="NY">New York</option>
	                                                <option value="NC">North Carolina</option>
	                                                <option value="OH">Ohio</option>
	                                                <option value="PA">Pennsylvania</option>
	                                                <option value="RI">Rhode Island</option>
	                                                <option value="SC">South Carolina</option>
	                                                <option value="VT">Vermont</option>
	                                                <option value="VA">Virginia</option>
	                                                <option value="WV">West Virginia</option>
	                                            </optgroup>
                                        </select>

										  </th>
								          <th>ORG ID</th>
								          <th>Company Name</th>
								          <th>Logo</th>
								          <th>Address</th>
								          <th>City</th>
								          <th>State</th>
								          <th>Country</th>
								          <th>Services</th>
								          <th>NTN</th>
								          <th>Phone #.</th>
								          <th>Owner Name </th>
								          <th>Email </th>
								          <th>Password </th>
								          <th>Mobile # </th>
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
								          	<td>1</td>
								          	<td>1</td>
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


 
</script>
<?php include("includes/footer.php"); ?>



<!-- Bootstrap Model Start Here  -->


	<!-- Modal -->
<!-- 	<div class="modal right fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel2" aria-hidden="true" data-backdrop="false">
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

			</div> --> <!-- modal-content -->
		<!-- </div>--> <!-- modal-dialog -->
	<!-- </div -->>
	
	
