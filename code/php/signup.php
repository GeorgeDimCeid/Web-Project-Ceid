<!DOCTYPE html>

<html>

<head>
  
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Εγγραφή</title>

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="signup-css.css">

</head>

<body>
    
<nav className=" navbar-default "> 
    <div className="col-s-8">
    </div>
    <div class="row centered justify-content-sm-center">
      <div class="col-md-4 ">     
          <div class=" form ">
              <h3 >Εγγραφή Χρήστη</h3>
                <form>
                  <div class="form-group">
                    <!--<label for="email  ">Διεύθυνση Email</label> -->
                    <input type="text" class="form-control" id="name" placeholder="Όνομα" required>
                    <input type="text" class="form-control" id="lastname" placeholder="Επώνυμο" required>
                  </div>  
                  <div class="form-group ">
                    <!--<label for="email  ">Διεύθυνση Email</label> -->
                    <input type="email" class="form-control" id="email" placeholder="Διεύθυνση email" required>
                  </div>
                  <div class="form-group ">
                    <!--<label for="password">Κωδικός Χρήστη</label> -->
                    <input type="password" class="form-control" id="password" placeholder="Κωδικός" required>
                  </div>
                  <div class="form-group text-center" id="btnRow">
                    <button type="submit" class="btn btn-primary" id="submitButton">Εγγραφή</button>
                  </div>
                  <div class="form-group form-text" id="wrongInput">
          </div>
                  
          

        </div>
      </div>
   </div>
 </div>

</body>


</html>