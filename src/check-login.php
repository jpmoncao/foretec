<?php
session_start();

// Verifica se a sessão 'login' não existe
if (!isset($_SESSION['uuid'])) {
  header('Location: login.php?error');
  exit();
}

// A sessão 'login' existe, redireciona para a página 'home.php'

