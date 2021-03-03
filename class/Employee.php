<?php
	include("php-config/dbConnection.php");

	class Employee
	{
		protected $db;
		private $_employeeID;
		private $_name;
		private $_position;
		private $_office;
		private $_age;
		private $_start_date;
		private $_salary;
		private $_searchVal;
    	private $_orderBy;
    	private $_start;
    	private $_length;


		public function setEmployeeID($employeeID) {
        	$this->_employeeID = $employeeID;
	    }

	    public function setName($name) {
	        $this->_name = $name;
	    }

	    public function setPosition($position){
	        $this->_position = $position;
	    }

	    public function setOffice($office){
	    	$this->_office  = $office;
	    }


	    public function setAge($age){
	    	$this->_age = $age;
	    }


	    public function setStartDate($startDate){
	    	$this->_start_date = $startDate;
	    }

	    public function setSalary($salary){
	    	$this->_salary = $salary;
	    }



	    public function __construct(){
        	$this->db = new DbConnection();
        	$this->db = $this->db->returnConnection();
    	}



    	// create student record in database
	    public function create(){	

			try {
	    		$sql = 'INSERT INTO INV_EMP_EXT(id, name, position, office, age, start_date, salary) 
	    				VALUES ((select NVL(max(id)+1, 1) from inv_emp_ext), :name, :position, :office, :age, :start_date, :salary)';

				$stid = oci_parse($this->db, $sql);
				oci_bind_by_name($stid, ':name',     $this->_name);
				oci_bind_by_name($stid, ':position', $this->_position);
				oci_bind_by_name($stid, ':office',   $this->_office);
				oci_bind_by_name($stid, ':age',      $this->_age);
				oci_bind_by_name($stid, ':start_date', $this->_start_date);
				oci_bind_by_name($stid, ':salary',   $this->_salary);
				$r = oci_execute($stid);
	            oci_free_statement($stid);
	            oci_close($this->db);
	           	return $r;
			}catch (Exception $err){
	    		die("Error!: ".$err);
			}
	    }




	    // update student record in database
	    public function update(){

	        try {
			    $sql = "UPDATE INV_EMP_EXT SET name=:name, position=:position, office=:office, age=:age, start_date=:start_date, salary=:salary WHERE ID=:employee_id";

			    $stid = oci_parse($this->db, $sql);
			    oci_bind_by_name($stid, ':employee_id', $this->_employeeID);
				oci_bind_by_name($stid, ':name',     $this->_name);
				oci_bind_by_name($stid, ':position', $this->_position);
				oci_bind_by_name($stid, ':office',   $this->_office);
				oci_bind_by_name($stid, ':age',   $this->_age);
				oci_bind_by_name($stid, ':start_date', $this->_start_date);
				oci_bind_by_name($stid, ':salary',   $this->_salary);

				$r = oci_execute($stid);
	            oci_free_statement($stid);
	            oci_close($this->db);
	            return $r;
			}catch (Exception $err){
				die("Error!: " . $err);
			}
	    }

	    


		public function deleteEmp(){
			if($_POST["empId"]){
				$sqlDelete = "
					DELETE FROM INV_EMP_EXT WHERE id = '".$_POST["empId"]."' ";		
				$stid = oci_parse($this->db, $sqlDelete);	
				oci_execute($stid);
		        oci_free_statement($stid);
		        oci_close($this->db);	
			}
		}




    	public function getEmp(){
			if($_POST["empId"]){
				$sqlQuery = " SELECT * FROM INV_EMP_EXT WHERE id = '".$_POST["empId"]."' ";
				$stid = oci_parse($this->db, $sqlQuery);	
				oci_execute($stid);
				$row = oci_fetch_assoc($stid);
				oci_free_statement($stid);
            	oci_close($this->db);
				echo json_encode($row);
			}
		}




	    // get all student records from database
	    public function getEmpList(){
    		$sql  = " SELECT * FROM INV_EMP_EXT order by ID desc ";
    		$stid = oci_parse($this->db, $sql);
    		$totalRecords = oci_num_rows($stid);
    		oci_execute($stid);
    		$employeeData = array();
    		while($row = oci_fetch_assoc($stid)){
				$employeeData[] = array(
		        	'ID'=>$row['ID'], 
		        	'NAME'=>$row['NAME'], 
			        'POSITION'=>$row['POSITION'],
		        	'OFFICE'=>$row['OFFICE'], 
		    	    'AGE'=>$row['AGE'], 
		        	'START_DATE'=>$row['START_DATE'],
		        	'SALARY'=>$row['SALARY']
		      	);
    		}
			oci_free_statement($stid);
            oci_close($this->db);
    		$output = array(
				"draw"	=>	intval($_POST["draw"]),			
				"iTotalRecords"	=> 	$totalRecords,
				"iTotalDisplayRecords"	=>  $totalRecords,
				"data"	=> 	$employeeData
			);
			echo json_encode($output);	        
	    }






	    // gwt student record from database
	    public function getTotalResult(){
	        try{
	            $sql  = "SELECT * FROM INV_EMP_EXT";
				$stid = oci_parse($this->db, $sql);
	            $r    = oci_execute($stid);
		        // $result  = oci_fetch_array($stid);
		        $result  = oci_num_rows($stid);
	            return $result;
	        }catch(Exception $e){
	            die("Error!: " . $err);
	        }
	    }



	    /*
		    if(isset($_GET["id"]) && !empty(trim($_GET["id"]))){ 

		        require_once "config.php";
		        // echo $_GET["id"];
		        $stid = oci_parse($conn, 'SELECT * FROM INV_EMP WHERE ID=:id');
		        // oci_execute($stid);
		        oci_bind_by_name($stid, ':id', $_GET["id"]);
		        $r   = oci_execute($stid);  // executes and commits
		        $row = oci_fetch_array($stid);
		        if($r){
		            $name   = $row["NAME"];
		            $address= $row["ADDRESS"];
		            $salary = $row["SALARY"];
		        }else{
		            header("location: error.php");
		            exit();
		        }
		        oci_free_statement($stid);
		        oci_close($conn);
		    }else{
		        header("location: error.php");
		        exit();
		    }
	    */
	}


?>