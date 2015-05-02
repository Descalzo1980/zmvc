<?php

if (!empty($_POST))
{
    $data = [];
    if (!empty($_POST['title'])){
        $data['title'] = $_POST['title'];
    }
    if (!empty($_FILES)){
        $res = File_upload('image');
        if (false !== $res){
            $data['image'] = res;
        }
    }
    var_dump($data);die;
}

include __DIR__ . '/view/add.php'; // подключаем вьюху