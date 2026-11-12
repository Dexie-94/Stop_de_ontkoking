<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Verwerk van gegevens</title>

    <script src="https://cdn.tailwindcss.com"></script>
    <script src="tailwind.config.js" defer></script>
</head>
<style>
    #fout{
        color: red;
    }
    #goed{
        color: green;
    }
</style>
<body class="min-h-screen achter flex flex-col ">


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

<p id="fout"> <?= $resultaatfout?></p>
<p id="goed"> <?= $resultaatgoed?></p>
<div class="flex flex-col sm:flex-row justify-around items-center gap-4 mt-12 w-full px-4">

    <!-- Terug knop -->
    <a href="./detailCUD.php"
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


<footer
        class="max-w-full mx-auto font-semibold bg-oklch(27.4% 0.072 132.109) w-full  beneden sm:mt-4 bottom-0 left-0 right-0">
    <p
            class="text-[clamp(1.15rem,1.5vw,1.5rem)] flex justify-center text-green-900">
        <br /><br /><br />&copy;Food 4 Thought 2026
    </p>
</footer>
</body>
</html>