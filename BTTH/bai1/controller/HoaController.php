<?php
    require_once (__DIR__ . "/../dao/HoaDao.php");
    require_once (__DIR__ . "/../model/Hoa.php");

    $dao = new HoaDao();
    if ($_SERVER["REQUEST_METHOD"] === "GET") {
        $id = $_GET["id"] ?? "";
        $action = $_GET["action"] ?? "";

        if ($action === "add") {
            header ("Location: ../view/HoaAddEditView.php");
            exit();
        }
        elseif ($action === "edit") {
            $hoa = $dao->getHoaById($id);
            $id = $hoa["id"];
            $ten = $hoa["ten"];
            $mota = $hoa["moTa"];
            $anh = $hoa["anh"];
            header ("Location: ../view/HoaAddEditView.php?action=edit&id=$id&ten=".urlencode($ten).
            "&mota=".urlencode($mota)."&anh=".urlencode($anh));
            exit();
        }
        else {
            $dao->deleteHoaById($id);
            header("Location: ../admin.php");
            exit();
        }
    }
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $id = $_POST["id"] ?? strval(round(microtime(true) * 1000));
        $ten = $_POST["ten"] ?? "";
        $mota = $_POST["moTa"] ?? "";
        $anh = $_POST["anh"] ?? "";
        if (isset($_FILES["anh"]) && $_FILES["anh"]["error"] == 0) {
            $target_dir = __DIR__ . "\\..\\images\\";
            $target_file = $target_dir . basename($_FILES["anh"]["name"]);
            move_uploaded_file($_FILES["anh"]["tmp_name"], $target_file);
            $anh = "images/" . basename($_FILES["anh"]["name"]);
        }
        if ($_GET["action"] == "add") {
            $hoa = new Hoa($id, $ten, $mota, $anh);
            $dao -> addHoa($hoa);
            header("Location: ../admin.php");
            exit();
        } else {
            $hoa = new Hoa($id, $ten, $mota, $anh);
            $dao -> updateHoa($hoa);
//            echo $id . " " . $ten . " " . $mota . " " . $anh;
            header("Location: ../admin.php");
            exit();
        }
    }
