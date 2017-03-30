<?php


function display_content(){
	if(isset($_SESSION['message'])){
		echo "<script> alert('NOT VALID'); </script>";
		unset($_SESSION['message']);
	}




	
		categories();
		echo "
			<div class='container'>
  <h2>Dynamic Pills</h2>

  <ul class='nav nav-pills'>
    <li class='active'><a data-toggle='pill' href='#all'>All</a></li>
    <li><a data-toggle='pill' href='#arts'>Arts and Music</a></li>
    <li><a data-toggle='pill' href='#beauty'>Beauty and Fashion</a></li>
    <li><a data-toggle='pill' href='#fitness'>Fitness and Sports</a></li>
    <li><a data-toggle='pill' href='#business'>Business</a></li>
    <li><a data-toggle='pill' href='#computer'>Computer and Technology</a></li>
    <li><a data-toggle='pill' href='#food'>Food and Cuisine</a></li>
    <li><a data-toggle='pill' href='#home'>Home and Garden</a></li>
    <li><a data-toggle='pill' href='#hobbies'>Hobbies and Leisure</a></li>
    <li><a data-toggle='pill' href='#academics'>Academics</a></li>
    <li><a data-toggle='pill' href='#travel'>Travel and Exploration</a></li>
  </ul>
  
  <div class='tab-content'>
    <div id='all' class='tab-pane fade in active'>
      <h3>All</h3>";
 		display_all();
    echo "</div>
    <div id='arts' class='tab-pane fade'>";
   		 display_arts('arts');
    echo "</div>
    <div id='beauty' class='tab-pane fade'>";
     	display_beauty('beauty');
    echo "</div>
    <div id='fitness' class='tab-pane fade'>";
     	display_fitness('fitness');
    echo "</div>
    <div id='business' class='tab-pane fade'>";
     	display_business('business');
    echo "</div>
    <div id='computer' class='tab-pane fade'>";
     	display_computer('computer');
    echo "</div>
    <div id='food' class='tab-pane fade'>";
     	display_food('food');
    echo "</div>
    <div id='home' class='tab-pane fade'>";
     	display_home('home');
    echo "</div>
    <div id='hobbies' class='tab-pane fade'>";
     	display_hobbies('hobbies');
    echo "</div>
    <div id='academics' class='tab-pane fade'>";
     	display_academics('academics');
    echo "</div>
    <div id='travel' class='tab-pane fade'>";
     	display_travel('travel');
    echo "</div>




  </div>
</div>


		 ";
	}





