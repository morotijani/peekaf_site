<?php 
    require_once ("db_connection/conn.php");

    if (isset($_GET['delete']) && !empty($_GET['id'])) {

        if ($_GET['delete'] == 'contact') {
            $id = (int)$_GET['id'];
            $result = $conn->query("DELETE FROM peekaf_contact WHERE id = $id")->execute();
            if (isset($result)) {
                $_SESSION['flash_success'] = 'Contact message deleted!';
                redirect(PROOT . 'pa/contact');
            }
        }

        if ($_GET['delete'] == 'product') {
            $id = (int)$_GET['id'];
            if (unlink(BASEURL . 'assets/media/products/' . $_GET['image'])) {
                $result = $conn->query("DELETE FROM peekaf_product WHERE id = $id")->execute();
                if (isset($result)) {
                    $_SESSION['flash_success'] = 'Product deleted!';
                    redirect(PROOT . 'pa/product');
                }
            }
        }
    }

?>
<html>
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>ADMIN ~ PEE KAF</title>

    <link rel="shortcut icon" href="<?= PROOT; ?>assets/media/logo-1.png">
    <link rel="stylesheet" href="<?= PROOT; ?>assets/css/bootstrap.min.css">
    <link href="<?= PROOT; ?>assets/css/peekaf.css" rel="stylesheet">
