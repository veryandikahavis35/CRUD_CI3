<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Edit siswa</title>
</head>
<body>
    <h1 class="text-center">Form Edit Siswa</h1>
    <div class="container">
        <div class="row">
            <div class="col-6 mx-auto">
    <a href="<?php echo base_url('index.php/siswa') ?>"><button class="btn btn-outline-warning mt-3">Data Siswa</button></a>
    <form action="<?php echo base_url('index.php/siswa/action_edit/'.$data['id'])?>" method="post">
        <label for=""><h6>Username</h6></label><br>
        <input type="text" name="Username" value="<?php echo $data['username'] ?>" class="rounded-pill form-control border-info" required><br>
        <label for=""><h6>Email</h6></label><br>
        <input type="text" name="Account" value="<?php echo $data['account'] ?>" class="rounded-pill form-control border-info" required><br>
        <label for=""><h6>Password</h6></label><br>
        <input type="text" name="Password" value="<?php echo $data['password'] ?>" class="rounded-pill form-control border-info" required><br>
        <button  type="submit" class="btn btn-outline-warning mt-3">Save</button>
    </form>
    </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>