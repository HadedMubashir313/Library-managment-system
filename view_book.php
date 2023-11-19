<?php
$msg="";
include("conn.php");
session_start();

$name=$_SESSION["sname"];
$email=$_SESSION["semail"];
$id=$_GET['id'];


$query="select * from book where `book`.`b_id`= '$id'";
$query1=mysqli_query($conn,$query);
$ros=mysqli_fetch_array($query1);
$book_name=$ros['booksname'];
$auth_name=$ros['authorname'];
$avl_cpy=$ros['avl_cpy'];

if($avl_cpy>0){

if(isset($_POST['sub'])){
    
$query="select * from book where `book`.`b_id`= '$id'";
$query1=mysqli_query($conn,$query);
$ros=mysqli_fetch_array($query1);
$path=$ros['path'];
header('content-Disposition: attachment;filename = '.$book_name.'');
header('content-type:application/pdf');
header('content-length='.filesize($path));
readfile($path);

}






if(isset($_POST['rqst'])){
    $query="select * from student_book where `student_book`.`emailid`= '$email'";
    $query1=mysqli_query($conn,$query);
    $ros=mysqli_fetch_array($query1);
if ($ros[0]!="")
   {
         
        $book2=$ros['book_2'];
    
        if($book2=="")
        {
         $sql1= "select date_format(curdate(),'%d-%m-%Y')" ;
	     $res1 = mysqli_query ($conn,$sql1);
	     $row1 = mysqli_fetch_row($res1);
	     $recive=$row1[0];
            
         $sql2= "select date_format(curdate()+15,'%d-%m-%Y')" ;
	     $res2 = mysqli_query ($conn,$sql2);
	     $row2 = mysqli_fetch_row($res2);
	     $submit=$row2[0];
            
            
            $sql="UPDATE `student_book` SET". "`book_2_id` ='$id',"."`book_2` = '$book_name',"."`recive_date_2` = '$recive',". "`submisson_date_2` = '$submit'"." WHERE `student_book`.`emailid` ="."'$email'";
          
              $data=mysqli_query($conn,$sql); 
             $cur=$avl_cpy-1;
            
            $sql2="UPDATE `book` SET". "`avl_cpy` ='$cur'"." WHERE `book`.`b_id` ="."'$id'";
            mysqli_query($conn,$sql2);
            
              if($data)
              {
                $msg= "Book Requested!.";
              }
              else{
                  $msg="Error";
                  
                   }
           }
    
    
        else{
            $msg="You Can not Request Books. <br> Please Return Previous Books.";
             }
        }


    
        if($ros[0]==""){
            
         $sql1= "select date_format(curdate(),'%d-%m-%Y')" ;
	     $res1 = mysqli_query ($conn,$sql1);
	     $row1 = mysqli_fetch_row($res1);
	     $recive=$row1[0];
            
         $sql2= "select date_format(curdate()+15,'%d-%m-%Y')" ;
	     $res2 = mysqli_query ($conn,$sql2);
	     $row2 = mysqli_fetch_row($res2);
	     $submit=$row2[0];
            
            $insert="INSERT INTO `student_book`(`emailid`,`book_1_id`,`book_1`,`recive_date_1`,`submisson_date_1`) VALUES('".$email."','".$id."','".$book_name."','".$recive."','".$submit."')";
            
           
              $data=mysqli_query($conn,$insert); 
            
            $cur=$avl_cpy-1;
            
            $sql2="UPDATE `book` SET". "`avl_cpy` ='$cur'"." WHERE `book`.`b_id` ="."'$id'";
            mysqli_query($conn,$sql2);
            
              if($data)
              {
                $msg= "Book Requested.";
              }
              else{
                  $msg="Something Went Wrong";
                  
                   }
            
            }
}
}

else{
    $msg="Not Enough book";
}

?>






<html>


<head><title>Selected Book</title>
    
<style>





