<?php

namespace App\Models;

use CodeIgniter\Model;

class OrangModel extends Model
{
    protected $table = 'orang';
    protected $useTimestamps = true;
    protected $allowedFields = ['name', 'alamat'];


    public function search($keyword)
    {
        // $builder = $this->table('orang');
        // $builder->like('name', $keyword);
        // return $builder;

        return $this->table('orang')->like('name', $keyword)->orLike('address', $keyword);
    }
}
