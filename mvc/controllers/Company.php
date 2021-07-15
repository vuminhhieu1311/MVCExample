<?php

require_once './mvc/forms/CompanyCreateForm.php';
require_once './mvc/forms/CompanyEditForm.php';

class Company extends Controller
{
    private $companyModel;

    function __construct()
    {
        $this->companyModel = $this->model('CompanyModel');
    }

    public function detail($companyId)
    {
        $company = $this->companyModel->getCompanyById($companyId);
        $companies = $this->companyModel->getAllCompanies();

        $this->view('CompanyView', [
            'company' => $company,
            'companies' => $companies,
        ]);
    }

    public function create()
    {
        $form = null;
        $data = [];

        $requestMethod = $_SERVER['REQUEST_METHOD'];
        if ($requestMethod === 'POST') {
            $form = new CompanyCreateForm(
                $_POST['name'],
                $_POST['website'],
                $_POST['industry'],
                $_POST['company_size'],
                $_POST['company_type'],
                $_POST['tagline']
            );
            if ($form->isValid()) {
                $this->companyModel->createCompany(
                    $form->name(),
                    $form->website(),
                    $form->industry(),
                    $form->companySize(),
                    $form->companyType(),
                    $form->tagline()
                );
            }
        }

        if ($form === null) {
            $form = new CompanyCreateForm();
        }

        $data['form'] = $form;
        $this->view('CompanyCreateView', $data);
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

    public function delete($companyId)
    {
        if (
            filter_var($companyId, FILTER_VALIDATE_INT) === 0 ||
            !filter_var($companyId, FILTER_VALIDATE_INT) === false
        ) {
            $result = $this->companyModel->deleteCompany($companyId);

            if($result === 1) {
                echo "You have deleted this profile successfully!";
            } else {
                echo "An error occurs while you are trying to delete this profile";
            }
        }
    }
}
