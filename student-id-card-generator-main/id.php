<?php
  if(isset($_POST['generate_id'])){
      $name = $_POST['std_name'];
      $phone = $_POST['std_phone'];
      $email = $_POST['std_email'];
      $course = $_POST['std_course'];
      $batch = $_POST['std_batch'];
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <title>Document</title>
</head>
<body>
  
<div class="container mt-5">
    <div class="row d-flex justify-content-center">
        <div class="col-md-7">
            <div class="card p-2 text-center">
                <div class="row">
                    <div class="col-md-7 border-right no-gutters">
                        <div class="py-3"><img src="https://i.imgur.com/hczKIze.jpg" width="100" class="rounded-circle">
                            <h4 class="mt-3 text-secondary"><?php if(isset($name)){echo $name;}?></h4>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="py-3">
                            <div> <span class="d-block head">Email:</span> <span class="bottom"><?php if(isset($name)){echo $email;}?></span> </div>
                            <div class="mt-4"> <span class="d-block head">Phone:</span> <span class="bottom"><?php if(isset($phone)){echo $phone;}?></span> </div>
                            <div class="mt-4"> <span class="d-block head">Course:</span> <span class="bottom"><?php if(isset($course)){echo $course;}?></span> </div>
                            <div class="mt-4"> <span class="d-block head">Batch NO:</span> <span class="bottom"><?php if(isset($batch)){echo $batch;}?></span> </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>

      