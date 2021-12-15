<?= $this->include('user/layout/header') ?>
<?= $this->include('user/layout/navbar') ?>
<?= $this->include('user/layout/sidebar') ?>

<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin">
                <div class="row">
                    <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                        <h3 class="font-weight-bold">Cart</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8 grid-margin">
                <?php $i = 1;
                $jumlah = 0;
                $cart = \Config\Services::cart();
                $keranjang = $cart->contents();
                if($keranjang!=null){
                foreach ($keranjang as $key => $value) {
                    $jumlah = $jumlah + $value['qty'];
                ?>
                    <div class="card mb-3">
                        <div class="card-body pb-0">
                            <p class="card-title">NAMA TOKO</p>
                            <div class="row">
                                <div class="col-2 pl-3 pr-0">
                                    <img class="img-fluid" src="<?= base_url('assets/images/product-placeholder.svg') ?>" alt="">
                                </div>
                                <div class="col-10 pl-3 pb-3">
                                    <p class="font-weight-500"> <?= $value['name'] ?></p>
                                    <h2>Rp. <?= $value['subtotal']; ?>.00</h2>
                                    <p class="font-weight-500"> jumlah = <?= $value['qty'] ?></p>
                                    <div class="d-flex flex-row-reverse">
                                        <div class="p-2">
                                            <a href="<?= base_url('/CartController/delete/' . $value['rowid']) ?>"><button type="submit" class="btn btn-danger btn-sm"><i class="ti-trash"></i> Delete</button></a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                <?php
                }
            }else{
                ?>
                 <div class="row">
            <div class="col-md-8 grid-margin">
                    <div class="card mb-3">
                        <div class="card-body pb-0">
                          
                            <div class="row">
                                <div class="col-2 pl-3 pr-0">
                                
                                </div>
                                <div class="col-10 pl-3 pb-3">
                                    <p class="font-weight-500"> </p>
                                    <h1>Keranjang Masih Kosong</h1>
                                    <p class="font-weight-500"></p>
                                    <div class="d-flex flex-row-reverse">
                                        <div class="p-2">
                                         
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                <?php
            }
                ?>
            </div>
            <div class="col-md-4 grid-margin">
                <div class="card">
                    <div class="card-body">
                        <h4 class="my-3 mx-1">Total Harga</h4>
                        <h2>Rp. <?= $cart->total(); ?>.00</h2>
                    </div>
                    <!-- <button type="submit" class="btn btn-success mx-3 mb-3"><i class="ti-shopping-cart"></i> Buy</button> -->
                    <a href="/user/cart/checkout" class="btn btn-success mx-3 mb-3"><i class="ti-shopping-cart"></i> Buy</a>
                </div>
            </div>
        </div>

        <!-- content-wrapper ends -->
        <?= $this->include('user/layout/footer_comment') ?>
        <?= $this->include('user/layout/footer') ?>