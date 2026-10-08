<!doctype html>
<html lang="nl">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Food 4 Thought</title>
    <link rel="icon" type="image/svg+xml" href="../assets/food4thought.svg" />

    <script src="https://cdn.tailwindcss.com"></script>

    <style>
      @font-face {
        font-family: "type";
        src: url("../assets/orange\ juice\ 2.0.ttf");
      }
      @font-face {
        font-family: band;
        src: url(../assets/feeling-vintage/Feeling\ Vintage.ttf);
      }
      body {
        width: 100dvw;
        height: 100dvh;
        overflow-y: block;
        overflow-x: hidden;
      }
      .whiteshadow {
        filter: drop-shadow(0 0 15px white);
        width: 150px;
        height: auto;
      }
    </style>
  </head>

  <body
    class="min-h-screen h-full flex flex-col bg-cover bg-center bg-no-repeat"
    style="background-image: url(&quot;achtergrond.png&quot;)"
  >
    <nav
      class="flex items-center border-b border-gray-300/40 justify-between px-2 px-6 py-2 bg-white/10 backdrop-blur-sm sticky top-0 z-50"
    >
      <img src="../assets/logo.png" alt="Logo" class="whiteshadow"/>

      <div
        class="flex gap-2 text-[clamp(0.7rem,2vw,1.20rem)] sm:px-8 md:px-6 md:gap-4"
      >
        <a
          href="./index.php"
          class="bg-pink-600/60 px-4 py-4 border border-pink-800 rounded-xl text-white font-semibold shadow"
        >
          Home
        </a>

        <a
          href="./view.php"
          class="bg-pink-600/60 px-4 py-4 border border-pink-800 rounded-xl text-white font-semibold shadow"
        >
          Admin
        </a>
      </div>
    </nav>




<!-- hier komt de data -->
<!-- <div class="w-[100%] mx-full h-[3px] mt-4"></div> -->
 <!-- header -->
          <div class="max-w-6xl mx-auto px-2 py-10 bg-gray-900/30">
      
      <h1
        class="text-center text-[#C8FAF7] sky-bg text-[clamp(1.9rem,3vw,5rem)]"> Food 4 Thought
      </h1>
      <div class="w-[100%] mx-auto h-[3px] bg-white/30 mt-4"></div>
    </div>
  
    

    
      <h1 class="text-orange-400 mb-4  mx-12 sky-bg text-[clamp(1.9rem,3vw,4rem)]">
       <span>om</span></h1>

      <div
        class="grid font-band mx-auto grid-cols-1 md:grid-cols-1 xl:grid-cols-2 mb-[5%]  gap-10 "
      >
        <div
          class="flex justify-center px-6 mt-8 w-full md:w-full lg:w-full"
        >
          <img
            src=""
            alt="Festival"
            class="rounded-3xl shadow-2xl filter1 my-4 xs:max-w-2xl xl:max-w-4xl kleuren1 p-3"
          />
        </div> 
      
      <div
          class="bg-orange-200/50 border border-orange-300 mx-8  text-[clamp(0.9rem,2vw,1.4rem)]  font-medium rounded-xl p-6  px-4 py-6 shadow "
        >
          <h3 class="text-[clamp(1rem,2.5vw,2rem)] pt-2 font-bold">
            Wie is ...?
          </h3>
          <p class="mt-4 text-[clamp(0.5rem,2vw,1rem)]">
          </p>
        </div>
        
        </div>
        
    </div>
    
  </div>
    



    <footer
      class="max-w-full border-t border-gray-300/70 mx-auto px-9 pt-4 w-full bg-[#fcc977]/50 backdrop-blur-xs sm:mt-4 bottom-0 left-0 right-0"
    >
      <p
        class="text-[clamp(0.875rem,1.5vw,1.125rem)] flex justify-center text-gray-900"
      >
        <br /><br /><br />&copy;Food 4 Thought 2026
      </p>
    </footer>
  </body>
</html>
