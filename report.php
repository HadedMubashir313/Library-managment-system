<?php include("conn.php");

session_start();

$name=$_SESSION["sname"];
$email=$_SESSION["semail"];
$gender=$_SESSION["sgender"];

$namecap=ucwords($name);


?>




<!DOCTYPE html>
<html>
<style>
        
    body{
  background: url("1.jpeg");
  

}
.box{
  width:400px;
  height:80px;
  margin-top:20px;
  margin-left:600px;
  margin-right:400;
  background-color: #106dc7;
  opacity: 1;
  border-radius:5px;
}
.boxtwo{
  background:rgba(0,0,0,0.7);


}

ul{
  margin-top;300;
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
  background-color: #ffff;
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
  margin-top:30px ;
  margin-bottom:100;
  margin-left:100px;

}

.box-cnt{

 
  background-color:white;
  float:left;
  border-radius:10px;
  overflow: auto;
  height:400px;
  width:45%;
  margin: 2% 2%;
  float: left;

}
    .box-cnt-h{
        color:white;
        padding-top:2px;
        padding-bottom: 2px;
        background:#106dc7;
        width: 650px;
        text-align:20;
        
    }

    .box-table{
        color: white;
        text-align: center;
        border-collapse: collapse;
        margin:5%;
        box-shadow: 0px 0px 10px white;
        height: auto;
        
    }
    .box-table td,tr{
        border: 3px solid white;
    }
    
    a{
        color: green;
    }


  .footer {
  margin-left:0;
  margin-right:300;
  bottom: 0;
  width: 100%;
  height:40px;
  background-color: #106dc7;
  color: white;
  font-size: 15pt;
  align:center;
  text-align: center;
  border-radius:10px;
}
        
</style>
    






<head>
  <title>Report</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</head>






