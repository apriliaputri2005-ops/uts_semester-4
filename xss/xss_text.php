<!DOCTYPE html>
<html>
<head>
    <title>Test XSS</title>
</head>
<body>

<h2>Form Komentar</h2>

<form method="POST">
    <input type="text" name="komentar" placeholder="Tulis komentar">
    <button type="submit">Kirim</button>
</form>

<hr>

<h3>Hasil:</h3>

<?php
if(isset($_POST['komentar'])){
   echo htmlspecialchars($_POST['komentar']); // tanpa filter
}
?>

</body>
</html> 