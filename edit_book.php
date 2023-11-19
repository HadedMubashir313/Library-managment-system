<?php include("conn.php");

$alert="";



if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['sub']))

{

  $bookname=$_POST['booksname'];
  $authorname=$_POST['authorname'];
  $id=$_POST['book_id'];  
  $copy=$_POST['copies'];
  $dept=$_POST['dept'];
  $avl_cpy=$copy;
  

  if($bookname!="" && $authorname!="" && $id!="" && $copy!="")
  {  
     
  
   $file_name = $_FILES['file']['name'];
	 $new_file_name=$id.".pdf";
     $file_tmp_loc = $_FILES['file']['tmp_name'];
	 $file_store = "ebooks/";
     $fpath=$file_store.$new_file_name;
	 $accepted=array("pdf");

	 
	 
	if(!in_array(pathinfo($file_name,PATHINFO_EXTENSION),$accepted))
	{
	
	 $alert= $file_name."<br> is not acceptable file type";
	}
	else
	{
	  
	  move_uploaded_file($_FILES['file']['tmp_name'],$file_store.$new_file_name);
	  
	 }
      
    
      $sql="UPDATE `book` SET". "`booksname` ='$bookname',"."`authorname` = '$authorname',"."`copies` = '$copy',". "`avl_cpy` = '$avl_cpy',"."`dept` = '$dept',"."`file_name` = '$new_file_name',"."`path` = '$fpath'". " WHERE `book`.`b_id` ="."'$id'";
      

	$data1 = mysqli_query($conn,$sql);
	
      if($data1)
	  {
	    $alert= "Edit Success";
	  }
	  else
	  {
	    $alert= "Editing Failed";
	  }
}
    else
	  {
	   $alert="All Fields are Required";
	  }
}
?>
<html>
<head>
<title>Edit Book</title>


<style>
body{
  background: url(3.jpeg);
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

	 .header{
	     width:300px;
	
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
			  font-size:20px;
			 	font-weight:10px;
        /* background-color:gray; */
        margin-top: 4%;
				margin-right:56%;
				padding-left:13%;
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

	
    
   .header input[type="submit"]
          {

		  font-size:25px;
		  text-align:center;
			border:none;
			height:40px;
			margin-left:90% ;
      margin-top: 10px;
			background:#106dc7;
			color:#FFFFFF;
			border-radius:10px;
			}


.form-control-plaintext{
  margin-left:15%;
  padding: bottom 5px;
  margin-bottom: 5px;
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
   <table  style ="; font-size:30pt"  align="center" width="100%" height="100%">
      
        <td style="color:white; font-style:times new roman;" align="center">Edit a Book</td>
      </tr>
    </table>
  </div>



  <center>

<form action="" method="POST" enctype="multipart/form-data">




<div class = "container">

  <br><br>
  <br><br>
  <table style= "color:#FFFFFF; padding-top:40px;">
      
  <tr>
     <td>Book ID:</td>
     <td><input type="text" name="book_id" class="form-control-plaintext" style ="background-color:white;" /></td>
	</tr>
      


  <tr>
     <td>Book Name:</td>
     <td><input type="text" name="booksname"  class="form-control-plaintext" style ="background-color:white;"/></td>
  </tr>
      
      
         
	<tr>
	      <td>Author Name:</td>
	      <td><input type="text" name="authorname"   class="form-control-plaintext" style ="background-color:white;"/></td>
        <td style="color:green;font-weight:bold;text-align:center"><?php echo $alert; ?></td>
	</tr>
      
      
	<tr>
        <td>Number of Copies:</td>
        <td><input type="text" name="copies"   class="form-control-plaintext" style ="background-color:white;"/></td>
	</tr>
      
      
  
   <tr>
	  <td>Department:</td>
	 <td>
	 <select name="dept" class="btn btn-secondary dropdown-toggle" style= "background-color:#106dc7;">
              <option value="CS">Computer Science</option>
              <option value="Business">Business</option>
              <option value="Law">Law</option>
              <option value="PoliticalScience">Political Science</option>
	   </select>
	</td>
	</tr>

	<tr>
	    <td>Upload e-BOOK:</td>
	    <td ><input type="file" name="file"  /></td>
	</tr>



  <tr>

	  <td>
      <h2><input style="background-color: #106dc7;width:150;margin-left:140%;margin-top:10%;" class="btn btn-success" type="submit" name="sub" value="Re-Upload"/></h2>
      
    </td>

	</tr>


  </table>
</div>




 </form>
 </center>


 <div class="nav">
        <ul>
          <li><a href = "admin.php">Home</a></li>
          <li ><a href = "add_book.php"  >Add Book</a></li>
          <li><a href = "edit_book.php" style="color:black;background-color:white">Edit Book</a></li>
            <li><a href = "delbook.php">Delete Book</a></li>
          
         <br><br> <li><a href = "index.php">Logout</a></li>
        </ul>
</div>





</body>
</html>