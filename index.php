<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="./main.css">
    <title>Racing</title>
</head>
<body>
    <div class="container">
        <div class="rov">
            <h1>Table of racing</h1>
        </div>            
    </div>
    <div class="container">
        <div class="row">
                <table id='table_cars' class="table table-hover">
                        <thead class="thead-dark">
                          <tr>
                            <th scope="col">Место</th>
                            <th scope="col">Имя</th>
                            <th scope="col">Город</th>
                            <th scope="col">Автомобиль</th>
                            <th class="sort" scope="col">1й-заезд <img class="sort_click" src="./img/icons8_Up_Down_Arrow__26px.png" alt="сортировка"></th>
                            <th class="sort" scope="col">2й-заезд <img class="sort_click" src="./img/icons8_Up_Down_Arrow__26px.png" alt="сортировка"></th>
                            <th class="sort" scope="col">3й-заезд <img class="sort_click" src="./img/icons8_Up_Down_Arrow__26px.png" alt="сортировка"></th>
                            <th class="sort" scope="col">4й-заезд <img class="sort_click" src="./img/icons8_Up_Down_Arrow__26px.png" alt="сортировка"></th>
                            <th class="sort" scope="col">Всего <img class="sort_click" src="./img/icons8_Up_Down_Arrow__26px.png" alt="сортировка"></th>
                          </tr>
                        </thead>
                        <tbody>
                           <?php 
                           include './date_cars.php';
                           ?>                        
                        </tbody>
                      </table>
        </div>
    </div>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <script src="./script.js"></script>
</body>
</html>