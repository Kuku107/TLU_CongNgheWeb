<!DOCTYPE html5>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Add or Edit</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    </head>
    <body>
    <?php
        $action = $_GET["action"] ?? "add";
        $id = $_GET["id"] ?? "";
        $ten = $_GET["ten"] ?? "";
        $mota = $_GET["mota"] ?? "";
        $anh = $_GET["anh"] ?? "";
    ?>

    <form class="form" action="../controller/HoaController.php?action=<?=$action ?>" method="post" enctype="multipart/form-data">
        <input type="text" class="d-none" id="id" name="id" value="<?=$id?>">
        <div class="mb-3">
            <label for="ten" class="form-label">Tên hoa</label>
            <input type="text" class="form-control" id="ten" name="ten" value="<?=$ten?>">
        </div>
        <div class="form-floating">
            <textarea class="form-control h-auto" rows="12" placeholder="Write something..." id="floatingTextarea" name="moTa"><?= htmlspecialchars(trim($mota))?></textarea>
            <label for="floatingTextarea">Mô tả</label>
        </div>
        <div class="mb-3">
            <label class="form-label" for="anh">Ảnh: </label>
            <div class="mb-3">
                <img src="../<?=$anh?>" id="anhEl" alt="Image" style="max-width: 100px; height: auto;">
            </div>
            <input class="form-control" type="file" name="anh" id="anh">
        </div>
        <button type="submit" class="btn btn-primary"><?=$action ?></button>
    </form>

    <script>
        let imgElement = document.getElementById("anhEl");
        let imgInput = document.getElementById("anh");

        imgInput.addEventListener("change", (event) => {
            let file = event.target.files[0];
            if (file) {
                let reader = new FileReader();
                reader.onload = function(e) {
                    imgElement.src = e.target.result;
                    imgElement.style.display = "block";
                };
                reader.readAsDataURL(file);
            }
        });
    </script>
    </body>
</html>
