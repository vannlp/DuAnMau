<?php
require_once '../model/LoaiModel.php';
$data['loai'] = getLoai();
?>
<div class="category">
    <h4 class="category__h4">DANH MỤC</h4>
    <ul class="category__ul">
        <?php
        foreach ($data['loai'] as $values) {
            echo '
            <li class="category__li"><a href="../search?danh-muc=' . $values['ma_loai'] . '" class="category__link">' . $values['ten_loai'] . '</a></li>
            ';
        }
        ?>
    </ul>
    <form action="../search/?search" method="post" class="search">
        <div class="form-group">
            <input type="search" name="search" id="" class="search__input" placeholder="tìm kiếm...">
            <button class="search__btn" type="submit">OK</button>
        </div>
    </form>
</div>