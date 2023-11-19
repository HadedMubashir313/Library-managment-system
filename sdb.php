<?php include("conn.php");

session_start();

$name=$_SESSION["sname"];
$email=$_SESSION["semail"];
$gender=$_SESSION["sgender"];

$namecap=ucwords($name);

?>


<!DOCTYPE html>
<html>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

<style>
        
  body{
  background: url("6.jpeg");
  font-family: "Times New Roman", Times, serif;
  

}
.box{
  height:80px;
  margin-top:20px;
  margin-right:400;
  background-color: #106dc7;
  border-radius:5px;
  border-radius: 1%; width:80.5%; margin-left:10%;margin-top:10px;
}
.boxtwo{
  background-color:rgb(255 255 255 / 80%);
  opacity: 1;


}ul{
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
  padding: left 300px;;
  margin-top:50px;
  margin-bottom:100;
  margin-left:115px;

}
.three{
  margin-left: 60%;
  margin-top: 5px;
  box-shadow:0px 0px 15px #ffff;
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
       text-align: center;
        padding-top:2px;
        padding-bottom: 2px;
        background:#106dc7;
        
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
  margin-left:130px;
  margin-right:230;
  margin-bottom: 40;
  margin-top:50px;
  width: 80%;
  height:7%;
  background-color: #106dc7;
  color: white;
  font-size: 15pt;
  text-align: center;
  border-radius:10px;
}
        
</style>
    

<head>
  <title>Student DashBoard</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</head>






<body>



<div class="nav">
        <ul>
          <li><a style="background-color: white" href="sdb.php">Home</a></li>
          <li><a href="sbooks.php">Your Book Info</a></li>
          <li><a  href="aboutus.php">About Us</a>
          </li>
          <li><a href="index.php">Logout</a></li>
        </ul>
    <br><br>
    
  
<br><br>

</div>
  <div class="box">
   <table  style =" font-size:30pt"align="center" >
      <tr>
        <td style="color:white;border-radius: 1%;">-The Book Spot-</td>
      </tr>
    
    </table>
  </div>



  <div class="boxtwo" style="border-radius: 1%; width:80.5%; height:950px; margin-left:10%;margin-top:10px;background-color:#ffff">
      
  
      
    <div class="box-cnt">

      <h3 class="box-cnt-h" style = "color:white">Computer Science</h3>

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
                          $lg1="<a href='view_book.php?id=$bookid_cse'>";
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
      <h3 class="box-cnt-h"style = "color:white">Business</h3>
        
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
                          $lg2="<a href='view_book.php?id=$bookid_tt'>";
                          
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
      <h3 class="box-cnt-h" style = "color:white">Law</h3>
        
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
                          $lg3="<a href='view_book.php?id=$bookid_ee'>";
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
      <h3 class="box-cnt-h"style = "color:white">Political Science </h3>
        
        
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
                          $lg4="<a href='view_book.php?id=$bookid_me'>";
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
          </br/clear>


  </div>

  <div class="footer">
  <p>library Managment System</p>
   </div>

</body>
<html>
