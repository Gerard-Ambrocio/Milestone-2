function display_content(){
  // categories();
    echo "
<div class='container'>
  <h2>Your Talks</h2>
    <form class='form-horizontal' method='POST' action='#.php'>
    <!-- Trigger the modal with a button -->
    <button type='button' class='btn btn-info btn-lg' data-toggle='modal' data-target='#myModal'>Add Talk</button>
  </form>
  <div id='myModal' class='modal fade' role='dialog'>
  <div class='modal-dialog'>      

  <!-- Modal content-->
    <div class='modal-content'>
      <div class='modal-header'>
        <button type='button' class='close' data-dismiss='modal'>&times;</button>
        <h4 class='Add Talk'>Modal Header</h4>
      </div>
      <div class='modal-body'>";
        display_content1();


        






     echo "</div>
      <div class='modal-footer'>
        <button type='button' class='btn btn-default' data-dismiss='modal'>Close</button>
      </div>
    </div>
  </div>