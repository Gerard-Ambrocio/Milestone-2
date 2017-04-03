<?php



function display_content(){
	// categories();
		echo "
<div class='container '>
  <h2>Your Talks</h2>
   
		<!-- Trigger the modal with a button -->
		<button type='button' class='btn btn-info btn-lg' data-toggle='modal' data-target='#myModal'>Add Talk</button>";
		if(isset($_SESSION['role']) && $_SESSION['role']=='admin'){

		echo "  <a href='orange.php'><button type='button' class='btn btn-warning btn-lg'>Orange</button></a>"; 
		}
	
	echo "<div id='myModal' class='modal fade' role='dialog'>
  <div class='modal-dialog'>      

  <!-- Modal content-->
    <div class='modal-content'>
      <div class='modal-header'>
        <button type='button' class='close' data-dismiss='modal'>&times;</button>
        <h4 class='Add Talk'>Edit</h4>
      </div>
      <div class='modal-body'>";
      	display_content1();
     echo "</div>
      <div class='modal-footer'>
        <button type='button' class='btn btn-default' data-dismiss='modal'>Close</button>
      </div>
    </div>
  </div>


	</div>   
	<div class='table-responsive'>    
	  <table class='table'>
	    <thead>
	      <tr>
	        <th>Topic</th>
	        <th>Category</th>
	        <th>Price</th>
	         <th>Date</th>
	        <th>Location</th>
	        <th>Slots</th>
	      </tr>
	    </thead>
	    <tbody>";

	    $user_id = $_SESSION['user_id'];
	    require('connection.php');
	    $sql = "SELECT * FROM speaker_categories WHERE user_id ='$user_id'";
	    $result = mysqli_query($conn,$sql);
	    while($row = mysqli_fetch_assoc($result)){
	    	extract($row);

		    echo  "<tr>
		        <td>$topic</td>
		        <td>$category</td>
		        <td>$price</td>
		        <td>$date</td>
		        <td>$location</td>
		        <td>$slots</td>
		        <td>
			       	
						<button type='button' class='btn btn-primary btn-sm' data-toggle='modal' data-target='#myModal$id'>Edit</button>
				
					<div id='myModal$id' class='modal fade' role='dialog'>
							  <div class='modal-dialog'>      

							  <!-- Modal content-->
							    <div class='modal-content'>
							      <div class='modal-header'>
							        <button type='button' class='close' data-dismiss='modal'>&times;</button>
							        <h4 class='Add Talk'>Modal Header</h4>
							      </div>
							      <div class='modal-body'>
							      	<form class='form-horizontal' method='POST'>
									    <div class='form-group'>
									    	<input type='hidden' name='talk_id' value='$id'>
									      <label class='control-label' for='topic'> topic:</label>
									      <div class=''>
									        <input type='text' class='form-control' id='topic' name='topic' value='$topic'>
									      </div>
									    </div>
									    <div class='form-group'>
									      <label class='control-label' for='category'>category:</label>
									      <div class=''>          
									        <input type='text' class='form-control' id='category' name='category' value='$category'>
									      </div>
									    </div>
									    <div class='form-group'>
									      <label class='control-label' for='price'>price:</label>
									      <div class=''>          
									        <input type='number' class='form-control' id='price' name='price' value='$price'>
									      </div>
									    </div> 
									    <div class='form-group'>
									      <label class='control-label' for='date'>date:</label>
									      <div class=''>          
									        <input type='datetime' class='form-control' id='date' name='date' value='$date'>
									      </div>
									    </div>
									    <div class='form-group'>
									      <label class='control-label' for='location'>location:</label>
									      <div class=''>          
									        <input type='text' class='form-control' id='location' name='location' value='$location'>
									      </div>
									    </div>
									    <div class='form-group'>
									      <label class='control-label' for='slots'>slots:</label>
									      <div class=''>          
									        <input type='text' class='form-control' id='slots' name='slots' value='$slots'>
									      </div>
									    </div>         
									    <div class='form-group'>        
									      <div class='col-lg-offset-2 col-lg-10'>
									        <button type='submit' name='edit' class='btn btn-md btn-primary'>Submit</button>        
									      </div>
									    </div>
									  </form>
							     	  </div>
							      <div class='modal-footer'>
							        <button type='button' class='btn btn-default' data-dismiss='modal'>Close</button>
							      </div>
							    </div>
							  </div>
							  </div>
							</td>
							<td><a href='delete-talks.php?id=$id'><input type='button' name='delete' value='Delete' class='btn btn-primary btn-sm'></input></a></td>
		      </tr>";
		}

	    echo "</tbody>
	  </table>
	 </div> 
	</div>
	<div class='container'>
	  <h2>Your Bookings</h2> 
	  <div class='table-responsive'>            
	  <table class='table '>
	    <thead>
	      <tr>
	        <th>Speaker</th>
	        <th>Topic</th>
	        <th>Category</th>
	        <th>Price</th>
	        <th>Date</th>
	        <th>Location</th>
	        
	      </tr>

	    </thead>
	    <tbody>";
	    	$user_id = $_SESSION['user_id'];
	    $sql = "SELECT * FROM speaker_categories JOIN bookings ON speaker_categories.id = bookings.speaker_categories_id JOIN users ON speaker_categories.user_id = users.user_id WHERE bookings.user_id = '$user_id'";
	     $result = mysqli_query($conn,$sql);
	    while($row = mysqli_fetch_assoc($result)){
	    	extract($row);

		    echo  "<tr>
		    	<td>$first_name $last_name</td>
		        <td>$topic</td>
		        <td>$category</td>
		        <td>$price</td>
		        <td>$date</td>
		        <td>$location</td>
		        <td><a href='delete-bookings.php?id=$id'><input type='button' name='delete' value='Delete' class='btn btn-primary btn-sm'></input></a></td>
	    
	      </tr>";
	      }     
	    echo "</tbody>
	  </table>
	 </div> 
	</div>



		 ";
}


