<!DOCTYPE html>

<html>

<head>
  
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Εγγραφή</title>

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="../css/signup-css.css">
  <!-- <script language="javascript" type="text/javascript">  window.history.forward();   </script> -->
</head>

<body>
    
<nav className=" navbar-default "> 
    <div className="col-s-8">
    This is our App 

    </div>
    <div class="row centered justify-content-sm-center">
      <div class="col-md-4 ">     
          <div class=" form ">
              <h3 >Εγγραφή Χρήστη</h3>
                <form>

                  <div class="form-group">
                    <!--<label for="email  ">Διεύθυνση Email</label> -->
                    <input type="text" class="form-control" id="name" placeholder="Όνομα" required>
                    <span class="error_form" id="fname_error_message"></span>

                    <input type="text" class="form-control" id="lastname" placeholder="Επώνυμο" required>
                    <span class="error_form" id="sname_error_message"></span>

                    <input type="email" class="form-control" id="email" placeholder="Διεύθυνση email" required>
                    <span class="error_form" id="email_error_message"></span>

                    <input type="text" class="form-control" id="username" placeholder="username" required>
                    <span class="error_form" id="username_error_message"></span>

                    <!--<label for="password">Κωδικός Χρήστη</label> -->
                    <input type="password" class="form-control" id="password" placeholder="Κωδικός" required>
                    <span class="error_form" id="password_error_message"></span>
                    <br>
                    <span class="error_form" id="password_error_message1"> </span>
                    <br>
                    <span class="error_form" id="password_error_message2"></span>

                  </div>
                  <div class="form-group text-center" id="btnRow">
                    <button type="submit" class="btn btn-primary" id="submitButton">Εγγραφή</button>
                  </div>
                  <div class="form-group form-text error_form " id="password_error_message3">
            Ουπς! Τo email που δώσατε αντιστοιχεί σε ήδη υπάρχοντα λογαριασμό. Μήπως πρέπει να συνδεθείτε; Αν είστε
            σίγουροι ότι δεν έχετε ήδη εγγραφεί, παρακαλούμε προσπαθήστε πάλι.
          </div>
          <div class="form-group form-text error_form " id="password_error_message5">
            Ουπς! Τo username που δώσατε αντιστοιχεί σε ήδη υπάρχοντα λογαριασμό. , παρακαλούμε προσπαθήστε πάλι με διαφορετικο username.
          </div>
          <div class="form-group form-text error_form " id="password_error_message4">
            Ουπς! Κατι πήγε λάθος Προσπαθήστε αργότερα.
          </div>
                  </form>
                  <div id="loginLink">
          Έχετε ήδη κάνει εγγραφή; Συνδεθείτε <a href="login.php">εδώ</a>.
        </div>
                  
                  
          

        </div>
      </div>
   </div>
 </div>
 <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.0/js/bootstrap.min.js"></script>
<script src="../js/signup.js"></script>
</body>


</html>