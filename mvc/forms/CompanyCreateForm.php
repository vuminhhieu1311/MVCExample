<?php

require_once './mvc/core/Form.php';

class CompanyCreateForm extends Form
{
    private $name;
    private $website;
    private $industry;
    private $companySize;
    private $companyType;
    // private $logoUrl;
    private $tagline;
    // private $bgImageUrl;

    public function __construct(
        $name = '',
        $website = '',
        $industry = '',
        $companySize = 0,
        $companyType = '',
        // $logoUrl = '',
        // $bgImageUrl = '',
        $tagline = ''
    ) {
        $this->name = $name;
        $this->website = $website;
        $this->industry = $industry;
        $this->companySize = $companySize;
        $this->companyType = $companyType;
        // $this->logoUrl = $logoUrl;
        // $this->bgImageUrl = $bgImageUrl;
        $this->tagline = $tagline;
    }

    public function validate()
    {
        $this->errorMessages = [];
        $this->validateName();
        $this->validateWebsite();
        $this->validateCompanySize();
    }

    private function validateName()
    {
        if ($this->name === '') {
            $this->addErrorMessage('name', 'Name is required!');
        }
    }

    private function validateWebsite()
    {
        if ($this->website === '') {
            return;
        }

        if (!filter_var($this->website, FILTER_VALIDATE_URL)) {
            $this->addErrorMessage('website', 'Website is invalid!');
        }
    }

    private function validateCompanySize()
    {
        if (
            $this->companySize != 0 &&
            !filter_var($this->companySize, FILTER_VALIDATE_INT)
        ) {
            $this->addErrorMessage(
                'companySize',
                'Company size should be integer.'
            );
        }
    }

    public function name(): string
    {
        return $this->name;
    }

    public function website(): string
    {
        return $this->website;
    }

    public function industry(): string
    {
        return $this->industry;
    }

    public function companyType(): string
    {
        return $this->companyType;
    }

    public function companySize(): string
    {
        return $this->companySize;
    }

    public function tagline(): string
    {
        return $this->tagline;
    }

    // public function logoUrl()
    // {
    //     return $this->logoUrl;
    // }
    //
    // public function bgImageUrl()
    // {
    //     return $this->bgImageUrl;
    // }
}
