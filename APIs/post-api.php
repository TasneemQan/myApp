<?php
  require_once 'math.inc';

    if($_SERVER['REQUEST_METHOD'] == 'POST') {



      if(isset($_POST['aVal']) && isset($_POST['bVal']) && isset($_POST['cVal'])) {
        $a = $_POST['aVal'];
        $b = $_POST['bVal'];
        $c = $_POST['cVal'];


        echo json_encode(array("status"=>1, "msg"=>"done", "result"=>json_encode(eq2_solve($a,$b,$c))));



      }else{

          $msg = "Parameters [ a, b or c] is not set all are required.";
          echo json_encode(array("status"=>0, "msg"=>$msg, "result"=>-1));
      }




    }

?>
