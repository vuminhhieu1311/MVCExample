<?php
require_once("mvc/core/ResourceFile.php")
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>JobsGo - Create Company</title>
    <?php
    require_once "mvc/views/components/CssLink.php";
    ?>
    <link rel="stylesheet" href="<?= $RESOURCE_URL ?>/css/create-company.css">
</head>

<body>
    <?php
    require_once "./mvc/views/components/Header.php";
    ?>

    <main>
        <div id="main__left">
            <div id="main__basic__info">
                <h2>Create Company</h2>
                <form id="main__basic__info__form">
                    <label for="name">Name *</label></br>
                    <input class="text-input" type="text" id="name" name="name" required></br>
                    <label for="website">Website *</label></br>
                    <input class="text-input" type="url" id="website" name="website" required></br>
                    <label for="companySize">Company size *</label></br>
                    <input class="text-input" type="text" id="companySize" name="companySize" required></br>
                    <label for="companyType">Company type *</label></br>
                    <input class="text-input" type="text" id="companyType" name="companyType" required></br>
                    <label for="tagLine">Tag line *</label></br>
                    <input class="text-input" type="text" id="tagLine" name="tagLine" required></br>
                    <label for="logo">Logo *</label></br>
                    <input type="file" id="logo" name="logo" accept="image/*" required></br>
                    <label for="background">Background *</label></br>
                    <input type="file" id="background" name="background" accept="image/*" required></br>
                    <div id="term__agree">
                        <div><input type="checkbox" id="term" name="term" required></div>
                        <div for="term">I verify that I am an authorized representative of this organization
                            and have the right to act on its behalf in the creation and management of this page.
                            The organization and I agree to the additional terms for Pages.</div>
                    </div>

                    <button type="submit">Create company</button>
                </form>
                <div id="filter__jobtitle">
                </div>
            </div>
        </div>

        <div id="main__right">
            <div class="main-content-div" id="basic-info-div">
                <div id="background-avatar">
                    <img src="<?= $RESOURCE_URL ?>/images/img-29.jpg" style="height: 200px;width: 100%;">
                </div>

                <div id="main-avatar">
                    <img src="<?= $RESOURCE_URL ?>/images/img-40.jpg" style="height: 90px;width: 90px;">
                </div>

                <div id="info">
                    <div id="company-info">
                        <h1>Name</h1>
                        <p>Slogan</p>
                        <span>Address</span>
                        <span>Followers</span>
                        <a href="#">Employees</a>
                    </div>
                </div>

                <div id="basic-info-follow">
                    <i class="fas fa-plus"></i>Follow
                </div>

                <div id="basic-info-nav">
                    <div><a href="#">Home</a></div>
                    <div><a href="#about">About</a></div>
                    <div><a href="#post">Posts</a></div>
                </div>
            </div>
        </div>
    </main>
</body>

</html>