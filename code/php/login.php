
<!DOCTYPE html>

<html>

<head>
  
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Είσοδος</title>

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="../css/login-css.css">
  <!-- <script language="javascript" type="text/javascript">  window.history.forward();   </script>   -->
</head>

<body>
<nav className=" navbar-default "> 
    <div className="col-s-8">
    </div>
    This is our App 
<div class="row centered justify-content-sm-center">
      <div class="col-md-4 ">     
          <div class=" form ">
              <h3 >Σύνδεση Χρήστη</h3>
                <form>
                  <div class="form-group ">
                    <label for="username  ">Username</label>
                    <input type="text" class="form-control" id="username" placeholder="username" required>
                  </div>
                  <div class="form-group ">
                    <label for="password">Κωδικός Χρήστη</label>
                    <input type="password" class="form-control" id="password" placeholder="password" required>
                  </div>
                  <div class="form-group text-center" id="btnRow">
                    <button type="submit" class="btn btn-primary" id="submitButton">Σύνδεση</button>
                    </div>
                    
                    </form>
                  <div class="form-group form-text" id="wrongInput" >
            Παρακαλούμε ελέγξτε τα στοιχεία που έχετε εισάγει και προσπαθήστε ξανά!
          </div>

                  
          <div id="signupLink">
          Δεν έχετε ακόμα λογαριασμό; Εγγραφείτε <a href="signup.php">εδώ</a>.
        </div>

        </div>
      </div>
</div>


<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.0/js/bootstrap.min.js"></script>
<script src="../js/login.js"></script>

</body>


</html>