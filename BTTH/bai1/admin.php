<!DOCTYPE html5>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <?php
        require_once("dao/HoaDAO.php");
        require_once ("utils/Database.php");
        require_once ("model/Hoa.php");

        $db = new Database();
        $hoaDAO = new HoaDAO($db);
        $flowers = $hoaDAO->getAllHoas();
    ?>

<!-- User Button -->
<div class="text-center my-4">
    <a href="index.php">
        <button class="btn btn-primary btn-lg">User</button>
    </a>
</div>

<div class="container">
    <a href="./controller/HoaController.php?action=add">
        <button class="btn-lg btn btn-success mb-3">Thêm hoa</button>
    </a>
    <!-- Table -->
    <table class="table table-bordered table-striped table-hover">
        <thead class="table-dark">
        <tr>
            <th class="text-center">Tên</th>
            <th class="text-center">Mô tả</th>
            <th class="text-center">Ảnh</th>
            <th class="text-center">Action</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach($flowers as $index => $flower) { ?>
            <tr>
                <td class="fw-bold text-center align-middle"><?= $flower["ten"] ?></td>
                <td class="align-middle"><?= $flower["moTa"] ?></td>
                <td class="text-center">
                    <img class="img-fluid" src="<?= $flower["anh"] ?>" alt="Flower Image" style="max-width: 100px; height: auto;">
                </td>
                <td class="d-flex justify-content-center align-items-center h-100">
                    <!-- Edit Button -->
                    <a href="./controller/HoaController.php?action=edit&id=<?=urlencode($flower["id"])?>" class="btn btn-warning btn-sm me-2" title="Edit">
                        <svg xmlns="http://www.w3.org/2000/svg" height="16px" viewBox="0 0 24 24" width="16px" fill="currentColor">
                            <path d="M19.8 3.2a3 3 0 0 0-4.2 0L7 12l1 5 5-1 8.8-8.8a3 3 0 0 0 0-4.2zM13 12l2-2 2 2-2 2-2-2zM12 13l-2 2-2-2 2-2 2 2zM19 18H5a1 1 0 0 1-1-1v-5.2l4.8 4.8a3 3 0 0 0 4.2 0l4.8-4.8V17a1 1 0 0 1-1 1z"/>
                        </svg>
                    </a>
                    <!-- Delete Button -->
                    <a href="./controller/HoaController.php?action=delete&id=<?=urlencode($flower["id"])?>" class="btn btn-danger btn-sm" title="Delete">
                        <svg xmlns="http://www.w3.org/2000/svg" height="16px" viewBox="0 0 24 24" width="16px" fill="currentColor">
                            <path d="M3 6l3 14h12L21 6H3zm2.5 12l.97-6h11.06l.97 6H5.5zm7-10h2V4h-2v4z"/>
                        </svg>
                    </a>
                </td>
            </tr>
        <?php } ?>
        </tbody>
    </table>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-cuYoJ4z8Tzvv7yIN68aTxBMO9Y2Ul7cROrXl3yq9gP9vIuZHkg6b7T9e4cFOqZBw" crossorigin="anonymous"></script>
</body>
</html>
