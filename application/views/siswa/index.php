<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container">
    <h1 class="text-center text-warning">Data Siswa</h1>
    <form action="" method="get">
        <input type="text" name="nama" placeholder="Masukkan Nama" class="border border-info form-control mt-3" ><button type="submit" class="btn btn-outline-warning mt-3">Cari</button>
    </form>
    <a href="<?php echo base_url('index.php/siswa/tambah/') ?>"><button class="btn btn-outline-warning mt-3 " >Tambah Siswa</button></a>
    <?php if(!empty($data)):?>
        <table class="table table-bordered border-primary mt-3" border="1">
            <thead>
                <th>No</th>
                <th>User Name</th>
                <th>Email</th>
                <th>
                    Action
                </th>
            </thead>
            <tbody>
                <?php $i = 1;?>
                <?php foreach($data AS $key => $value):?>
                <tr>
                    <td><?php echo $i++;?></td>
                    <td><?php echo $value['username']?></td>
                    <td><?php echo $value['account']?></td>
                    
                    <td><a href="<?php echo base_url('index.php/siswa/edit/'.$value['id']) ?>">Edit</a>  |
                    <a href="<?php echo base_url('index.php/siswa/delete/'.$value['id'])?>">Delete</a></td>
                </tr>
                <?php endforeach ?>
            </tbody>
        </table>
        <?php endif?>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html> 