<?php 
    global $conn;
    function connect_db(){
        global $conn;
        
        if(!$conn){
            $conn = mysqli_connect('localhost','root','','tracnghiem') or die('<br>Không Thể Kết Nối Với Database !');
            mysqli_query($conn, 'utf8');
        }
    }
    function disconnect_db(){
        global $conn;
        
        if($conn){
            mysqli_close($conn);
        }
    }
    
    function add_user($name,$class){
        global $conn;
        connect_db();
        $name = addslashes($name);
        $class = addslashes($class);
        
        $sql = "insert into infor_user(user_name,class,result) values ('$name','$class',0)";
        $query = mysqli_query($conn, $sql);

        return $query;
    }


    function get_cauhoi(){
        global $conn;
        connect_db();
        $sql = "select * from ds_cauhoi";
        $query = mysqli_query($conn, $sql);
        $result= array();
        
        if ($query){
            while ($row = mysqli_fetch_assoc($query)){
                $result[] = $row;
            }
        }
        
        return $result;
    }

    function chondapan($id_cauhoi, $cautraloi){
        global $conn;
        connect_db();
        $id_cauhoi = addslashes($id_cauhoi);
        $cautraloi = addslashes($cautraloi);
        $sql = "
            UPDATE ds_cauhoi SET 
            DapAn_Chon = '$cautraloi'
            WHERE ds_cauhoi.id = '$id_cauhoi'
        ";
        $query = mysqli_query($conn, $sql);
        
        return $query;
    }
    function get_user(){
        global $conn;
        connect_db();
        $sql = "SELECT * FROM infor_user 
                ORDER BY id DESC 
                LIMIT 1;";
        $query = mysqli_query($conn, $sql);
        $result= array();
        if (mysqli_num_rows($query)>0){
            $row = mysqli_fetch_assoc($query);
            $result = $row;
        }
        return $result;
    }
    function add_result(){
        global $conn;
        $count = 0;
        connect_db();
        $sql = "select 	DapAn_Chon,DapAn_Dung from ds_cauhoi";
        $query = mysqli_query($conn, $sql);
        $result= array();
        
        if ($query){
            while ($row = mysqli_fetch_assoc($query)){
                $result[] = $row;
            }
        }
        foreach ($result as $item){
            if($item['DapAn_Chon']==$item['DapAn_Dung']){
                $count +=1;
            }
        }
        $sql = "
            UPDATE infor_user SET 
            result = '$count'
            ORDER BY id DESC 
            LIMIT 1;
        ";
        $query = mysqli_query($conn, $sql);
        
        return $query;
    }
     function del_data(){
        global $conn;
        connect_db();
        $sql = "
            UPDATE ds_cauhoi SET 
            DapAn_Chon = ''
        ";
        $query = mysqli_query($conn, $sql);
        
        return $query;
    }
    function get_rankuser(){
        global $conn;
        connect_db();
        $sql = "SELECT * FROM `infor_user` ORDER BY `infor_user`.`result` DESC";
        $query = mysqli_query($conn, $sql);
        $result= array();
        
        if ($query){
            while ($row = mysqli_fetch_assoc($query)){
                $result[] = $row;
            }
        }
        
        return $result;
    }
?>