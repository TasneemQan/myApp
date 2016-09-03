<?php
  require_once 'math.inc';

    if($_SERVER['REQUEST_METHOD'] == 'GET') {



      if(isset($_GET['aVal']) && isset($_GET['bVal']) && isset($_GET['cVal'])) {
        $a = $_GET['aVal'];
        $b = $_GET['bVal'];
        $c = $_GET['cVal'];


        echo json_encode(array("status"=>1, "msg"=>"done", "result"=>json_encode(eq2_solve($a,$b,$c))));



      }else{

          $msg = "Parameters [ a, b or c] is not set all are required.";
          echo json_encode(array("status"=>0, "msg"=>$msg, "result"=>-1));
      }




    }

?>
