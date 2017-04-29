<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 29.04.17
 * Time: 17:48
 */


$config = array();


// database
$config['db']['host'] = 'localhost';
$config['db']['port']= 3306;
$config['db']['username'] = 'root';
$config['db']['password'] = '';
$config['db']['charset'] = 'utf-8';
$config['db']['database'] = 'eva';


$config['load']['controllers'] = array('MainController');
$config['load']['helpers'] = array('HttpHelper');
$config['load']['libs'] = array();

$config['route'][] = array(
    'url' => '/',
    'method' => 'GET',
    'run' => '',
    'module' => '',
    'regex' => array(

    )

);

$config['path']['core'] = 'core';
$config['path']['application'] = 'application';

