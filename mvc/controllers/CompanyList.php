<?php

class CompanyList extends Controller
{
    private $companyModel;

    public function __construct()
    {
        $this->companyModel = $this->model('CompanyModel');
        $companies = $this->companyModel->getAllCompanies();

        $this->view('CompanyListView', ['companies' => $companies]);
    }
}
