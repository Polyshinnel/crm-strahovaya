<?php
    include './controllers/deals/getDealsDetails.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/styles/style.css">
    <title>Document</title>
</head>
<body>
    <div class="deal-wrapper">
        <div class="deal-side-block">
            <div class="deal-side-block-header">
                <div class="deal-side-block-header-title">
                    <a href="/"><img src="assets/img/arrow.svg" alt=""></a>
                    <p>Экпертиза номер: <span><?php echo $dealItem['name']; ?></span></p>
                </div>

                <div class="current-stage-deal">
                    <p>Принял в работу</p>
                </div>
            </div>
            
            <div class="inputs-pole-wrapper">
                <div class="input-pole">
                    <label for="pole-1">Номер заявки</label>
                    <input type="text" id="pole-1" value="<?php echo $dealItem['name']; ?>">
                </div>
                <div class="input-pole">
                    <label for="pole-2">Дата создания</label>
                    <input type="text" id="pole-2" value="<?php echo $dealItem['date']; ?>">
                </div>
                <div class="input-pole">
                    <label for="pole-3">Тип экспертизы</label>
                    <input type="text" id="pole-3" value="<?php echo $dealItem['type']; ?>">
                </div>
                <div class="input-pole">
                    <label for="pole-4">ФИО заявителя</label>
                    <input type="text" id="pole-4" value="<?php echo $dealItem['name_applicant']; ?>">
                </div>
                <div class="input-pole">
                    <label for="pole-5">Финансовая организация</label>
                    <input type="text" id="pole-5" value="<?php echo $dealItem['name_organization']; ?>">
                </div>
                <div class="input-pole">
                    <label for="pole-6">Ответственный</label>
                    <input type="text" id="pole-6" value="Нестеров Андрей">
                </div>
            </div>
            <div class="btns-wrapper-deal-sidebar">
                <button class="btns-wrapper-deal-sidebar-save">Сохранить</button>
                <a href="/"><button class="btns-wrapper-deal-sidebar-close">Закрыть</button></a>
            </div>
        </div>
        <!--deal-side-block-->
        <div class="deal-comments-block">
            <div class="deal-comments__wrapper">
                <?php foreach($dealsDetails as $dealsDetail){ ?>
                    <?php $datastring = normalizeData($dealsDetail['date_add']); ?>
                    <?php if($dealsDetail['type'] == '1'){ ?>
                        <div class="deal-comments__comment">
                            <div class="deal-comments__comment-type">
                                <div class="deal-comments__comment-type-round">
                                    <img src="assets/img/chat.svg" alt="">
                                </div>
                            </div>
                            <div class="deal-comments__comment-text">
                                <div class="deal-comments__comment-text-data-name">
                                    <p class="deal-comments__comment-text-data"><?php echo("$datastring[0] $datastring[1]") ?></p>
                                    <p class="deal-comments__comment-text-name"><?php echo($dealsDb->getCommentAuthor($dealsDetail['author_id'])); ?></p>
                                </div>
                                <div class="deal-comments__comment-text-msg">
                                    <p><?php echo $dealsDetail['text']; ?></p>
                                </div>
                            </div>
                        </div>
                    <?php } ?>

                    <?php if($dealsDetail['type'] == '2'){ ?>
                        <div class="deal-comments__work-proggress">
                            <p class="deal-comments__work-proggress-when"><?php echo("$datastring[0] . $datastring[1]") ?></p>
                            <p class="deal-comments__work-proggress-who"><?php echo($dealsDb->getCommentAuthor($dealsDetail['author_id'])); ?></p>
                            <p class="deal-comments__work-proggress-what"><?php echo $dealsDetail['deals_what']; ?></p>
                            <p class="deal-comments__work-proggress-type"><?php echo $dealsDetail['text']; ?></p>
                        </div>
                    <?php } ?>

                <?php } ?>
            </div>
            <textarea class="deal-comments__input"></textarea>
            <button class="deal-comments__input-send">Отправить</button>
        </div>
    </div>
</body>
</html>