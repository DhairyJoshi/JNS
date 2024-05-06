<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link href="style.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />
    <link href="contact.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />
    <link href="fonts.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Alegreya:ital,wght@0,400..900;1,400..900&family=Lovers+Quarrel&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100..900;1,100..900&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
</head>
<body>
    <?php include("header.php"); ?>

    <section class="w-[100vw] h-[90vh] flex">
        <div class="w-[50%] h-full px-10 py-20">
            <div class="uppercase text-8xl montserrat-300 text-red-800">
                Contact
            </div>

            <div class="h-full w-full raleway-400 text-lg py-16 pr-[20rem]">
                <div class="mb-7">
                    <div class="text-red-800">Phone</div>
                    <div class="text-yellow-500 text-2xl">+91 9876543210</div>
                </div>
                <div class="mb-7">
                    <div class="text-red-800">Email</div>
                    <div class="text-yellow-500 text-2xl">example@email.com</div>
                </div>
                <div class="mb-7">
                    <div class="text-red-800">Location</div>
                    <div class="text-yellow-500 text-2xl">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Officia velit in dolore.</div> 
                </div>
                <div class="flex space-x-4">
                    <a href="#"><img class="h-7 w-7" src="images/instagram_red.png"></a>
                    <a href="#"><img class="h-7 w-7" src="images/whatsapp_red.png"></a>
                    <a href="#"><img class="h-7 w-7" src="images/facebook_red.png"></a>
                </div>
            </div>    
        </div>

        <div class="w-[50%] h-full">
            <img class="w-auto h-full" src="images/contact (2).png" alt="Contact">
        </div>
    </section>

    <?php include("footer.php"); ?>
</body>
</html>