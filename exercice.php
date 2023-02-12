<?php

if (isset($_COOKIE['colorschema'])) {
  $colorschema = $_COOKIE['colorschema'];
} else {
  $colorschema = 'light';
}

if (isset($_POST['colorschema'])) {
  setcookie('colorschema', $_POST['colorschema'], time() + 60 * 60 * 24 * 7);
  $colorschema = $_POST['colorschema'];
  $message = 'La couleur a été enregistré';
}

?>
<!DOCTYPE html>
<html>
<head>
  <title>Color Scheme Preferences</title>
</head>
<body>
    <?php if (isset($message)): ?>
        <p><?php echo $message; ?></p>
    <?php endif; ?>
    <form method="post">
        <label>
            <input type="radio" name="colorschema" value="light" <?php echo $colorschema == 'light' ? 'checked' : ''; ?>>
        Light
        </label>
        <br>
        <label>
            <input type="radio" name="colorschema" value="dark" <?php echo $colorschema == 'dark' ? 'checked' : ''; ?>>
        Dark
        </label>
        <br>
        <input type="submit" value="Enregistrer">
    </form>
</body>
</html>