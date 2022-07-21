<?php 
    function pdo_get_connection() {
        //Tên server
        $host = 'localhost';
        //Tên CSDL
        $dbname = 'du_an_1';
        //User truy cập CSDL
        $username = 'root';
        //Mật khẩu
        $password = '';
        try {
            //Kết nối
            $conn = new PDO("mysql:host=$host; dbname=$dbname; charset=utf8", $username, $password);
            $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            return $conn;
        } catch (PDOException $e) {
            echo "Lỗi kết nối: <br>" . $e->getMessage();
        }
    } 
    
    // Hàm theo tác cơ sở dữ liệu(Dùng cho UPDATE,INSERT,DELETE)
    function pdo_execute($sql) {
        $sql_new = array_slice(func_get_args(),1); // tách mảng được truyền vào thành một mảng mới bắt đầu từ vị trí 1 (trừ câu lệnh sql)
        try {
            $conn = pdo_get_connection();
            $stmt = $conn->prepare($sql);
            $stmt->execute($sql_new);
        }catch (PDOException $e) {
            throw $e;
        }finally {
            unset($conn); //Đóng kết nối
        }
    }
    
    //Hàm truy vấn nhiều dữ liệu
    function select_all ($sql) {
        $sql_new = array_slice(func_get_args(),1); // tách mảng được truyền vào thành một mảng mới bắt đầu từ vị trí 1 (trừ câu lệnh sql)
        try {
            $conn = pdo_get_connection();
            $stmt = $conn->prepare($sql);
            $stmt->execute($sql_new);
            $rows = $stmt->fetchAll();
            return $rows;
        }catch (PDOException $e) {
            throw $e;
        }finally {
            unset($conn); //Đóng kết nối
        }
    }
    //Hàm truy vấn 1 dữ liệu
    function select_one ($sql) {
        $sql_new = array_slice(func_get_args(),1); // tách mảng được truyền vào thành một mảng mới bắt đầu từ vị trí 1 (trừ câu lệnh sql)
        try {
            $conn = pdo_get_connection();
            $stmt = $conn->prepare($sql);
            $stmt->execute($sql_new);
            $row = $stmt->fetch(PDO::FETCH_ASSOC);
            return $row;
        }catch (PDOException $e) {
            throw $e;
        }finally {
            unset($conn); //Đóng kết nối
        }
    }
?>