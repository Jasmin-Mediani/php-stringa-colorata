<!--<link rel="stylesheet" href="style.css" type="text/css"> -->
<?php include 'style.php'; ?>

<?php
$password = $_GET['password'];
if (empty($password)) {
    echo "<h1 class='nero'>non è stato inserito alcun testo: riprovare </p>";
} else if ($password == "boolean") {
    echo "<h1 class='verde'>la password inserita è 'boolean' </h1>";
} else {
    echo "<h1 class='rosso'>la password inserita non è 'boolean'</h1> ";
}

?>