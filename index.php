<?php 
require_once("./signupConfig.php");
$data = new signupConfig();
$all = $data->fetchAll();
?>


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
    <style>
        table{
          display: flex;
          align-items: center;
          justify-content: center; 
          margin-top: 20px; 
        }
        table tr th{
           padding: 1rem 3rem;
        }
    </style>
</head>

<body>
<center>
    <h2>List of all records</h2>
    <a class="btn btn-success" href="signup.php">Add new</a> <br>
</center>
<table>
    <tr>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Address</th>
        <th>action</th>
    </tr>

    <tr>
        <td>Peter</td>
        <td>Gakuba</td>
        <td>New york</td>
        <td><button class="btn btn-danger">DELETE</button>
            <button class="btn btn-warning">UPDATE</button>
        </td>
    </tr>
</table>
</body>
</html>