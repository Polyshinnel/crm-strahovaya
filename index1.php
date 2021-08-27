<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>CRM</title>
</head>
<body>
    <div class="elems-wrapper">
        <div class="elems-columns">
            <div class="card-elem" draggable="true" data-item="id=1">
                <p class="card-elem__customer">Кто запросил экспертизу</p>
                <h4 class="card-elem__name">Название экспертизы</h4>
                <p class="card-elem__date">Дата экспертизы</p>
            </div>

            <div class="card-elem" draggable="true" data-item="id=2">
                <p class="card-elem__customer">Кто запросил экспертизу</p>
                <h4 class="card-elem__name">Название экспертизы 1</h4>
                <p class="card-elem__date">Дата экспертизы</p>
            </div>
        </div>
        <div class="elems-columns"></div>
        <div class="elems-columns"></div>
        <div class="elems-columns"></div>
    </div>
    <script src="assets/js/main.js"></script>
</body>
</html>