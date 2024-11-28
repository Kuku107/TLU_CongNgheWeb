<!DOCTYPE html5>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Hoa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>
    <?php
        require_once("dao/HoaDAO.php");
        require_once ("model/Hoa.php");
        $hoaDAO = new HoaDAO();
        $flowers = $hoaDAO -> getAllHoas();
    ?>
    <div class="text-center">
        <a href="admin.php"><button class="btn btn-primary btn-lg">Admin</button></a>
    </div>

    <div class="container">
        <?php foreach($flowers as $index => $flower) { ?>
<!--        title-->
            <div style="text-align: justify;"><br>
                <span style="font-weight: bold;"><?=$index + 1?>.<?= $flower["ten"]?>&nbsp;</span>
            </div>

<!--        description-->
            <div style="text-align: justify;"><br>
                <?= $flower["moTa"]?>
            </div>

<!--         img-->
            <div style="text-align: center;">
                <div>&nbsp;</div>
                <div style="text-align:center;">
                    <img alt="" src="<?= $flower["anh"]?>" style="max-width:100%;" loading="lazy">
                </div>
            </div>
        <?php } ?>
    </div>
</body>
</html>
