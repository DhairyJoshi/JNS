<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home - Janal & Saloni</title>
  <link href="style.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />
  <link href="index.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />
  <link href="fonts.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />
  <link href="swiper.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Alegreya:ital,wght@0,400..900;1,400..900&family=Lovers+Quarrel&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100..900;1,100..900&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
</head>
<body>
  <?php include("header.php"); ?>

  <main>
    <section class="w-[100vw] h-[85vh] flex justify-center box-border px-10 bgyellowgrid
    border-t-[3px] border-t-yellow-100 overflow-hidden">
      <div class="w-1/2 h-full flex flex-col justify-center items-start">
        <div class="poppins-extralight text-6xl text-red-800 mb-10">
          Outfits that will talk on your behalf
        </div>
        <a class="c1 cursor-pointer">
          View Collection
          <span></span><span></span><span></span><span></span>
        </a>
      </div>
      <div class="w-1/2 h-full flex justify-end maskimage">
        <img src="highlights/img1.png" class="w-auto h-full scale-[2] mt-[15.4rem] mr-[-2rem]">
      </div>
    </section>

    <section class="w-[100vw] h-[200vh] poppins-extralight mt-20">
      <div class="w-full h-1/2 flex px-10 py-10 space-x-16">
        <div class="w-[40%] h-full bridal flex flex-col justify-around items-center shadow rounded-sm">
          <div class="text-5xl tracking-wide text-red-800">
            Bridal Dresses
          </div>
          <div>
            <a href="#" class="btn-one">View All</a>
          </div>
        </div>

        <div class="w-[60%] h-full forher flex flex-col pr-[30rem] shadow rounded-sm">
          <div class="text-6xl tracking-wide text-red-800 mt-10 mb-20 ml-10">
            Give Her The Best She Deserves
          </div>
          <div class="flex justify-center items-center">
            <a href="#" class="btn-two">View All</a>
          </div>
        </div>
      </div>

      <div class="w-full h-1/2 flex px-10 py-10 space-x-16"> 
        <div class="w-[60%] h-full forhim flex flex-col pr-[30rem] shadow rounded-sm">
          <div class="text-6xl tracking-wide text-red-800 mt-10 mb-20 ml-10 w-1/2">
            Endorse Your Inner Gentleman
          </div>
          <div class="flex justify-center items-center">
            <a href="#" class="btn-two">View All</a>
          </div>
        </div>

        <div class="w-[40%] h-full designer flex flex-col justify-around items-center shadow rounded-sm">
          <div class="text-5xl tracking-wide text-red-800 ">
            Designer Dresses
          </div>
          <div>
            <a href="#" class="btn-one">View All</a>
          </div>
        </div>
      </div>
    </section>

    <script>  
      function fillred1()
      {
        if (document.getElementById("heart-red1").classList.contains("heart-red-liked"))
        {
          document.getElementById("heart-red1").classList.remove("heart-red-liked");
        }
        else
        {
          document.getElementById("heart-red1").classList.add("heart-red-liked");
        }
      }
      function fillred2()
      {
        if (document.getElementById("heart-red2").classList.contains("heart-red-liked"))
        {
          document.getElementById("heart-red2").classList.remove("heart-red-liked");
        }
        else
        {
          document.getElementById("heart-red2").classList.add("heart-red-liked");
        }
      }
      function fillred3()
      {
        if (document.getElementById("heart-red3").classList.contains("heart-red-liked"))
        {
          document.getElementById("heart-red3").classList.remove("heart-red-liked");
        }
        else
        {
          document.getElementById("heart-red3").classList.add("heart-red-liked");
        }
      }
      function fillred4()
      {
        if (document.getElementById("heart-red4").classList.contains("heart-red-liked"))
        {
          document.getElementById("heart-red4").classList.remove("heart-red-liked");
        }
        else
        {
          document.getElementById("heart-red4").classList.add("heart-red-liked");
        }
      }
      function fillred5()
      {
        if (document.getElementById("heart-red5").classList.contains("heart-red-liked"))
        {
          document.getElementById("heart-red5").classList.remove("heart-red-liked");
        }
        else
        {
          document.getElementById("heart-red5").classList.add("heart-red-liked");
        }
      }
    </script>
    <section class="poppins-extralight w-full h-[100vh]">
      <div class="w-full h-1/5 mt-10 uppercase flex flex-col justify-center items-center italic">
        <p class="text-8xl tracking-wide text-yellow-500">Garments</p>
        <p class="text-2xl tracking-[0.3rem] text-red-800">of your choice</p>
      </div>

      <div class="swiper mySwiper">
        <div class="swiper-wrapper">
          
          <div class="swiper-slide rounded flex flex-col">
            <div class="w-full h-[90%] rounded overflow-hidden enlargeimage">
              <img class="w-full h-auto transition-all duration-[0.25s]" src="Product_images/p1/2.jpg" alt="">
            </div>
            <div class="absolute top-[20px] right-[20px] flex flex-row space-x-2">
              <div>
                <a class="text-red-800 px-3 py-1 bg-[rgba(255,255,255,0.5)] rounded uppercase text-xl tracking-wider transition-all duration-200 flex justify-center items-center space-x-2" href="p1.php">
                  <img class="h-6 w-6" src="images/view.png">
                  <p>View</p>
                </a>
              </div>
              <button class="bg-[rgba(255,255,255,0.5)] px-3 py-[0.6rem] box-border rounded" onclick="fillred1();">
                <div id="heart-red1" class="heart-red"></div>
              </button>
            </div>
            <div class="w-full h-[10%] flex flex-col justify-center items-center">
              <div class="uppercase text-xl text-yellow-600">Bridal Collection</div>
              <div>Dress #1 and name</div>
            </div>
          </div>

            <div class="swiper-slide rounded flex flex-col">
              <div class="w-full h-[90%] rounded overflow-hidden enlargeimage">
                <img class="w-full h-auto transition-all duration-[0.25s]" src="Product_images/p2/1.jpg" alt="">
              </div>
              <div class="absolute top-[20px] right-[20px] flex flex-row space-x-2">
                <div>
                  <a class="text-red-800 px-3 py-1 bg-[rgba(255,255,255,0.5)] rounded uppercase text-xl tracking-wider transition-all duration-200 flex justify-center items-center space-x-2" href="p2.php">
                    <img class="h-6 w-6" src="images/view.png">
                    <p>View</p>
                  </a>
                </div>
                <button class="bg-[rgba(255,255,255,0.5)] px-3 py-[0.6rem] box-border rounded" onclick="fillred2();">
                  <div id="heart-red2" class="heart-red"></div>
                </button>
              </div>
              <div class="w-full h-[10%] flex flex-col justify-center items-center">
                <div class="uppercase text-xl text-yellow-600">Reception Dresses</div>
                <div>Dress #2 and name</div>
              </div>
            </div>

          <div class="swiper-slide rounded flex flex-col">
            <div class="w-full h-[90%] rounded overflow-hidden enlargeimage">
              <img class="w-full h-auto object-contain object-center transition-all duration-[0.25s]" src="Product_images/p3/37.jpg" alt="">
            </div>
            <div class="absolute top-[20px] right-[20px] flex flex-row space-x-2">
              <div>
                <a class="text-red-800 px-3 py-1 bg-[rgba(255,255,255,0.5)] rounded uppercase text-xl tracking-wider transition-all duration-200 flex justify-center items-center space-x-2" href="p3.php">
                  <img class="h-6 w-6" src="images/view.png">
                  <p>View</p>
                </a>
              </div>
              <button class="bg-[rgba(255,255,255,0.5)] px-3 py-[0.6rem] box-border rounded" onclick="fillred3();">
                <div id="heart-red3" class="heart-red"></div>
              </button>
            </div>
            <div class="w-full h-[10%] flex flex-col justify-center items-center">
              <div class="uppercase text-xl text-yellow-600">Bridal Collection</div>
              <div>Dress #3 and name</div>
            </div>
          </div>

          <div class="swiper-slide rounded flex flex-col">
            <div class="w-full h-[90%] rounded overflow-hidden enlargeimage">
              <img class="w-full h-auto transition-all duration-[0.25s]" src="Product_images/p4/49.jpg" alt="">
            </div>
            <div class="absolute top-[20px] right-[20px] flex flex-row space-x-2">
              <div>
                <a class="text-red-800 px-3 py-1 bg-[rgba(255,255,255,0.5)] rounded uppercase text-xl tracking-wider transition-all duration-200 flex justify-center items-center space-x-2" href="p4.php">
                  <img class="h-6 w-6" src="images/view.png">
                  <p>View</p>
                </a>
              </div>
              <button class="bg-[rgba(255,255,255,0.5)] px-3 py-[0.6rem] box-border rounded" onclick="fillred4();">
                <div id="heart-red4" class="heart-red"></div>
              </button>
            </div>
            <div class="w-full h-[10%] flex flex-col justify-center items-center">
              <div class="uppercase text-xl text-yellow-600">Bridal Collection</div>
              <div>Dress #4 and name</div>
            </div>
          </div>

          <div class="swiper-slide rounded flex flex-col">
            <div class="w-full h-[90%] rounded overflow-hidden enlargeimage">
              <img class="w-full h-auto transition-all duration-[0.25s]" src="Product_images/p5/58.jpg" alt="">
            </div>
            <div class="absolute top-[20px] right-[20px] flex flex-row space-x-2">
              <div>
                <a class="text-red-800 px-3 py-1 bg-[rgba(255,255,255,0.5)] rounded uppercase text-xl tracking-wider transition-all duration-200 flex justify-center items-center space-x-2" href="p5.php">
                  <img class="h-6 w-6" src="images/view.png">
                  <p>View</p>
                </a>
              </div>
              <button class="bg-[rgba(255,255,255,0.5)] px-3 py-[0.6rem] box-border rounded" onclick="fillred5();">
                <div id="heart-red5" class="heart-red"></div>
              </button>
            </div>
            <div class="w-full h-[10%] flex flex-col justify-center items-center">
              <div class="uppercase text-xl text-yellow-600">Bridal Collection</div>
              <div>Dress #5 and name</div>
            </div>
          </div>

        </div>
      </div>
      <div class="swiper-button-prev"></div>
      <div class="swiper-button-next"></div>  
      <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
      <script>
        var swiper = new Swiper(".mySwiper", 
        {
          slidesPerView: 3,
          spaceBetween: 30,
          navigation: 
          {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
          } 
        });
      </script>
    </section>
  </main>

  <?php include("footer.php"); ?>
</body>
</html>