<!doctype html>
<html lang="nl">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Recept</title>
    <link rel="icon" type="image/svg+xml" href="./assets/food4thought_logo.png" />

    <script src="https://cdn.tailwindcss.com"></script>
    <script src="taliwind.config.js" defer></script>
    <script src="overzicht_view.js" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.15/dist/ScrollSmoother.min.js" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.15/dist/SplitText.min.js" defer></script>

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
        .hoverknop:hover{
            scale: (1.5);
            background-color: #cb6526;
            transition: background-color 1s ease-in-out, transform 1s ease-out;
            transition: scale 1s ease-in;
        }
        .beneden{
            margin-top: auto;
            width: 100%;
            padding: 20px;
            text-align: center;
            box-sizing: border-box;
        }
        .ingredientenul{
            list-style-image: url('./assets/');
            list-style: none;
            padding-left: 0;

        }
        li::before {
            content: "";
            display: inline-block;
            width: 16px;
            height: 16px;
            background-image: url("./assets/leaf-icon.png");
            background-size: contain;
            background-repeat: no-repeat;
            margin-right: 8px;
        }
    </style>

<body
        class="min-h-screen achtergrond achter  flex flex-col "
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



<div class="grid  xs:grid-cols-1 md:grid-cols-2 xl:grid-cols-2">

    <?php
    if ($aantalrecepten > 0) { ?>
    <?php foreach ($recepten as $recept) { ?>
    <div class="justify-items-center">
        <img class="w-[90%] h-[90%] bg-green-900/40 p-4  rounded-lg m-4" src="uploads/<?= htmlspecialchars($recept['recept_image']) ?>">
    </div>

    <div class=" rounded shadow m-4  ">
        <p class="text-[clamp(1.45rem,1.5vw,1.7rem)] font-bold recept flex mt-4 justify-center"><?= $recept['naamrecept'] ?></p>
        <p class="p-8"><?=$recept['stappen'] ?></p>
    </div>



</div>
<div class="border-t-8 h-auto border-gray-400 shadow m-4 border-double">

    <div class="flex items-center justify-between w-full px-2 py-3">

        <!-- Ingrediënten links -->
        <p class="font-bold text-[clamp(0.95rem,1.5vw,1.7rem)]">
            Ingrediënten
        </p>

        <!-- Tijd en vegan bij elkaar rechts -->
        <div class="flex items-center gap-3 sm:gap-5">

            <!-- Tijd -->
            <div class="flex items-center gap-1">
                <div class="h-6 w-6 bg-gray-900
                    [mask-image:url('./assets/clock-five-svgrepo-com.svg')]
                    [mask-size:contain]
                    [mask-repeat:no-repeat]
                    [mask-position:center]">
                </div>

                <p class="text-[clamp(0.8rem,2vw,1.2rem)] whitespace-nowrap">
                    <?= $recept['tijd'] ?> min
                </p>
            </div>

            <!-- Vegan -->
            <div class="flex items-center gap-1">
                <div class="h-6 w-6 bg-green-900
                    [mask-image:url('./assets/leaf-icon.svg')]
                    [mask-size:contain]
                    [mask-repeat:no-repeat]
                    [mask-position:center]">
                </div>

                <p class="text-[clamp(0.8rem,2vw,1.2rem)] whitespace-nowrap">
                    <?php if ($recept['vegan'] == 1) { ?>
                        Vegan
                    <?php } else { ?>
                        Niet vegan
                    <?php } ?>
                </p>
            </div>

        </div>

    </div>

    <ul class="ingredientenul">
        <?php
        $list = explode("-", $recept['ingredienten']);
        foreach ($list as $item) { ?>
            <li><?= htmlspecialchars(trim($item)) ?></li>
        <?php } ?>
    </ul>

</div>




<div class="flex flex-col sm:flex-row justify-around items-center gap-4 mt-12 w-full px-4">


    <div class="border-2 solid mb-8 rounded-lg p-2 border-black">
        <p class="font-bold">Wil je deze pagina echt verwijderen?</p>
        <a href="./verwijderen_verwerk.php?id=<?=$recept["ID"] ?>">
            <p class="bg-red-900 text-white p-4 justify-center font-bold flex hoververwijder w-[100%] rounded-lg text-[clamp(1.2rem,1.5vw,1.3rem)] cursor-pointer"> Ja, absoluut</p></a>
    </div>
    <!-- Terug knop -->
    <a href="./overzicht.php"
       class="bg-green-900 text-white p-3 sm:p-4 justify-center items-center flex hoverknop rounded-lg text-[clamp(1rem,1.5vw,1.3rem)] cursor-pointer tekst w-full sm:w-auto">


        <span class="h-8 sm:h-10 bg-white w-8 shrink-0
            [mask-image:url('./assets/flip-backward-svgrepo-com.svg')]
            [mask-size:contain]
            [mask-repeat:no-repeat]
            [mask-position:center]">
        </span>

        Terug
    </a>
</div>






<?php } ?>
<?php } else { ?>
    <p>Geen resultaten gevonden</p>
<?php } ?>


<footer
        class="max-w-full mx-auto font-semibold bg-oklch(27.4% 0.072 132.109) w-full  beneden sm:mt-4 bottom-0 left-0 right-0">
    <p
            class="text-[clamp(1.15rem,1.5vw,1.5rem)] flex justify-center text-green-900">
        <br /><br /><br />&copy;Food 4 Thought 2026
    </p>
</footer>




</body>
</html>