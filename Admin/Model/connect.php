<?php
// tạo lớp tên connect
class connect{
    var $db=null;
    // tạo hàm tạo cho lớp connect
    public function __construct()
    {
        // tạo chuỗi bao gồm: mysql:host=localhost;post=82;dbname=tendatabase
        $dsn='mysql:host=localhost;dbname=thuvien2';
        $user='root';
        // nếu connet bằng xamp, wamp thì pass=''
        $pass='';
        try {
            $this->db=new PDO($dsn,$user,$pass,array(PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8"));
        } catch (PDOException $e) {
            echo $e->getMessage();
            echo "Ko thành công";
            exit();
        }
    }
    // phương thưc thực hiện câu lệnh truy vấn select
    public function getList($select)// select * from new
    {
        // query để thực hiện các truy vấn đơn giản như select
        $results=$this->db->query($select);
        return $results;
    }
    public function getInstance($select)
	{
		$results = $this->db->query($select);
		// echo $select;
		$result = $results->fetch();
		return $result;
	}
    // phương thức thực hiện preparestatement
    public function getListP($select)// select * from new
    {
        // prepare
        $results=$this->db->prepare($select);
        return $results;
    }
    public function exec($query){
        $result=$this->db->exec($query);
        return $result;
    }
    public function execP($query){
        $statement=$this->db->prepare($query);
        return $statement;
    }

}
?>