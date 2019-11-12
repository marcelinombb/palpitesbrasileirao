<?php
include_once "connect.class.php";
class Times extends Connect
{
    public function times(){
        $conn = parent::conn();
        $cuery = "SELECT * FROM times ORDER BY nome";
        if ($res = mysqli_query($conn, $cuery)) {
            while ($row = mysqli_fetch_assoc($res)) {
               $times [] = $row;
            }
            return $times;
        }
        return 0;
    }
}
