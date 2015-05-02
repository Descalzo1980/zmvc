<?php

function Photos_getAll()
{
    mysql_connect('localhost', 'root', '');
    mysql_select_db('test');

    $sql = 'SELECT * FROM images';
    $res = mysql_query($sql);

    $ret = [];
    while (false !== $row = mysql_fetch_assoc($res)){
        $ret[] = $row;
    }
    return $ret;
}