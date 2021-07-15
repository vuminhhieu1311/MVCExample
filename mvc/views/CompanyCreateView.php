<?php
$RESOURCE_URI = '/MVCExample/resources';
$form = $data['form'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>JobsGo - Create Company</title>
    <?php require_once './mvc/views/components/CssLink.php'; ?>
    <link rel="stylesheet" href="<?= $RESOURCE_URI ?>/css/create-company.css">
</head>

<body>
    <?php require_once './mvc/views/components/Header.php'; ?>

    <main>
        <div id="main__left">
            <div id="main__basic__info">
                <h2>Create Company</h2>
                <form id="main__basic__info__form" method="post">
                    <label for="name">Name *</label></br>
                    <input 
                        class="text-input" 
                        type="text" 
                        id="name" 
                        name="name" 
                        value="<?= htmlspecialchars($form->name()) ?>"
                        required
                    >
                    </br>
                    <label for="website">Website</label></br>
                    <input 
                        class="text-input" 
                        type="url" 
                        id="website" 
                        name="website" 
                        value="<?= htmlspecialchars($form->website()) ?>"
                    >
                    </br>
                    <label for="industry">Industry</label></br>
                    <input 
                        class="text-input" 
                        type="text" 
                        id="industry" 
                        name="industry" 
                        value="<?= htmlspecialchars($form->industry()) ?>"
                    >
                    </br>
                    <label for="companySize">Company size</label></br>
                    <input 
                        class="text-input" 
                        type="text" 
                        id="companySize" 
                        name="company_size" 
                        value="<?= htmlspecialchars($form->companySize()) ?>"
                    >
                    </br>
                    <label for="companyType">Company type</label></br>
                    <input 
                        class="text-input" 
                        type="text" 
                        id="companyType" 
                        name="company_type" 
                        value="<?= htmlspecialchars($form->companyType()) ?>"
                    >
                    </br>
                    <label for="tagLine">Tag line</label></br>
                    <input 
                        class="text-input" 
                        type="text" 
                        id="tagLine" 
                        name="tagline"
                        value="<?= htmlspecialchars($form->tagline()) ?>"
                    >
                    </br>
                    <button type="submit">Submit</button>
                </form>
                <div id="filter__jobtitle">
                </div>
            </div>
        </div>

        <!-- <div id="main__right"> -->
            <!-- <div class="main&#45;content&#45;div" id="basic&#45;info&#45;div"> -->
            <!--     <div id="background&#45;avatar"> -->
            <!--         <img src="resources/images/img&#45;29.jpg" style="height: 200px;width: 100%;"> -->
            <!--     </div> -->
            <!--  -->
            <!--     <div id="main&#45;avatar"> -->
            <!--         <img src="resources/images/img&#45;40.jpg" style="height: 90px;width: 90px;"> -->
            <!--     </div> -->
            <!--  -->
            <!--     <div id="info"> -->
            <!--         <div id="company&#45;info"> -->
            <!--             <h1>Name</h1> -->
            <!--             <p>Slogan</p> -->
            <!--             <span>Address</span> -->
            <!--             <span>Followers</span> -->
            <!--             <a href="#">Employees</a> -->
            <!--         </div> -->
            <!--     </div> -->
            <!--  -->
            <!--     <div id="basic&#45;info&#45;follow"> -->
            <!--         <i class="fas fa&#45;plus"></i>Follow -->
            <!--     </div> -->
            <!--  -->
            <!--     <div id="basic&#45;info&#45;nav"> -->
            <!--         <div><a href="#">Home</a></div> -->
            <!--         <div><a href="#about">About</a></div> -->
            <!--         <div><a href="#post">Posts</a></div> -->
            <!--     </div> -->
            <!-- </div> -->
        <!-- </div> -->
    </main>
</body>

</html>
