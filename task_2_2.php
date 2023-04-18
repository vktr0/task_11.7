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
        <h1>Задание 2. Таблица сравнения (жесткое сравнение)</h1>
    </div>
    <div class="row">
        <div class="col-12">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col"></th>
                        <th scope="col">true</th>
                        <th scope="col">false</th>
                        <th scope="col">1</th>
                        <th scope="col">0</th>
                        <th scope="col">-1</th>
                        <th scope="col">"1"</th>
                        <th scope="col">null</th>
                        <th scope="col">"php"</th>
                    </tr>
                </thead>
                <tbody>
                    
                <?$a = true;?>
                    <tr>
                        <th scope="row"><?var_dump($a)?></th>
                        <td><?var_dump($a===true)?></td>
                        <td><?var_dump($a===false)?></td>
                        <td><?var_dump($a===1)?></td>
                        <td><?var_dump($a===0)?></td>
                        <td><?var_dump($a===-1)?></td>
                        <td><?var_dump($a==="1")?></td>
                        <td><?var_dump($a===null)?></td>
                        <td><?var_dump($a==="php")?></td>
                    </tr>

                    <?$a = false;?>
                    <tr>
                        <th scope="row"><?var_dump($a)?></th>
                        <td><?var_dump($a===true)?></td>
                        <td><?var_dump($a===false)?></td>
                        <td><?var_dump($a===1)?></td>
                        <td><?var_dump($a===0)?></td>
                        <td><?var_dump($a===-1)?></td>
                        <td><?var_dump($a==="1")?></td>
                        <td><?var_dump($a===null)?></td>
                        <td><?var_dump($a==="php")?></td>
                    </tr>

                    <?$a = 1;?>
                    <tr>
                        <th scope="row"><?var_dump($a)?></th>
                        <td><?var_dump($a===true)?></td>
                        <td><?var_dump($a===false)?></td>
                        <td><?var_dump($a===1)?></td>
                        <td><?var_dump($a===0)?></td>
                        <td><?var_dump($a===-1)?></td>
                        <td><?var_dump($a==="1")?></td>
                        <td><?var_dump($a===null)?></td>
                        <td><?var_dump($a==="php")?></td>
                    </tr>

                    <?$a = 0;?>
                    <tr>
                        <th scope="row"><?var_dump($a)?></th>
                        <td><?var_dump($a===true)?></td>
                        <td><?var_dump($a===false)?></td>
                        <td><?var_dump($a===1)?></td>
                        <td><?var_dump($a===0)?></td>
                        <td><?var_dump($a===-1)?></td>
                        <td><?var_dump($a==="1")?></td>
                        <td><?var_dump($a===null)?></td>
                        <td><?var_dump($a==="php")?></td>
                    </tr>

                    <?$a = -1;?>
                    <tr>
                        <th scope="row"><?var_dump($a)?></th>
                        <td><?var_dump($a===true)?></td>
                        <td><?var_dump($a===false)?></td>
                        <td><?var_dump($a===1)?></td>
                        <td><?var_dump($a===0)?></td>
                        <td><?var_dump($a===-1)?></td>
                        <td><?var_dump($a==="1")?></td>
                        <td><?var_dump($a===null)?></td>
                        <td><?var_dump($a==="php")?></td>
                    </tr>

                    <?$a = "1";?>
                    <tr>
                        <th scope="row"><?var_dump($a)?></th>
                        <td><?var_dump($a===true)?></td>
                        <td><?var_dump($a===false)?></td>
                        <td><?var_dump($a===1)?></td>
                        <td><?var_dump($a===0)?></td>
                        <td><?var_dump($a===-1)?></td>
                        <td><?var_dump($a==="1")?></td>
                        <td><?var_dump($a===null)?></td>
                        <td><?var_dump($a==="php")?></td>
                    </tr>

                    <?$a = null;?>
                    <tr>
                        <th scope="row"><?var_dump($a)?></th>
                        <td><?var_dump($a===true)?></td>
                        <td><?var_dump($a===false)?></td>
                        <td><?var_dump($a===1)?></td>
                        <td><?var_dump($a===0)?></td>
                        <td><?var_dump($a===-1)?></td>
                        <td><?var_dump($a==="1")?></td>
                        <td><?var_dump($a===null)?></td>
                        <td><?var_dump($a==="php")?></td>
                    </tr>

                    <?$a = "php";?>
                    <tr>
                        <th scope="row"><?var_dump($a)?></th>
                        <td><?var_dump($a===true)?></td>
                        <td><?var_dump($a===false)?></td>
                        <td><?var_dump($a===1)?></td>
                        <td><?var_dump($a===0)?></td>
                        <td><?var_dump($a===-1)?></td>
                        <td><?var_dump($a==="1")?></td>
                        <td><?var_dump($a===null)?></td>
                        <td><?var_dump($a==="php")?></td>
                    </tr>

                </tbody>
            </table>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>
</html>