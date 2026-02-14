<?php 
include 'connection.php'; 

if (!isset($_SESSION['id_user'])){
    header("Location: login.php");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>user</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body>
    <section class="bg-slate-100 w-full h-[100svh]">
        <nav class="w-full bg-indigo-400 h-12 px-4 py-2">
            <form action="controller.php" method="POST">
                <button name="logout" type="submit">Log out</button>
            </form>
        </nav>
        <p>Hello world</p>
        <?= $_SESSION['id_user'] ?>
    </section>
</body>
</html>