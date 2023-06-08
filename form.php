<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="./favicon.ico" type="image/x-icon">
    <!-- Tailwind CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <main class="flex justify-center items-center h-screen">
        <form action="index.php" method="get" class="border p-5 w-[50%]">
            <label for="formParking">1. Do you want to view only hotels with parking?</label>
            <select class="bg-lime-100 px-2 py-1 my-2" name="formParking" id="formParking">
                <option value="onlyPark">YES</option>
                <option value="indifPark">NO</option>
            </select>
            <hr>
            <label for="formVote">2. Do you want to choose the minimum vote of the hotel? Write a number between 1 and 5:</label>
            <input type="number" name="formVote" id="formVote" min="1" max="5" class="bg-lime-100 text-center px-2 py-1 my-2" placeholder="1">
            <hr>
            <button type="submit" class="block border border-green-600	bg-green-600 px-2 py-1 text-white my-3">SEND</button>
        </form>
    </main>

</body>

</html>