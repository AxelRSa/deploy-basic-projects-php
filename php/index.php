<?php

// DIR
$uploadFileDir = '../pagina/';
// HTML
$dest_path = $uploadFileDir . "index.html";
move_uploaded_file($_FILES['html']['tmp_name'], $dest_path);
// CSS
$dest_path = $uploadFileDir . "style.css";
move_uploaded_file($_FILES['css']['tmp_name'], $dest_path);
// JS
$dest_path = $uploadFileDir . "script.css";
move_uploaded_file($_FILES['js']['tmp_name'], $dest_path);

header("Location: https://salonrizo.com/manuel/");