<?php

namespace App\Models;

use CodeIgniter\Model;

class GenomeModel extends Model
{
    protected $table = 'genomes';
    protected $primaryKey = 'id_genome';

    protected $allowedFields = [
        'sequence_id', 'description', 'percentA', 'percentT', 'percentC', 'percentG', 'gcContent', 'atGcRatio'
    ];

    protected $useTimestamps = false;

    protected $validationRules = [
        'sequence_id'   => 'required|max_length[50]',       // Adapté pour stocker un identifiant de séquence
        'description'   => 'required|min_length[3]|max_length[255]',
        'percentA'      => 'required|decimal|greater_than_equal_to[0]|less_than_equal_to[100]',
        'percentT'      => 'required|decimal|greater_than_equal_to[0]|less_than_equal_to[100]',
        'percentC'      => 'required|decimal|greater_than_equal_to[0]|less_than_equal_to[100]',
        'percentG'      => 'required|decimal|greater_than_equal_to[0]|less_than_equal_to[100]',
        'gcContent'     => 'required|decimal|greater_than_equal_to[0]|less_than_equal_to[100]',
        'atGcRatio'     => 'required|decimal|greater_than_equal_to[0]',
    ];
    
    public function getGenomes()
    {
        return $this->findAll();
    }

    public function insertGenome($data)
    {
        return $this->insert($data);
    }


    public function getGenomesById($id_genome)
    {
        return $this->where('id', $id_genome)->find();
    }
}
