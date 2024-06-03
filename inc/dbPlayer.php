<?php
/**
 * Created by PhpStorm.
 * User: troot
 * Date: 1/1/15
 * Time: 10:55 PM
 */
namespace dbPlayer;

include "connection.php";
class dbPlayer {
    private $db_host="localhost";
    private $db_name="hms";
    private $db_user="root";
    private $db_pass="";
    public $conn;

   public function open(){
        $conn = mysqli_connect("localhost","root","");
       if($conn)
       {
           $dbSelect = mysqli_select_db($conn,$this->db_name);

           if($dbSelect)
           {
               return "true";
           }
           else
           {
               return mysqli_error($conn);
           }

       }
        else
        {
            return  mysqli_error($conn);
        }

    }
    public  function close()
    {
        $res=mysqli_close($this->con);
        if($res)
        {
            return "true";
        }
        else
        {
            return mysqli_error($conn);
        }

    }

    public function insertData($table,$data)
    {
        $keys   = "`" . implode("`, `", array_keys($data)) . "`";
        $values = "'" . implode("', '", $data) . "'";
       //var_dump("INSERT INTO `{$table}` ({$keys}) VALUES ({$values})");
        mysqli_query("INSERT INTO `{$table}` ({$keys}) VALUES ({$values})");

        return mysqli_insert_id().mysqli_error($conn);

    }
    public function registration($query,$query2)
    {
        $res=mysqli_query($query);
        if($res)
        {

            $res=mysqli_query($query2);
            if($res)
            {

                return "true";
            }
            else
            {
                return mysqli_error($conn);
            }

        }
        else
        {
            return mysqli_error($conn);
        }


    }
    public  function  getData($query)
    {
        $res = mysqli_query($conn,$query);
        if(!$res)
        {
            return "Can't get data ".mysqli_error($conn);
        }
        else
        {
            return $res;
        }

    }
    public function  update($query)
    {
        $res = mysqli_query($conn,$query);
        if(!$res)
        {
            return "Can't update data ".mysqli_error($conn);
        }
        else
        {
            return "true";
        }
    }
    public  function  updateData($table,$connColumn,$connValue,$data)
    {
        $updates=array();
        if (count($data) > 0) {
            foreach ($data as $key => $value) {

                $value = mysqli_real_escape_string($value); // this is dedicated to @Jon
                $value = "'$value'";
                $updates[] = "$key = $value";
            }
        }
        $implodeArray = implode(', ', $updates);
        $query ="UPDATE ".$table." SET ".$implodeArray." WHERE ".$connColumn."='".$connValue."'";
       //var_dump($query);
        $res = mysqli_query($query);
        if(!$res)
        {
            return "Can't Update data ".mysqli_error($conn);
        }
        else
        {
            return "true";
        }
    }

    public  function delete($query)
    {
        $res = mysqli_query($query);
       // var_dump($query);
        if(!$res)
        {
            return "Can't delete data ".mysqli_error($conn);
        }
        else
        {
            return "true";
        }
    }

    public  function  getAutoId($prefix)
    {
        $uId="";
        $q = "select number from auto_id where prefix='".$prefix."';";
        $result = $this->getData($q);
        $userId=array();
        while($row = mysqli_fetch_assoc($result))
        {

            array_push($userId,$row['number']);

        }
        // var_dump($UserId);
        if(strlen($userId[0])>=1)
        {
            $uId=$prefix."00".$userId[0];
        }
        elseif(strlen($userId[0])==2)
        {
            $uId=$prefix."0".$userId[0];
        }
        else
        {
            $uId=$prefix.$userId[0];
        }
        array_push($userId,$uId);
        return $userId;

    }
    public  function  updateAutoId($value,$prefix)
    {
         $id =intval($value)+1;

        $query="UPDATE auto_id set number=".$id." where prefix='".$prefix."';";
        return $this->update($query);

    }

    public  function execNonQuery($query)
    {
        $res = mysqli_query($query);
        if(!$res)
        {
            return "Can't Execute Query".mysqli_error($conn);
        }
        else
        {
            return "true";
        }
    }
    public  function execDataTable($query)
    {
        $res = mysqli_query($query);
        if(!$res)
        {
            return "Can't Execute Query".mysqli_error($conn);
        }
        else
        {
            return $res;
        }
    }

}
