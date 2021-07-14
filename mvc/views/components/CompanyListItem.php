<li class="company">
    <div class="company-logo">
        <img src="<?= htmlspecialchars($company['logo_url']) ?>" alt="logo">
    </div>
    <div class="company-info">
        <div class="company-name">
            <?= htmlspecialchars($company['name']) ?>
        </div>
        <div class="company-website">
            <?= htmlspecialchars($company['website']) ?>
        </div>
    </div>
    <div class="admin-action">
        <a href="/MVCExample/Company/edit/<?= htmlspecialchars(
            $company['id']
        ) ?>" >
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
