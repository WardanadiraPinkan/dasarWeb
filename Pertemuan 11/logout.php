<?php
if (session_status() == PHP_SESSION_NONE) {
  session_destroy();
  session_start();
  header('location:index.php');
}