</head>
<body>
	<div class="container">
        <p><?= $flash; ?></p>
        <?php if (isset($_GET['pa']) && $_GET['pa'] == 'about' && isset($_SESSION['admin_id'])):
            if (isset($_POST['sumit_about'])) {
                $updateAbout = "
                    UPDATE peekaf_about 
                    SET about = ? 
                    WHERE id = ?
                ";
                $statement = $conn->prepare($updateAbout);
                $result = $statement->execute([$_POST['about'], 1]);
                if (isset($result)) {
                    $_SESSION['flash_success'] = 'About us page updated!';
                    redirect(PROOT . 'pa/about');
                }
            }
        ?>
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <h2 class="text-center text-uppercase">Update About Us Page.</h2>
                    <a href="<?= PROOT; ?>pa/home"><< go back</a><br>
                    <a href="<?= PROOT; ?>about" target="_blank">visit about us page >></a>
                    <hr>
                    <form method="POST">
                        <div class="mb-2">
                            <label for="">Content</label>
                            <textarea type="text" class="form-control form-control-lg" rows="20" name="about" id="about"><?= $about_info; ?></textarea>
                        </div>
                        <button type="submit" name="sumit_about" class="btn btn-lg btn-outline-secondary">Update</button>
                        <a href="<?= PROOT; ?>pa/home" class="btn btn-lg btn-secondary">Cancel</a>
                    </form>
                </div>
            </div>
        <?php elseif (isset($_GET['pa']) && $_GET['pa'] == 'service' && isset($_SESSION['admin_id'])):
            if (isset($_POST['submit_service1'])) {
              $updateService1 = "
                    UPDATE peekaf_service 
                    SET title = ?, content = ? 
                    WHERE id = ?
                ";
                $statement = $conn->prepare($updateService1);
                $result = $statement->execute([$_POST['title1'], $_POST['content1'], 1]);
                if (isset($result)) {
                    $_SESSION['flash_success'] = 'Services updated!';
                    redirect(PROOT . 'pa/service');
                }
            }

            if (isset($_POST['submit_service2'])) {
              $updateService = "
                    UPDATE peekaf_service 
                    SET title = ?, content = ? 
                    WHERE id = ?
                ";
                $statement = $conn->prepare($updateService);
                $result = $statement->execute([$_POST['title2'], $_POST['content2'], 2]);
                if (isset($result)) {
                    $_SESSION['flash_success'] = 'Services updated!';
                    redirect(PROOT . 'pa/service');
                }
            }

            if (isset($_POST['submit_service3'])) {
              $updateService = "
                    UPDATE peekaf_service 
                    SET title = ?, content = ? 
                    WHERE id = ?
                ";
                $statement = $conn->prepare($updateService);
                $result = $statement->execute([$_POST['title3'], $_POST['content3'], 3]);
                if (isset($result)) {
                    $_SESSION['flash_success'] = 'Services updated!';
                    redirect(PROOT . 'pa/service');
                }
            }

            if (isset($_POST['submit_service4'])) {
              $updateService = "
                    UPDATE peekaf_service 
                    SET title = ?, content = ? 
                    WHERE id = ?
                ";
                $statement = $conn->prepare($updateService);
                $result = $statement->execute([$_POST['title4'], $_POST['content4'], 4]);
                if (isset($result)) {
                    $_SESSION['flash_success'] = 'Services updated!';
                    redirect(PROOT . 'pa/service');
                }
            }
        ?>
           <div class="row justify-content-center">
                <div class="col-md-8">
                    <h2 class="text-center text-uppercase">Update Service Page.</h2>
                    <a href="<?= PROOT; ?>pa/home"><< go back</a><br>
                    <a href="<?= PROOT; ?>services" target="_blank">visit service page >></a>
                    <hr>
                    <?php $row1 = $conn->query("SELECT * FROM peekaf_service WHERE id = 1")->fetchAll();;?>
                    <form method="POST">
                        <div class="mb-2">
                            <label for="">Title</label>
                            <input type="text" class="form-control form-control-lg" name="title<?= $row1[0]['id']; ?>" id="title<?= $row1[0]['id']; ?>" value="<?= $row1[0]['title']; ?>">
                        </div>
                        <div class="mb-2">
                            <label for="">Content</label>
                            <textarea type="text" rows="4" class="form-control form-control-lg" name="content<?= $row1[0]['id']; ?>" id="content<?= $row1[0]['id']; ?>"><?= $row1[0]['content']; ?></textarea>
                        </div>
                        <button type="submit" name="submit_service1" class="btn btn-lg btn-outline-secondary">Update</button>
                    </form>
                    <br><hr><br>
                    <?php $row2 = $conn->query("SELECT * FROM peekaf_service WHERE id = 2")->fetchAll();;?>
                    <form method="POST">
                        <div class="mb-2">
                            <label for="">Title</label>
                            <input type="text" class="form-control form-control-lg" name="title<?= $row2[0]['id']; ?>" id="title<?= $row2[0]['id']; ?>" value="<?= $row2[0]['title']; ?>">
                        </div>
                        <div class="mb-2">
                            <label for="">Content</label>
                            <textarea type="text" rows="4" class="form-control form-control-lg" name="content<?= $row2[0]['id']; ?>" id="content<?= $row2[0]['id']; ?>"><?= $row2[0]['content']; ?></textarea>
                        </div>
                        <button type="submit" name="submit_service2" class="btn btn-lg btn-outline-secondary">Update</button>
                    </form>
                    <br><hr><br>
                    <?php $row3 = $conn->query("SELECT * FROM peekaf_service WHERE id = 3")->fetchAll();;?>
                    <form method="POST">
                        <div class="mb-2">
                            <label for="">Title</label>
                            <input type="text" class="form-control form-control-lg" name="title<?= $row3[0]['id']; ?>" id="title<?= $row3[0]['id']; ?>" value="<?= $row3[0]['title']; ?>">
                        </div>
                        <div class="mb-2">
                            <label for="">Content</label>
                            <textarea type="text" rows="4" class="form-control form-control-lg" name="content<?= $row3[0]['id']; ?>" id="content<?= $row3[0]['id']; ?>"><?= $row3[0]['content']; ?></textarea>
                        </div>
                        <button type="submit" name="submit_service3" class="btn btn-lg btn-outline-secondary">Update</button>
                    </form>
                    <br><hr><br>
                    <?php $row4 = $conn->query("SELECT * FROM peekaf_service WHERE id = 4")->fetchAll();;?>
                    <form method="POST">
                        <div class="mb-2">
                            <label for="">Title</label>
                            <input type="text" class="form-control form-control-lg" name="title<?= $row4[0]['id']; ?>" id="title<?= $row4[0]['id']; ?>" value="<?= $row4[0]['title']; ?>">
                        </div>
                        <div class="mb-2">
                            <label for="">Content</label>
                            <textarea type="text" rows="4" class="form-control form-control-lg" name="content<?= $row4[0]['id']; ?>" id="content<?= $row4[0]['id']; ?>"><?= $row4[0]['content']; ?></textarea>
                        </div>
                        <button type="submit" name="submit_service4" class="btn btn-lg btn-outline-secondary">Update</button>
                    </form>
                </div>
            </div>
        <?php elseif (isset($_GET['pa']) && $_GET['pa'] == 'product' && isset($_SESSION['admin_id'])):
            if (isset($_POST['submit_product'])) {
                // code...
                $test = explode(".", $_FILES["file"]["name"]);
                $extention = end($test);
                $name1 = rand(100, 999);
                $name = $name1 . '.' . $extention;
                
                $location = BASEURL.'assets/media/products/'.$name;
                if(move_uploaded_file($_FILES["file"]["tmp_name"], $location)) {
                    $query = "
                        INSERT INTO peekaf_product (name, image) 
                        VALUES (?, ?)
                    ";
                    $statement = $conn->prepare($query);
                    $result = $statement->execute([$_POST['name'], $name]);
                    if ($result) {
                        $_SESSION['flash_success'] = 'New product added!';
                        redirect(PROOT . 'pa/product');
                    }
                }
            }
        ?>
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <h2 class="text-center text-uppercase">Products Page.</h2>
                    <a href="<?= PROOT; ?>pa/home"><< go back</a><br>
                    <a href="<?= PROOT; ?>products" target="_blank">visit products page >></a>
                    <hr>
                    <form method="POST" enctype="multipart/form-data">
                        <div class="mb-2">
                            <label for="">Product name</label>
                            <input type="text" class="form-control form-control-lg" name="name" id="name" required>
                        </div>
                        <div class="mb-2">
                            <label>Product image</label>
                            <input type="file" name="file" id="file" class="form-control form-control-lg" accept=".jpg, .png, .jpeg" required>
                        </div>
                        <button type="submit" name="submit_product" class="btn btn-lg btn-secondary">Add</button>
                    </form>
                    <br>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Image</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($product_result as $row): ?>
                            <tr>
                                <td><?= ucwords($row['name']); ?></td>
                                <td class="">
                                    <img src="<?= PROOT; ?>assets/media/products/<?= $row['image']; ?>" width="100" height="100" alt="" class="img-thumbnail">
                                </td>
                                <td><a href="<?= PROOT; ?>pa.php?delete=product&id=<?= $row['id']; ?>&image=<?= $row['image']; ?>">Delete</a></td>
                            </tr>
                        <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        <?php elseif (isset($_GET['pa']) && $_GET['pa'] == 'contact' && isset($_SESSION['admin_id'])): ?>
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <h2 class="text-center text-uppercase">Contacts.</h2>
                    <a href="<?= PROOT; ?>pa/home"><< go back</a><br>
                    <a href="<?= PROOT; ?>contact" target="_blank">visit contact us page >></a>
                    <table class="table table-lg table-stripped table-bordered mt-3">
                        <thead>
                            <tr>
                                <th></th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Subject</th>
                                <th>Message</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1; foreach ($conn->query("SELECT * FROM peekaf_contact ORDER BY id DESC")->fetchAll() as $row): ?>
                            <tr>
                                <td><?= $i; ?></td>
                                <td><?= ucwords($row['name']); ?></td>
                                <td><?= $row['email']; ?></td>
                                <td><?= $row['subject']; ?></td>
                                <td><?= $row['message']; ?></td>
                                <td><a href="<?= PROOT; ?>pa.php?delete=contact&id=<?= $row['id']; ?>">Delete</a></td>
                            </tr>
                        <?php $i++; endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        <?php elseif (isset($_GET['pa']) && $_GET['pa'] == 'home' && isset($_SESSION['admin_id'])):
            $error = '';
            if (isset($_POST['submit_form'])) {
                if (empty($_POST['email']) || empty($_POST['password'])) {
                    $error = 'You must provide email and password.';
                }
                if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
                    // code...
                    $error = 'Your email is invalid.';
                }
                if (strlen($_POST['password']) < 6) {
                    $error = 'Your password must be 6 or more character.';
                }
                if (!empty($error)) {
                    $error;
                } else {
                    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
                    $query = "
                        UPDATE peekaf_admin 
                        SET admin_email = ?, admin_password = ? 
                        WHERE admin_id = ?
                    ";
                    $statement = $conn->prepare($query);
                    $result = $statement->execute([sanitize($_POST['email']), $password, $_SESSION['admin_id']]);
                    if ($result) {
                        // code...
                        $_SESSION['flash_success'] = 'Login details changed successfully';
                        redirect(PROOT . 'pa/home');
                    }
                } 
            }
        ?>
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <h2 class="text-center text-uppercase">ADMIN PANEL.</h2>
                    <hr>
                    <a href="<?= PROOT; ?>pa/home" class="btn btn-lg btn-secondary">Home</a>
                    <a href="<?= PROOT; ?>pa/product" class="btn btn-lg btn-secondary">Product</a>
                    <a href="<?= PROOT; ?>pa/service" class="btn btn-lg btn-secondary">Service</a>
                    <a href="<?= PROOT; ?>pa/about" class="btn btn-lg btn-secondary">About</a>
                    <a href="<?= PROOT; ?>pa/contact" class="btn btn-lg btn-secondary">Contact</a>
                    <a href="<?= PROOT; ?>pa/logout" class="btn btn-lg btn-secondary">LOGOUT</a>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-md-4">
                    <h4 class="my-3">Change login details</h4>
                    <form method="POST">
                        <code class="mb-1"><?= $error; ?></code>
                        <div class="form-floating mb-2">
                            <input type="email" class="form-control" id="email" name="email" autocomplete="nope" required>
                            <label for="email">New Email address</label>
                        </div>
                        <div class="form-floating mb-2">
                            <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
                            <label for="password">New Password</label>
                        </div>
                        <button class="w-100 btn btn-lg btn-dark" type="submit" id="submit_form" name="submit_form">Update</button>
                    </form>
                </div>
            </div>

        <?php elseif (isset($_GET['pa']) && $_GET['pa'] == 'logout'):
            unset($_SESSION['admin_id']);
            redirect(PROOT . 'pa');
        ?>            

        <?php else:
            $error = '';

            if (isset($_POST['submit_form'])) {
                if (empty($_POST['admin_email']) || empty($_POST['admin_password'])) {
                    $error = 'You must provide email and password.';
                }
                $query = "
                    SELECT * FROM peekaf_admin 
                    WHERE admin_email = :admin_email 
                    LIMIT 1
                ";
                $statement = $conn->prepare($query);
                $statement->execute(['admin_email' => $_POST['admin_email']]);
                $count_row = $statement->rowCount();
                $result = $statement->fetchAll();

                if ($count_row < 1) {
                    $error = 'Unkown admin.';
                }

                foreach ($result as $row) {
                    if (!password_verify($_POST['admin_password'], $row['admin_password'])) {
                        $error = 'Unkown admin.';
                    }

                    if (!empty($error)) {
                        $error;
                    } else {
                        $admin_id = $row['admin_id'];
                        $_SESSION['admin_id'] = $admin_id;
                        $_SESSION['flash_success'] = 'Logged in successfully';
                        redirect(PROOT . 'pa/home');
                    }
                }
                
            }
        ?>
        <div class="row justify-content-center">
            <div class="col-md-4">
                <h2 class="text-center text-uppercase">LOGIN | ADMIN PANEL.</h2>
                <hr>
                <form method="POST">
                    <code class="mb-1"><?= $error; ?></code>
                    <div class="form-floating mb-2">
                        <input type="email" class="form-control" id="admin_email" name="admin_email" autocomplete="nope" autofocus>
                        <label for="admin_email">Email address</label>
                    </div>
                    <div class="form-floating mb-2">
                        <input type="password" class="form-control" id="admin_password" name="admin_password" placeholder="Password">
                        <label for="admin_password">Password</label>
                    </div>
                    <button class="w-100 btn btn-lg btn-dark" type="submit" id="submit_form" name="submit_form">Sign in</button>
                </form>
            </div>
        </div>
        <?php endif; ?>
    </div>




    <script src="<?= PROOT; ?>assets/js/jquery.min.js"></script>
    <script src="<?= PROOT; ?>assets/js/popper.min.js"></script>
    <script src="<?= PROOT; ?>assets/js/bootstrap.min.js"></script>
</body>
</html>