<?php
require "../db.php";

$data=$_POST;

if (isset($data['do_add'])) {
  //Проверка
  $errors=array();
  if(trim($data['name_store'])==''){
    $errors[]='Введите наименование операционной системы';
  }
  if(trim($data['url_store'])==''){
    $errors[]='Введите тип оборудования';
  }

  }
  if(R::count('store', 'name_store=?', array($data['name_store']))>0){
    $errors[]='Такой магазин уже добавлен!';
  }
  if(empty($errors)){
    $store= R::dispense('store');
    $store->name_store=$data['name_store'];
    $store->url_store=$data['url_store'];
    R::store($store);
    echo '<div>Вы успешно добавили магазин в базу данных</div><hr>';

    // Переадресация на дальнейшее заполнение данных
      echo "<meta http-equiv='refresh' content='1; URL=/WWW/lab5/data_digital_stores/database.php'/>";
}else {
    echo '<div>'.array_shift($errors).'</div><hr>';}?>
