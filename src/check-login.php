<?php
session_start();

// Verifica se a sessão 'login' não existe
if (!isset($_SESSION['login'])) {
  header('Location: login.php');
  exit();
}

// A sessão 'login' existe, redireciona para a página 'home.php'

