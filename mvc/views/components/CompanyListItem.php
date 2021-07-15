<li class="company" style="width: 550px">
    <a href="Company/detail/<?= _e($company['id']) ?>">
        <div class="company-logo">
            <img src="<?= _e($company['logo_url']) ?>" alt="logo">
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