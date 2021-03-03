

<?php

	// include class 
	include_once 'class/Employee.php';
	// object
	$empObject = new Employee();
	// post method
	$_post = $_POST;
	$json = array();	
	$employeeInfo = array();



	// create student record in database
	if(!empty($_post['action']) && $_post['action']=="create"){

		$empObject->setName($_post['name']);
		$empObject->setPosition($_post['position']);
		$empObject->setOffice($_post['office']);
	  	$empObject->setAge($_post['age']);
	  	$empObject->setStartDate($_post['start_date']);
	  	$empObject->setSalary($_post['salary']);
		$status = $empObject->create();
		if($status){
			$json['msg'] = 'success';
			$json['task_id'] = $status;
		}else{
			$json['msg'] = 'failed';
			$json['task_id'] = '';
		}
		header('Content-Type: application/json');
	  	echo json_encode($json);
	}






	// update student record in database
	if(!empty($_post['action']) && $_post['action']=="update"){
		$empObject->setEmployeeID($_post['employee_id']);
		$empObject->setName($_post['name']);
		$empObject->setPosition($_post['position']);
		$empObject->setOffice($_post['office']);
	  	$empObject->setAge($_post['age']);
	  	$empObject->setStartDate($_post['start_date']);
	  	$empObject->setSalary($_post['salary']);
		$status = $empObject->update();
		if($status){ // !empty($status)
		   	$json['msg'] = 'success';
		}else{
			$json['msg'] = 'failed';
		}
		header('Content-Type: application/json');
		echo json_encode($json);
	}



	// get all emp records in database
	if(!empty($_POST['action']) && $_post['action']=="listEmp"){
	    $empObject->getEmpList();
	}



	// Delete Action 
	if(!empty($_POST['action']) && $_POST['action'] == 'deleteEmp'){
		$empObject->deleteEmp();
	}


	// get data for update emp form
	if(!empty($_POST['action']) && $_POST['action'] == 'getEmp'){
		$empObject->getEmp();
	}

?>