function display_content1(){
	add();

	echo "

  
  <form class='form-horizontal' method='POST'>
    <div class='form-group'>
      <label class='control-label' for='topic'> topic:</label>
      <div class=''>
        <input  type='text' class='form-control' id='topic' name='topic'>
      </div>
    </div>
    <div class='form-group'>
      <label class='control-label' for='category'>category:</label>
      <div class=''>          
        <input type='category' class='form-control' id='category' name='category'>
      </div>
    </div>
    <div class='form-group'>
      <label class='control-label' for='price'>price:</label>
      <div class=''>          
        <input type='price' class='form-control' id='price' name='price'>
      </div>
    </div> 
    <div class='form-group'>
      <label class='control-label' for='date'>date:</label>
      <div class=''>          
        <input type='datetime' class='form-control' id='date' name='date' value='YYYY-mm-dd hh:mm:ss'>
      </div>
    </div>
    <div class='form-group'>
      <label class='control-label' for='location'>location:</label>
      <div class=''>          
        <input type='location' class='form-control' id='location' name='location'>
      </div>
    </div>
    <div class='form-group'>
      <label class='control-label' for='slots'>slots:</label>
      <div class=''>          
        <input type='number' class='form-control' id='slots' name='slots'>
      </div>
    </div>       
    <div class='form-group'>        
      <div class='col-lg-offset-2 col-lg-10'>
        <button type='submit' name='add' value='add' class='btn btn-md btn-primary'>Add Talk</button>        
      </div>
    </div>
  </form>";
}

function add(){
	include('connection.php');
	if(isset($_POST['add'])){
		$user_id = $_SESSION['user_id'];
		$topic = $_POST['topic'];
		$category = $_POST['category'];
		$price = $_POST['price'];
		$date = $_POST['date'];
		$location = $_POST['location'];
		$slots = $_POST['slots'];
		//$sql1 = "SELECT user_id FROM users WHERE username='".$_SESSION['username']."'";
		// print_r(mysqli_query($conn, $sql1));
		//$result = mysqli_query($conn, $sql1);
		//$user_id = mysqli_fetch_assoc($result);
		$sql = "INSERT INTO speaker_categories (topic, category, price, date, location, user_id, slots)
				VALUES ('$topic','$category','$price', '$date', '$location', '$user_id', '$slots')";
		// echo $sql;
		mysqli_query ($conn, $sql);
	}

}

	if(isset($_POST['edit'])){
		include('connection.php');
		$talk_id = $_POST['talk_id'];
		$topic = $_POST['topic'];
		$category = $_POST['category'];
		$price = $_POST['price'];
		$date = $_POST['date'];
		$location = $_POST['location'];
		$slots = $_POST['slots'];

		$sql = "UPDATE speaker_categories SET topic = '$topic', category = '$category', price = '$price', date = '$date', location = '$location', slots='$slots' WHERE id = '$talk_id'"	;
		echo $sql;
		mysqli_query ($conn, $sql);
	}








require_once('template.php');

?>