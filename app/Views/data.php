<div class="container-data">
    <div class="top">
        <h1>GÉNOME DE LA <span>DENGUE</span></h1>
        <p>Analyses de Séquences</p>
    </div>
    <div class="analyse">
        <p><img src="/desc.svg" alt=""> <?= $genome[0]['sequence_id']  . ' : ' . $genome[0]['description']?></p>
        <br>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Description</th>
                    <th>A%</th>
                    <th>T%</th>
                    <th>C%</th>
                    <th>G%</th>
                    <th>GC%</th>
                    <th>AT/GC Ratio</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><?= $genome[0]['sequence_id']?></td>
                    <td><?= $genome[0]['description']?></td>
                    <td><?= $genome[0]['percentA']?></td>
                    <td><?= $genome[0]['percentT']?></td>
                    <td><?= $genome[0]['percentG']?></td>
                    <td><?= $genome[0]['percentC']?></td>
                    <td><?= $genome[0]['gcContent']?></td>
                    <td><?= $genome[0]['atGcRatio']?></td>
                </tr>

            </tbody>
        </table>
    </div>
</div>

<style>
    .container-data{
        display: flex;
        flex-direction: column;
        height: 100vh;
        width: 100%;
        background-color: white;
        gap: 50px;
        justify-content: center;
        align-items: center;
    }
    .container-data .top{
        display: flex;
        flex-direction: column;
        width: 100%;
        background-color: white;
        gap: 0px;
        align-items: center;
    }
    .container-data h1{
        font-weight: 800;
        font-size: 3rem;
    }
    .container-data span {
        color: #AE264B;
    }
    .container-data .analyse p{
        display: flex;
        flex-direction: row;
        height: 20px;
        width: 100%;
        background-color: white;
    }
    .container-data .analyse p img{
        width: 20px;
        height: 20px;
    }
    table {
            width: 100%;
            border-collapse: collapse; /* Pour que les bordures des cellules se rejoignent */
        }

        th, td {
            border: 1px solid black; /* Ajoute une bordure autour des cellules */
            padding: 8px;
            text-align: center;
        }

        th {
            background-color: #f2f2f2; /* Couleur de fond des en-têtes */
        }

        tr:nth-child(even) {
            background-color: #f9f9f9; /* Alternance de couleur pour les lignes */
        }

        tr:hover {
            background-color: #e0e0e0; /* Couleur de fond lors du survol d'une ligne */
        }
</style>