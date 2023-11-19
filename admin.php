<?php 
include("conn.php");?>

<html>
<head>
   
<style>

body{
  background: url("11.jpeg");
  background-size:cover;
  font-family: "Times New Roman", Times, serif;
}
    table{
         width: 100%;
                border-collapse: collapse;
                height: auto;
        text-align: center;
        color: black;
        font-weight: normal;

            }
    
    th{
        font-size: 25px;
        font-style: italic;
    }
    .main{
        width: 90%;
        box-shadow: 0px 0px 20px black;
        border-radius: 1px;
        overflow: auto;
       margin-left:50px;
        margin-top: 5%;
        height:400px;
        background: rgba(140, 140, 140, 1);
        background-color:white;
    }

.boxtwo{

  background-size: cover;
  box-shadow:0px 0px 15px black;
  border-radius:12px;

}
ul{
  padding: 5% ;
  list-style: none;
  
  padding: top 10;
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
  margin-top:30;
  margin-bottom:100;
  margin-left:110;

}


#t1{
  margin-top:10px;
  margin-left:50;
  margin-right:50;
}
.three{
  margin-left: 60%;
  margin-top: 5px;
  box-shadow:0px 0px 15px green;
}
    button{
        margin-top: 10px;
    }

  #mybox{
    border:solid 1px;
     width:83%; 
     height:400px; 
     margin-left:9%;
     margin-top:10px;


  }
</style>
<title>Admin Menue</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>



</head>
<body>

  
    <div id="t1" > 
     <table  style =" font-size:16pt"  align="center" width="80%" height="100%">
        <tr>
          <td align="center" style="color:black; font-size: 35pt;background-color:#106dc7;"> <p> Admin DashBoard </p></td>
        </tr>
        <tr >
          <td style="text-align:center;width=80%;color:black;font-size:30;background-color:#106dc7;"><p>List of all Books Available</p><td></tr>
   
      </table>
    </div>


          
        
    
    <div class="main">
       <table class="table table-hover">
                <tr style = "background-color:#106dc7">
                    <th>Book ID</th>
                    <th>Book Name</th>
                    <th>Book Author</th>
                    <th>Actual Copy</th>
                    <th>Available Copy</th>
                    <th>Depertment</th>
                    <th>e-book Name</th>
                </tr>          
            <?php 
           $data=mysqli_query($conn,"SELECT * FROM book");
	              while($row = mysqli_fetch_array($data))
	               {   
                        echo "<tr>";
                        echo "<td>" ;
                        echo $row["b_id"];
                        echo "</td>";
                        echo "<td>";
                        echo $row["booksname"];
                        echo "</td>";
                        echo "<td>";
                        echo $row["authorname"]; 
                        echo "</td>";
                        echo "<td>"; 
                        echo $row["copies"]; 
                        echo "</td>";
                        echo "<td>"; 
                        echo $row["avl_cpy"]; 
                        echo "</td>";
                        echo "<td>"; 
                        echo $row["dept"]; 
                        echo "</td>";
                        echo "<td>"; 
                        echo $row["file_name"]; 
                        echo "</td>";
                        echo "</tr>";
                    }
	            ?>
                </table>
      </div>   


  

<div class="nav" >
        <ul>
          <li><a style="color:black;background-color:white" href="admin.php">Home</a></li>
          <li><a href="add_book.php">Add Book</a></li>
          <li><a href="edit_book.php">Edit Book</a></li>
            <li><a href="delbook.php">Delete Book</a></li>
            <br><br> 
            <li><a href="report.php">Reports</a></li>
          <li><a href="index.php">Logout</a></li>
        </ul>
  </div>


   
    </body>
  
</html>
