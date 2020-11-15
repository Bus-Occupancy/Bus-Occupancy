<?php
class DBController
{
    //Database Connection
    protected $host = "localhost";
    protected $user = "root";
    protected $password = "";
    protected $database = "bus_occupancy";

    //connection property
    public $con = null;
    public function __construct()
    {
        $this->con = mysqli_connect($this->host,$this->user,$this->password,$this->database);
        if($this->con->connect_error){
            echo "Connection failed: ".$this->con->connect_error;
        }
        //echo "Connected successfully";
    }
    public function __desctruct()
    {
        $this->closeConnection();
    }

    //closing connection
    protected function closeConnection(){
        if($this->con !=null){
            $this->con->close();
            $this->con->null;
        }
    }

    //get all fields from bus table
    public function getBusData($table_name){
        $result = $this->con->query("SELECT * FROM {$table_name}");
        
        $resultArray = array();

    //fetch product data one by one
        while($item = mysqli_fetch_array($result,MYSQLI_ASSOC)){
            $resultArray[] = $item;
        }
        
        return $resultArray;
    }

    // get only count field from bus table
    public function getCount($table_name){
        $result = $this->con->query("SELECT count FROM {$table_name}");
        
        $resultArray = array();

    //fetch product data one by one
        while($item = mysqli_fetch_array($result,MYSQLI_ASSOC)){
            $resultArray[] = $item;
        }
        
        return $resultArray;
    }
}
?>