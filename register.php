<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body>
    <div class="h-[100svh] w-full flex justify-center items-center bg-stone-100">
        <form action="controller.php" method="post" class="bg-slate-50 shadow-md rounded-lg px-12 py-8 flex flex-col gap-2">
            <label for="">Name</label>
            <input name="name" class="border-b-2 border-slate-700 px-2" type="text" placeholder="Name">
            <label for="">Password</label>
            <input name="password" class="border-b-2 border-slate-700 px-2" type="text" placeholder="admin123">
            <button name="login" type="submit" class="px-4 py-2 mt-10 bg-emerald-400 shadow-md rounded-md text-white" >
                Submit
            </button>
        </form>
    </div>
</body>
</html>