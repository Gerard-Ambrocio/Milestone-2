<?php

function display_content(){
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
		
		// if(isset($_SESSION['role']) && $_SESSION['role']=='admin'){
		// 				echo "<a href='addspeaker.php?category=arts'><input type='submit' name='add-speaker' value='add speaker' class='add-speaker' class='add-speaker'></input></a>";
			
		// 			}
		include('connection.php');
		$sql = "SELECT * FROM speaker_categories JOIN users ON speaker_categories.user_id = users.id";
		$result = mysqli_query($conn,$sql);
		while($row = mysqli_fetch_assoc($result)){
			extract($row);

			
				echo "<div class='phparray col-md-offset-1 col-md-2';>
					<img src='$image'>
					<div><h4><strong>$username</strong></h4></div> 
					<div>$topic</div><hr>
					<div><h5>₱<strong>$price</strong></h5></div>
					<div>$description</div><hr>
					<div>$date</div><hr>
					<div>$place</div><hr>


					<form class='form-horizontal' method='POST' action='#.php'>
					 	<button type='submit' name='book' value='book' class='btn btn-primary'>Book</button>
					</form>
						

					";

					if(isset($_SESSION['role']) && $_SESSION['role']=='admin'){
						echo "<a href='edit.php?key=$key'><input type='button' name='edit' value='Edit'></input></a>";
						echo "<a href='delete.php?key=$key'><input type='button' name='delete' value='Delete'></input></a>";

					
				echo "</div>";
			}
		}
	}




		function display_arts($category){
		
		// if(isset($_SESSION['role']) && $_SESSION['role']=='admin'){
		// 				echo "<a href='addspeaker.php?category=arts'><input type='submit' name='add-speaker' value='add speaker' class='add-speaker' class='add-speaker'></input></a>";
			
		// 			}
		include('connection.php');
		$sql = "SELECT * FROM speaker_categories JOIN users ON speaker_categories.user_id = users.id";
		$result = mysqli_query($conn,$sql);
		while($row = mysqli_fetch_assoc($result)){
			extract($row);

			if($category=='arts'){

				echo "<div class='phparray col-md-offset-1 col-md-2';>
					<img src='$image'>
					<div><h4><strong>$username</strong></h4></div> 
					<div>$topic</div><hr>
					<div><h5>₱<strong>$price</strong></h5></div>
					<div>$description</div><hr>
					<div>$date</div><hr>
					<div>$place</div><hr>


					<form class='form-horizontal' method='POST' action='#.php'>
					 	<button type='submit' name='book' value='book' class='btn btn-primary'>Book</button>
					</form>
						

					";

					if(isset($_SESSION['role']) && $_SESSION['role']=='admin'){
						echo "<a href='edit.php?key=$key'><input type='button' name='edit' value='Edit'></input></a>";
						echo "<a href='delete.php?key=$key'><input type='button' name='delete' value='Delete'></input></a>";

					}
				echo "</div>";
			}
		}
	}

	function display_beauty($category){
		// if(isset($_SESSION['role']) && $_SESSION['role']=='admin'){
		// 				echo "<a href='addspeaker.php?category=arts'><input type='submit' name='add-speaker' value='add speaker' class='add-speaker' class='add-speaker'></input></a>";
			
		// 			}
		include('connection.php');
		$sql = "SELECT * FROM speaker_categories JOIN users ON speaker_categories.user_id = users.id";
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
					<div>$place</div><hr>					
					<form class='form-horizontal' method='POST' action='#.php'>
					 	<button type='submit' name='book' value='book' class='btn btn-primary'>Book</button>
					</form>
					";

					if(isset($_SESSION['role']) && $_SESSION['role']=='admin'){
						echo "<a href='edit.php?key=$key'><input type='button' name='edit' value='Edit'></input></a>";
						echo "<a href='delete.php?key=$key'><input type='button' name='delete' value='Delete'></input></a>";

					}
				echo "</div>";
			}
		}
	}


		function display_fitness($category){
		// if(isset($_SESSION['role']) && $_SESSION['role']=='admin'){
		// 				echo "<a href='addspeaker.php?category=arts'><input type='submit' name='add-speaker' value='add speaker' class='add-speaker' class='add-speaker'></input></a>";
			
		// 			}
		include('connection.php');
		$sql = "SELECT * FROM speaker_categories JOIN users ON speaker_categories.user_id = users.id";
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
					<div>$place</div><hr>

					<form class='form-horizontal' method='POST' action='#.php'>
					 	<button type='submit' name='book' value='book' class='btn btn-primary'>Book</button>
					</form>
					";

					if(isset($_SESSION['role']) && $_SESSION['role']=='admin'){
						echo "<a href='edit.php?key=$key'><input type='button' name='edit' value='Edit'></input></a>";
						echo "<a href='delete.php?key=$key'><input type='button' name='delete' value='Delete'></input></a>";

					}
					echo "</div>";
			}
		}
	}

	function display_business($category){
		// if(isset($_SESSION['role']) && $_SESSION['role']=='admin'){
		// 				echo "<a href='addspeaker.php?category=arts'><input type='submit' name='add-speaker' value='add speaker' class='add-speaker' class='add-speaker'></input></a>";
			
		// 			}
		include('connection.php');
		$sql = "SELECT * FROM speaker_categories JOIN users ON speaker_categories.user_id = users.id";
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
					<div>$place</div><hr>

					<form class='form-horizontal' method='POST' action='#.php'>
					 	<button type='submit' name='book' value='book' class='btn btn-primary'>Book</button>
					</form>
					";

					if(isset($_SESSION['role']) && $_SESSION['role']=='admin'){
						echo "<a href='edit.php?key=$key'><input type='button' name='edit' value='Edit'></input></a>";
						echo "<a href='delete.php?key=$key'><input type='button' name='delete' value='Delete'></input></a>";

					}
					echo "</div>";
			}
		}
	}

	function display_computer($category){
		// if(isset($_SESSION['role']) && $_SESSION['role']=='admin'){
		// 				echo "<a href='addspeaker.php?category=arts'><input type='submit' name='add-speaker' value='add speaker' class='add-speaker' class='add-speaker'></input></a>";
			
		// 			}
		include('connection.php');
		$sql = "SELECT * FROM speaker_categories JOIN users ON speaker_categories.user_id = users.id";
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
					<div>$place</div><hr>

					<form class='form-horizontal' method='POST' action='#.php'>
					 	<button type='submit' name='book' value='book' class='btn btn-primary'>Book</button>
					</form>
					";

					if(isset($_SESSION['role']) && $_SESSION['role']=='admin'){
						echo "<a href='edit.php?key=$key'><input type='button' name='edit' value='Edit'></input></a>";
						echo "<a href='delete.php?key=$key'><input type='button' name='delete' value='Delete'></input></a>";

					}
					echo "</div>";
			}
		}
	}

	function display_food($category){
		// if(isset($_SESSION['role']) && $_SESSION['role']=='admin'){
		// 				echo "<a href='addspeaker.php?category=arts'><input type='submit' name='add-speaker' value='add speaker' class='add-speaker' class='add-speaker'></input></a>";
			
		// 			}
		include('connection.php');
		$sql = "SELECT * FROM speaker_categories JOIN users ON speaker_categories.user_id = users.id";
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
					<div>$place</div><hr>

					<form class='form-horizontal' method='POST' action='#.php'>
					 	<button type='submit' name='book' value='book' class='btn btn-primary'>Book</button>
					</form>
					";

					if(isset($_SESSION['role']) && $_SESSION['role']=='admin'){
						echo "<a href='edit.php?key=$key'><input type='button' name='edit' value='Edit'></input></a>";
						echo "<a href='delete.php?key=$key'><input type='button' name='delete' value='Delete'></input></a>";

					}
					echo "</div>";
			}
		}
	}

	function display_home($category){
		// if(isset($_SESSION['role']) && $_SESSION['role']=='admin'){
		// 				echo "<a href='addspeaker.php?category=arts'><input type='submit' name='add-speaker' value='add speaker' class='add-speaker' class='add-speaker'></input></a>";
			
		// 			}
		include('connection.php');
		$sql = "SELECT * FROM speaker_categories JOIN users ON speaker_categories.user_id = users.id";
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
					<div>$place</div><hr>

					<form class='form-horizontal' method='POST' action='#.php'>
					 	<button type='submit' name='book' value='book' class='btn btn-primary'>Book</button>
					</form>
					";

					if(isset($_SESSION['role']) && $_SESSION['role']=='admin'){
						echo "<a href='edit.php?key=$key'><input type='button' name='edit' value='Edit'></input></a>";
						echo "<a href='delete.php?key=$key'><input type='button' name='delete' value='Delete'></input></a>";

					}
					echo "</div>";
			}
		}
	}

	function display_hobbies($category){
		// if(isset($_SESSION['role']) && $_SESSION['role']=='admin'){
		// 				echo "<a href='addspeaker.php?category=arts'><input type='submit' name='add-speaker' value='add speaker' class='add-speaker' class='add-speaker'></input></a>";
			
		// 			}
		include('connection.php');
		$sql = "SELECT * FROM speaker_categories JOIN users ON speaker_categories.user_id = users.id";
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
					<div>$place</div><hr>

					<form class='form-horizontal' method='POST' action='#.php'>
					 	<button type='submit' name='book' value='book' class='btn btn-primary'>Book</button>
					</form>
					";

					if(isset($_SESSION['role']) && $_SESSION['role']=='admin'){
						echo "<a href='edit.php?key=$key'><input type='button' name='edit' value='Edit'></input></a>";
						echo "<a href='delete.php?key=$key'><input type='button' name='delete' value='Delete'></input></a>";

					}
					echo "</div>";
			}
		}
	}

	function display_academics($category){
		// if(isset($_SESSION['role']) && $_SESSION['role']=='admin'){
		// 				echo "<a href='addspeaker.php?category=arts'><input type='submit' name='add-speaker' value='add speaker' class='add-speaker' class='add-speaker'></input></a>";
			
		// 			}
		include('connection.php');
		$sql = "SELECT * FROM speaker_categories JOIN users ON speaker_categories.user_id = users.id";
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
					<div>$place</div><hr>

					<form class='form-horizontal' method='POST' action='#.php'>
					 	<button type='submit' name='book' value='book' class='btn btn-primary'>Book</button>
					</form>
					";

					if(isset($_SESSION['role']) && $_SESSION['role']=='admin'){
						echo "<a href='edit.php?key=$key'><input type='button' name='edit' value='Edit'></input></a>";
						echo "<a href='delete.php?key=$key'><input type='button' name='delete' value='Delete'></input></a>";

					}
					echo "</div>";
			}
		}
	}

	function display_travel($category){
		// if(isset($_SESSION['role']) && $_SESSION['role']=='admin'){
		// 				echo "<a href='addspeaker.php?category=arts'><input type='submit' name='add-speaker' value='add speaker' class='add-speaker' class='add-speaker'></input></a>";
			
		// 			}
		include('connection.php');
		$sql = "SELECT * FROM speaker_categories JOIN users ON speaker_categories.user_id = users.id";
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
					<div>$place</div><hr>

					<form class='form-horizontal' method='POST' action='#.php'>
					 	<button type='submit' name='book' value='book' class='btn btn-primary'>Book</button>
					</form>
					";

					if(isset($_SESSION['role']) && $_SESSION['role']=='admin'){
						echo "<a href='edit.php?key=$key'><input type='button' name='edit' value='Edit'></input></a>";
						echo "<a href='delete.php?key=$key'><input type='button' name='delete' value='Delete'></input></a>";

					}
					echo "</div>";
			}
		}
	}
	}

		

		
			

	
require_once('template.php');

?>