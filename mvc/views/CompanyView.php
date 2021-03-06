<?php
require_once("./mvc/core/ResourceFile.php");
$company = $data['company'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
    require_once "./mvc/views/components/CssLink.php";
    ?>
    <link rel="stylesheet" href="<?= $RESOURCE_URL ?>/css/company.css">
    <script src="https://kit.fontawesome.com/9b7bd019f1.js" crossorigin="anonymous"></script>
    <title>Document</title>
</head>

<body>
    <?php
    require_once "./mvc/views/components/Header.php";
    ?>
    <main class="main" style="padding-top: 65px">
        <main>
            <div id="main-content">
                <div class="main-content-div" id="basic-info-div">
                    <div id="background-avatar">
                        <img src="<?php if (isset($company['bg_image_url'])) {
                                        _url($company['bg_image_url']);
                                    } else {
                                        echo $RESOURCE_URL . "/images/img-29.jpg";
                                    }
                                    ?>">
                    </div>

                    <div id="main-avatar">
                        <img src="<?php if (isset($company['logo_url'])) {
                                        _url($company['logo_url']);
                                    } else {
                                        echo $RESOURCE_URL . "/images/thumb-20.png";
                                    }
                                    ?>">
                        <a class="edit-company" href="/MVCExample/Company/edit/<?= _e($company['id']) ?>"><i class="fas fa-pencil-alt"></i></a>
                    </div>


                    <div id="info">
                        <div id="company-info">
                            <h1 style="font-weight:bold;"><?php _e($company['name']) ?></h1>
                            <p><?php _e($company['tagline']) ?></p>
                            <span>Viet Nam</span>
                            <span><?php _e($company['company_size']) ?> Employees</span>
                        </div>
                    </div>

                    <div id="basic-info-follow" class="add-job delete-button">
                        Delete Profile
                    </div>

                    <div id="basic-info-nav">
                        <div><a href="#">Home</a></div>
                        <div><a href="#about">About</a></div>
                        <div><a href="#post">Posts</a></div>
                    </div>
                </div>

                <div class="main-content-div" id="about">
                    <h2 style="font-weight:bold;">About</h2>
                    <div id="about__detail">
                        <div id="about__detail__overview">
                            <h3>Overview</h3>
                            <div>Quality in higher education is not a simple one-dimensional
                                notion about academic quality. In view of the varied needs
                                and expectations of stakeholders, quality in higher education
                                can be said to be a multi-dimensional concept which should embrace
                                all its functions and activities.</div>

                        </div>
                        <div id="about__detail__specified">
                            <div class="about__detail__specified__tag">
                                Website
                            </div>
                            <div class="about__detail__specified__content">
                                <a href=""><?php _url($company['website']) ?></a>
                            </div>

                            <div class="about__detail__specified__tag">
                                Industry
                            </div>
                            <div class="about__detail__specified__content">
                                <?php _e($company['industry']) ?>
                            </div>

                            <div class="about__detail__specified__tag">
                                Company size
                            </div>
                            <div class="about__detail__specified__content">
                                <?php _e($company['company_size']) ?> employees
                            </div>

                            <div class="about__detail__specified__tag">
                                Type
                            </div>
                            <div class="about__detail__specified__content">
                                <?php _e($company['company_type']) ?>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="main-content-div" id="post">
                    <h2 style="font-weight:bold;">Jobs</h2>
                    <div id="page-post">

                    </div>
                </div>
        </main>

        <div class="main__content ads">
            <div class="quote" style="margin-top: -8%">
                <img src="<?= $RESOURCE_URL ?>/images/background_footer.jpeg" style="height: 100%;width: 100%; border-radius: 10px;">
            </div>
            <div class="suggest">
                <h3 Companies class="suggest__title">Companies</h3>

                <?php
                $companies = $data['companies'];
                foreach ($companies as $c) { ?>
                    <a class="suggest__link" href="/MVCExample/Company/detail/<?= _e($c['id']) ?>">
                        <div class="suggest__info">
                            <img class="suggest__info__avatar" src="<?php if (isset($c['logo_url'])) {
                                                                        _url($c['logo_url']);
                                                                    } else {
                                                                        echo $RESOURCE_URL . "/images/thumb-20.png";
                                                                    }
                                                                    ?>">
                            <h4 class="suggest__info__name"><?php _e($c['name']) ?></h4>
                        </div>
                    </a>
                <?php } ?>

            </div>

            <div class="web__info">
                <a href="#">About Us</a>
                <a href="#">Contact Us</a>
                <a href="#">Privacy Policy</a>
                <a href="#">Complaint Handling</a>
                <a href="#">Term & Conditions</a>
                <a href="#">Help Center</a>
                <a href="#">Advertising</a>
            </div>
        </div>
    </main>
    <script>
        $(document).ready(function() {
            $('.delete-button').click(function() {
                var id = <?= _e($company['id']) ?>

                $.get(`/MVCExample/Company/delete/${id}`, {}, function(data) {
                    window.location.href = "/MVCExample/CompanyList";
                    alert(data);
                });
            });
        });
    </script>
</body>

</html>