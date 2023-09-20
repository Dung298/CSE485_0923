
<?php
    $arrs = ['đỏ', 'xanh', 'cam', 'trắng'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h5>
    echo Màu <i style="color: red;"><?=$arrs[0]?></i> là màu yêu thích của Anh, <i style="color: wheat;"><?=$arrs[3]?></i> là màu yêu thích của Sơn, <i style="color: orange;"><?=$arrs[2]?></i> là màu yêu
    thích của Thắng, còn màu yêu thích của tôi là màu <i style="color: wheat;"><?=$arrs[3]?></i>"
    </h5>
</body>
</html>