<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <script src="/effect.js" defer async></script>
        <title>GENZ</title>
    </head>
    <body class="landing is-preload">
        <div id="page-wrapper">
            <!-- Header -->
            <header>
                <nav>
                    <p></p>
                    <h1>GENZ.<span>DATA</span></h1>
                    <label class="hamburger" id="button-menu">
                        <input type="checkbox">
                        <svg viewBox="0 0 32 32">
                            <path class="line line-top-bottom" d="M27 10 13 10C10.8 10 9 8.2 9 6 9 3.5 10.8 2 13 2 15.2 2 17 3.8 17 6L17 26C17 28.2 18.8 30 21 30 23.2 30 25 28.2 25 26 25 23.8 23.2 22 21 22L7 22"></path>
                            <path class="line" d="M7 16 27 16"></path>
                        </svg>
                    </label>
                </nav>
            </header>


<style>
@import url('https://fonts.cdnfonts.com/css/satoshi');

html{
    font-family: 'Satoshi', sans-serif;
    scroll-behavior: smooth;
}
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}
body{
    width: 100%;
}
/* From Uiverse.io by JulanDeAlb */ 
.hamburger {
    cursor: pointer;
  }
  
  .hamburger input {
    display: none;
  }
  
  .hamburger svg {
    /* The size of the SVG defines the overall size */
    height: 3em;
    /* Define the transition for transforming the SVG */
    transition: transform 600ms cubic-bezier(0.4, 0, 0.2, 1);
  }
  .line {
    fill: none;
    stroke: white;
    stroke-linecap: round;
    stroke-linejoin: round;
    stroke-width: 3;
  }
  
  .line-top-bottom {
    stroke-dasharray: 12 63;
  }
header{
    display: flex;
    flex-direction: row;
    justify-content: center;
    align-items: center;
    width: 100%;
    min-height: 70px;
    height: 70px;
    background-color: #252525;
    color: white;
    position: fixed;
    z-index: 3;
}
nav{
    display: flex;
    flex-direction: row;
    height: 100%;
    width: 80%;
    justify-content: space-between;
    align-items: center;
}
nav .right{
    display: flex;
    flex-direction: row;
    gap: 20px;
    width: 350px;
    justify-content: center;
    align-items: center;
}
header a{
    color: white;
    text-decoration: none;
}
nav .right a{
    display: flex;
    flex-direction: row;
    width: 100px;
    height: 35px;
    background-color: white;
    color: black;
    justify-content: center;
    align-items: center;
    border-radius: 50px;
    font-weight: 700;
}
nav h1{
    color: white;
    font-family: 'Satoshi', sans-serif;
}
nav span {
    color: #AE264B;
    font-family: 'XG pixo', sans-serif;
    font-size: 1.7rem;
    margin-top: -1px;
}
</style>