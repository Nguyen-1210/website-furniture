<?php

function insert_products($name, $price, $img, $description, $discount, $id_type){
    $sql = "insert into products(name,price,img,description,discount,id_type) values ('$name','$price','$img','$description', '$discount', '$id_type')";
    pdo_execute($sql);
}

function delete_products($id){
    $sql = "delete from products where id=".$id;
    pdo_execute($sql);
}

function loadall_product_top10(){
    $sql = "select * from products where 1 order by luotxem desc limit 0,10";
    $listproduct = pdo_query($sql);
    return $listproduct;
}

function loadall_product_home(){
    $sql = "select * from products where 1 order by id desc limit 0,12";
    $listproduct = pdo_query($sql);
    return $listproduct;
}

function loadall_products($kyw="", $id_type=0){
    $sql = "select * from products where 1";
    if($kyw!=""){
        $sql.=" and name like '%".$kyw."%'";
    }
    if($id_type > 0){
        $sql.=" and iddm='".$id_type."'";
    }
    $sql.=" order by id asc";
    $listproducts = pdo_query($sql);
    return $listproducts;
}

function loadone_product($id){
    $sql = "select * from products where id=".$id;
    $products = pdo_query_one($sql);
    return $products;
}

function load_ten_dm($iddm){
    if($iddm > 0){
    $sql = "select * from danhmuc where id=".$iddm;
    $dm = pdo_query_one($sql);
    extract($dm);
    return $name;
    }
    else
    {
        return "";
    }
}

function load_product_cungloai($id, $id_type){
    $sql = "select * from products where iddm=".$id_type." AND id <> ".$id;
    $listproducts = pdo_query($sql);
    return $listproducts;
}

function update_product($id, $id_type, $name, $price, $description, $img){
    if($img!=""){
        $sql = "update sanpham set id_type='".$id_type."', name='".$name."', price='".$price."', description='".$description."',img='".$img."' where id=".$id;
    }
    else
    {
        $sql = "update sanpham set id_type='".$id_type."', name='".$name."', price='".$price."', description='".$description."' where id=".$id;
    }
    pdo_execute($sql);
}

?>