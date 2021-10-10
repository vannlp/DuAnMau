<h2 class="home__h2">TRANG CHỦ</h2>
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="https://hanoicomputercdn.com/media/banner/02_Sep9cf2a0e99c0f2aac97902c0c725e298f.png" class="d-block w-100" alt="">
        </div>
        <div class="carousel-item">
            <img src="https://hanoicomputercdn.com/media/banner/30_Aug97841499c5fe9bc04751b8584138c084.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="https://hanoicomputercdn.com/media/banner/07_Sep53ac44d6f2c3c2eb19d7565fd9098344.jpg" class="d-block w-100" alt="...">
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
<h3 class="home__h2">Sản phẩm</h3>
<div class="products">
    <div class="row">

        <?php
        foreach ($data['hang-hoa'] as $value) {
            extract($value);
            $giam_gia = number_format($giam_gia);
        ?>
            <div class="col-xl-4 col-md-5 col-12">
                <div class="product">
                    <img src="<?= $URL_IMG . $hinh ?>" alt="" class="product__img">
                    <div class="product__desc">
                        <h4 class="product__title"><?= $ten_hh ?></h4>
                        <div class="product__prices">
                            <span class="product__gia"><?= $don_gia ?>VND</span>
                            <span class="product__price"><?= $giam_gia ?>VND</span>
                        </div>
                        <div class="product__btn">
                            <a href="../chitiet?url&ma_hh=<?= $ma_hh ?>" class="btn btn-buying">Xem thêm</a>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>

    </div>
    <nav aria-label="Page navigation example ">
        <ul class="pagination">
            <li class="page-item">
                <a class="page-link" href="#" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                </a>
            </li>
            <!-- <li class="page-item"><a class="page-link" href="#">1</a></li> -->
            <?php
            for ($i = 1; $i <= $so_trang; $i++){
                echo '<li class="page-item"><a class="page-link" href="?url=trangchu&trang='.$i.'">'.$i.'</a></li>';
            }
            ?>
            <li class="page-item">
                <a class="page-link" href="#" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                </a>
            </li>
        </ul>
    </nav>
</div>