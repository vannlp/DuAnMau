<!doctype html>
<html lang="vi">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../public/css/style.css">
</head>

<body>
    <div class="container">
        <!-- phần header -->
        <?php require_once "../blog/header.php" ?>
        <!-- phần menu -->
        <?php require_once "../blog/menu.php" ?>
        <main>
            <div class="row">
                <div class="col-xl-9 col-md-12">
                    <?php
                    if (isset($page)) {
                        require_once $page;
                    }
                    ?>
                </div>
                <aside class="col-xl-3 col-md-12">
                    <?php if (isset($_SESSION['login'])) { ?>
                        <div class="account">
                            <h3 class="account__title">TÀI KHOẢN</h3>
                            <div class="account__login row">
                                <div class="col-12">
                                    <img src="<?= $URL_IMG . $_SESSION['login']['hinh'] ?>" alt="" style="width: 100%;">
                                </div>
                                <div class="col-12">
                                    <h4><?= $_SESSION['login']['ho_ten'] ?></h4>
                                    <ul>
                                        <li><a href="../tai-khoan?url=change-account">Quản lý tài khoản</a></li>
                                        <li><a href="../tai-khoan?url=dang-xuat">Đăng xuất</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                    <?php if (!isset($_SESSION['login'])) { ?>
                        <div class="account">
                            <h3 class="account__title">TÀI KHOẢN</h3>
                            <div class="account__login">
                                <form action="../tai-khoan?url=login" method="post">
                                    <div class="form-group">
                                        <label for="">Tên đăng nhập</label>
                                        <input type="text" name="username" id="" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Mật khẩu</label>
                                        <input type="password" name="pass" id="" class="form-control">
                                    </div>
                                    <div class="account__remember">
                                        <input type="checkbox" name="" id="" class="account__remember-checkbox">Ghi nhớ đăng nhập
                                    </div>
                                    <button type="submit" class="btn btn-primary" name="submit">Đăng nhập</button>
                                </form>
                            </div>
                            <div class="account__forget">
                                <ul>
                                    <li><a href="../tai-khoan?url=forget-pass" class="account__link">Quên mật khẩu</a></li>
                                    <li><a href="../tai-khoan?url=register" class="account__link">Đăng ký thành viên</a></li>
                                </ul>
                            </div>
                        </div>
                    <?php } ?>

                    <?php require_once "../blog/danh-muc.php" ?>
                    <?php require_once "../blog/hang-xem-nhieu.php" ?>
                </aside>
            </div>
        </main>
        <?php require_once "../blog/footer.php" ?>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>