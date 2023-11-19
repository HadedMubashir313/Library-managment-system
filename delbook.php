<?php include("conn.php");

$msg="";



if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['sub']))

{


  $id=$_POST['book_id'];  
  

  if($id!="")
  {  
      // $sql="DELETE FROM `book` WHERE `book`.`b_id` ="."'$id'";
      $sql="DELETE FROM `book` WHERE `book`.`b_id` ='$id'";
      
	    $data = mysqli_query($conn, $sql);
	
      if($data)
	  {
	    $msg= "Book Delete Successfully";
	  }
	  else
	  {
	    $msg= "Something Went Wrong..";
	  }
}
    else
	  {
	   $msg="Book ID Required";
	  }
}
?>




<html>
<head>
<title>Delete_Book</title>


<style>
body{
  background: url(4.jpeg);
  background-size: cover;
  font-family: "Times New Roman", Times, serif;
}
.box{
  margin-top:6%;
  width:90%;
  height:110px;
  background-size: cover;
  margin-left: 6%;
  background-color:#106dc7;
  opacity: 1;
  border-radius: 5px;
}

	 .header{
	     width:320px;
	
			 display: inline-block;
			 width:73.5%;
			 height:400px;
			 margin-left:13%;
       margin-top:6%;
     
      
			 box-shadow:0px 0px 15px Black;
       border-radius:12px;
         border:solid 1px black;

			 }


  .title{
				color:#FFFFFF;
			  font-size:30px;
			 	font-weight:10px;
				 font-family: "Times New Roman", Times, serif;
			
    
        margin-top: 4%;
				margin-right:56%;
				padding-left:10%;
				font-style:italic;
				}
	.title h2{
        
        background:#660000;
			   border:none;
         margin-left:400px;
         margin-top: 10px;
			  padding-top:3px;
        padding-bottom: 2px;
			    padding-left:150px;
				border-radius:10px;
        width:280px;
	           }

	
    .container{
         
          margin-left:20%;
          margin-top:50px;
          font-weight:10px;
          height:350px;
          background:rgba(0,0,0,0.7);
          padding-left:5%;
          width:10;
          box-shadow:0px 0px 50px Black;
          border-radius:12px;
          overflow:auto;
          }

   .header input[type="submit"]
          {

		  font-size:25px;
		  text-align:center;
			border:none;
			height:40px;
			margin-left:110% ;
      margin-top: 10px;
			color:#FFFFFF;
			border-radius:18px;
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


</style>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

 </head>



<body>




  <div class="box">
   <table  style =" font-size:25pt"  align="center" width="100%" height="100%">
      <tr>
        <td style="color:Black"><h1 align="center">Delete  a Book</h1></td>
      </tr>
      
    </table>
  </div>








  <center>

<form action="" method="POST" enctype="multipart/form-data">





  <div class = "container">

<table style= "color:#FFFFFF;padding-top:10px; margin-top:90;">   

  <tr>
     <td style="width:150px;text-align:center ;   ">Book ID :</td>
     <td><input  class="form-control-plaintext" style ="background-color:white; " type="text" name="book_id" /></td>
	</tr>
      
  <tr>
	  <td>
      <h2><input class="btn btn-success"style= "background-color:#106dc7;height:50px; width: 150px; margin-top:20%;margin-left:70%;" type="submit" name="sub" value="Delete"/></h2>
    </td>
	</tr>
      
  <tr>
    <td   style="color:#106dc7;font-weight:bold;text-align:center; font-size:20px;"> <?php echo $msg; ?></td>
  </tr>

  

</table>

  

</div> 
</form>
<center>





<div class="nav">
        <ul>
          <li><a href = "admin.php">Home</a></li>
          <li ><a href = "add_book.php"  >Add Book</a></li>
          <li><a href = "edit_book.php" >Edit Book</a></li>
            <li><a href = "delbook.php"style="color:black;background-color:white">Delete Book</a></li>
          
         <br><br> <li><a href = "index.php">Logout</a></li>
        </ul>
</div>



</body>
</html>