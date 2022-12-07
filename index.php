<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SESI 9 - FRIENDLY JIHAD TAQWANA</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;700&family=Raleway:wght@500&display=swap"
        rel="stylesheet">
    <script src="tailwind.config.js"></script>
    <style type="text/tailwindcss">
        @layer utilities {
          header {
            @apply pt-5;
            background: linear-gradient(180deg, #FFFFFF 0%, #EAF4FF 46.08%, #FFFFFF 100%);
          }
          content3 {
            @apply pt-5;
            background: linear-gradient(180deg, #FFFFFF 0%, #EAF4FF 46.08%, #FFFFFF 100%);
          }
          nav a {
            @apply hover:underline hover:text-primary font-nav;
          }
          .button-primary {
            @apply bg-primary text-white px-5 py-2 rounded-full;
          }
          nav a.active {
            @apply text-black;
          }

        }
        .submenu {
            @apply absolute m-0 py-1 bg-primary invisible opacity-0 ;
        }

        .submenu a {
            @apply text-black min-w-[135px] w-full block py-1 px-4 ;
        }

        .li-drop:hover .submenu {
            @apply visible opacity-100;
        }

        .li-drop {
            @apply relative cursor-pointer;
        } 
    </style>
</head>
<body>
  <?php
  include 'header.php';
  include 'body.php';
  include 'footer.php';
  ?>    
</body>
</html>