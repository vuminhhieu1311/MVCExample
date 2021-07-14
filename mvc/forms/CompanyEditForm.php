<?php

require_once './mvc/forms/CompanyCreateForm.php';

class CompanyEditForm extends CompanyCreateForm
{
    private $companyId;

    public function __construct(
        int $companyId,
        string $name = '',
        string $website = '',
        string $industry = '',
        int $companySize = 0,
        string $companyType = '',
        // string $logoUrl = '',
        // string $bgImageUrl = '',
        string $tagline = ''
    ) {
        parent::__construct(
            $name,
            $website,
            $industry,
            $companySize,
            $companyType,
            $tagline
        );
        $this->companyId = $companyId;
    }

    public function companyId(): int
    {
        return $this->companyId;
    }
}
