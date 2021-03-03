
<!DOCTYPE html>
<html>
	
	<head>
		<title>Sample Page One</title>
		<script></script>
	</head>

	<body>
		<div class="wrapper">			
			<div class="dialog modal fade" data-role="dialog" id="create-employee" style="border-radius: 3px;">
			    <form id="empForm">
			    	<input type="hidden" name="action" id="action">    
	    			<input type="hidden" name="employee_id" id="employee_id">
			    	
			    	<div class="dialog-title" style="font-weight: bold;text-align: center;"> Add Employee </div>
			    	<div class="dialog-content">
			        	<div class="form-group">
			            	<input type="text" class="metro-input" data-role="input" name="name" id="name" required="required" data-prepend="Name" />
			        	</div>

			        	<div class="form-group">			            
			            	<input type="text" name="position" id="position" data-role="input" data-prepend="Position" required="required" />
			        	</div>

			        	<div class="form-group">			            
			            	<input type="text" name="office" id="office" data-role="input" data-prepend="Office" required="required" />
			        	</div>

			        	<div class="form-group">			            
			            	<input type="number" name="age" id="age" data-role="input" data-prepend="Age" required="required" />
			        	</div>

			        	<div class="form-group">			            
			            	<input type="date" name="start_date" id="start_date" data-role="input" data-prepend="Join" required="required" />
			        	</div>

			        	<div class="form-group">			            
			            	<input type="number" name="salary" id="salary" data-role="input" data-prepend="Salary" /> 
			        	</div>
			    	</div>
			    	<div class="dialog-actions" style="">
			        	<div style="float: right;padding: 10px;">
			        		<button class="button js-dialog-close">Close</button>&nbsp;&nbsp;
			        		<button id="save" name="save" type="submit" class="button primary">Save</button>
			        	</div>
				    </div>
			    </form>
			</div>

			<div class="container">
				<div class="row">
					<div class="col-md-10">
						<h1 class="text-center"> Hi ! Pandora Metro 4 Datatable Editor </h1>
						<h2 class="text-center">Employees Details</h2>
					</div>
					<div class="col-md-2">						
					</div>
				</div>
				<div class="row">
					<div class="col-md-10"></div>
					<div class="col-md-2">
						<div class="">
	                       <button class="button primary" id="btnAddnewEmp" style="float: right;" >Add New Employee</button>
	            		</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<table id="empList" class="table" width="100%">
							<thead>
								<tr>
									<th>Emp ID</th>
									<th>Name</th>
									<th>Position</th>
									<th>Office</th>
									<th>Age</th>
									<th>Start Date</th>
									<th>Salary</th>
									<th>Edit</th>
									<th>Delete</th>
								</tr>
							</thead>
						</table>
					</div>
				</div>
			</div>		
	    </div>
	    <script type="text/javascript" src="js/datatbl-form-js/sample1.js"></script>
	</body>
</html>