<div class="menu" id="menu">
    <div class="top">
        <h1>MENU</h1>
    </div>
    <div class="pages">
        <a href="/">ACCUEIL.</a>
        <a href="#about">GENOMES.</a>
    </div>
    <div class="bottom" class="links">
        <a  href="/login">LOGIN</a>   
    </div>
</div>

<style>
.menu{
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    align-items: center;
    height: 100vh;
    width: 400px;
    background-color: black;
    position: fixed;
    right: -440px;
    z-index: 3;
    transition: left 0.5s ease;
}
.menu .top{
    display: flex;
    flex-direction: row;
    justify-content: flex-end;
    width: 80%;
    margin-top: 20px;
}
.menu h1{
    display: flex;
    justify-content: center;
    font-weight: 700;
    font-size: 3.5rem;
    color: white;
}
.menu .bottom a{
    display: flex;
    flex-direction: row;
    justify-content: flex-end;
    width: 80%;
    font-size: 2rem;
    font-weight: 600;
}
.menu .bottom{
    display: flex;
    flex-direction: row;
    width: 100%;
    height: 100px;
    justify-content: center;
    align-items: center;
    text-decoration: none;
    gap: 20px;
}
.menu a{
    color: #FB5607;
}
.menu .pages{
    display: flex;
    flex-direction: column;
    align-items: flex-end;
    gap: 40px;
    width: 80%;
    min-height: 300px;
}
.menu .pages a{
    text-decoration: none;
    color: white;
    font-size: 2rem;
    font-weight: 600;
    transition: color 0.3s ease;
    position: relative;
    &:hover::after {
        transform: scaleX(1);
    }
    &::after {
        content: '';
        position: absolute;
        left: 0;
        bottom: 0;
        height: 2px;
        width: 100%;
        background-color: white;
        transform: scaleX(0);
        transform-origin: left;
        transition: transform 0.5s ease;
    }
}
</style>
