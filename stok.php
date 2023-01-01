<?php require('sorgu.php');
include("connection.php");
ob_start();
session_start();

if(!isset($_SESSION["login"])){
    header("Location:index.php");
}
else {
}?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.bundle.min.js"></script>
        <link rel="stylesheet" href="styles.css">
        <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">
    </head>
    <body>
        <div class="page">
            <div class="navbar-container">
                <div class="navbar-left">
                    <p>Software<b>KDS</b></p>
                </div>
                <div class="navbar-center">
                </div>
                <div class="navbar-right">
                    <input type="text" class="search-input" placeholder="Ürün, Analiz veya kullanıcı arayın...">
                    <button type="submit" class="search-btn"><img class="search-icon" src="icons/search.png" width="24px"/></button>
                    <div class="icons-container">
                        <a href="#"><img alt="profil" src="icons/profil.png"></a>
                        <a href="#"><img alt="profil" src="icons/ayarlar.png"></a>
                        <a href="cikis.php"><img alt="profil" src="icons/logout.png"></a>
                    </div>
                </div>
            </div>
            <div class="sidebar-container">
                <div class="user-infos">
                    <img class="user-picture" alt="Kullanıcı Resmi" src="icons/yonetici.png">
                    <div class="user-titles">
                        <p>Yusuf Baykaloğlu</p>
                        <p>Stok Müdürü</p>
                    </div>
                </div>
                <div class="sidebar-titles"><b>Ürün Analizleri</b></div>
                <div class="categories">
                        <a class="category-btn" href="meyve_sebze.php">Meyve Sebze</a>
                        <a class="category-btn" href="et_balık_tavuk.php">Et Balık Tavuk</a>
                        <a class="category-btn" href="temel_gıda.php">Temel Gıda</a>
                        <a class="category-btn" href="temizlik.php">Temizlik</a>
                </div>
                <div class="sidebar-titles"><b>Ürün Analizleri</b></div>
                <div class="categories">
                    <a class="category-btn" href="genel.php">Genel Analizler</a>
                    <a class="category-btn" href="satis.php">Satış Analizleri</a>
                    <a class="category-btn" href="stok.php">Stok Analizleri</a>
                </div>
            </div>
            <div class="main-page-container">
                <div class="graphs">
                    <div class="graph1">
                        <canvas id="myChart1"></canvas>
                    </div>
                    <div class="graph1">
                        <canvas id="myChart2"></canvas>
                    </div>
                    <div class="graph1">
                        <canvas id="myChart3"></canvas>
                    </div>
                    <div class="graph1">
                        <canvas id="myChart4"></canvas>
                    </div>
                    <div class="graph1">
                        <canvas id="myChart5"></canvas>
                    </div>
                </div>
            </div>
        </div>


<script type="text/javascript">
    var ctx = document.getElementById('myChart1').getContext('2d');
    var myChart1 = new Chart(ctx, {
        type: 'bar',
        data: {
            labels:[<?php echo $bolgeler; ?>],
            datasets: [{
                data: [<?php echo $stok_miktari1; ?>],
                backgroundColor: 'rgba(62, 149, 205, 0.7)',
                borderColor: 'rgba(62, 149, 205, 1)',
                borderWidth: 2,
                label:"Meyve-Sebze",
            },{
                data: [<?php echo $stok_miktari2; ?>],
                backgroundColor: 'rgba(153, 88, 182, 0.7)',
                borderColor: 'rgba(153, 88, 182, 1)',
                borderWidth: 2,
                label:"Et-Balık-Tavuk",
            },
                {
                    data: [<?php echo $stok_miktari3; ?>],
                    backgroundColor: 'rgba(255,0,0,0.7)',
                    borderColor: 'rgba(255,0,0,1)',
                    borderWidth: 2,
                    label:"Temel Gıda",
                },
                {
                    data: [<?php echo $stok_miktari4; ?>],
                    backgroundColor: 'rgba(9,206,139,0.7)',
                    borderColor: 'rgba(9,206,139,1)',
                    borderWidth: 2,
                    label:"Temizlik",
                },

            ]
        },
        options: {
            title: {
                display: true,
                text: '2021-2022 Bölgesel Stok Miktarları',
            }

        }
    });
</script>
<script type="text/javascript">
    var ctx = document.getElementById('myChart2').getContext('2d');
    var myChart2 = new Chart(ctx, {
        type: 'line',
        data: {
            labels:[<?php echo $bolgeler; ?>],
            datasets: [{
                data: [<?php echo $stok_miktari1; ?>],
                backgroundColor:'rgba(62, 149, 205, 0.7)',
                borderColor: 'rgba(62, 149, 205, 1)',
                borderWidth: 2,
                label:"Meyve-Sebze",
            },
            ]
        },
        options: {
            title: {
                display: true,
                text: '2021-2022 Bölgesel Meyze-Sebze Stoğu',
            }

        }
    });
</script>
<script type="text/javascript">
    var ctx = document.getElementById('myChart3').getContext('2d');
    var myChart3 = new Chart(ctx, {
        type: 'line',
        data: {
            labels:[<?php echo $bolgeler; ?>],
            datasets: [{
                data: [<?php echo $stok_miktari2; ?>],
                backgroundColor:'rgba(153, 88, 182, 0.7)',
                borderColor: 'rgba(153, 88, 182, 1)',
                borderWidth: 2,
                label:"Et-Balık-Tavuk",
            },
            ]
        },
        options: {
            title: {
                display: true,
                text: '2021-2022 Bölgesel Et-Balık-Tavuk Stoğu',
            }

        }
    });
</script>
<script type="text/javascript">
    var ctx = document.getElementById('myChart4').getContext('2d');
    var myChart4 = new Chart(ctx, {
        type: 'line',
        data: {
            labels:[<?php echo $bolgeler; ?>],
            datasets: [{
                data: [<?php echo $stok_miktari3; ?>],
                backgroundColor: 'rgba(255,0,0,0.7)',
                borderColor: 'rgba(255,0,0,1)',
                borderWidth: 2,
                label:"Temel Gıda",
            },
            ]
        },
        options: {
            title: {
                display: true,
                text: '2021-2022 Bölgesel Temel Gıda Stoğu',
            }

        }
    });
</script>
<script type="text/javascript">
    var ctx = document.getElementById('myChart5').getContext('2d');
    var myChart5 = new Chart(ctx, {
        type: 'line',
        data: {
            labels:[<?php echo $bolgeler; ?>],
            datasets: [{
                data: [<?php echo $stok_miktari4; ?>],
                backgroundColor:'rgba(9,206,139,0.7)',
                borderColor: 'rgba(9,206,139,1)',
                borderWidth: 2,
                label:"Temizlik",
            },
            ]
        },
        options: {
            title: {
                display: true,
                text: '2021-2022 Bölgesel Temizlik Stoğu',
            }

        }
    });
</script>
<script>
    var btns = header.getElementsByClassName("category-btn");
    for (var i = 0; i < btns.length; i++) {
        btns[i].addEventListener("click", function() {
        var current = document.getElementsByClassName("active");
        current[0].className = current[0].className.replace(" active", "");
        this.className += " active";
        });
    }
</script>
</body>
</html>