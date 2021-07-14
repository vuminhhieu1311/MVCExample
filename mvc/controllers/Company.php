<?php

require_once './mvc/forms/CompanyEditForm.php';

class Company extends Controller
{
    private $companyModel;

    function __construct()
    {
        $this->companyModel = $this->model('CompanyModel');
    }

    public function detail()
    {
        // View
        $this->view('CompanyView', []);
    }

    public function edit($param)
    {
        $form = null;
        $data = [];

        $requestMethod = $_SERVER['REQUEST_METHOD'];
        if ($requestMethod === 'GET') {
            $companyId = (int) $param;
            $company = $this->companyModel->getCompanyById($companyId);
            $form = new CompanyEditForm(
                $company['id'],
                $company['name'],
                $company['website'],
                $company['industry'],
                $company['company_size'],
                $company['company_type'],
                $company['tagline']
            );
        } elseif ($requestMethod === 'POST') {
            $form = new CompanyEditForm(
                $_POST['company_id'],
                $_POST['name'],
                $_POST['website'],
                $_POST['industry'],
                $_POST['company_size'],
                $_POST['company_type'],
                $_POST['tagline']
            );

            if ($form->isValid()) {
                $this->companyModel->updateCompany(
                    $form->companyId(),
                    $form->name(),
                    $form->website(),
                    $form->industry(),
                    $form->companySize(),
                    $form->companyType(),
                    $form->tagline()
                );
            }
        }

        $data['form'] = $form;
        $this->view('CompanyEditView', $data);
    }

    public function delete()
    {
        if (
            $_SERVER['REQUEST_METHOD'] === 'POST' &&
            isset($_POST['company_id']) &&
            filter_input(INPUT_POST, 'company_id', FILTER_VALIDATE_INT)
        ) {
            $this->companyModel->deleteCompany($_POST['company_id']);
        }
    }
}
