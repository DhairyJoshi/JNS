<?php include ('_dbconnect.php'); ?>

<?php 
    $image = array();
    $sql = "SELECT * FROM `products` WHERE `ID` = " . 004 . ";"; 
    $query = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_array($query))
    {
        $Name = $row['Name'];
        $Collection = $row['Collection'];
        $Description = $row['Description'];
        $num = $row['images'];
        $image['1'] = $row['i1'];
        $image['2'] = $row['i2'];
        $image['3'] = $row['i3'];
        $image['4'] = $row['i4'];
        $image['5'] = $row['i5'];
        $image['6'] = $row['i6'];
        $image['7'] = $row['i7'];
        $image['8'] = $row['i8'];
        $image['9'] = $row['i9'];
        $image['10'] = $row['i10'];
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Janal & Saloni</title>
    <link href="style.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />
    <link href="product_swiper.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />
    <link href="product.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Alegreya&family=Poppins:wght@200;400&family=Raleway&display=swap" rel="stylesheet">
</head>
<body>
    <?php include("header.php"); ?>

    <main>
       <section class="flex mt-12">
            <div class="flex w-[60vw] pl-32">
                <div thumbsSlider="" class="swiper2 mySwiper">
                    <div class="swiper-wrapper">
                        <?php
                            for ($i = 1; $i <= $num; $i++)
                            {
                                echo "<div class='swiper-slide w-full h-full overflow-hidden'>
                                        <img class='rounded-sm w-full h-full object-cover' src=' " . $image[$i] . "' />
                                    </div>";
                            }
                        ?>
                    </div>
                    <div class="swiper-scrollbar"></div>
                </div>
                <div class="swiper1 mySwiper2 rounded">
                    <div class="swiper-wrapper">
                        <?php
                            for ($i = 1; $i <= $num; $i++)
                            {
                                echo "<div class='swiper-slide w-full h-full rounded overflow-hidden'>
                                        <img class='rounded w-full h-full object-cover' src=' " . $image[$i] . "' />
                                    </div>";
                            }
                        ?>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
            </div>
            <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
            <script>
                var swiper = new Swiper(".mySwiper", 
                {
                    spaceBetween: 10,
                    slidesPerView: 5,
                    freeMode: true,
                    watchSlidesProgress: true,  
                    direction: "vertical",
                    scrollbar: 
                    {
                        el: '.swiper-scrollbar',
                    },
                });
                var swiper2 = new Swiper(".mySwiper2", 
                {
                    loop: true,
                    spaceBetween: 10,
                    navigation: 
                    {
                        nextEl: ".swiper-button-next",
                        prevEl: ".swiper-button-prev",
                    },
                    thumbs: 
                    {
                        swiper: swiper,
                    },
                    autoplay: 
                    {
                    delay: 2500,
                    disableOnInteraction: false
                    },
                });
            </script>
            <div class="w-[40vw] h-[80vh] flex-col justify-between items-center">
                <div class="h-[80%] w-full Poppins200 text-yellow-500 flex justify-evenly flex-col items-center">
                    <div>
                        <div class="text-center uppercase text-base mb-3">
                            <?php echo $Collection; ?>
                        </div>
                        <div class="text-red-800 text-center capitalize text-2xl font-thin">
                            <?php echo $Name; ?>
                        </div>
                    </div>
                    <div class="text-center capitalize w-[18vw] flex flex-col justify-center">
                        <div class="text-lg mb-1">Available Sizes</div>
                        <div class="flex justify-around items-center text-yellow-300">
                            <div class="w-12 h-12 flex justify-center items-center border-2 border-yellow-300 rounded-full text-xl font-medium">S</div>
                            <div class="w-12 h-12 flex justify-center items-center border-2 border-yellow-300 rounded-full text-xl font-medium">M</div>
                            <div class="w-12 h-12 flex justify-center items-center border-2 border-yellow-300 rounded-full text-xl font-medium">L</div>
                            <div class="w-12 h-12 flex justify-center items-center border-2 border-yellow-300 rounded-full text-xl font-medium">XL</div>
                            <div class="w-12 h-12 flex justify-center items-center border-2 border-yellow-300 rounded-full text-xl font-medium">XXL</div>
                        </div>
                    </div>
                    <div class="w-[50%] capitalize text-red-800 text-center">
                        <?php echo $Description; ?>
                    </div>
                </div>
                <div class="h-[20%] w-full flex flex-col justify-center items-center">
                    <div class="mb-6">
                        <a href="#" class="btn-one">
                            <p>Contact</p>
                            <img class="h-7 w-7 ml-5" src="images/whatsapp-yellow.png">
                        </a>
                    </div>
                    <div>
                        <a href="#" class="text-lg border-2 border-yellow-500 px-10 py-2 bg-yellow-500 text-white tracking-wide hover:bg-yellow-600 hover:border-yellow-600 transition-all duration-300 uppercase flex space-x-4">
                            <img class="h-7 w-7" src="images/heart_white.png">
                            <p>Add to wishlist</p>
                        </a>
                    </div>
                </div>
            </div>
       </section> 
    </main>

    <?php include("footer.php"); ?>
</body>
</html>