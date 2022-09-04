<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="card">
            <form action="id.php" method="post">
                <br>
                <h5>Create Your Virtual ID Card</h5>
                <label for="">Name</label>
                <br>
                <input name="std_name" type="text">
                <br>
                <label for="">Phone</label>
                <br>
                <input name="std_phone" type="text">
                <br>
                <label name="std_email" for="">Email</label>
                <br>
                <input name="std_email" type="text">
                <br>
                <label>Course</label>
                <br>
                <input name="std_course" type="text">
                <br>
                <label>Batch No</label>
                <br>
                <input name="std_batch" type="text">
                <br>
                <input name="generate_id" type="submit" class="button" value="Generate ID">
                <br>
            </form>
        </div>
    </div>
</body>
</html>