<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- <link rel="icon" href="" type="image/svg+xml" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin /> -->
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@400;500;700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://dekatutorial.github.io/sweetalert2.all.min.js"></script>
    <link rel="stylesheet" href="style.css" />
    <title>Hai Kamu</title>

    <?php
    date_default_timezone_set("Asia/Jakarta");
    if (isset($_GET['jawaban'])) {
        $fp = fopen('dekatutorial.txt', 'r');
        echo '<link rel="stylesheet" href="style1.css" /></head><body><div class="top">Jawaban Script   <br /></div><div class="content">';
        while (!feof($fp)) {
            echo "".fgets($fp)."<br>";
        }
        echo '</div></body></html>';
        die;
        fclose($fp);
    }

    if (isset($_POST['submit'])) {
        $date = date("d-M-Y (H:i)");
        $status = $_POST["Status"];
        $pesan = $_POST["Pesan"];
        $fp = fopen('dekatutorial.txt', 'a');
        fwrite($fp, $date."\nStatus :\n<strong>".$status."\n</strong> Pesan :\n<strong>".$pesan."</strong>\n\n");
        fclose($fp);
        index();
    }

    function index()
    {
        $link = "";
        if (isset($_GET["link"])) {
            $link = $_GET["link"];
        }
        echo '<link rel="stylesheet" href="https://dekatutorial.github.io/18nembak/page2.css" /></head><body><script src="https://dekatutorial.github.io/18nembak/page2.js"></script><script>timeku("'.$link.'");</script></body></html>';
        die;
    }
    ?>

    <script>
        var musik = "";
        var backgound = "";
        var gambarStiker1 = "";
        var gambarStiker2 = "";
        var gambarStiker3 = "";
    </script>
</head>

<body>
   <script>
        // Function to open WhatsApp with predefined message
       
        // Your existing scripts
        popupku();
    </script>
    <div class="preload">
        <p>Loading dulu . . .</p>
    </div>
    <div class="open">
        <div>
            <div class="lope" onclick="ilang()"><i class="love material-icons-sharp"> favorite </i></div>
            <h3>Misi, Paket Dibuka ya</h3>
        </div>
    </div>
    <div class="bg"></div>
    <div class="lopeBg"></div>

    <div class="top stiker"><img src="" /><img src="" /><img src="" /></div>
    <div class="ucapan">
        <div id="slider">
            <!-- Ucapan awal -->
            <p>Hai Dut</p>
            <p>Ada pesan di baca yaa</p>
            <p>Singkat aja makasih buat kamu udah nemenin sampe sejauh ini,aku rasaa hubungan ini di perjelas biar ada kepastian buat kedepannya</p>

            <!-- Pertanyaan -->
            <p>Kamu mau gak jadi pacar aku?</p>
        </div>
        <div id="slider">
            <!-- Ucapan diterima -->
            <p>Makasih ya udah mau nerima aku</p>
        </div>
    </div>

    <script>
        // PENTING : jika ekstensi file berbeda silahkan ganti di bawah ini
        musik = "Mylove.mp3";
        background = "bg.jpeg";
        gambarStiker1 = "tes.gif";
        gambarStiker2 = "tes1.gif";
        gambarStiker3 = "tes2.gif";
    </script>

    <div class="button">
        <div>
            <button>Back</button>
            <button>Next</button>
        </div>
        <div>
            <button>Gamau</button>
            <button>Mau</button>
        </div>
        <div>
            <button>Kirim Pesan</button>
        </div>
    </div>

    <div class="container-pesan" style="display: none">
        <div class="kirim-pesan">
            <p>Kirim Pesan</p>
            <form method="post" onsubmit="openWhatsApp();">
                <input name="Status" hidden class="jawaban" type="text" value="" />
                <textarea required name="Pesan" id="pesanTextarea" cols="30" rows="10" placeholder="Tulis pesan..."></textarea>
                <button type="submit" name="submit">Kirim</button>
            </form>
        </div>
    </div>

    <script src="script.js"></script>
</body>

</html>
