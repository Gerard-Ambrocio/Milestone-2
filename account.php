<?php

function display_content(){
	// categories();
		echo "
<div class='container'>
  <h2>Your Talks</h2>
    <form class='form-horizontal' method='POST' action='#.php'>
		<!-- Trigger the modal with a button -->
		<button type='button' class='btn btn-info btn-lg' data-toggle='modal' data-target='#myModal'>Open Modal</button>
	</form>
	<div id='myModal' class='modal fade' role='dialog'>
  <div class='modal-dialog'>      

  <!-- Modal content-->
    <div class='modal-content'>
      <div class='modal-header'>
        <button type='button' class='close' data-dismiss='modal'>&times;</button>
        <h4 class='modal-title'>Modal Header</h4>
      </div>
      <div class='modal-body'>
        <p>Some text in the modal.</p>
      </div>
      <div class='modal-footer'>
        <button type='button' class='btn btn-default' data-dismiss='modal'>Close</button>
      </div>
    </div>

  </div>
</div>       
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
    <tbody>
      <tr>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
    </tbody>
  </table>
</div>
<div class='container'>
  <h2>Your Bookings</h2>             
  <table class='table'>
    <thead>
      <tr>
        <th>Speaker</th>
        <th>Topic</th>
        <th>Category</th>
        <th>Price</th>
        <th>Date</th>
        <th>Location</th>
        <th>Status</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
    </tbody>
  </table>
</div>



		 ";
	}






require_once('template.php');

?>