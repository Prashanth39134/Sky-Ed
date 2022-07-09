<?php
session_start();
if($_SESSION['email'])
{
  header("Location: http://localhost:3000/");

}
