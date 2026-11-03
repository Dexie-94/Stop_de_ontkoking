<!doctype html>
<html lang="nl">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Recept</title>
  <link rel="icon" type="image/svg+xml" href="../assets/food4thought.svg" />

  <script src="https://cdn.tailwindcss.com"></script>
  <script src="taliwind.config.js" defer></script>

  <style>
    @font-face {
      font-family: recept;
      src: url("../assets/georgiab.ttf");
    }

    @font-face {
      font-family: tekst;
      src: url(../assets/georgia.ttf);
    }

    .recept {
      font-family: recept;
    }
    .achter{
        background-image: url(../assets/achtergrong.png);
        
        background-position: center ;
        background-repeat: no-repeat;
        background-size: cover;
    }
    

    .tekst {
      font-family: tekst;
    }

    .minfont {
      font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
    }

    body {
      width: 100dvw;
      height: 100dvh;
      overflow-X:hidden;
    }
    .achtergrond{
      background-color: #fcf7f0;
    }

    body::selection {
      color: #cb6526;
    }

    .whiteshadow {
      filter: drop-shadow(0 0 15px white);
      width: 150px;
      height: auto;
    }
    .niks{
        visibility: hidden;
    }
    .hoverrood:hover{
        color: red;
    }
    .hoverknop:hover{
      scale: (1.5);
  background-color: #cb6526;
  transition: background-color 1s ease-in-out, transform 1s ease-out;
  transition: scale 1s ease-in;
    }
    .formulierbg{
        background-image: url(../assets/achtergrond.svg);
        background-position: end;
        background-repeat: no-repeat;
    }
    .beneden{
       margin-top: auto;
    width: 100%;
    padding: 20px;
    text-align: center;
    box-sizing: border-box;
    }
    .filter1{
        filter:drop-shadow(1px 1px 1px white);
    }
    .iconblad{
    mask-image:url('../assets/leaf-icon.svg');
    mask-size:contain;
    mask-repeat:no-repeat;
    mask-position:start;
    background-color: darkgreen;
    margin:20px;

    }
  </style>
    
<body
  class="min-h-screen achtergrond achter  flex flex-col "
  >
  <nav
    class="flex items-center border-b border-gray-900/40 justify-between px-2 px-6 bg-gray-100/30 backdrop-blur-xs sticky top-0 z-50">

    <!--<div
        class="flex gap-2 space-x-20 text-[clamp(0.7rem,2vw,1.20rem)] sm:px-8 md:px-6 md:gap-4"
      >-->
    <a
      href="./overzicht.php"
      class=" px-2 py-2  font-semibold ">
      <div class="whiteshadow h-10 w-10 bg-green-900
         [mask-image:url('../assets/home-1-svgrepo-com.svg')]
         [mask-size:contain]
         [mask-repeat:no-repeat]
         [mask-position:center] w-8 mx-auto"></div>
      <span class="text-green-900">Home</span>
    </a>

    <img src="../assets/food4thought.svg" alt="logo" class="whiteshadow" />

    <a
      href="../beheerpagina.php"
      class=" px-2 py-2  font-semibold ">
      <div class="whiteshadow h-10 w-10 bg-green-900
         [mask-image:url('../assets/hat-chef-svgrepo-com.svg')]
         [mask-size:contain]
         [mask-repeat:no-repeat]
         [mask-position:center] w-12 mx-auto"></div>
      <span class="text-green-900">Profiel</span>
    </a>
    <!--</div>-->
  </nav>


  
    <div class="grid  xs:grid-cols-1 md:grid-cols-2 xl:grid-cols-2">

    <div class="justify-items-center">
    <img class="w-[90%] h-[90%] bg-green-900/40 p-4  rounded-lg m-4" src="../assets/csscardtest.png">
    </div>

    <div class=" rounded shadow m-4  ">
    <p class="text-[clamp(1.45rem,1.5vw,1.7rem)] font-bold recept flex mt-4 justify-center">receptnaam</p>
    <p class="p-8">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ad, animi impedit provident tempore expedita, doloribus explicabo nesciunt illum quasi dolorem quae quaerat, amet sit quam unde nobis tenetur voluptatum dolor!</p>
    </div>



        </div>
    <div class="border-t-8 h-auto border-gray-400 shadow m-4 border-double  ">

        <div class="flex w-full around">
    <p class="font-bold tekst justify-start mx-12 text-[clamp(1.35rem,1.5vw,1.7rem)] mt-12">Ingredienten</p>
     <div class="grid grid-cols-[7rem_auto_2rem] justify-end w-full mt-8">

          <div class="flex mb-0">
            <div class=" h-7 w-7 bg-gray-900
         [mask-image:url('../assets/clock-five-svgrepo-com.svg')]
         [mask-size:contain]
         [mask-repeat:no-repeat]
         [mask-position:start] "></div>

            <p class="text-[clamp(1rem,2vw,1.2rem)]  bold minfont mx-2">20 min</p>
          </div>

          <div class="flex">
            <div class=" h-8 w-8 bg-green-900
         [mask-image:url('../assets/leaf-icon.svg')]
         [mask-size:contain]
         [mask-repeat:no-repeat]
         [mask-position:start] "></div>

            <p class="text-[clamp(1rem,2vw,1.2rem)]  bold minfont ">Vegan</p>
          </div>

          </div>

    </div>

    
    <ul >
      <li class="iconblad text-gray-900">iets</li>
      <li class="iconblad">iets</li>
      <li ></li>
    </ul>

          



    </div>


    <div class="flex justify-center">
    <a href="../overzicht.php" class="bg-green-900 text-white p-4 justify-center flex hoverknop w-[10%] rounded-lg text-[clamp(1.2rem,1.5vw,1.3rem)] cursor-pointer tekst"><span class="h-10 bg-white w-8 text-red-900  cursor-pointer
         [mask-image:url('../assets/flip-backward-svgrepo-com.svg')]
         [mask-size:contain]
         [mask-repeat:no-repeat]
         [mask-position:start] "></span> Terug</a>
    </div>









<footer
    class="max-w-full mx-auto font-semibold bg-oklch(27.4% 0.072 132.109) w-full  beneden sm:mt-4 bottom-0 left-0 right-0">
    <p
      class="text-[clamp(1.15rem,1.5vw,1.5rem)] flex justify-center text-green-900">
      <br /><br /><br />&copy;Food 4 Thought 2026
    </p>
</footer>




</body>
</html>