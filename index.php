<?php

require __DIR__ . '/models/photo.php';   //подключаем модель

$items = Photos_getAll();

include __DIR__ . '/view/index.php'; // подключаем вьюху