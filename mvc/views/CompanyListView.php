<?php
require_once("mvc/core/ResourceFile.php")
?>

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
        <ul class="company-list" style="margin-left: -4%">
            <?php
            $companies = $data['companies'];
            foreach ($companies as $company) {
                include './mvc/views/components/CompanyListItem.php';
            }
            ?>
        </ul>
    </main>
    <script>
        var message = document.querySelector(".alert-primary");
        setTimeout(() => {
            message.classList.remove("show");
        }, 3000);

        $(document).ready(function() {
            $('.button-delete').click(function() {
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