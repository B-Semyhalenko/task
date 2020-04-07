<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title></title>
</head>
<body>
<style type="text/css">
    .main_information {
        border: none; /* Убираем рамку */
        background: transparent; /* Прозрачный фон */
        margin: 3px; /* Отступы от линии */
        width: 318px; /* Ширина поля */
        padding: 5px 0 5px 5px; /* Поля в тексте */
        height: 160px; /* Высота */
    }
</style>

<form action = main_information.php method=get>
    <input type='hidden' name='id' value='<?php echo $_GET['id'];?>' />
    <div class="main_information"><textarea cols="40" rows="10" name="main_information" placeholder="Введите подробное описание товара"></textarea></div>
    <input type="submit" name="save" value="Сохранить">
    <!-- <input type="text" name="name_product" placeholder="Введите подробное описание товара" class="user"><br><br> -->
</form>
<br>
<form action="image.php" method="post" enctype="multipart/form-data">
    <input type='hidden' name='id' value='<?php echo $_GET['id'];?>' />
    <input type="file" name="image">
<!--    multiple accept='image/*,image/jpeg'-->
    <input type="submit" name="save2" value="Сохранить картинку">
</form>
</body>
</html>
