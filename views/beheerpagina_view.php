<!doctype html>
<html lang="nl">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Inloggen</title>
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
    .hoverknop:hover{
      scale: (1.5);
  background-color: #cb6526;
  transition: background-color 1s ease-in-out, transform 1s ease-out;
  transition: scale 1s ease-in;
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

    <div class="max-w-[100%] px-12 py-8 ">
    <h1
      class="text-gray-900 filter1  recept text-[clamp(1.8rem,3vw,3rem)]"> Log in om je recepten te beheren
    </h1>
    <h1 class="tekst text-green-900 filter1 text-[clamp(1.2rem,2vw,2rem)]">Gezond, makkelijk en lekkere recepten</h1>
  </div>




<div class="grid   w-full lg:grid-cols-2">

<div
      class="flex justify-end font-bold tekst text-[clamp(1.3rem,2vw,1.8rem)] order-2  mx-auto my-auto ">
      <p>────────────୨ৎ────────────<br><br>
<span class="text-green-900">🥑 Voeg iets toe aan je recept<br><br>🥗 Maak je eigen recepten <br><br>🗑️ Recept verwijderen</span><br><br>────────────୨ৎ────────────</p>
    </div>


    <div
      class="grid font-band mx-auto border-2 border-solid mt-10 shadow-xl order-1 mb-8 rounded-3xl border-green-900/80 formulierbg">
      
      <!-- dit is de tekst -->
      <div class=" p-10">

        <h3 class="text-[clamp(1.4rem,2.5vw,2rem)] mb-6 tekst font-bold">
          Voer hier uw wachtwoord in
        </h3>
        <form>

        <!-- mogelijk uncomment -->

        <label for="naam" class="text-[clamp(1.1rem,2vw,1.5rem)]  tekst">Naam <span class="niks">h0nor</span></label>
        <input class="border-gray-900 border-2 m-4" name="naam" type="text"><br> 

            <label for="Wachtwoord" class="text-[clamp(1.1rem,2vw,1.5rem)] tekst ">Wachtwoord</label>
        <input class="border-gray-700 border-2 m-4" name="wachtwoord" type="password"><br>

        <div class="grid grid-cols-1-xl justify-center items-center mt-12">
        <a href="../detailCUD.php" class="bg-green-900 text-white p-4 justify-center flex hoverknop rounded-lg text-[clamp(1.2rem,1.5vw,1.3rem)] cursor-pointer tekst ">Ga verder</a><br>
        
        <div><a href="" class="text-blue-800 hoverrood">Wachtwoord vergeten</a><span class="text-blue-800">/</span><a href="#" class="text-blue-800 hoverrood">Aanmelden</a></div>
        </div>
    </form>
        </div>

      </div>

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