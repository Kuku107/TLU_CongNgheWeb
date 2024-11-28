<?php
    require_once (__DIR__ . "/../model/Hoa.php");
    require_once (__DIR__ . "/../utils/Database.php");
    class HoaDAO {
        private $db;
        public function __construct() {
            $db = new Database();
            $this->db = $db->pdo;
        }

        public function getAllHoas() {
            $query = "SELECT * FROM tb_hoa";
            $preparedStatement = $this->db->prepare($query);
            $preparedStatement->execute();
            return $preparedStatement->fetchAll();
        }

        public function getHoaById($id) {
            $query = "SELECT * FROM tb_hoa WHERE id = :id";
            $preparedStatement = $this->db->prepare($query);
            $preparedStatement->bindParam(":id", $id);
            $preparedStatement->execute();
            $result = $preparedStatement->fetch();
            return $result;
        }

        public function addHoa(Hoa $hoa) {
            $query = "INSERT INTO tb_hoa (id, ten, moTa, anh) VALUES (:id, :ten, :mota, :anh)";
            $preparedStatement = $this->db->prepare($query);
            $preparedStatement->execute([
                "id" => $hoa->getHoaId(),
                "ten" => $hoa->getHoaTen(),
                "mota" => $hoa->getHoaMota(),
                "anh" => $hoa->getHoaAnh()
            ]);
        }

        public function updateHoa(Hoa $hoa) {
            $query = "UPDATE tb_hoa SET ten = :ten, mota = :mota, anh = :anh WHERE id = :id";
            $preparedStatement = $this->db->prepare($query);
            $preparedStatement->execute([
                "id" => $hoa->getHoaId(),
                "ten" => $hoa->getHoaTen(),
                "mota" => $hoa->getHoaMota(),
                "anh" => $hoa->getHoaAnh()
            ]);
        }

        public function deleteHoaById($id) {
            $query = "DELETE FROM tb_hoa WHERE id = :id";
            $preparedStatement = $this->db->prepare($query);
            $preparedStatement->execute(["id" => $id]);
        }
    }
?>
