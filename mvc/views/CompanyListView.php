<?php
$RESOURCE_URL = '/MVCExample/resources'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JobsGo - Companies</title>

    <?php require_once './mvc/views/components/CssLink.php'; ?>
    <link rel="stylesheet" href="<?= $RESOURCE_URL ?>/css/company-list.css">
</head>
<body>
    <?php require_once './mvc/views/components/Header.php'; ?>
    <main>
        <ul class="company-list">
            <?php
            $companies = $data['companies'];
            foreach ($companies as $company) {
                include './mvc/views/components/CompanyListItem.php';
            }
            ?>
        </ul>
    </main>
</body>
</html>
