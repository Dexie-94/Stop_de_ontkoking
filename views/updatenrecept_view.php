<!doctype html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Recept aanpassen</title>
    <link rel="icon" type="image/svg+xml" href="./assets/food4thought_logo.png" />

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
            background-image: url(./assets/achtergrong.png);
            background-attachment: fixed;

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
            background-image: url(./assets/achtergrond.svg);
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
        .form-row {
            display: grid;
            /*grid-template-columns: minmax(0, 180px) minmax(0, 150px);*/
            align-items: center;
            gap: 1px;
            margin-bottom: 40px;
        }

        .form-row label {
            text-align: left;
        }

        .form-row input{
            width: 60%;
            box-sizing: border-box;
        }
    </style>
</head>
<body
    class="min-h-screen achter flex flex-col "
>


<nav class="flex items-center justify-between border-b border-gray-900/40
            px-3 sm:px-6 bg-gray-100/30 backdrop-blur-xs
            sticky top-0 z-50">

    <!-- Home -->
    <a href="./overzicht.php"
       class="flex flex-col items-center justify-center px-2 py-2 font-semibold">

        <div class="whiteshadow w-[clamp(1.5rem,4vw,2.5rem)]
                    aspect-square bg-green-900
                    [mask-image:url('./assets/home-1-svgrepo-com.svg')]
                    [mask-size:contain]
                    [mask-repeat:no-repeat]
                    [mask-position:center]">
        </div>

        <span class="text-green-900 text-[clamp(1rem,1.5vw,1rem)]">
            Home
        </span>
    </a>


    <!-- Logo -->
    <img src="./assets/food4thought.svg"
         alt="logo"
         class="whiteshadow w-[clamp(7rem,15vw,12rem)] h-auto object-contain" />


    <!-- Profiel -->
    <a href="./detailCUD.php"
       class="flex flex-col items-center justify-center px-2 py-2 font-semibold">

        <div class="whiteshadow w-[clamp(1.9rem,4vw,2.5rem)]
                    aspect-square bg-green-900
                    [mask-image:url('./assets/hat-chef-svgrepo-com.svg')]
                    [mask-size:contain]
                    [mask-repeat:no-repeat]
                    [mask-position:center]">
        </div>

        <span class="text-green-900 text-[clamp(1rem,1.5vw,1rem)]">
            Profiel
        </span>
    </a>

</nav>


<div class="max-w-[100%] px-12 py-8">
    <h1
        class="text-gray-900 filter1 recept text-[clamp(2rem,3vw,3rem)]"> Je eigen recepten
    </h1>
    <h1 class="tekst text-green-900 filter1 text-[clamp(1.2rem,2vw,2rem)]">Hier maak je jouw eigen recept naar jouw smaak.</h1>
</div>


<div
        <?php
        if ($aantalrecepten > 0) { ?>
        class="grid  mx-auto border-2 border-solid  shadow-xl p-5  rounded-3xl border-green-900/80 formulierbg">
    <form action="./updatenrecept_verwerk.php" class="form-row grid aspect-2/4 grid-cols-1 md:grid-cols-1 lg:grid-cols-2 " method="POST">
        <!-- stop token in formulier om te vergelijken -->
        <?php foreach ($recepten as $recept) { ?>


        <input type="hidden" name="ID" value="<?= $recept['ID'] ?>">

        <div>
            <label class="text-[clamp(1.1rem,2vw,1.5rem)]  tekst">Vul de naam van je recept in:</label><br>
            <input id="naam" class="border-gray-900 border-2 m-4" name="naamrecept" value="<?= $recept['naamrecept'] ?> " type="text"><br><br>
        </div>
        <div>
            <label class="text-[clamp(1.1rem,2vw,1.5rem)]  tekst">Geef in twee regels een omschrijving over het recept:</label><br>
            <input id="beschrijving" class="border-gray-900 border-2 m-4" value="<?= $recept['beschrijving'] ?>"  name="beschrijving" type="text"><br><br>
        </div>
        <div>
            <label class="text-[clamp(1.1rem,2vw,1.5rem)]  tekst">Upload hier een foto van je recept:</label><br>
            <input id="foto" class="border-gray-900 border-2 m-4" name="foto" type="file" ><br><br>
        </div>
        <div>
            <label class="text-[clamp(1.1rem,2vw,1.5rem)]  tekst">Hoeveel minuten ben je in totaal kwijt?</label><br>
            <input id="tijd" class="border-gray-900 border-2 m-4" name="tijd" value="<?= $recept['tijd'] ?> " type="text"><br><br>
        </div>
        <div class="">
            <label class="text-[clamp(1.1rem,2vw,1.5rem)]  tekst">Is je recept vegan?</label>
            <input id="recept" class="border-gray-900 border-2 m-4 w-6 h-6 accent-green-900 cursor-pointer" value="<?= $recept['vegan'] ?> " name="vegan" type="checkbox"><br><br>
        </div>
        <div>
            <label class="text-[clamp(1.1rem,2vw,1.5rem)]  tekst">Welke ingredienten heb je nodig voor je recept?</label><br><br>
            <textarea id="ingredienten"  class="border-gray-900 border-2 m-4  xs:cols-37 w-[90%] " rows="8" cols="90" name="ingredienten"  placeholder="<?= $recept['ingredienten'] ?>" ></textarea>
        </div>
        <div>
            <label class="text-[clamp(1.1rem,2vw,1.5rem)]  tekst">Leg hier in stappen uit hoe je het recept bereid</label><br><br>
            <textarea id="stappen" name="stappen" class="border-gray-900 border-2 m-4 xs:cols-37 w-[90%] "  rows="8" cols="90"  placeholder="<?= $recept['stappen'] ?>" ></textarea>
        </div>

        <div class="flex flex-col sm:flex-row justify-around items-center gap-4 mt-12 w-full px-4">
            <input type="submit" value="Recept aanpassen!" class="bg-green-900 text-white p-4 justify-center flex hoverknop w-[5%] rounded-lg text-[clamp(1.2rem,1.5vw,1.3rem)] cursor-pointer tekst "><br>
        </div>
        <?php } ?>
    </form>
    <?php } else { ?>
        <p>Geen resultaten gevonden</p>
    <?php } ?>
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