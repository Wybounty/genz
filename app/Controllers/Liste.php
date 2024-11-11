<?php

namespace App\Controllers;

use App\Models\GenomeModel;
use DateTime;

class Liste extends BaseController
{
    public function index()
    {
        $this->getAllGenomes();
        echo view('entete');
        echo view('header');
        echo view('menu');
        echo view('liste');
        return view('footer');
    }

    public function getAllGenomes(){

        
        $genomes = new GenomeModel();

        $allGenomes = $genomes->getGenomes();

        return view('liste', ['genomes' => $allGenomes]);
    }

    public function getSelectedGenome($id_genome)
    {
        $genomeModel = new GenomeModel();
    
        $genome = $genomeModel->getGenomesById($id_genome);
    
        if ($genome) {
            echo view('entete');
            echo view('header');
            echo view('menu');
            echo view('data', ['genome' => $genome]);
            return view('footer');
        } else {
            return redirect()->to('/GENOMES')->with('error', 'Génome non trouvé');
        }
    }
    
}
