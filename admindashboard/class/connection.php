<?php
  

    class Mysql
    {
        var $conn = NULL;
        var $dbselect = NULL;
        var $database = "";
        var $cnt = 0;
        var $arows = 0;
        var $result = NULL;        

   	function __construct()
      	  {
            
            $this->conn = @($GLOBALS["___mysqli_ston"] = mysqli_connect($vars["host"], $vars["username"], $vars["password"]));
            $this->database = $vars["database"];
            
            if (!$this->conn)
            {
                return "Connection Error";
                exit;
            }
            
            $this->dbselect = mysqli_select_db($this->conn, $this->database);
            
            if (!$this->dbselect)
            {
                ((is_null($___mysqli_res = mysqli_close($this->conn))) ? false : $___mysqli_res);
                return "Database Error";
                exit;
            }
        }
        
        function select($query)
        {
            $this->result = @mysqli_query($this->conn, $query);
            $this->cnt = @mysqli_num_rows($this->result);
        }
        
        function recs()
        {
            $arr = array();
            while($rows = @mysqli_fetch_assoc($this->result))
            {
                $arr[] = $rows;
            }
            return $arr;
        }
        
        function mod($query) // delete, insert, update
        {
            $this->result = mysqli_query($this->conn, $query);
            $this->arows = mysqli_affected_rows($this->conn); //mssql_rows_affected
        }
        
        function showtable($query)
        {
            $this->result = mysqli_query($this->conn, $query);
            $res = mysqli_fetch_array($this->result);
            return $res;
        }
        
        function close()
        {
            ((is_null($___mysqli_res = mysqli_close($this->conn))) ? false : $___mysqli_res);
        }
    }

?>