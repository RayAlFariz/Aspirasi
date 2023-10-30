<?php
$connect = mysqli_connect("localhost", "root", "031206", "aspirasi");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aspirasi Siswa BPM | OSIS & MPK</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-slate-300">
    <h1 class="text-5xl font-medium text-center text-teal-400 outline">ASPIRASI SISWA</h1>
    <form action="" method="post" class="flex justify-center flex-col mt-40">
        <p class="w-60 text-justify mx-auto font-semibold mb-2">Punya pesan-pesan untuk OSIS
            dan MPK Ayo
            sampaikan!
        </p>
        <textarea name="aspirasi" id="aspirasi" cols="30" rows="5" placeholder="Pesan apa yang ingin kamu sampaikan?^_^" class="border-2 border-teal-400 rounded-md w-64 mx-auto"></textarea>
        <button type="submit" name="submit" class="bg-teal-500 w-24 mx-auto mt-4 rounded-full text-white hover:bg-teal-600 border border-sky-400 transition duration-75 ease-in-out">Kirim</button>
    </form>
    <footer class="mt-44 bg-teal-900 text-center p-5 text-white">Created By <a target="_blank" href="https://instagram.com/rizkydhank">Rizky</a> XI RPL | MATTING
    </footer>
    <?php
    if (isset($_POST['submit'])) {
        mysqli_query($connect, "INSERT INTO siswa set aspirasi = '$_POST[aspirasi]'"); ?>
        <script>
            alert("Pesanmu telah terkirim, kami pasti akan membacanya Terima Kasih!")
        </script>
    <?php } ?>
    ?>
</body>

</html>