<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Designs</title>
    <link href="style.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />
    <link href="fonts.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />
    <link href="designs.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Alegreya:ital,wght@0,400..900;1,400..900&family=Lovers+Quarrel&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100..900;1,100..900&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
</head>
<body>
    <?php include("header.php"); ?>

    <main>
      <div class="flex justify-between px-6 my-10 items-center">
          <div class=" h-full text-[2.5rem] text-red-800 montserrat-300 uppercase">All Products</div>
          
          <form id="searchbar">
            <input type="image" id="search-logo" src="images/search_red.png">
            <input id="search-text" type="text" placeholder="search">
          </form>
      </div>


      <section class="flex">

        <div class="text-red-800 h-full w-[25vw] poppins-extralight text-3xl uppercase">
          <div id="Category1" class="py-[1.52rem] px-5 flex items-center cursor-pointer" onclick="setCat1()">Category 1</div>
          <div id="Category2" class="py-[1.52rem] px-5 flex items-center cursor-pointer" onclick="setCat2()">Category 2</div>
          <div id="Category3" class="py-[1.52rem] px-5 flex items-center cursor-pointer" onclick="setCat3()">Category 3</div>
          <div id="Category4" class="py-[1.52rem] px-5 flex items-center cursor-pointer" onclick="setCat4()">Category 4</div>
          <div id="Category5" class="py-[1.52rem] px-5 flex items-center cursor-pointer" onclick="setCat5()">Category 5</div>
          <div id="Category6" class="py-[1.52rem] px-5 flex items-center cursor-pointer" onclick="setCat6()">Category 6</div>
        </div>
        <script>
          function setCat1()
          {
            document.getElementById("Category1").classList.add("highlighted-category");
            document.getElementById("Category2").classList.remove("highlighted-category");
            document.getElementById("Category3").classList.remove("highlighted-category");
            document.getElementById("Category4").classList.remove("highlighted-category");
            document.getElementById("Category5").classList.remove("highlighted-category");
            document.getElementById("Category6").classList.remove("highlighted-category");
          }

          function setCat2()
          {
            document.getElementById("Category2").classList.add("highlighted-category");
            document.getElementById("Category1").classList.remove("highlighted-category");
            document.getElementById("Category3").classList.remove("highlighted-category");
            document.getElementById("Category4").classList.remove("highlighted-category");
            document.getElementById("Category5").classList.remove("highlighted-category");
            document.getElementById("Category6").classList.remove("highlighted-category");
          }

          function setCat3()
          {
            document.getElementById("Category3").classList.add("highlighted-category");
            document.getElementById("Category1").classList.remove("highlighted-category");
            document.getElementById("Category2").classList.remove("highlighted-category");
            document.getElementById("Category4").classList.remove("highlighted-category");
            document.getElementById("Category5").classList.remove("highlighted-category");
            document.getElementById("Category6").classList.remove("highlighted-category");
          }

          function setCat4()
          {
            document.getElementById("Category4").classList.add("highlighted-category");
            document.getElementById("Category1").classList.remove("highlighted-category");
            document.getElementById("Category2").classList.remove("highlighted-category");
            document.getElementById("Category3").classList.remove("highlighted-category");
            document.getElementById("Category5").classList.remove("highlighted-category");
            document.getElementById("Category6").classList.remove("highlighted-category");
          }

          function setCat5()
          {
            document.getElementById("Category5").classList.add("highlighted-category");
            document.getElementById("Category1").classList.remove("highlighted-category");
            document.getElementById("Category2").classList.remove("highlighted-category");
            document.getElementById("Category3").classList.remove("highlighted-category");
            document.getElementById("Category4").classList.remove("highlighted-category");
            document.getElementById("Category6").classList.remove("highlighted-category");
          }

          function setCat6()
          {
            document.getElementById("Category6").classList.add("highlighted-category");
            document.getElementById("Category1").classList.remove("highlighted-category");
            document.getElementById("Category2").classList.remove("highlighted-category");
            document.getElementById("Category3").classList.remove("highlighted-category");
            document.getElementById("Category4").classList.remove("highlighted-category");
            document.getElementById("Category5").classList.remove("highlighted-category");
          }
        </script>
  
        <section class="scrollable">
          <script>
            const input1 = document.getElementById('search-logo');
            const input2 = document.getElementById('search-text');
  
            input2.addEventListener('focus', () => {
                  input1.style.opacity = '1';
              });
  
              input2.addEventListener('blur', () => {
                  input1.style.opacity = '0.5';
              });
          </script>
          
          <section>
              <div class="w-full h-[65vh] flex justify-between px-6 mb-12">
  
                <a href="p2.php" class="w-[30%] h-full">
                  <div class="w-full h-[90%] rounded overflow-hidden enlargeimage mb-2">
                    <img class="h-[100%] w-[100%] object-cover object-center transition-all duration-[0.25s]" src="Product_images/p1/2.jpg" alt="">
                  </div>
                  <div class="w-full h-[10%] flex flex-col justify-center items-center poppins-extralight">
                    <div class="uppercase text-xl text-yellow-600">Bridal Collection</div>
                    <div>Dress #1 and name</div>
                  </div>
                </a>
  
                <a href="p2.php" class="w-[30%] h-full">
                  <div class="w-full h-[90%] rounded overflow-hidden enlargeimage mb-2">
                    <img class="h-[100%] w-[100%] object-cover object-center transition-all duration-[0.25s]" src="Product_images/p2/1.jpg" alt="">
                  </div>
                  <div class="w-full h-[10%] flex flex-col justify-center items-center poppins-extralight">
                    <div class="uppercase text-xl text-yellow-600">Reception Dresses</div>
                    <div>Dress #2 and name</div>
                  </div>
                </a>
  
                <a href="p2.php" class="w-[30%] h-full">
                  <div class="w-full h-[90%] rounded overflow-hidden enlargeimage mb-2">
                    <img class="h-[100%] w-[100%] object-cover object-center transition-all duration-[0.25s]" src="Product_images/p3/37.jpg" alt="">
                  </div>
                  <div class="w-full h-[10%] flex flex-col justify-center items-center poppins-extralight">
                    <div class="uppercase text-xl text-yellow-600">Bridal Collection</div>
                    <div>Dress #3 and name</div>
                  </div>
                </a>
  
              </div>
  
              <div class="w-full h-[65vh] flex justify-between px-6">
  
                <a href="p2.php" class="w-[30%] h-full">
                  <div class="w-full h-[90%] rounded overflow-hidden enlargeimage mb-2">
                    <img class="h-auto w-[100%] object-cover object-center transition-all duration-[0.25s]" src="Product_images/p4/49.jpg" alt="">
                  </div>
                  <div class="w-full h-[10%] flex flex-col justify-center items-center poppins-extralight">
                    <div class="uppercase text-xl text-yellow-600">Bridal Collection</div>
                    <div>Dress #4 and name</div>
                  </div>
                </a>
  
                <a href="p2.php" class="w-[30%] h-full">
                  <div class="w-full h-[90%] rounded overflow-hidden enlargeimage mb-2">
                    <img class="h-auto w-[100%] transition-all duration-[0.25s]" src="Product_images/p5/58.jpg" alt="">
                  </div>
                  <div class="w-full h-[10%] flex flex-col justify-center items-center poppins-extralight">
                    <div class="uppercase text-xl text-yellow-600">Reception Dresses</div>
                    <div>Dress #5 and name</div>
                  </div>
                </a>
  
                <a href="p2.php" class="w-[30%] h-full">
                  <div class="w-full h-[90%] rounded overflow-hidden enlargeimage mb-2">
                    <img class="h-[100%] w-[100%] object-cover object-center transition-all duration-[0.25s]" src="Product_images/p3/37.jpg" alt="">
                  </div>
                  <div class="w-full h-[10%] flex flex-col justify-center items-center poppins-extralight">
                    <div class="uppercase text-xl text-yellow-600">Bridal Collection</div>
                    <div>Dress #3 and name</div>
                  </div>
                </a>
  
              </div>
  
          </section>
        </section>
      </section>

    </main>

    <?php include('footer.php') ?>
</body>
</html>