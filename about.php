<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">      
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <link href="style.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />
    <link href="about.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />
    <link href="fonts.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Alegreya:ital,wght@0,400..900;1,400..900&family=Lovers+Quarrel&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100..900;1,100..900&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
<body>
    <script>
        fucntion show1()
        {
        }
    </script>

    <?php include("header.php"); ?>

    <main>
        <section>
            <div class="h-[90vh] w-[100vw] flex justify-center items-center">
                <div class="h-[100%] w-[70%] flex items-center justify-center">
                    <div class="h-[80%] w-[100%] flex justify-center items-center overflow-hidden">
                        <div class="w-[35%] h-auto">
                            <img class="w-full h-full" src="images/aboutus_1.webp">
                        </div>
                        <div class="w-[35rem] h-auto -ml-14 border-4 border-[rgba(202,138,4,0.6)] px-6 py-12 bg-white poppins-extralight">
                            <div class="text-red-800 text-5xl text-center mb-2">
                                Janal & Saloni
                            </div>
                            <div class="text-yellow-600 text-6xl text-center lovers-quarrel-regular">
                                Founders
                            </div>
                            <div class="text-red-800 text-lg mt-8 text-center">
                                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ipsum tempore dolorum perferendis enim non odit. Praesentium adipisci eveniet similique earum, aspernatur vel nostrum quidem dicta iusto eaque eos at eligendi illo aliquam. Beatae quibusdam esse facere dolores consequuntur vel nesciunt?
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="w-[100vw] h-[100vh] flex justify-center items-center">
                <div class="w-[90%] h-[90%] flex flex-col justify-center items-center">
                    <div class="w-[100%] h-[20%] flex justify-center items-center poppins-extralight">
                        <div id="mheader1" class="cursor-pointer h-14 w-52 rounded-t-lg text-white text-xl flex justify-center items-center border-b-2 border-red-800 overflow-hidden bg-red-800">Milestone 1</div>
                        <div id="mheader2" class="cursor-pointer h-14 w-52 rounded-t-lg text-red-800 text-xl flex justify-center items-center border-b-2 border-[rgba(153,27,27,0.3)] overflow-hidden">Milestone 2</div>
                        <div id="mheader3" class="cursor-pointer h-14 w-52 rounded-t-lg text-red-800 text-xl flex justify-center items-center border-b-2 border-[rgba(153,27,27,0.3)] overflow-hidden">Milestone 3</div>
                        <div id="mheader4" class="cursor-pointer h-14 w-52 rounded-t-lg text-red-800 text-xl flex justify-center items-center border-b-2 border-[rgba(153,27,27,0.3)] overflow-hidden">Milestone 4</div>
                    </div>  
                    <div class="w-[70%] h-[90%] overflow-hidden">
                        <div id="mbody1" class="w-full h-full flex flex-col justify-center items-center">
                            <img class="w-auto h-full" src="images/aboutus_2.jpg">
                            <div class="w-96 text-yellow-600 text-md px-4 py-2 rounded-md text-center">
                                <div class="text-7xl lovers-quarrel-regular text-red-800">Title and Date</div>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe, repellat dignissimos ducimus error accusantium excepturi tempora repellendus reiciendis ipsam, modi assumenda
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <?php include("footer.php"); ?>
</body>
</html>