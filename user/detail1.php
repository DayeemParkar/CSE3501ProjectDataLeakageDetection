<?php 
session_start();

$con = mysqli_connect("sql5.freemysqlhosting.net","sql5451502","6NrWzphBie");

if (!$con)
    echo('Could not connect: ' . mysqli_error());
else {
    mysqli_select_db($con,"sql5451502" );
    $k1=$_POST['s1'];
    $k2=$_POST['s2'];

//$qry="SELECT * FROM presentation WHERE Topic = '$k1' ";
//$result=mysql_query($qry)or die ("Could not insert data into DB: " . mysql_error());;


if($k1==$k2){
	
echo'enter success      

'.$file = 'https://cse3501project.herokuapp.com/admin/download/'.$_GET['id'];
   	$title=$_GET['id'];

    header("Pragma: public");
    header('Content-disposition: attachment; filename='.$title);
  
    
    header('Content-Transfer-Encoding: binary');
    ob_clean();
    flush();

    $chunksize = 1 * (1024 * 1024); // how many bytes per chunk
    if (filesize($file) > $chunksize) {
        $handle = fopen($file, 'rb');
        $buffer = '';

        while (!feof($handle)) {
            $buffer = fread($handle, $chunksize);
            echo $buffer;
            ob_flush();
            flush();
        }

        fclose($handle);
    } else {
        readfile($file);
    }   '                                     


';
}else{
	
	echo"call the admin";
	
	


$sql = "insert into leaker ( name,time) values ('$_SESSION[name]','".date("Y/m/d")."')";
	$result = mysqli_query($con,$sql) or die ("Could not insert data into DB: " . mysqli_error());
	header("Location: https://cse3501project.herokuapp.com/user/askadmin.php");
	
	
}
					

					
					




								}
								
	
							

?>

