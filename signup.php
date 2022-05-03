<!DOCTYPE html>
<html lang="en">
<head>
        <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
        <h3>FILL out the information</h3>

        <div>
            <form action="./signupProccess.php" method="post">
                <label for="fname"> First Name</label>
                <input type="text" name="firstname" id="fname" placeholder="Your name..">
                <br>

                <label for="lname"> Last Name</label>
                <input type="text" name="lastname" id="lname" placeholder="Your last name..">
<br>
                <label for="Address"> Address</label>
                <input type="text" name="address" id="address" placeholder="Your address..">
                <br>
                <input type="submit" id="" value="save" name="save">
            </form>
        </div>
    </center>
</body>
</html>