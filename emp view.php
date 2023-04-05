<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<div class="modal" tabindex="-1" role="dialog" id="empmodal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Add Employee</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div class="registration-form">
        <form action="operation.php" method="POST">
            <div class="form-icon">
                <span>Employee Form</span>
            </div>
            <div class="form-group">
                <input type="text" class="form-control item" id="id" name="id" placeholder="id">
            </div>
            <div class="form-group">
                <input type="text" class="form-control item" id="name" placeholder="fullName" name="name" >
            </div>
            <div class="form-group">
                <input type="text" class="form-control item" id="gender" placeholder="Gender" name="gender" >
            </div>
            <div class="form-group">
                <input type="text" class="form-control item" id="email" placeholder="Email" name="email" >
            </div>
            <div class="form-group">
                <input type="text" class="form-control item" id="phone-number" placeholder="Phone Number" name="tell" >
            </div>
            <div class="form-group">
                <input type="text" class="form-control item" id="Address" placeholder="Address" name="address" >
            </div>
            <!-- <div class="form-group">
                <input type="text" class="form-control item" id="Cv" placeholder="CV">
            </div> -->
            
           
        
        
    </div>
      </div>
      <div class="modal-footer">
        <button name="insert" type="Submit" style="border-radius: 20px;
    padding: 10px 10px;
    font-size: 18px;
    font-weight: bold;
    background-color: #DD2F6E;
    border: none;
    color: white;
    margin-top: 20px;">Save changes</button>
        <button type="" style="border-radius: 20px;
    padding: 10px 10px;
    font-size: 18px;
    font-weight: bold;
    background-color: #DD2F6E;
    border: none;
    color: white;
    margin-top: 20px;" data-dismiss="modal">Close</button>
      </div>
      </form>
    </div>
  </div>
</div>
<script src="addnew.js"></script>
</body>
</html>