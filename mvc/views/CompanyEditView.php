<?php
$RESOURCE_URL = '/MVCExample/resources';
$companyNameErrors = [];
$companyWebsiteErrors = [];
$companySizeErrors = [];

if (isset($data['successMessage'])) {
    $successMessage = $data['successMessage'];
}

$form = $data['form'];
$errorMessages = $form->getErrorMessages();
if (isset($errorMessages['name'])) {
    $companyNameErrors = $errorMessages['name'];
}
if (isset($errorMessages['website'])) {
    $companyWebsiteErrors = $errorMessages['website'];
}
if (isset($errorMessages['companySize'])) {
    $companySizeErrors = $errorMessages['companySize'];
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>JobsGo - Edit Company</title>
    <?php require_once './mvc/views/components/CssLink.php'; ?>
    <link rel="stylesheet" href="<?= $RESOURCE_URL ?>/css/create-company.css">
</head>

<body>
    <?php require_once './mvc/views/components/Header.php'; ?>

    <main>
        <div id="main__left">
            <div id="main__basic__info">
                <h2>Edit Company</h2>
                <?php if (isset($data['successMessage'])) { ?>
                    <h5 class="success-message">
                        <?= $data['successMessage'] ?>
                    </h5>
                <?php } ?>
                <form id="main__basic__info__form" method="post">
                    <input 
                        type="hidden" 
                        name="company_id" 
                        value="<?= htmlspecialchars($form->companyId()) ?>"
                    >
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
                    <?php foreach ($companyNameErrors as $errorMessage) { ?>
                        <div class="error-message">
                            <?= htmlspecialchars($errorMessage) ?>
                        </div>
                    <?php } ?>
                    <label for="website">Website</label></br>
                    <input 
                        class="text-input" 
                        type="url" 
                        id="website" 
                        name="website" 
                        value="<?= htmlspecialchars($form->website()) ?>"
                    >
                    </br>
                    <?php foreach ($companyWebsiteErrors as $errorMessage) { ?>
                        <div class="error-message">
                            <?= htmlspecialchars($errorMessage) ?>
                        </div>
                    <?php } ?>
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
                    <?php foreach ($companySizeErrors as $errorMessage) { ?>
                        <div class="error-message">
                            <?= htmlspecialchars($errorMessage) ?>
                        </div>
                    <?php } ?>
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
                    <!-- <label for="logo">Logo *</label></br> -->
                    <!-- <input type="file" id="logo" name="logo" accept="image/*"></br> -->
                    <!-- <label for="background">Background *</label></br> -->
                    <!-- <input type="file" id="background" name="background" accept="image/*"></br> -->

                    <button type="submit">Submit</button>
                </form>
                <div id="filter__jobtitle">
                </div>
            </div>
        </div>
    </main>
</body>

</html>
