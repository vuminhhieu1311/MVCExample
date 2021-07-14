<?php

require_once './mvc/core/DB.php';

class CompanyModel
{
    private $connection;

    public function __construct()
    {
        $this->connection = DB::getConnection();
    }

    public function getAllCompanies(): ?array
    {
        $query = 'select * from companies';
        $statement = $this->connection->prepare($query);
        $statement->execute();

        $companies = $statement->get_result()->fetch_all(MYSQLI_ASSOC);
        $statement->free_result();

        return $companies;
    }

    public function getCompanyById(int $companyId): array
    {
        $query = 'select * from companies where id= ?';
        $statement = $this->connection->prepare($query);
        $statement->bind_param('i', $companyId);
        $statement->execute();

        $company = $statement->get_result()->fetch_assoc();
        $statement->free_result();

        return $company;
    }

    public function updateCompany(
        int $companyId,
        string $name,
        string $website,
        string $industry,
        int $companySize,
        string $companyType,
        string $tagline
    ): int {
        $query = '
            update companies
            set name = ?, 
                website = ?, 
                industry = ?,
                company_size = ?,
                company_type = ?,
                tagline = ?
            where id = ?';
        $statement = $this->connection->prepare($query);
        $statement->bind_param(
            'sssissi',
            $name,
            $website,
            $industry,
            $companySize,
            $companyType,
            $tagline,
            $companyId
        );
        $statement->execute();

        return $statement->affected_rows;
    }

    public function deleteCompany(int $companyId): int
    {
        $query = 'delete from companies where id = ?';
        $statement = $this->connection->prepare($query);
        $statement->bind_param('i', $companyId);
        $statement->execute();

        return $statement->affected_rows;
    }
}
