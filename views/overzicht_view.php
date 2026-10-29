<!doctype html>
<html lang="nl">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Food 4 Thought</title>
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
    .achter{
        background-image: url(../assets/achtergrong.png);
        
        background-position: center ;
        background-repeat: no-repeat;
        background-size: cover;
    }
    .whiteshadow {
      filter: drop-shadow(0 0 15px white);
      width: 150px;
      height: auto;
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

    .hoverknop:hover{
      scale: (1.5);
  background-color: #cb6526;
  transition: background-color 1s ease-in-out, transform 1s ease-out;
  transition: scale 1s ease-in;
    }
  </style>
</head>

<body
  class="min-h-screen achter flex flex-col "
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




  <!-- hier komt de data -->
  <!-- <div class="w-[100%] mx-full h-[3px] mt-4"></div> -->
  <!-- header -->
  <div class="max-w-[100%] px-12 py-8">
    <h1
      class="text-gray-900 filter1 recept text-[clamp(2rem,3vw,3rem)]"> Recepten
    </h1>
    <h1 class="tekst text-green-900 filter1 text-[clamp(1.2rem,2vw,2rem)]">Gezond, makkelijk en lekkere recepten</h1>
  </div>

  <div class="grid gap-6 px-12  w-full xs:grid-cols-1 md:grid-cols-2 xl:grid-cols-4">
    <!-- dit is de img -->
    <div
      class="grid font-band mx-auto border-2 border-solid shadow-xl rounded-3xl border-gray-400/30">
      <div
        class="flex justify-center  w-full md:w-md lg:w-lg">
        <img
          src="../assets/csscardtest.png"
          alt="eten"
          class="rounded-t-3xl " />
      </div>
      <!-- dit is de tekst -->
      <div class=" px-4 py-4 ">

        <h3 class="text-[clamp(1.5rem,2.5vw,2rem)] tekst font-bold">
          Pasta uit de oven
        </h3>
        <p class="my-2 tekst text-[clamp(1rem,2vw,1.2rem)]">Simpele pasta met ketchup, kaas enplatte peterselie.<br> Lekker uit een ovenschaal.
        </p>


        <!-- dit zijn de icoontjes -->
        <div class="grid grid-cols-[10rem_auto_3rem] mt-8">

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


          <div class="flex">
            <a href="../detail.php" class="h-12 hoverknop w-12 bg-green-900 cursor-pointer
         [mask-image:url('../assets/round-arrow-right-svgrepo-com.svg')]
         [mask-size:contain]
         [mask-repeat:no-repeat]
         [mask-position:start] "></a>
          </div>

        </div>
      </div>

    </div>




<!-- aaa -->

  </div>
    



    <footer
    class="max-w-full mx-auto font-semibold bg-oklch(27.4% 0.072 132.109) w-full  beneden sm:mt-4 bottom-0 left-0 right-0">
    <p
      class="text-[clamp(1.15rem,1.5vw,1.5rem)] flex justify-center text-green-900">
      <br /><br /><br />&copy;Food 4 Thought 2026
    </p>
</footer>
      <script src="https://cdn.jsdelivr.net/npm/gsap@3.15/dist/gsap.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/gsap@3.15/dist/ScrollTrigger.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/gsap@3.15/dist/ScrollSmoother.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/gsap@3.15/dist/SplitText.min.js"></script>
      
  </body>
</html>