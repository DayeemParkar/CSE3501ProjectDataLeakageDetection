<?php 
include 'config.php';

session_start();

//$con = mysqli_connect("sql6.freemysqlhosting.net","sql6453269","13gSHbLs1b");

if (!$con) echo('Could not connect: ' . mysqli_error());
        else {
            $Set=["T1.txt","T2.txt","T3.txt"];
            $p=0.2;
            
            $agents = array();  //contains user to leak file access mapping
            $agentNames = array();  //contains name of each user
            $prob = array();  //contains probability of each user
            $fileSubjects = array();  //contains subject of leaked files
            $fileAccessCount = array();  //contains number of users that have access to each file
            $leakFileCount = count($Set);  //number of files in leaked set

            foreach($Set as $s) {
                $sql = "SELECT * FROM presentation WHERE fname='$s'";
                $result = mysqli_query($con, $sql);
                $row = $result->fetch_assoc();
                array_push($fileSubjects, $row['subject']);
                array_push($fileAccessCount, 0);
            }

            $sql1 = "SELECT * FROM leaker";
            $result1 = mysqli_query($con, $sql1);  //all leaker rows

            $count = $result1->num_rows;  //number of users
            $i = 0;
            $j = 0;

            for ($i=0; $i<$count; $i++){  //for each user
                array_push($agents,array());
                array_push($prob, 0.0);
                $row = $result1->fetch_assoc();  //row from leaker
                $agentNames[$i] = $row['name'];  //store name

                $sql = "SELECT * FROM record WHERE sendto='$row[id]'";
                $result = mysqli_query($con, $sql);  //returns all rows from record for that user
                
                $userFiles = array();
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        array_push($userFiles, $row['subject']);
                    }
                }

                for ($j=0; $j<$leakFileCount; $j++) {  //check whether they had access to leaked files and map it
                    if (in_array($fileSubjects[$j], $userFiles)) {
                        array_push($agents[$i], 1);
                        $fileAccessCount[$j] += 1;
                    }
                    else {
                        array_push($agents[$i], 0);
                    }
                }
                mysqli_free_result($result);
            }

            for ($i=0; $i<$leakFileCount; $i++) {  //for each file
                if ($fileAccessCount[$i] > 0) {
                    for ($j=0; $j<$count; $j++) {
                        if ($agents[$j][$i] == 1) {
                            if ($prob[$j] != 0.0) {
                                $prob[$j] *= (1 - (1 - $p)/$fileAccessCount[$i]);
                            }
                            else {
                                $prob[$j] = (float)(1 - (1 - $p)/$fileAccessCount[$i]);
                            }
                        }
                    }
                }
            }

            for ($i=0; $i<$count; $i++) {
                $pr = $prob[$i];
                if ($pr != 0.0) {
                    $pr = 1 - $pr;
                    $sql = "UPDATE leaker SET probability='$pr' WHERE name='$agentNames[$i]' ";
                    mysqli_query($con,$sql);
                }
            }
            mysqli_free_result($result1);
        }

header("Location: https://cse3501project.herokuapp.com/admin/leakfile.php");

        ?>
}
?>
