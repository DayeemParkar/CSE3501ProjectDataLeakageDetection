<?php 
session_start();

$con = mysqli_connect("sql6.freemysqlhosting.net","sql6453269","13gSHbLs1b");

if (!$con)
    echo('Could not connect: ' . mysqli_error());
else {
    mysqli_select_db($con,"sql6453269" );

    $qry1="SELECT * from register";
    $result1=mysqli_query($con, $qry1);
     
    //leaked data set S
    $Set=["T1.txt","T3.txt","T6.txt","T4.txt"];
    $p=0.2; // most probable value of p

    $qry5="SELECT * from record";
    $result5=mysqli_query($con, $qry5);
    
    $product=[];
    $finalAgents=[];
    while($w1=mysqli_fetch_array($result5)){
        array_push($product,1);
        array_push($finalAgents,$w1["sendto"]);
    }

    foreach($Set as $S){
        $agents=[];
        $data=[][];
        $i = 0;

        $qry="SELECT * from record";
        $result=mysqli_query($con, $qry);
        //all agents and their data
        while($w1=mysqli_fetch_array($result) ){
            $currentAgent=$w1["sendto"];
            if(!in_array($currentAgent,$agents)) {
                array_push($agents, $currentAgent);
                $sub=$w1["subject"];
                $sql=mysqli_query($con,"SELECT * from presentation WHERE subject = '$sub'");
                $w=mysqli_fetch_array($sql);
                $key = array($w["fname"]);
                $data[i++] = $key;
            }
            else {
                $agenIndex = array_search($currentAgent,$agents);
                $len = count($data[$agenIndex]);
                $data[$agenIndex][$len] = $w["fname"];
            }
        }
        $num=0;
        //set data as null if obj not present
        for($i =0;$i<count($agents);$i++){
            if(!in_array($S,$data[$i])){
              unset($data[$i]);
              $num++; 
            }
        }
        if($num != 0) {
            //calc product
            for($i =0;$i<count($agents);$i++) {
                if(!empty($data[$i])){
                    $product[$i]=$product[$i]*(1-(1-$p)/$num);
                }
            }
        }
        //print_r($product);
        //echo "<br/>";

    }

    for($i =0;$i<count($finalAgents);$i++){
        $prob=1-$product[$i];
        $sql6 = "UPDATE leaker SET probability='$prob' WHERE name='$finalAgents[$i]' ";
        $result6 = mysqli_query($con,$sql6) or die ("Could not send data into DB: " . mysqli_error($con));
    }
  
    header("Location: https://cse3501project.herokuapp.com/admin/leakfile.php");
}
?>
