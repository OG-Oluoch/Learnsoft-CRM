<?php

namespace App\Repositories;

use App\Models\clients;
use App\Repositories\BaseRepository;

class clientsRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'first_name',
        'second_name',
        'phone_numbers',
        'customer_email',
        'location',
        'company_name'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return clients::class;
    }
}
