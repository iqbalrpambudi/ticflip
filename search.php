<?php include './components/header.php';
include './homepagemodule/getdata.php';
?>
<?php
$search = $_POST['search'];
$min = $_POST['min'];
$max = $_POST['max'];
if ($_POST['min'] > 0 && $_POST['max'] > 0) {
    $min = $_POST['min'];
    $max = $_POST['max'];
    $query1 = mysqli_query($conn, "SELECT * FROM tb_tour WHERE nama LIKE '%$search%' AND harga BETWEEN $min AND $max");
    $query3 = mysqli_query($conn, "SELECT * FROM tb_tiket where nama LIKE '%$search%' AND harga BETWEEN $min AND $max");
} elseif ($_POST['min'] > 0 && $_POST['max'] == 0) {
    $max = $_POST['max'];
    $query1 = mysqli_query($conn, "SELECT * FROM tb_tour WHERE nama LIKE '%$search%' AND harga >= $min");
    $query3 = mysqli_query($conn, "SELECT * FROM tb_tiket where nama LIKE '%$search%' AND harga >= $min");
} elseif ($_POST['min'] == 0 && $_POST['max'] > 0) {
    $max = $_POST['max'];
    $query1 = mysqli_query($conn, "SELECT * FROM tb_tour WHERE nama LIKE '%$search%' AND harga <=$max");
    $query3 = mysqli_query($conn, "SELECT * FROM tb_tiket where nama LIKE '%$search%' AND harga <= $max");
} elseif ($_POST['min'] == 0 && $_POST['max'] == 0) {
    $query1 = mysqli_query($conn, "SELECT * FROM tb_tour WHERE nama LIKE '%$search%'");
    $query3 = mysqli_query($conn, "SELECT * FROM tb_tiket where nama LIKE '%$search%'");
}

//$query2 = mysqli_query($conn,"SELECT * FROM tb_tiket WHERE nama LIKE '%$search%'");

?>

<!-- Jumbotron -->
<div class="jumbotron" style="
        margin-bottom:0;
            height: 350px;
            background-image: url('./assets/hero.jpg');
            background-position:center;
            background-repeat: no-repeat;">
    <div class="container">
        <h1 class="display-4 mt-5 text-light">Pesan Sekarang</h1>
        <p class="lead text-light">Dapatkan promo menarik dengan memasukan kode promo</p>
    </div>
</div>

<!-- Daftar Paket -->
<div class=" container border rounded py-5 px-5 bg-white mt-3">
    <h5 class="font-weight-bold">Hasil Pencarian</h5>
    <hr>
    <h5>Paket Tour</h5>
    <div class="row">
        <?php foreach ($query1 as $datas) : ?>
            <div class="col-lg-3">
                <a href="deskripsi.php?id=<?php echo $datas['id_tour'] ?>">
                    <div class="card mx-auto mb-3">
                        <div class="card-img-caption">
                            <!-- Rating pada tiket -->
                            <h5 class="card-text text-light"><?php echo $datas['nama']; ?></h5>
                            <span class="card-rating">
                                <?php $id = $datas['id_tour'];
                                    $tourRate = mysqli_query($conn, "SELECT AVG(rate) as avg FROM tb_rating where id_tour='$id'");
                                    $rating = mysqli_fetch_assoc($tourRate);
                                    for ($i = 0; $i < ceil($rating['avg']); $i++) {
                                        echo '<i class="fa fa-star text-warning"></i>';
                                    }
                                    ?>
                            </span>
                            <img class="card-img-top" src="./assets/bali.jpg" alt="Card image cap">
                        </div>
                    </div>
                </a>
            </div>
        <?php endforeach; ?>
    </div>
    <!-- pencarian tabel tiket -->
    <h5>Tiket</h5>
    <div class="row">
        <?php foreach ($query3 as $data) : ?>
            <div class="col-lg-3">
                <a href="deskripsi.php?id=<?php echo $data['id_tiket'] ?>">
                    <div class="card mx-auto mb-3">
                        <div class="card-img-caption">

                            <!-- promo -->
                            <h5 class="card-text text-light"><?php echo $data['nama']; ?></h5>
                            <span class="card-rating"><?php $id = $data['id_tiket'];
                                                            $ticketRate = mysqli_query($conn, "SELECT AVG(rate) as avg FROM tb_rating where id_tiket='$id'");
                                                            $rating = mysqli_fetch_assoc($ticketRate);
                                                            for ($i = 0; $i < ceil($rating['avg']); $i++) {
                                                                echo '<i class="fa fa-star text-warning"></i>';
                                                            }
                                                            ?></span>
                            <img class="card-img-top" src="./assets/bali.jpg" alt="Card image cap">
                        </div>
                    </div>
                </a>
            </div>
        <?php endforeach; ?>
    </div>
</div>
<?php include './components/footer.php'; ?>