function categories(){		
	
	function display_all(){
		
		include('connection.php');
		$sql = "SELECT * FROM speaker_categories JOIN users ON speaker_categories.user_id = users.user_id";
		$result = mysqli_query($conn,$sql);
		while($row = mysqli_fetch_assoc($result)){
			extract($row);
			
		{

				echo "<div class='phparray col-md-offset-1 col-md-2';>
					<img src='$image'>
					<div><h4><strong>$username</strong></h4></div> 
					<div>$topic</div><hr>
					<div><h5>₱<strong>$price</strong></h5></div>
					<div>$description</div><hr>
					<div>$date</div><hr>
					<div>$location</div><hr>


					 <a href='booking.php?id=$id'><button type='submit' name='book' value='book' class='btn btn-primary'>Book</button></a>

						

					";


					if(isset($_SESSION['role']) && $_SESSION['role']=='admin'){

					echo "   <form class='form-horizontal' method='GET' action='#.php'>		
								<button type='button' class='btn btn-primary' data-toggle='modal' data-target='#myModal'>Edit</button>
							</form>"; 

							




					echo " 
							<div id='myModal' class='modal fade' role='dialog'>
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
    	<input type='hidden' name='user_id' value='$user_id'>
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
      <div class='col-lg-offset-2 col-lg-10'>
        <button type='submit' name='edit' class='btn btn-md btn-primary'>Submit</button>        
      </div>
    </div>
  </form>";
							     echo "</div>
							      <div class='modal-footer'>
							        <button type='button' class='btn btn-default' data-dismiss='modal'>Close</button>
							      </div>
							    </div>
							  </div>
							  </div>";

						

						echo "<a href='delete.php?id=$id'><input type='button' name='delete' value='Delete' class='btn btn-primary'></input></a>";

					}
				echo "</div>";


			}
		}
	}




		function display_arts($category){
		
		include('connection.php');
		$sql = "SELECT * FROM speaker_categories JOIN users ON speaker_categories.user_id = users.user_id";
		$result = mysqli_query($conn,$sql);
		while($row = mysqli_fetch_assoc($result)){
			extract($row);
			// $date = date_create_from_format('d-m-Y H:i:s', $date);
			// $date = date_format($date, 'd-m-Y H:i:s');
			//$date = date('d-M-Y', strtotime($date));

			if($category=='arts'){

				echo "<div class='phparray col-md-offset-1 col-md-2';>
					<img src='$image'>
					<div><h4><strong>$username</strong></h4></div> 
					<div>$topic</div><hr>
					<div><h5>₱<strong>$price</strong></h5></div>
					<div>$description</div><hr>
					<div>$date</div><hr>
					<div>$location</div><hr>


					<form class='form-horizontal' method='POST' action='#.php'>
					 	<button type='submit' name='book' value='book' class='btn btn-primary'>Book</button>
					</form>
						

					";


					if(isset($_SESSION['role']) && $_SESSION['role']=='admin'){

					echo "   <form class='form-horizontal' method='GET' action='#.php'>		
								<button type='button' class='btn btn-primary' data-toggle='modal' data-target='#myModal'>Edit</button>
							</form>"; 

							




					echo " 
							<div id='myModal' class='modal fade' role='dialog'>
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
    	<input type='hidden' name='user_id' value='$user_id'>
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
      <div class='col-lg-offset-2 col-lg-10'>
        <button type='submit' name='edit' class='btn btn-md btn-primary'>Submit</button>        
      </div>
    </div>
  </form>";
							     echo "</div>
							      <div class='modal-footer'>
							        <button type='button' class='btn btn-default' data-dismiss='modal'>Close</button>
							      </div>
							    </div>
							  </div>
							  </div>";

						

						echo "<a href='delete.php?id=$id'><input type='button' name='delete' value='Delete' class='btn btn-primary'></input></a>";

					}
				echo "</div>";


			}
		}
	}

	function display_beauty($category){
		include('connection.php');
		$sql = "SELECT * FROM speaker_categories JOIN users ON speaker_categories.user_id = users.user_id";
		$result = mysqli_query($conn,$sql);
		while($row = mysqli_fetch_assoc($result)){
			extract($row);
			
			if($category=='beauty'){

				echo "<div class='phparray col-md-offset-1 col-md-2';>
					<img src='$image'>
					<div><h4><strong>$username</strong></h4></div> 
					<div>$topic</div><hr>
					<div><h5>₱<strong>$price</strong></h5></div>
					<div>$description</div><hr>
					<div>$date</div><hr>
					<div>$location</div><hr>


					<form class='form-horizontal' method='POST' action='#.php'>
					 	<button type='submit' name='book' value='book' class='btn btn-primary'>Book</button>
					</form>
						

					";


					if(isset($_SESSION['role']) && $_SESSION['role']=='admin'){

					echo "   <form class='form-horizontal' method='GET' action='#.php'>		
								<button type='button' class='btn btn-primary' data-toggle='modal' data-target='#myModal'>Edit</button>
							</form>"; 

							




					echo " 
							<div id='myModal' class='modal fade' role='dialog'>
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
    	<input type='hidden' name='user_id' value='$user_id'>
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
      <div class='col-lg-offset-2 col-lg-10'>
        <button type='submit' name='edit' class='btn btn-md btn-primary'>Submit</button>        
      </div>
    </div>
  </form>";
							     echo "</div>
							      <div class='modal-footer'>
							        <button type='button' class='btn btn-default' data-dismiss='modal'>Close</button>
							      </div>
							    </div>
							  </div>
							  </div>";

						

						echo "<a href='delete.php?id=$id'><input type='button' name='delete' value='Delete' class='btn btn-primary'></input></a>";

					}
				echo "</div>";


			}
		}
	}


		function display_fitness($category){
		include('connection.php');
		$sql = "SELECT * FROM speaker_categories JOIN users ON speaker_categories.user_id = users.user_id";
		$result = mysqli_query($conn,$sql);
		while($row = mysqli_fetch_assoc($result)){
			extract($row);
			
			if($category=='fitness'){

				echo "<div class='phparray col-md-offset-1 col-md-2';>
					<img src='$image'>
					<div><h4><strong>$username</strong></h4></div> 
					<div>$topic</div><hr>
					<div><h5>₱<strong>$price</strong></h5></div>
					<div>$description</div><hr>
					<div>$date</div><hr>
					<div>$location</div><hr>


					<form class='form-horizontal' method='POST' action='#.php'>
					 	<button type='submit' name='book' value='book' class='btn btn-primary'>Book</button>
					</form>
						

					";


					if(isset($_SESSION['role']) && $_SESSION['role']=='admin'){

					echo "   <form class='form-horizontal' method='GET' action='#.php'>		
								<button type='button' class='btn btn-primary' data-toggle='modal' data-target='#myModal'>Edit</button>
							</form>"; 

							




					echo " 
							<div id='myModal' class='modal fade' role='dialog'>
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
    	<input type='hidden' name='user_id' value='$user_id'>
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
      <div class='col-lg-offset-2 col-lg-10'>
        <button type='submit' name='edit' class='btn btn-md btn-primary'>Submit</button>        
      </div>
    </div>
  </form>";
							     echo "</div>
							      <div class='modal-footer'>
							        <button type='button' class='btn btn-default' data-dismiss='modal'>Close</button>
							      </div>
							    </div>
							  </div>
							  </div>";

						

						echo "<a href='delete.php?id=$id'><input type='button' name='delete' value='Delete' class='btn btn-primary'></input></a>";

					}
				echo "</div>";


			}
		}
	}

	function display_business($category){
		include('connection.php');
		$sql = "SELECT * FROM speaker_categories JOIN users ON speaker_categories.user_id = users.user_id";
		$result = mysqli_query($conn,$sql);
		while($row = mysqli_fetch_assoc($result)){
			extract($row);
			
			if($category=='business'){

				echo "<div class='phparray col-md-offset-1 col-md-2';>
					<img src='$image'>
					<div><h4><strong>$username</strong></h4></div> 
					<div>$topic</div><hr>
					<div><h5>₱<strong>$price</strong></h5></div>
					<div>$description</div><hr>
					<div>$date</div><hr>
					<div>$location</div><hr>


					<form class='form-horizontal' method='POST' action='#.php'>
					 	<button type='submit' name='book' value='book' class='btn btn-primary'>Book</button>
					</form>
						

					";


					if(isset($_SESSION['role']) && $_SESSION['role']=='admin'){

					echo "   <form class='form-horizontal' method='GET' action='#.php'>		
								<button type='button' class='btn btn-primary' data-toggle='modal' data-target='#myModal'>Edit</button>
							</form>"; 

							




					echo " 
							<div id='myModal' class='modal fade' role='dialog'>
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
    	<input type='hidden' name='user_id' value='$user_id'>
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
      <div class='col-lg-offset-2 col-lg-10'>
        <button type='submit' name='edit' class='btn btn-md btn-primary'>Submit</button>        
      </div>
    </div>
  </form>";
							     echo "</div>
							      <div class='modal-footer'>
							        <button type='button' class='btn btn-default' data-dismiss='modal'>Close</button>
							      </div>
							    </div>
							  </div>
							  </div>";

						

						echo "<a href='delete.php?id=$id'><input type='button' name='delete' value='Delete' class='btn btn-primary'></input></a>";

					}
				echo "</div>";


			}
		}
	}

	function display_computer($category){
		include('connection.php');
		$sql = "SELECT * FROM speaker_categories JOIN users ON speaker_categories.user_id = users.user_id";
		$result = mysqli_query($conn,$sql);
		while($row = mysqli_fetch_assoc($result)){
			extract($row);
		
			if($category=='computer'){

				echo "<div class='phparray col-md-offset-1 col-md-2';>
					<img src='$image'>
					<div><h4><strong>$username</strong></h4></div> 
					<div>$topic</div><hr>
					<div><h5>₱<strong>$price</strong></h5></div>
					<div>$description</div><hr>
					<div>$date</div><hr>
					<div>$location</div><hr>


					<form class='form-horizontal' method='POST' action='#.php'>
					 	<button type='submit' name='book' value='book' class='btn btn-primary'>Book</button>
					</form>
						

					";


					if(isset($_SESSION['role']) && $_SESSION['role']=='admin'){

					echo "   <form class='form-horizontal' method='GET' action='#.php'>		
								<button type='button' class='btn btn-primary' data-toggle='modal' data-target='#myModal'>Edit</button>
							</form>"; 

							




					echo " 
							<div id='myModal' class='modal fade' role='dialog'>
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
    	<input type='hidden' name='user_id' value='$user_id'>
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
      <div class='col-lg-offset-2 col-lg-10'>
        <button type='submit' name='edit' class='btn btn-md btn-primary'>Submit</button>        
      </div>
    </div>
  </form>";
							     echo "</div>
							      <div class='modal-footer'>
							        <button type='button' class='btn btn-default' data-dismiss='modal'>Close</button>
							      </div>
							    </div>
							  </div>
							  </div>";

						

						echo "<a href='delete.php?id=$id'><input type='button' name='delete' value='Delete' class='btn btn-primary'></input></a>";

					}
				echo "</div>";


			}
		}
	}

	function display_food($category){
		include('connection.php');
		$sql = "SELECT * FROM speaker_categories JOIN users ON speaker_categories.user_id = users.user_id";
		$result = mysqli_query($conn,$sql);
		while($row = mysqli_fetch_assoc($result)){
			extract($row);
		
			if($category=='food'){

				echo "<div class='phparray col-md-offset-1 col-md-2';>
					<img src='$image'>
					<div><h4><strong>$username</strong></h4></div> 
					<div>$topic</div><hr>
					<div><h5>₱<strong>$price</strong></h5></div>
					<div>$description</div><hr>
					<div>$date</div><hr>
					<div>$location</div><hr>


					<form class='form-horizontal' method='POST' action='#.php'>
					 	<button type='submit' name='book' value='book' class='btn btn-primary'>Book</button>
					</form>
						

					";


					if(isset($_SESSION['role']) && $_SESSION['role']=='admin'){

					echo "   <form class='form-horizontal' method='GET' action='#.php'>		
								<button type='button' class='btn btn-primary' data-toggle='modal' data-target='#myModal'>Edit</button>
							</form>"; 

							




					echo " 
							<div id='myModal' class='modal fade' role='dialog'>
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
    	<input type='hidden' name='user_id' value='$user_id'>
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
      <div class='col-lg-offset-2 col-lg-10'>
        <button type='submit' name='edit' class='btn btn-md btn-primary'>Submit</button>        
      </div>
    </div>
  </form>";
							     echo "</div>
							      <div class='modal-footer'>
							        <button type='button' class='btn btn-default' data-dismiss='modal'>Close</button>
							      </div>
							    </div>
							  </div>
							  </div>";

						

						echo "<a href='delete.php?id=$id'><input type='button' name='delete' value='Delete' class='btn btn-primary'></input></a>";

					}
				echo "</div>";


			}
		}
	}

	function display_home($category){
		include('connection.php');
		$sql = "SELECT * FROM speaker_categories JOIN users ON speaker_categories.user_id = users.user_id";
		$result = mysqli_query($conn,$sql);
		while($row = mysqli_fetch_assoc($result)){
			extract($row);
		
			if($category=='home'){

				echo "<div class='phparray col-md-offset-1 col-md-2';>
					<img src='$image'>
					<div><h4><strong>$username</strong></h4></div> 
					<div>$topic</div><hr>
					<div><h5>₱<strong>$price</strong></h5></div>
					<div>$description</div><hr>
					<div>$date</div><hr>
					<div>$location</div><hr>


					<form class='form-horizontal' method='POST' action='#.php'>
					 	<button type='submit' name='book' value='book' class='btn btn-primary'>Book</button>
					</form>
						

					";


					if(isset($_SESSION['role']) && $_SESSION['role']=='admin'){

					echo "   <form class='form-horizontal' method='GET' action='#.php'>		
								<button type='button' class='btn btn-primary' data-toggle='modal' data-target='#myModal'>Edit</button>
							</form>"; 

							




					echo " 
							<div id='myModal' class='modal fade' role='dialog'>
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
    	<input type='hidden' name='user_id' value='$user_id'>
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
      <div class='col-lg-offset-2 col-lg-10'>
        <button type='submit' name='edit' class='btn btn-md btn-primary'>Submit</button>        
      </div>
    </div>
  </form>";
							     echo "</div>
							      <div class='modal-footer'>
							        <button type='button' class='btn btn-default' data-dismiss='modal'>Close</button>
							      </div>
							    </div>
							  </div>
							  </div>";

						

						echo "<a href='delete.php?id=$id'><input type='button' name='delete' value='Delete' class='btn btn-primary'></input></a>";

					}
				echo "</div>";


			}
		}
	}

	function display_hobbies($category){
		include('connection.php');
		$sql = "SELECT * FROM speaker_categories JOIN users ON speaker_categories.user_id = users.user_id";
		$result = mysqli_query($conn,$sql);
		while($row = mysqli_fetch_assoc($result)){
			extract($row);
		
			if($category=='hobbies'){

				echo "<div class='phparray col-md-offset-1 col-md-2';>
					<img src='$image'>
					<div><h4><strong>$username</strong></h4></div> 
					<div>$topic</div><hr>
					<div><h5>₱<strong>$price</strong></h5></div>
					<div>$description</div><hr>
					<div>$date</div><hr>
					<div>$location</div><hr>


					<form class='form-horizontal' method='POST' action='#.php'>
					 	<button type='submit' name='book' value='book' class='btn btn-primary'>Book</button>
					</form>
						

					";


					if(isset($_SESSION['role']) && $_SESSION['role']=='admin'){

					echo "   <form class='form-horizontal' method='GET' action='#.php'>		
								<button type='button' class='btn btn-primary' data-toggle='modal' data-target='#myModal'>Edit</button>
							</form>"; 

							




					echo " 
							<div id='myModal' class='modal fade' role='dialog'>
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
    	<input type='hidden' name='user_id' value='$user_id'>
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
      <div class='col-lg-offset-2 col-lg-10'>
        <button type='submit' name='edit' class='btn btn-md btn-primary'>Submit</button>        
      </div>
    </div>
  </form>";
							     echo "</div>
							      <div class='modal-footer'>
							        <button type='button' class='btn btn-default' data-dismiss='modal'>Close</button>
							      </div>
							    </div>
							  </div>
							  </div>";

						

						echo "<a href='delete.php?id=$id'><input type='button' name='delete' value='Delete' class='btn btn-primary'></input></a>";

					}
				echo "</div>";


			}
		}
	}

	function display_academics($category){
		include('connection.php');
		$sql = "SELECT * FROM speaker_categories JOIN users ON speaker_categories.user_id = users.user_id";
		$result = mysqli_query($conn,$sql);
		while($row = mysqli_fetch_assoc($result)){
			extract($row);
		
			if($category=='academics'){

				echo "<div class='phparray col-md-offset-1 col-md-2';>
					<img src='$image'>
					<div><h4><strong>$username</strong></h4></div> 
					<div>$topic</div><hr>
					<div><h5>₱<strong>$price</strong></h5></div>
					<div>$description</div><hr>
					<div>$date</div><hr>
					<div>$location</div><hr>


					<form class='form-horizontal' method='POST' action='#.php'>
					 	<button type='submit' name='book' value='book' class='btn btn-primary'>Book</button>
					</form>
						

					";


					if(isset($_SESSION['role']) && $_SESSION['role']=='admin'){

					echo "   <form class='form-horizontal' method='GET' action='#.php'>		
								<button type='button' class='btn btn-primary' data-toggle='modal' data-target='#myModal'>Edit</button>
							</form>"; 

							




					echo " 
							<div id='myModal' class='modal fade' role='dialog'>
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
    	<input type='hidden' name='user_id' value='$user_id'>
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
      <div class='col-lg-offset-2 col-lg-10'>
        <button type='submit' name='edit' class='btn btn-md btn-primary'>Submit</button>        
      </div>
    </div>
  </form>";
							     echo "</div>
							      <div class='modal-footer'>
							        <button type='button' class='btn btn-default' data-dismiss='modal'>Close</button>
							      </div>
							    </div>
							  </div>
							  </div>";

						

						echo "<a href='delete.php?id=$id'><input type='button' name='delete' value='Delete' class='btn btn-primary'></input></a>";

					}
				echo "</div>";


			}
		}
	}

	function display_travel($category){
include('connection.php');
		$sql = "SELECT * FROM speaker_categories JOIN users ON speaker_categories.user_id = users.user_id";
		$result = mysqli_query($conn,$sql);
		while($row = mysqli_fetch_assoc($result)){
			extract($row);
		
			if($category=='travel'){

				echo "<div class='phparray col-md-offset-1 col-md-2';>
					<img src='$image'>
					<div><h4><strong>$username</strong></h4></div> 
					<div>$topic</div><hr>
					<div><h5>₱<strong>$price</strong></h5></div>
					<div>$description</div><hr>
					<div>$date</div><hr>
					<div>$location</div><hr>


					<form class='form-horizontal' method='POST' action='#.php'>
					 	<button type='submit' name='book' value='book' class='btn btn-primary'>Book</button>
					</form>
						

					";


					if(isset($_SESSION['role']) && $_SESSION['role']=='admin'){

					echo "   <form class='form-horizontal' method='GET' action='#.php'>		
								<button type='button' class='btn btn-primary' data-toggle='modal' data-target='#myModal'>Edit</button>
							</form>"; 

							




					echo " 
							<div id='myModal' class='modal fade' role='dialog'>
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
    	<input type='hidden' name='user_id' value='$user_id'>
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
      <div class='col-lg-offset-2 col-lg-10'>
        <button type='submit' name='edit' class='btn btn-md btn-primary'>Submit</button>        
      </div>
    </div>
  </form>";
							     echo "</div>
							      <div class='modal-footer'>
							        <button type='button' class='btn btn-default' data-dismiss='modal'>Close</button>
							      </div>
							    </div>
							  </div>
							  </div>";

						

						echo "<a href='delete.php?id=$id'><input type='button' name='delete' value='Delete' class='btn btn-primary'></input></a>";

					}
				echo "</div>";


			}
		}
	}

}

	if(isset($_POST['edit'])){
		include('connection.php');
		$user_id = $_POST['user_id'];
		$topic = $_POST['topic'];
		$category = $_POST['category'];
		$price = $_POST['price'];
		$date = $_POST['date'];
		$location = $_POST['location'];

		$sql = "UPDATE speaker_categories SET topic = '$topic', category = '$category', price = '$price', date = '$date', location = '$location' WHERE user_id = '$user_id'"	;
		echo $sql;
		mysqli_query ($conn, $sql);
	}




	
require_once('template.php');

?>