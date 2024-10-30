<?php

namespace App\Controllers;

use App\Models\GenomeModel;

class GenomeController extends BaseController
{
    public function index()
    {
        $genomeModel = new GenomeModel();
        
        // Exemple de récupération de tous les enregistrements de la table genome
        $genomes = $genomeModel->findAll();

        // Envoi des données à la vue
        return view('genome_view', ['genomes' => $genomes]);
    }
}