body{
	background: url(9.jpeg);
  font-family: "Times New Roman", Times, serif;
  
}
#errom{
background-color:#E2E2DD;
margin-left: 20%;

}
#table1{
		width: 70%;
		text-align: center;
		height: 40px;
    margin-left: 15%;
    font-size: 20px;
   
	}
	#table2{
		color: black;
    font-size: 20px;
	
	}
	.td1{
		padding: 1px;
    background-color:#E2E2DD;
    font-size: 20px;
		
	}


  
	.td2{
		padding: 5px;
    font-size: 20px;  
	}


	a{
		text-decoration: none;
		color: white;
		
	}

  .box{
  margin-top:6%;
  width:40%;
  height:110px;
  background-size: cover;
  margin-left: 30%;
  background-color:#106dc7;
  opacity: 1;
  border-radius: 5px;
  font-size:40;
}



.five{
  padding:10px 0px 10px 10px;
	width: 600PX;
  margin-top: 100px;
  margin-left: 25%;
  height:300px;
  border-radius:10px;
  background-color:#E2E2DD;
  opacity: 1;
  margin-right: 3%;
  box-shadow:0px 0px 15px black;
  font-size:30px;


}
   .five input[type="submit"]
          {

		    font-size:15px;
		    text-align:center;
			border:none;
			height:40px;
			margin-left:40% ;
			background-color:#106dc7;
			color:black;
			border-radius:12px;
			}
    
    .td3{
        font-size: 13px;
        color: black;
        font-weight: bold;
        font-size: 20px;
    }

 
ul{
  padding: 0  ;
  list-style: none;
}
ul li{
  float: left;
  width: 248px;
  height: 40px;
  background-color: rgb(0 116 228);
  line-height: 40px;
  text-align: center;
  font-size: 20px;
  margin-right: 2px;
}
ul li a{
  text-decoration: none;
  color: black;
  display: block;
}
ul li a:hover{
  background-color: #fff;
;
}
ul li ul li{
  display: none;
}
ul li:hover ul li{
  display: block;
  background-color:#ffff;

}
.nav{
  padding-left:10%;
  margin-top:150;
  margin-bottom:100;
  margin-left:90px;

}

</style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</head>

<body>



   
<fieldset class="five">
<form method="post">	
<table  id="table2">





	<tr>
		<td  class="td2">
		Book Name :
		</td>
		<td class="td3">
            <?php echo $book_name; ?>
			
		</td>
	</tr>



	<tr>
		<td class="td2">
	    Author Name :
	    </td>
		<td class="td3">
            <?php echo $auth_name; ?>
			
		</td>
	</tr>




	<tr>
		<td class="td2">
		ID :
		</td>
		<td class="td3">
			<?php echo $id; ?>
		</td>
	</tr>


	<tr>
		<td class="td2">
		Available Copies:
		</td>

		<td class="td3">
			<?php echo $avl_cpy; ?>
		</td>

	</tr>


	<tr>

		<td class="td2">
		e-Book :
		</td>

		<td>     
			<input class="btn btn-success" type="submit" name="sub" value="Download e-Book"> 
		</td>

	</tr>


<tr>
		<td style="padding-top: 50px;padding-left: 95px" >
		<input type="submit" class="btn btn-success" value="Add the Book to the Cart" name="rqst" style="border-radius: 12px;height: 40px;backgroud-color:#106dc7; border: none;color: black" >
		</td>
        
    <td </td>
</tr>


</table>
</form>
</fieldset>

</div >

 







    <div class="nav">
    <ul>
      <li><a style="background-color: #106dc7" href="sdb.php">Home</a></li>
      <li><a  style="background-color: #106dc7" href="sbooks.php">Your Books Info</a></li>
      <li><a  style="background-color: #106dc7" href="aboutus.php">About US</a></li>
      <li><a  style="background-color: #106dc7" href="index.php">Logout</a></li>
    </ul>
  
<br><br>


<div id="errom">

<p style="color:red;font-weight:bold; font-size:30; text-align:center;"><?php echo $msg; ?></p>

</div>











  </body>
</html>