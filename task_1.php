<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@300;700&display=swap');
        body{
            font-family: 'Roboto', sans-serif;
        }
        h1{
            padding: 20px 0 20px;
        }
    </style>
</head>
<body>

<div class="container" id="task1">
    <div class="row">
        <h1>Задание 1. Таблица истинности PHP</h1>
    </div>
    <div class="row">
        <div class="col-12">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">A</th>
                        <th scope="col">B</th>
                        <th scope="col">!A</th>
                        <th scope="col">A || B</th>
                        <th scope="col">A && B</th>
                        <th scope="col">A xor B</th>
                    </tr>
                </thead>
                <tbody>
                    
                    <?$a = 0; $b = 0;?>
                    <tr>
                        <td><?echo $a?></td>
                        <td><?echo $b?></td>
                        <td><?var_dump(!$a)?></td>
                        <td><?var_dump($a || $b)?></td>
                        <td><?var_dump($a && $b)?></td>
                        <td><?var_dump($a xor $b)?></td>
                    </tr>

                    <?$a = 0; $b = 1;?>
                    <tr>
                        <td><?echo $a?></td>
                        <td><?echo $b?></td>
                        <td><?var_dump(!$a)?></td>
                        <td><?var_dump($a || $b)?></td>
                        <td><?var_dump($a && $b)?></td>
                        <td><?var_dump($a xor $b)?></td>
                    </tr>

                    <?$a = 1; $b = 0;?>
                    <tr>
                        <td><?echo $a?></td>
                        <td><?echo $b?></td>
                        <td><?var_dump(!$a)?></td>
                        <td><?var_dump($a || $b)?></td>
                        <td><?var_dump($a && $b)?></td>
                        <td><?var_dump($a xor $b)?></td>
                    </tr>

                    <?$a = 1; $b = 1;?>
                    <tr>
                        <td><?echo $a?></td>
                        <td><?echo $b?></td>
                        <td><?var_dump(!$a)?></td>
                        <td><?var_dump($a || $b)?></td>
                        <td><?var_dump($a && $b)?></td>
                        <td><?var_dump($a xor $b)?></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>
</html>