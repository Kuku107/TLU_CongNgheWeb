<!DOCTYPE html5>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Quizz</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <?php
    // Đường dẫn tới file CSV
    $filename = "KTPM3_Danh_sach_diem_danh.csv";

    // Mảng chứa dữ liệu sinh viên
    $sinhvien = [];

    // Mở file CSV
    if (($handle = fopen($filename, "r")) !== FALSE) {
        // Đọc dòng đầu tiên (tiêu đề)
        $headers = fgetcsv($handle, 1000, ",");
        // Đọc từng dòng dữ liệu
        while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
            $sinhvien[] = array_map("trim",array_combine($headers, $data));
        }

        fclose($handle);
    }

    // In mảng sinh viên (chỉ để kiểm tra)
//    print_r($sinhvien);
    ?>

    <div class="container mt-5">
        <h1 class="text-center">Danh sách sinh viên</h1>
        <table class="table table-bordered table-striped">
            <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Họ tên</th>
                <th>Email</th>
                <th>Lớp học phần</th>
                <th>Lớp chuyên ngành</th>
            </tr>
            </thead>
            <tbody>
            <?php
            // Hiển thị từng sinh viên
            foreach ($sinhvien as $sv) {
                echo "<tr>";
                echo "<td>{$sv["ID"]}</td>";
                echo "<td>{$sv["lastname"]}" . " {$sv["firstname"]}</td>";
                echo "<td>{$sv['email']}</td>";
                echo "<td>{$sv['course']}</td>";
                echo "<td>{$sv['class']}</td>";
                echo "</tr>";
            }
            ?>
            </tbody>
        </table>
    </div>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

