<?php
$id = $_GET['id'];
$nama = $_GET['nama'];
$tanggal = $_GET['tanggal'];
$jumlah = $_GET['jumlah'];
$harga = $_GET['harga'];

include './components/header.php';
?>


<!-- Item Checkout -->
<div class="container p-4 mt-5 vh-min-100 vh-100">
    <div class="card">
        <div class="card-header bg-primary">
            <h4 class="text-white">Order</h4>
        </div>
        <div class="card-body">
            <form action="doCheckout.php" method="POST">

                <!-- Input Hidden -->
                <input type="hidden" name="id" value="<?php echo $id ?>">
                <div class="container  p-3 rounded my-2 bg-white">
                    <div class="row">
                        <div class="col-md-4 mb-3">
                            <div class="card mx-auto">
                                <img src="./assets/bali.jpg" class="card-img-top" alt="...">
                            </div>
                        </div>
                        <div class="col-md-8">
                            <h4><?php echo $nama; ?></h4>
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <h6>Tanggal</h6>
                                    <input type="date" class="form-control" name="tanggal" placeholder="Tanggal" value="<?php echo $tanggal ?>">
                                </div>
                                <div class="form-group col-md-6">
                                    <h6>Jumlah</h6>
                                    <input type="number" class="form-control" name="jumlah" id="jumlah" placeholder="Jumlah" value="<?php echo $jumlah ?>">
                                </div>
                            </div>
                            <h6>Total</h6>
                            <input readonly type="hidden" name="total" class="form-control" value="<?php echo $harga * $jumlah ?>">
                            <span class="lead font-weight-bold">Rp <?php echo number_format($harga * $jumlah, 0, ',', '.'); ?></span>
                        </div>
                    </div>
                    <div class="container text-right">
                        <button type="submit" class="btn btn-success">Checkout</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
</div>


<?php include './components/footer.php' ?>