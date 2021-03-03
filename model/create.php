<div class="modal" id="create-student" tabindex="-1" role="dialog">
  	<div class="modal-dialog" role="document">
	    <form class="form-horizontal" id="student-frm">
	    	<input type="hidden" name="action" id="action">    
	    	<input type="hidden" name="student_id" id="student_id">    
		    <div class="modal-content">
		      	<div class="modal-header">
			        <h5 class="modal-title"> Add Employee </h5>
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			          	<span aria-hidden="true">&times;</span>
			        </button>
		      	</div>

		      	<div class="modal-body">
			        <div class="form-group">
			            <input type="text" name="name" class="form-control input-name" id="name" aria-describedby="nameHelp" placeholder="Name" required="required">
			        </div>
			        <div class="form-group">
			            <input type="text" name="position" class="form-control" id="position" aria-describedby="positionHelp" placeholder="Position" required="required">
			        </div>
			        <div class="form-group">
			            <div class="form-group">
			            	<input type="text" name="office" class="form-control input-gender" id="office" placeholder="Office" required="required">
			        	</div>
			        </div>
			        <div class="form-group">
			            <input type="text" name="address" class="form-control input-address" id="address" aria-describedby="addressHelp" placeholder="Address" required="required">
			        </div>
			        <div class="form-group">
			            <div class="form-group">
			            	<input type="text" name="class_name" class="form-control input-class" id="class-name" aria-describedby="classHelp" placeholder="Class" required="required">
			        	</div>
			        </div>
		      	</div>

			    <div class="modal-footer">
			        <button type="button" class="btn btn-primary" id="student-btn">Add</button>
			        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			    </div>
		    </div>
	    </form>
  	</div>
</div>