<?php

require_once './mvc/forms/CompanyCreateForm.php';

class CompanyEditForm extends CompanyCreateForm
{
    private $companyId;

    public function __construct(
        $companyId,
        $name = '',
        $website = '',
        $industry = '',
        $companySize = 0,
        $companyType = '',
        $tagline = ''
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
