<div class="container-home">
    <div class="top">
        <h1>GENZ.<span>DATA</span></h1>
        <p>Programme d'Analyse du Génome</p>
    </div>
    <div class="bottom">
        <div class="letters-effect">
            <p id="left">GTACTGAACTGTCGAATGCTTAGCGCTTACGGAATCTGCCGTAATCGGCTA</p>
            <p id="right">TAGGCTAACGTGCTTGGCTAGATCAGGTTGCAACCTAGGCTTGACTTCCA</p>
            <p id="left">CCGTAAGCTAGGTAGCTAACCGTGTACGATTGCGTAGCCGTAGTGGCCGT</p>
            <p id="right">ATGCAGTTGACGCTGGTACCGATAGGCTTGAAGCTTACCAGGTGCGTTAG</p>
            <p id="left">CGTACGGCTTAAAGTGCGTACAGGTAGTCCGGAACCGTGTAATCCGGTAC</p>
        </div>
        <a href="/GENOMES">Entrer</a>
    </div>
</div>

<style>
.container-home{
    display: flex;
    flex-direction: column;
    height: 100vh;
    width: 100%;
    background-color: white;
    justify-content: center;
    align-items: center;
}
.container-home .bottom{
    display: flex;
    flex-direction: column;
    width: 100%;
    min-height: 400px;
    justify-content: center;
    align-items: center;
    gap: 20px;
}
.container-home .bottom .letters-effect {
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    align-items: center;
    width: 400px;
    height: 200px;
    background-color: #d9d9d959;
    border-radius: 8px;
    overflow: hidden;
    position: relative;
}

.container-home .bottom .letters-effect p {
    display: flex;
    white-space: nowrap;
    font-weight: 700;
    font-size: 1.8rem;
    width: 100%;
    position: relative;
}

.container-home .bottom .letters-effect #left {
    animation: scroll-left 10s linear infinite;
}

.container-home .bottom .letters-effect #right {
    animation: scroll-right 10s linear infinite;
}

@keyframes scroll-left {
    0% {
        transform: translateX(0);
    }
    100% {
        transform: translateX(-100%);
    }
}

@keyframes scroll-right {
    0% {
        transform: translateX(-100%);
    }
    100% {
        transform: translateX(0);
    }
}

#left, #right {
    display: inline-block;
    padding-right: 100%;
}

.container-home .bottom a{
    display: flex;
    color: white;
    background-color: #AE264B;
    width: 150px;
    height: 50px;
    justify-content: center;
    align-items: center;
    text-decoration: none;
    font-weight: 700;
    font-size: 1.4rem;
    border-radius: 50px;
    &:hover{
        transition: background-color 0.4s;
        background-color: #d3335e;
    }
}
.container-home .top{
    display: flex;
    flex-direction: column;
    width: 100%;
    height: 200px;
    justify-content: center;
    align-items: center;
}
.container-home .top h1{
    color: #252525;
    font-size: 6rem;
    font-weight: 800;
}
.container-home .top h1 span{
    color: #AE264B;
    font-family: 'XG pixo', sans-serif;
    font-size: 6.8rem;
}
.container-home .top p{
    font-weight: 700;
    margin-top: -20px;
}
</style>