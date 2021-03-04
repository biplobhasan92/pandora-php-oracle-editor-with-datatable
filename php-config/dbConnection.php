
<?php
	
	/*
		$conn = oci_connect("inv", "inv", "192.168.100.157:1522/erp");
		if(!$conn){
		    $e = oci_error();
		    trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
		}
	*/


class DbConnection{
    // Connect to an ODBC database using an alias
    private $_dbHostName = "192.168.100.157:1522/erp";
    private $_dbName = "inv";
    private $_dbUserName = "inv";
    private $_dbPassword = "inv";
    private $_conn;

    // __construct
    public function __construct(){
    	try{
        	$this->_conn = oci_connect("inv", "inv", "192.168.100.157:1522/erp");
	    }catch(Exception $e){
			echo "Error!: " . $e->getMessage();
		}
    }

    // return Connection
    public function returnConnection(){
        return $this->_conn;
    }
}
?>