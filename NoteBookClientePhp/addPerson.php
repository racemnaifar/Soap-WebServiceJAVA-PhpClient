<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Add Person</title>
    <link rel="icon" type="image/png" href="dist/img/notes.png" sizes="16x16">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body >
 
    <section class="content" style="margin-top:20px">
      <div class="container-fluid">
        <div class="row" >
          <div class="col-md-12">
            <div class="card card-secondary" >
              <div class="card-header">
                <h3 class="card-title">ADD PERSON</h3>
              </div>
              <form role="form" method="post" action="add.php" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="form-group">
				  <div class="form-group">
                    <label for="exampleInputPassword1">Name</label>
                    <input type="text" class="form-control" name="namep"  placeholder="Enter Name" required>
                  </div>
                    <label for="exampleInputEmail1">Adress</label>
					<textarea class="form-control" rows="3"  name="adrp" placeholder="Enter Adress" required></textarea>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">BirthYear</label>
                    <input type="text" class="form-control" name="birthp" placeholder="Enter BirthYear" maxlength=4 required>
                  </div>  
                </div>

                <div class="card-footer">
                  <button type="submit" class="btn btn-lg btn-secondary">ADD PERSON</button>
                </div>
              </form>
            </div>
          </div>
         </div>
       </div>
    </div>
      
</div>

<script src="plugins/jquery/jquery.min.js"></script>
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="dist/js/adminlte.min.js"></script>
</body>
</html>