<body>




  <div class="nav">
        <ul>
          <li><a href="admin.php">Home</a></li>
          <li><a href="add_book.php">Add Book</a></li>
          <li><a href="edit_book.php">Edit Book</a></li>
            <li><a href="delbook.php">Delete Book</a></li>
            <br><br> 
            <li><a style="background-color:white;" href="report.php" >Reports</a></li>
          <li><a href="index.php">Logout</a></li>
        </ul>
  </div>

    
  

  <div class="boxtwo" style="border-radius: 5px; width:80.5%; height:1850px; margin-left:10%;margin-top:10px;">
      
      
      
    <div class="box-cnt">

      <h3 class="box-cnt-h" style = "color:white">Computer Science (<?php 

$query2 = "select count(b_id) from book where dept = 'CS';";
$queryR = mysqli_query($conn,$query2);
$data2 = mysqli_fetch_array($queryR);
$adminTotal =$data2['count(b_id)'];
echo $adminTotal; ?>)</h3>

         <table class="table table-hover">
                <tr>
                    <th>Book ID</th>
                    <th>Book Tittle</th>
                    <th>Book Author</th>
                    <th>Available Copies</th>   
                    <th>e-book Title</th>
                </tr>
               
            <?php  $data=mysqli_query($conn,"SELECT * FROM `book`");
	              while($row = mysqli_fetch_array($data))
	               {   
                      if($row["dept"]=="CS"){
                        echo "<tr>";
                          $bookid_cse=NULL;
                          $bookid_cse=$row["b_id"];
                          $lg1="<a>";
                        echo "<td>" ;echo $row["b_id"]; echo "</td>";
                        echo "<td>";echo "$lg1"; echo $row["booksname"]; echo "</a>"; echo "</td>";
                        echo "<td>"; echo $row["authorname"]; echo "</td>";
                        echo "<td>"; echo $row["avl_cpy"]; echo "</td>";
                        echo "<td>"; echo $row["file_name"]; echo "</td>";
                        echo "</tr>";
                          $bookid_cse=NULL;
                      }
                    }

	            ?>
        </table>


    </div>















    <div class="box-cnt">
      <h3 class="box-cnt-h"style = "color:white">Business(<?php 

$query2 = "select count(b_id) from book where dept = 'Business';";
$queryR = mysqli_query($conn,$query2);
$data2 = mysqli_fetch_array($queryR);
$adminTotal =$data2['count(b_id)'];
echo $adminTotal; ?>)</h3>
        
        <table class="table table-hover">
                <tr>
                    <th>Book ID</th>
                    <th>Book Name</th>
                    <th>Book Author</th>
                    <th>Available Copies</th>   
                    <th>E-book Name</th>
                </tr>
               

            <?php  $data=mysqli_query($conn,"SELECT * FROM `book`");
	              while($row = mysqli_fetch_array($data))
	               {   
                      if($row["dept"]=="Business"){

                        echo "<tr>";
                          $bookid_tt=NULL;
                          $bookid_tt=$row["b_id"];
                          $lg2="<a>";
                          
                        echo "<td>" ;
                        echo $row["b_id"];
                        echo "</td>";

                        echo "<td>";
                        echo "$lg2";
                        echo $row["booksname"];
                        echo "</a>"; 
                        echo "</td>";
                        echo "<td>"; 
                        echo $row["authorname"]; 
                        echo "</td>";
                        echo "<td>"; 
                        echo $row["avl_cpy"]; 
                        echo "</td>";
                        echo "<td>"; 
                        echo $row["file_name"]; 
                        echo "</td>";
                        echo "</tr>";
                        $bookid_tt=NULL;
                      }
                    }
	            ?>
                </table>


    </div>
      







    
    <br/clear="all"> 
   











    <div class="box-cnt">
      <h3 class="box-cnt-h" style = "color:white">Law (<?php 

$query2 = "select count(b_id) from book where dept = 'Law';";
$queryR = mysqli_query($conn,$query2);
$data2 = mysqli_fetch_array($queryR);
$adminTotal =$data2['count(b_id)'];
echo $adminTotal; ?>) </h3>
        
        <table class="table table-hover">
                <tr>
                    <th>Book ID</th>
                    <th>Book Name</th>
                    <th>Book Writter</th>
                    <th>Available Copy</th>   
                    <th>Ebook Name</th>
                </tr>
               
            <?php  $data=mysqli_query($conn,"SELECT * FROM `book`");
	              while($row = mysqli_fetch_array($data))
	               {   
                      if($row["dept"]=="Law"){
                        echo "<tr>";
                          $bookid_ee=NULL;
                          $bookid_ee=$row["b_id"];
                          $lg3="<a>";
                        echo "<td>" ;echo $row["b_id"]; echo "</td>";
                        echo "<td>";echo "$lg3"; echo $row["booksname"]; echo "</a>"; echo "</td>";
                        echo "<td>"; echo $row["authorname"]; echo "</td>";
                        echo "<td>"; echo $row["avl_cpy"]; echo "</td>";
                        echo "<td>"; echo $row["file_name"]; echo "</td>";
                        echo "</tr>";
                          $bookid_ee=NULL;
                      }
                    }

	            ?>
        </table>
    </div>















    <div class="box-cnt">
      <h3 class="box-cnt-h"style = "color:white">Political Science (<?php 

$query2 = "select count(b_id) from book where dept = 'PoliticalScience';";
$queryR = mysqli_query($conn,$query2);
$data2 = mysqli_fetch_array($queryR);
$adminTotal =$data2['count(b_id)'];
echo $adminTotal; ?>) </h3>
        
        
        <table class="table table-hover">
                <tr>
                    <th>Book ID</th>
                    <th>Book Name</th>
                    <th>Book Author</th>
                    <th>Available Copies</th>   
                    <th>E-book Name</th>
                </tr>
               


            <?php  $data=mysqli_query($conn,"SELECT * FROM `book`");
	              while($row = mysqli_fetch_array($data))
	               {   
                      if($row["dept"]=="PoliticalScience"){
                        echo "<tr>";
                          $bookid_me=NULL;
                          $bookid_me=$row["b_id"];
                          $lg4="<a>";
                        echo "<td>" ;
                        echo $row["b_id"]; 
                        echo "</td>";
                        echo "<td>";
                        echo "$lg4"; 
                        echo $row["booksname"]; 
                        echo "</a>"; 
                        echo "</td>";
                        echo "<td>"; 
                        echo $row["authorname"]; 
                        echo "</td>";
                        echo "<td>"; 
                        echo $row["avl_cpy"]; 
                        echo "</td>";
                        echo "<td>"; 
                        echo $row["file_name"]; 
                        echo "</td>";
                        echo "</tr>";
                          $bookid_me=NULL;
                      }
                    }

	            ?>
                </table>




    </div>
  
    



    <div class="box-cnt">
      <h3 class="box-cnt-h"style = "color:white"> Books to be Ordered (<?php 

$query2 = "select count(b_id) from booksneeded;";
$queryR = mysqli_query($conn,$query2);
$data2 = mysqli_fetch_array($queryR);
$adminTotal =$data2['count(b_id)'];
echo $adminTotal; ?>)  </h3>
        
        
        <table class="table table-hover">
                <tr>
                    <th>Book ID</th>
                    <th>Book Name</th>
                    <th>Book Author</th>
                    <th>Available Copies</th>   
                 
                </tr>
               


            <?php  $data=mysqli_query($conn,"SELECT * FROM `booksneeded`");
	              while($row = mysqli_fetch_array($data))
	               {   
                    
                        echo "<tr>";
                          $bookid_me=NULL;
                          $bookid_me=$row["b_id"];
                          $lg4="<a>";
                        echo "<td>" ;
                        echo $row["b_id"]; 
                        echo "</td>";
                        echo "<td>";
                        echo "$lg4"; 
                        echo $row["booksname"]; 
                        echo "</a>"; 
                        echo "</td>";
                        echo "<td>"; 
                        echo $row["authorname"]; 
                        echo "</td>";
                        echo "<td>"; 
                        echo $row["avl_cpy"]; 
                        echo "</td>";
                      
                        echo "</tr>";
                          $bookid_me=NULL;
                      }
                    

	            ?>
                </table>

          </br/clear>


  </div>


  
  <div class="box-cnt">
      <h3 class="box-cnt-h"style = "color:white"> Students Registered (<?php 

$query2 = "select count(id) from studentsregistered;";
$queryR = mysqli_query($conn,$query2);
$data2 = mysqli_fetch_array($queryR);
$adminTotal =$data2['count(id)'];
echo $adminTotal; ?>) </h3>
        
        
        <table class="table table-hover">
                <tr>
                    <th> ID</th>
                    <th>Roll</th>
                    <th>Gender</th>
                    <th>Name</th>
                    <th>Department</th> 
                    <th>Year</th> 
                    <th>Email</th> 
                    <th>Password</th>    
                 
                </tr>
               


            <?php  $data=mysqli_query($conn,"SELECT * FROM `studentsregistered`");
	              while($row = mysqli_fetch_array($data))
	               {   
                    
                    echo "<tr>";
                        echo "<td>" ;
                        echo $row["id"];
                        echo "</td>";
                        echo "<td>" ;
                        echo $row["roll"]; 
                        echo "</td>";
                        echo "<td>";
                        echo $row["gender"];
                        echo "</td>";
                        echo "<td>"; 
                        echo $row["name"]; 
                        echo "</td>";
                        echo "<td>"; 
                        echo $row["dept"]; 
                        echo "</td>";
                        echo "<td>"; 
                        echo $row["year"]; 
                        echo "</td>";
                        echo "<td>"; 
                        echo $row["emailid"]; 
                        echo "</td>";
                        echo "<td>"; 
                        echo $row["password"]; 
                        echo "</td>";
                      
                      
                        echo "</tr>";
                          
                      }
                    

	            ?>
                </table>
                </br/clear>
                </div>












    <div class="box-cnt">

      <h3 class="box-cnt-h"style = "color:white"> Admins (<?php 

      $query2 = "select count(id) from admins;";
      $queryR = mysqli_query($conn,$query2);
      $data2 = mysqli_fetch_array($queryR);
      $adminTotal =$data2['count(id)'];
      echo $adminTotal; ?>) </h3>
        
        
        <table class="table table-hover">
                <tr>
                    <th> ID</th>
                    <th>Roll</th>
                    <th>Gender</th>
                    <th>Name</th>
                    <th>Department</th> 
                    <th>Year</th> 
                    <th>Email</th> 
                    <th>Password</th>    
                 
                </tr>
               


            <?php  $data=mysqli_query($conn,"SELECT * FROM `admins`");
	              while($row = mysqli_fetch_array($data))
	               {   
                    
                        echo "<tr>";
                        echo "<td>" ;
                        echo $row["id"];
                        echo "</td>";
                        echo "<td>" ;
                        echo $row["roll"]; 
                        echo "</td>";
                        echo "<td>";
                        echo $row["gender"];
                        echo "</td>";
                        echo "<td>"; 
                        echo $row["name"]; 
                        echo "</td>";
                        echo "<td>"; 
                        echo $row["dept"]; 
                        echo "</td>";
                        echo "<td>"; 
                        echo $row["year"]; 
                        echo "</td>";
                        echo "<td>"; 
                        echo $row["emailid"]; 
                        echo "</td>";
                        echo "<td>"; 
                        echo $row["password"]; 
                        echo "</td>";
                      
                      
                        echo "</tr>";
                          
                      }
                    

	            ?>
                </table>
                </br/clear>
                </div>
  

</body>
<html>
