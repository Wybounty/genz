<div class="liste-genomes">
    <h1>BANK DISPONIBLE</h1>
    <div class="genomes">
    <?php if (!empty($genomes)): ?>
        <?php foreach ($genomes as $genome): ?>
        <a href="<?= site_url('GENOMES/DATA/' . $genome['id']) ?>" id="linkcontent">
            <div class="content">
                <div class="items">
                    <p id="sequence"><?= $genome['sequence_id'] ?></p>
                    <p id="desc"><?= $genome['description'] ?></p>
                </div>
            </div>
        </a>
    <?php endforeach; ?>
    <?php else: ?>
        <p>Aucun genomes trouvées trouvé.</p>
    <?php endif; ?>
    </div>
</div>

<style>
    .liste-genomes{
        display: flex;
        flex-direction: column;
        height: 120vh;
        width: 100%;
        background-color: white;
        gap: 50px;
        justify-content: center;
        align-items: center;
    }
    .liste-genomes .genomes{
        display: grid;
        grid-template-columns: 1fr 1fr 1fr;
        height: 700px;
        width: 80%;
    }
    .liste-genomes #linkcontent{
        text-decoration: none;
        color: black;
    }
    .liste-genomes .genomes .content{
        display: flex;
        flex-direction: column;
        background-color: #d9d9d959;
        border-radius: 8px;
        justify-content: center;
        align-items: center;
        height: 150px;
        width: 90%;
        overflow: hidden;
        margin-bottom: 20px;
        transition: background-color 0.5s, color 0.5s;
        &:hover{
            background-color: #AE264B;
            color: white;
        }
    }
    .liste-genomes .genomes .content .items{
        width: 80%;
    }
    .liste-genomes .genomes .content #sequence{
        font-weight: 800;
        font-size: 1.3rem;
    }
    .liste-genomes .genomes .content #desc{
        font-weight: 500;
        font-size: 1rem;
        width: 100%;
    }
    .liste-genomes h1{
        font-size: 2.5rem;
        font-weight: 900;
        color: #AE264B;
    }
</style>