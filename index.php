<!doctype html>
<html lang="en">
<head>
<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://getbootstrap.com/docs/4.0/examples/checkout/form-validation.css"/>

<title>Label Undangan PDF</title>

</head>
<body class="bg-light">
<div class="container">
</br></br>
<div class="row">
 <div class="col-md-8">
  <h4 class="mb-3 page-header">Aplikasi Label Undangan CSV to PDF</h4><hr/>

<form class="needs-validation" action="data/tabel.php" method="post" accept-charset="utf-8" enctype="multipart/form-data" novalidate>
  <div class="form-group">
    <label for="csv">Upload File CSV</label>
    <input type="file" class="form-control" name="fileToUpload" id="fileToUpload" value="" required />
     <div class="invalid-feedback" data-toggle="popover" title="Popover title" data-content="And here's some amazing content. It's very engaging. Right?">
      File CSV is required.
     </div>    
  </div>
  <input type="submit" name="submit" value="Upload" class="btn btn-primary" />
</form>

</div>
</div>
</div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script>
      // Example starter JavaScript for disabling form submissions if there are invalid fields
      (function() {
        'use strict';

        window.addEventListener('load', function() {
          // Fetch all the forms we want to apply custom Bootstrap validation styles to
          var forms = document.getElementsByClassName('needs-validation');

          // Loop over them and prevent submission
          var validation = Array.prototype.filter.call(forms, function(form) {
            form.addEventListener('submit', function(event) {
              if (form.checkValidity() === false) {
                event.preventDefault();
                event.stopPropagation();
              }
              form.classList.add('was-validated');
            }, false);
          });
        }, false);
      })();
    </script>



    <script>
$(document).ready(function(){
    $('[data-toggle="popover"]').popover();   
});
</script>

</body>
</html>