<?php
require "db.php";

$data=$_POST;

if (isset($data['do_add'])) {
  //Проверка
  $errors=array();
  if(trim($data['name_os'])==''){
    $errors[]='Введите наименование операционной системы';
  }
  if(trim($data['type_eq'])==''){
    $errors[]='Введите тип оборудования';
  }
  if($data['bit_dep']==''){
    $errors[]='Введите разрядность';
  }
  if($data['developer']==''){
    $errors[]='Введите имя разработчика';
  }
  if($data['num_user']==''){
    $errors[]='Введите количество пользователей';
  }
  if(R::count('os', 'name_os=?', array($data['name_os']))>0){
    $errors[]='Такая операционная система уже добавлена!';
  }
  if(empty($errors)){
    $os= R::dispense('os');
    $os->name_os=$data['name_os'];
    $os->type_eq=$data['type_eq'];
    $os->bit_dep=$data['bit_dep'];
    $os->developer=$data['developer'];
    $os->num_user=$data['num_user'];
    R::store($os);
    echo '<div>Вы успешно добавили ОС в базу данных</div><hr>';

    // Переадресация на дальнейшее заполнение данных
      echo "<meta http-equiv='refresh' content='1; URL=/WWW/lab4/database.php'/>";
}else {
    echo '<div>'.array_shift($errors).'</div><hr>';}}?>
