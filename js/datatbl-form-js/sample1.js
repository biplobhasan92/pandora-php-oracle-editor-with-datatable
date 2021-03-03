$(document).ready(function(){

	
	$("#btnAddnewEmp").on('click', function(){
		Metro.dialog.open('#create-employee');
		$('.dialog-title').html("<i class='fa fa-plus'></i> Add Employee");
		$('#employee_id').val("");
	});



	$("#empForm").on('submit', function(event){
		event.preventDefault();
		$('#save').attr('disabled','disabled');
		var emp_id = jQuery('input#employee_id').val();
		if(emp_id){
			jQuery('input#action').val('update');			
		}else{
			jQuery('input#action').val('create');
		}
		var formData = $(this).serializeArray();
		$.ajax({
			url:"action.php",
			method:"POST",
			data:formData,
			success:function(data){
				$('#empForm').get(0).reset();
				$('#create-employee').data('dialog').close();				
				$('#save').attr('disabled', false);
				empRecords.ajax.reload();
			}
		})
	});





	var empRecords = $('#empList').DataTable({ // table.rows( ).count();
		lengthChange: false,
		serverSide : true,
		ajax:{
			url:"action.php",
			type:"POST",
			data:{action:'listEmp'},
			dataType:"json"
		},
		dataSrc: 'data',
		paging:false,
		columns : [
			{ data : 'ID'},
			{ data : 'NAME'},
			{ data : 'POSITION'},
			{ data : 'OFFICE'},
			{ data : 'AGE'},
			{ data : 'START_DATE'},
			{ data : 'SALARY'},
			{
				data : "ID",
				render: function(data, type, row){
					return '<a class="btn update" href="#" id='+data+' style="color:#000;"><i class="mif-pencil mif-lg on-right"></i></a>';
				}
			},
			{
				data : "ID",
				render: function(data, type, row){
					return '<a class="btn delete" href="#" id='+data+' style="color:#000;"> <span class="mif-bin mif-lg on-right"></span> </a>';
				}
			}
		],
		pageLength : 10
	});








	$("#empList").on('click', '.update', function(){
		var empId = $(this).attr("id");
		$.ajax({
			url:'action.php',
			method:"POST",
			data:{empId:empId, action:'getEmp'},
			dataType:"json",
			success:function(data){
				Metro.dialog.open('#create-employee');
				// $('#empModal').modal('show');
				$('#employee_id').val(data.ID);
				$('#name').val(data.NAME);
				$('#position').val(data.POSITION);
				$('#office').val(data.OFFICE);
				$('#age').val(data.AGE);
				$('#start_date').val(data.START_DATE);
				$('#salary').val(data.SALARY);
				$('.dialog-title').html("<i class='fa fa-plus'></i> Edit Employee");
				$('#action').val('update');
				// $('#save').val('Save');
			}
		})
	});








	$("#empList").on('click', '.delete', function(){
		var empId = $(this).attr("id");
		if(confirm("Are you sure you want to delete this employee ?")){
			$.ajax({
				url:"action.php",
				method:"POST",
				data:{empId:empId, action:'deleteEmp'},
				success:function(data){
					empRecords.ajax.reload();
				}
			})
		}else{
			return false;
		}
	});



});