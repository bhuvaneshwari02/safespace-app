<?php 
	include 'dbconfig.php';
	if(!isset($_SESSION)) 
		{ 
			session_start(); 
		} 
	$email=$_SESSION['user'];?>
	
	<html lang="en" >
<head>
  <meta charset="UTF-8">
  
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.12/css/dataTables.bootstrap.min.css'>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet"/>
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,500" rel="stylesheet"/>
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"/>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/scrolling-nav.css" rel="stylesheet">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Audiowide">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">



  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>
  <link rel="stylesheet" href="tablestyle.css">
<style>
a{
text-decoration:none;
	
}

.icon-red {
        color: light-blue;
      }
.btn {
    
    display: block;
    width: 300px;
    height: 50px;
    background: linear-gradient(to right, #FFD54F, #D500F9);
    color: #fff;
    border-radius: 3px;
    border: 0;
    box-shadow: 0 3px 0 0 hotpink;
    transition: all 0.3s ease-in-out;
    font-size: 14px;
  }

</style>
</head>
 
<body id="page-top">
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="#page-top"><span style="font-size:20px">Safe Space</span></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
		
		<li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#home"><span class="glyphicon glyphicon-user icon-red"></span></a>
          </li>
          
		<li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#home"><span style="font-size:14px"><?php echo $email?></span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="home.php"><span style="font-size:14px">Home</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="index.php"><span style="font-size:14px">Logout</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#contact"><span style="font-size:14px">Contact Us</span></a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

<br><br><br><br><br><br><br><br><br>

 <?php
 $sql = "SELECT * FROM notes where email_id='$email' ORDER BY time DESC"; 
	$result = mysqli_query($con, $sql);
	$notes = mysqli_fetch_all($result, MYSQLI_ASSOC);
 	if(mysqli_num_rows($result)==0)
 {
	 
	 echo "No Notes are taken";
 }
 else
 {?>
 <form action="notesupload.php" method="post" enctype="multipart/form-data" >
<div class="row">
<div class="container"> 
  
<div class="input-group">
  <div class="col-xs-3">
        
  </span><input type="text" id="myInput" class="form-control" id="ex3" onkeyup="myFunction()" placeholder="Search for Title.." title="Type in a name">
  <br><br>
  </div>
  <table class="table responsive" id="myTable">
	<thead>
		<tr>
		<th scope="col" onclick="sortTable(0)" ><a href="#" data-toggle="tooltip" title="Click to sort">Title</a></th>
		<th scope="col" onclick="sortTable(1)"><a href="#" data-toggle="tooltip" title="Click to sort">Content</a></th>
		<th scope="col" onclick="sortTable(2)"><a href="#" data-toggle="tooltip" title="Click to sort">Time</a></th>
		<th scope="col" >Delete</th>
		<th scope="col" >Update</th>
		</tr>
	</thead>
	<tbody>
		
<?php 
$num=mysqli_num_rows($result);

 
 $fetchqry = "SELECT * FROM notes where email_id='$email' ORDER BY time DESC"; 
	$result=mysqli_query($con,$fetchqry);
	$num=mysqli_num_rows($result);
	if($num > 0){
    while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){ ?>
      
	  
	
		<tr>
		<td data-table-header="Title"><?php echo $row['title'];?></td>
		<td data-table-header="Content"><?php echo $row['content'];?></td>
		<td data-table-header="Time"><?php echo $row['time'];?></td>
		 <td data-table-header="Action"><a href="delete1.php?name=<?php echo $row['title'] ?>">     
		 <span class="glyphicon glyphicon-trash"></span>
        
</a></td>
		 <td data-table-header="Action"><a href="notesupdate.php?name=<?php echo $row['title'] ?>&con=<?php echo $row['content']?>"><span class="glyphicon glyphicon-pencil"></span></a></td>
		</tr>
		<?php
	}}?>
	</tbody>
</table>
<center><br>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<button type="submit" class="btn" name="save">Click Here to Upload your file!</button><center>
 <?php
 }
 ?>
</div>
</div>
 <script>
function sortTable(n) {
  var table, rows, switching, i, x, y, shouldSwitch, dir, switchcount = 0;
  table = document.getElementById("myTable");
  switching = true;
  //Set the sorting direction to ascending:
  dir = "asc"; 
  /*Make a loop that will continue until
  no switching has been done:*/
  while (switching) {
    //start by saying: no switching is done:
    switching = false;
    rows = table.rows;
    /*Loop through all table rows (except the
    first, which contains table headers):*/
    for (i = 1; i < (rows.length - 1); i++) {
      //start by saying there should be no switching:
      shouldSwitch = false;
      /*Get the two elements you want to compare,
      one from current row and one from the next:*/
      x = rows[i].getElementsByTagName("TD")[n];
      y = rows[i + 1].getElementsByTagName("TD")[n];
      /*check if the two rows should switch place,
      based on the direction, asc or desc:*/
      if (dir == "asc") {
        if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
          //if so, mark as a switch and break the loop:
          shouldSwitch= true;
          break;
        }
      } else if (dir == "desc") {
        if (x.innerHTML.toLowerCase() < y.innerHTML.toLowerCase()) {
          //if so, mark as a switch and break the loop:
          shouldSwitch = true;
          break;
        }
      }
    }
    if (shouldSwitch) {
      /*If a switch has been marked, make the switch
      and mark that a switch has been done:*/
      rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
      switching = true;
      //Each time a switch is done, increase this count by 1:
      switchcount ++;      
    } else {
      /*If no switching has been done AND the direction is "asc",
      set the direction to "desc" and run the while loop again.*/
      if (switchcount == 0 && dir == "asc") {
        dir = "desc";
        switching = true;
      }
    }
  }
}
</script>
<script>
function myFunction() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>
<script>
$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();   
});
</script>
 
</body>
</html>
