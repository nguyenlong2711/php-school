<?php
class HoaDon{
    var $sohd=null;
    var $makh=null;
    var $ngaydat=null;
    var $tongtien=0;
    var $mahh=null;
    public function __construct(){}
    public function insertOrder($makh)
    {
        $date=new DateTime("NOW");
        $ngay=$date->format("Y-m-d");
        $query="insert into hoadon(mshd,makh,ngaymua,tongtien) values (NULL,$makh,'$ngay',0)";
        $db=new connect();
        $db->exec($query);
        $select="select mshd from hoadon order by mshd desc limit 1";
        $result=$db->getInstance($select);
        return  $result[0];
    }
    public function insertOrderDetail($masohd,$masach,$soluong,$thanhtien)
    {
        $query="insert into cthoadon(masohd,masach,soluongmua,thanhtien,tinhtrang) values($masohd,$masach,$soluong,$thanhtien,0)";
        $db=new connect();
        $db->exec($query);
    }
    function updateOrderTotal($masohd,$total)
    {
        $query="update hoadon set tongtien=$total where mshd=$masohd";
        $db=new connect();
        $db->exec($query);
    } 
    function getOrder($sohdid)
    {
        $select="select b.mshd,a.tenkh,a.diachi,a.sodt,b.ngaymua from khachhang a inner join hoadon b on a.makh=b.makh where mshd=$sohdid";
        $db=new connect();
        $result=$db->getInstance($select);
        return $result;
    }
    function getOrderDetail($sohdid)
    {
        $select="select a.tensach,a.gia,b.soluongmua,b.thanhtien from book a inner join cthoadon b on a.masach=b.masach where masohd=$sohdid";
        $db=new connect();
        $result=$db->getList($select);
        return $result;
    }

}
?>