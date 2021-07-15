<li class="company">
    <a href="Company/detail/<?= _e($company['id']) ?>">
        <div class="company-logo">
            <img src="<?php if (isset($company['logo_url'])) {
                            _url($company['logo_url']);
                        } else {
                            echo $RESOURCE_URL . "/images/thumb-20.png";
                        }
                        ?>" alt="logo">
        </div>
    </a>
    <div class="company-info">
        <a href="Company/detail/<?= _e($company['id']) ?>">
            <div class="company-name">
                <?= _e($company['name']) ?>
            </div>
        </a>
        <div class="company-website">
            <?= _e($company['website']) ?>
        </div>
    </div>
    <div class="admin-action">
        <a href="/MVCExample/Company/edit/<?= _e($company['id']) ?>">
            <button class="button-edit">
                Edit
                <i class="far fa-edit"></i>
            </button>
        </a>
        <button class="button-delete">
            Delete
            <i class="far fa-trash-alt"></i>
        </button>
    </div>
</li>