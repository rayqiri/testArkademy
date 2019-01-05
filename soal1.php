<?php
function biodata(){
$name ="Agung Rifqi Hidayat";
$address ="Prambatan Lor Kudus Jawa Tengah";
$hobbies =  array('Programmer','Main Game','Membaca Berita','Nonton');
$is_married = true;
$school = [
		'highSchool' => 'Ma`ahid Kudus',
		'university' =>'UMK'
		];
$skill=[];
$skills =array(1 => 'PHP',2 =>'Javascript',3 =>'HTML',4 =>'Css',5 =>'reactjs',6 =>'ionic',7 =>'angular',8 =>'react native',9 =>'laravel',10 =>'ci',11 =>'nodejs');

	$skill[] = $skills;


$data =array();
$data['name']=$name;
$data['address']=$address;
$data['hobbies']=$hobbies;
$data['is_married']= $is_married;
$data['school']= $school;
$data['skills']= $skill;

return json_encode($data,JSON_PRETTY_PRINT);

}

echo biodata();

