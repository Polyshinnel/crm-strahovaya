<?php

require './controllers/stages/getStages.php';
require './controllers/deals/getDeals.php';

?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/styles/style.css">
    <title>CRM</title>
</head>
<body>
    <div class="elems-wrapper">
        <?php foreach($stages as $stage){ ?>
        <div class="elems-columns">
            <div class="elems-columns__header" style="border-color:<?php echo $stage['color']; ?>;">
                <p class="elems-columns__header-text"><?php echo $stage['name']; ?></p>
            </div>
            <div class="elems-columns__wrapper" data-item="<?php echo $stage['id']; ?>">
                <?php foreach($deals as $deal){ ?>
                    <?php if($deal['id_stage'] == $stage['id']){ ?>
                        <div class="card-elem" draggable="true" data-item="<?php echo $deal['id']; ?>">
                            <p class="card-elem__customer"><?php echo $deal['type']; ?></p>
                            <h4 class="card-elem__name"><?php echo $deal['name']; ?></h4>
                            <p class="card-elem__date"><?php echo $deal['date']; ?></p>
                        </div>
                    <?php } ?>
                <?php } ?>
            </div>
        </div>
        <?php } ?>
    </div>
    
    <script src="assets/js/main.js"></script>
</body>
</html>