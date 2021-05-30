<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rider's Cafe: Register</title>
</head>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <img src="photos\logo2.png" height="50" alt="">
    <a class="navbar-brand" href="index.php" style="color: rgb(166, 255, 0);">Rider's Cafe</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="company.php">Bikes Available</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="booking.php">Book Now</a>
        </li>
      </ul>
      
      <a class="nav-link" href="signup.php" style="color: rgb(8, 241, 8);">Register</a>
      <a class="nav-link" href="signin.php" style="color: rgb(38, 247, 38);">Login</a>
    </div>
  </div>
</nav>

<body style="background-color: rgb(250, 246, 246);">
    <h1><center>Register</h1></center>
    <div class="container">
        <div class="row">
            <div class="column col col-12 col-sm 4 col-md 4 col-lg 6 col-xl 12 col-xxl 12"></div>
        </div>
    </div>
    <table class="table table-borderless">
        <tr>
            <td>NAME</td>
            <td><input type="text" class="form-control"></td>
        </tr>
        <tr>
            <td>AGE</td>
            <td><input type="text" class="form-control"></td>
        </tr>
        <tr>
            <td>DOB</td>
            <td><input type="text" class="form-control"></td>
        </tr>
        <tr>
            <td>PHONE NO</td>
            <td><input type="text" class="form-control">
            </td>
        </tr>
        <tr>
            <td>EMAIL</td>
            <td><input type="text" class="form-control"></td>
        </tr>
        <tr>
            <td>PASSWORD</td>
            <td><input type="password" class="form-control"></td>
        </tr>
        <tr>
            <td> CONFIRM PASSWORD</td>
            <td><input type="password" class="form-control"></td>
        </tr>
        <tr>
        <td></td>
        <td><button class="btn btn-success">SUBMIT</button></td>
        </tr>
    </table>
</body>
</html>