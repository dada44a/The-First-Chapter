<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="/dist/css/output.css">
    <style>
        input {
           outline: none;
            border: none;
            border-radius: 20px;
            border: 1px solid #000000;
            padding: 10px;
        }

    </style>
</head>
<body>
    <nav-bar></nav-bar>

    <div id="menu" class="absolute hidden w-full right-0 h-[100vh] top-[0px] bg-white z-10 lg:hidden">
        <div class="header flex justify-between items-center p-3">
            <p onclick="menuToggle()" class="font-[600]">X</p>
            <p class="text-red-300 text-[22px] font-semibold rubik">The 1st Chapter</p>
            <p>Search</p>
        </div>
        <div class="flex gap-5 flex-col p-7 font-[600] text-[19px]">
            <a href="" class="">Shop</a>
            <a href="">Sales & Offers</a>
            <a href="">Support</a>
            <a href="">Cart</a>
        </div>
        <div class="h-[230px]"></div>
        <div class="h-[150px] bg-gray-100 p-6 flex flex-col gap-2 text-gray-400">
            <?php if(isset($_SESSION['username'])):?>
                <a href=""><p>dada44</p></a>
            <?php else:?>
                <a href="">Login</a>
            <?php endif;?>
            
            <?php if(isset($_SESSION['username'])):?>
                <a href="">Sign Out</a>
            <?php else:?>
                <a href="">Signup</a>
            <?php endif;?>

            <div class="flex gap-2">
                <a href="#"><img src="/public/social_12942738 (1).png" alt="" width="16px" height="16px"></a>
                <a href="#"><img src="/public/instagram_1400829.png" alt="" width="16px" height="16px"></a>
            </div>
        </div>
    </div>

    <div class="h-[90vh] w-full flex  items-center justify-between p-5">
        <div class="w-[100%] md:w-[50%] flex-col flex items-center justify-center">
        <form action="" class="flex flex-col gap-5 item-center justify-center w-[80%]">
            <input type="email" name="email" placeholder="Username">
            <input type="email" name="email" placeholder="Email"> 
            <input type="password" name="password" placeholder="Password">
            <input type="password" name="password" placeholder="Re-Password">
            <div class="flex w-full items-center">
            <button id="button" type="submit" class="w-[100%] h-[40px] rounded-2xl mt-2 text-white text-[12px] sm:text-[15px] bg-black " > Login</button>
            </div>
        </form>
        <p class="mt-[10px] text-[12px] sm:text-[15px] text-gray-500 text-start">Already a member? <a href="./Login.php" class="font-[600]">Sign In</a> here.</p>
        </div>
        
        <div class="hidden  md:w-[50%] p-5 md:flex md:items-center md:justify-center">
            <img src="/public/undraw_bibliophile_re_xarc.svg" alt="" width="500px" height="500px">
        </div>
    </div>

    <footer class="bg-black p-1">
        <p class="text-center text-white rubik">Copyright @ dada44 - 2022</p>
    </footer>

    <script src="/dist/js/nav-bar.js"></script>
    <script>
        class Toggle {
            constructor(isToggled = false) {
                this.isToggled = isToggled; // Initialize with the value passed or default to false
            }

            toggle() {
                this.isToggled = !this.isToggled; // Toggle the boolean value
            }
        }

        let isToggle = new Toggle();

        const menuToggle = () => {
            isToggle.toggle();

            const menu = document.getElementById('menu');
            const menuButton = document.getElementById('menuButton');

            if (isToggle.isToggled) {
                menu.classList.remove('hidden');
                menu.classList.add('flex', 'flex-col', 'justify-between');
                if (menuButton) {
                    menuButton.classList.add('hidden');
                }
            } else {
                menu.classList.add('hidden');
                menu.classList.remove('flex', 'flex-col', 'justify-between');
                if (menuButton) {
                    menuButton.classList.remove('hidden');
                }
            }
        };
    </script>
</body>
</html>
