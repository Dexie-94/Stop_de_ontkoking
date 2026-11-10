<!doctype html>
<html lang="nl">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Food 4 Thought</title>
  <link rel="icon" type="image/svg+xml" href="./assets/food4thought_logo.png" />

  <script src="https://cdn.tailwindcss.com"></script>
  <script src="taliwind.config.js" defer></script>

  <style>
    @font-face {
      font-family: recept;
      src: url("./assets/georgiab.ttf");
    }

    @font-face {
      font-family: tekst;
      src: url(./assets/georgia.ttf);
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
        background-image: url(./assets/achtergrong.png);
        
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
         [mask-image:url('./assets/home-1-svgrepo-com.svg')]
         [mask-size:contain]
         [mask-repeat:no-repeat]
         [mask-position:center] w-8 mx-auto"></div>
      <span class="text-green-900">Home</span>
    </a>

    <img src="./assets/food4thought.svg" alt="logo" class="whiteshadow" />

    <a
      href="./beheerpagina.php"
      class=" px-2 py-2  font-semibold ">
      <div class="whiteshadow h-10 w-10 bg-green-900
         [mask-image:url('./assets/hat-chef-svgrepo-com.svg')]
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

  <!-- zoekbalk en favorieten knop -->
  <form method="get" action="./overzicht.php" class="flex flex-wrap gap-4 px-12 mb-8">
    <input
      type="text"
      name="zoek"
      value="<?= htmlspecialchars($zoek) ?>"
      placeholder="Zoek een recept op naam..."
      class="tekst border-2 border-gray-400/50 rounded-lg px-4 py-2 w-full md:w-96 bg-white/80" />

    <label class="tekst flex items-center gap-2 text-green-900">
      <input type="checkbox" name="favorieten" <?= $alleenFavorieten ? 'checked' : '' ?> />
      Alleen favorieten
    </label>

    <button type="submit" class="bg-green-900 text-white tekst px-6 py-2 rounded-lg hoverknop">Zoeken</button>

    <?php if ($zoek !== '' || $alleenFavorieten) { ?>
      <a href="./overzicht.php" class="tekst text-green-900 underline flex items-center">Wis filter</a>
    <?php } ?>
  </form>

  <div class="grid gap-6 px-12  w-full xs:grid-cols-1 md:grid-cols-2 xl:grid-cols-4">
    <?php if ($aantalrecepten > 0) { ?>
      <?php foreach ($recepten as $recept) { ?>
        <div
          class="grid font-band mx-auto border-2 border-solid shadow-xl rounded-3xl border-gray-400/30">
          <!-- dit is de img -->
          <div
            class="flex justify-center  w-full md:w-md lg:w-lg">
            <img
              src="<?= htmlspecialchars($recept['recept_image']) ?>"
              alt="<?= htmlspecialchars($recept['naamrecept']) ?>"
              class="rounded-t-3xl " />
          </div>
          <!-- dit is de tekst -->
          <div class=" px-4 py-4 ">

            <div class="flex justify-between items-start">
              <h3 class="text-[clamp(1.5rem,2.5vw,2rem)] tekst font-bold">
                <?= htmlspecialchars($recept['naamrecept']) ?>
              </h3>

              <!-- favoriet knop (hartje) -->
              <form method="post" action="./favoriet.php">
                <input type="hidden" name="recept_id" value="<?= $recept['id'] ?>" />
                <input type="hidden" name="terug" value="<?= htmlspecialchars($_SERVER['QUERY_STRING'] ?? '') ?>" />
                <button type="submit" title="Favoriet" class="cursor-pointer">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="h-8 w-8"
                    fill="<?= $recept['favoriet_id'] ? '#cb6526' : 'none' ?>" stroke="#cb6526" stroke-width="2">
                    <path d="M12 21s-7-4.5-9.5-9A5.5 5.5 0 0 1 12 6a5.5 5.5 0 0 1 9.5 6c-2.5 4.5-9.5 9-9.5 9z" />
                  </svg>
                </button>
              </form>
            </div>

            <p class="my-2 tekst text-[clamp(1rem,2vw,1.2rem)]"><?= htmlspecialchars($recept['beschrijving']) ?>
            </p>


            <!-- dit zijn de icoontjes -->
            <div class="grid grid-cols-[10rem_auto_3rem] mt-8">

              <div class="flex mb-0">
                <div class=" h-7 w-7 bg-gray-900
             [mask-image:url('./assets/clock-five-svgrepo-com.svg')]
             [mask-size:contain]
             [mask-repeat:no-repeat]
             [mask-position:start] "></div>

                <p class="text-[clamp(1rem,2vw,1.2rem)]  bold minfont mx-2"><?= (int) $recept['tijd'] ?> min</p>
              </div>


              <div class="flex">
                <?php if ($recept['vegan']) { ?>
                  <div class=" h-8 w-8 bg-green-900
             [mask-image:url('./assets/leaf-icon.svg')]
             [mask-size:contain]
             [mask-repeat:no-repeat]
             [mask-position:start] "></div>

                  <p class="text-[clamp(1rem,2vw,1.2rem)]  bold minfont ">Vegan</p>
                <?php } ?>
              </div>


              <div class="flex">
                <a href="./detail.php?id=<?= $recept['id'] ?>" class="h-12 hoverknop w-12 bg-green-900 cursor-pointer
             [mask-image:url('./assets/round-arrow-right-svgrepo-com.svg')]
             [mask-size:contain]
             [mask-repeat:no-repeat]
             [mask-position:start] "></a>
              </div>

            </div>
          </div>

        </div>
      <?php } ?>
    <?php } else { ?>
      <p class="tekst text-[clamp(1rem,2vw,1.2rem)]">Geen recepten gevonden.</p>
    <?php } ?>
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