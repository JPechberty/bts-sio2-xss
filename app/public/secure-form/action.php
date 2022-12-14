<?php
require __DIR__ . '/../../vendor/autoload.php';

use App\Entity\User;
use App\Model\userModel;
use Dotenv\Dotenv;
// Gestion des fichiers environnement
$dotenv = Dotenv::createImmutable(__DIR__ . "/../../");
$dotenv->load();


if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $name = $_POST['name'];
    $password = $_POST['password'];

    $user = new User(null,$email,$name,$password);
    $userModel = new UserModel();
    $userModel->create($user);
    header("Location: ../secure-form/index.php");
}