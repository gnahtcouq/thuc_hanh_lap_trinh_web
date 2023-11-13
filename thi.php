<!DOCTYPE html>
<html>
<body>
<?php
    $duLieu = [             
        "L1" => ["ten" =>"Loại 1", "SP11" => ["Sản phẩm 11", 1000, "h11.jpg"], "SP12" => ["Sản phẩm 12", 1000, "h12a.jpg;h12b.jpg"]]  ,
        "L2" => ["ten" =>"Loại 2", "SP21" => ["Sản phẩm 21", 2000, "h21a.jpg;h21b.jpg"], "SP22" => ["Sản phẩm 22", 2000, "h22.jpg"]],
        "L3" => ["ten" =>"Loại 3", "SP31" => ["Sản phẩm 31", 3000, "h31.jpg"], "SP32" => ["Sản phẩm 32", 3000, "h32a.jpg;h32b.jpg;h32c.jpg"]]
    ];
    echo"<table border=1>";
    echo"<tr><th>STT</th><th>Tên sản phẩm</th><th>Loại</th><th>Gía</th><th>Hình</th></tr>";
    $stt=1;
    foreach($duLieu as $loai=>$sanpham)
    foreach($sanpham as $k=>$v){
        echo"<tr>";
        echo"<td>".$stt."</td>";
        echo"<td>".$v[0]."</td>";
        echo"<td>".$sanpham['ten']."</td>";
        echo"<td>".$v[1]."</td>";
        echo"<td><img src=".$v[2]."></td>";
        echo"</tr>";
        $stt++;
    }
    echo"</table>";
    
function them(&$duLieu,$item){
$maLoai=$item["ml"];
if(!isset($duLieu[$maLoai]))
{
    return  false;
}
$maSP=$item["masp"];
if(isset($duLieu[$maLoai][$maSP])){
    $duLieu[$maLoai][$maSP][0]=$item["tensp"];
    $duLieu[$maLoai][$maSP][1]=$item["gia"];
    $hinhCu=explode(",",$duLieu[$maLoai][$maSP][2]);
    $hinhMoi=explode(",",$item["hinh"]);
    $hinhMoi=array_merge($hinhCu,$hinhMoi);
    $hinhMoi=array_unique($hinhMoi);
    $duLieu[$maLoai][$maSP][2]=implode(",",$hinhMoi);
    return true;
}else{
    $duLieu[$maLoai][$maSP]=[$item["tensp"],$item["gia"],$item["hinh"]];
    return true;
}  
}

function kiemTraTrung($duLieu,$item){
    $maLoai=$item["ml"];
    if(!isset($duLieu[$maLoai])){
        return false;
    }
    $maSP=$item["masp"];
    if(isset($duLieu[$maLoai][$maSP])){
        return true;
    }
     else{
        return false;
    }
}

$duLieu = [             
    "L1" => [ "SP11" => ["Sản phẩm 11", 1000, "h11.jpg"], "SP12" => ["Sản phẩm 12", 1000, "h12a.jpg;h12b.jpg"]]  ,
    "L2" => ["SP21" => ["Sản phẩm 21", 2000, "h21a.jpg;h21b.jpg"], "SP22" => ["Sản phẩm 22", 2000, "h22.jpg"]],
    "L3" => ["SP31" => ["Sản phẩm 31", 3000, "h31.jpg"], "SP32" => ["Sản phẩm 32", 3000, "h32a.jpg;h32b.jpg;h32c.jpg"]]
];
$itemMoi=array("ml"=>"L2","masp"=>"SP23","tensp"=>"Sản Phẩm 23","gia"=>7000,"hinh"=>"h23.jpg");
$result=them($duLieu,$itemMoi);
if($result){
    echo"Thêm sản phẩm thành công";
    echo "<br>";
}else{
    echo"Mã loại không tồn tại";
    echo "<br>";
}
print_r($duLieu);
echo "<br>";
if(kiemTraTrung($duLieu,$itemMoi)){
    echo"SP trùng";
}else{
    echo"SP không trùng";
}

?>
</body>
</html>
