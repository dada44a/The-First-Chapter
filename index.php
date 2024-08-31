<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The First Chapter</title>
    <link rel="stylesheet" href="dist/css/output.css" >
    <style>
        .hero {
            position: relative;
            height: 500px;
            overflow: hidden;
        }

        .hero::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1;
        }


.cards, .trending {
    border: 1px solid black;
    width: 150px;
    height: 250px;
    flex-shrink: 0;
}

/* Small screens (sm: 640px and up) */
@media (min-width: 640px) {
    .cards, .trending {
        width: 200px;
        height: 400px;
    }
}

/* Medium screens (md: 768px and up) */
@media (min-width: 768px) {
    .cards, .trending {
        width: 220px;
        height: 420px;
    }
}

/* Large screens (lg: 1024px and up) */
@media (min-width: 1024px) {
    .cards, .trending {
        width: 250px;
        height: 450px;
    }
    .hero{
        height: 700px;
    }
}

/* Extra large screens (xl: 1280px and up) */
@media (min-width: 1280px) {
    .cards, .trending {
        width: 300px;
        height: 500px;
    }
}
        .no-scrollbar::-webkit-scrollbar {
            display: none;
        }

        .rubik {
            font-family: "Rubik", sans-serif;
            font-optical-sizing: auto;
            font-style: normal;
        }

        @keyframes slide {
            from {
                transform: translateX(0);
            }
            to {
                transform: translateX(-100%);
            }
        }

        .logos-slide {
            overflow: hidden;
            white-space: nowrap;
            position: relative;
        }

        .loop {
            display: inline-block;
            padding-left: 100%; /* Ensures the animation starts with the first text fully visible */
            animation: slide 20s linear infinite;
        }
    </style>
</head>
<body>
    <div>
        <nav-bar></nav-bar>
        <div id="menu" class="absolute hidden w-full right-0 h-[100vh] top-[0px] bg-white z-10 lg:hidden ">
            <div class="header flex justify-between items-center p-3">
            <p onclick="menuToggle()" class="font-[600]">X</p>
            <p class="text-red-300 text-[22px] font-semibold rubik">The 1st Chapter</p>
            <p>Search</p>
            </div>
            <div class="flex gap-5 flex-col p-7 font-[600] text-[19px]">
                <a href="" class="">Shop </a>
                <a href=""> Sales & Offers</a>
                <a href="">Support</a>
                <a href="">Cart</a>
            </div>
            <div class="h-[230px]">

            </div>
            <div class="h-[150px] bg-gray-100 p-6 flex flex-col gap-2 text-gray-400">
                <a href=""><p>dada44</p></a>
                <a href="">Sign Out</a>
                <p></p>
                <div class="flex gap-2">
                <a href="#"><img src="../public/social_12942738 (1).png" alt="" ></a>
                <a href="#"><img src="../public/instagram_1400829.png" alt=""></a>

                </div>
                

            </div>
        </div>
        <!-- @Section = hero -->
        <div class="hero flex items-start justify-center lg:items-center flex-col gap-5 p-4">
            <h1 class="text-[34px] sm:text-[40px]  lg:text-[55px] text-black font-semibold">
                Every Great Tale Begins with <span class="text-red-300">The First Chapter</span>
            </h1>
            <div class="flex gap-6">
                <div class="h-[45px] w-[120px] flex items-center justify-center bg-red-300 rounded-lg drop-shadow-md lg:h-[60px] lg:w-[155px]">
                    <a href="./dist/php/store.php" class="font-[600] text-[18px] text-white lg:font-[600] lg:text-[21px]">Browse</a>
                </div>
                <div class="h-[45px] w-[120px] flex items-center justify-center bg-white rounded-lg drop-shadow-md lg:h-[60px] lg:w-[155px]">
                    <a href="" class="font-[600] text-[18px] text-gray-600 lg:font-[600] lg:text-[21px] ">Learn More</a>
                </div>
            </div>
        </div>
        <!-- @endsection = hero -->

        <!-- @Section= new arrivals -->
        <section class="new_arrivals mb-[20px]">
            <div class="p-3 flex flex-col gap-4">
                <h1 class="text-[30px] font-semibold">#New Arrivals</h1>
                <div id="scrollContainer" class="flex gap-2 lg:gap-5 flex-nowrap overflow-x-scroll no-scrollbar">
                    <div class="cards"></div>
                    <div class="cards"></div>
                    <div class="cards"></div>
                    <div class="cards"></div>
                    <div class="cards"></div>
                    <div class="cards"></div>
                    <div class="cards"></div>
                    <div class="cards"></div>
                    <div class="cards"></div>
                    <div class="cards"></div>
                    <div class="cards"></div>
                </div>
                <div class="hidden items-center justify-center gap-3 lg:flex">
                    <a href="" id="scrollLeft"><img src="./public/icons8-arrow-50 (1).png" alt="" width="20px" height="20px"></a>
                    <p id="counter"></p>
                    <a href="" id="scrollRight"><img src="./public/icons8-arrow-50.png" alt="" width="20px" height="20px"></a>
                </div>
            </div>
        </section>

        <div class="logos-slide mb-[30px]">
            <div class="text-[40px] h-[70px] lg:text-[60px] lg:h-[90px] flex gap-[15px] items-center p-2 loop">
                <p class="rubik text-black inline-block whitespace-nowrap font-bold">
                    Start Your Journey with 1st Chapter - <span class="text-red-300"> Your Gateway to Great Reads</span>
                </p>
                <p class="rubik text-black inline-block whitespace-nowrap font-bold">
                    Start Your Journey with 1st Chapter - <span class="text-red-300"> Your Gateway to Great Reads</span>
                </p>
            </div>
        </div>

        <section class="new_arrivals">
            <div class="p-3 flex flex-col gap-4">
                <h1 class="text-[30px] font-semibold">#Trending</h1>
                <div id="scrollContainers" class="flex gap-2 lg:gap-5 flex-nowrap overflow-x-scroll no-scrollbar">
                    <div class="trending"></div>
                    <div class="trending"></div>
                    <div class="trending"></div>
                    <div class="trending"></div>
                    <div class="trending"></div>
                    <div class="trending"></div>
                    <div class="trending"></div>
                    <div class="trending"></div>
                    <div class="trending"></div>
                    <div class="trending"></div>
                    <div class="trending"></div>
                </div>
                <div class="hidden items-center justify-center gap-3 lg:flex">
                    <a href="" id="scrollLefts"><img src="./public/icons8-arrow-50 (1).png" alt="" width="20px" height="20px"></a>
                    <p id="counters"></p>
                    <a href="" id="scrollRights"><img src="./public/icons8-arrow-50.png" alt="" width="20px" height="20px"></a>
                </div>
            </div>
        </section>

        <footer class="mt-[10px] bg-black p-1">
            <p class="text-center text-white rubik">Copyright @ dada44 - 2022</p>
        </footer>

    </div>


    <script>
        class Toggle {
            constructor(isToggled = false) {
                this.isToggled = isToggled; // Initialize with the value passed or default to false
            }

            toggle() {
                this.isToggled = !this.isToggled; // Toggle the boolean value
            }
    }

    isToggle= new Toggle();
    const menuToggle = () => {
    isToggle.toggle();

    const menu = document.getElementById('menu');
    const menuButton = document.getElementById('menuButton');

    if (isToggle.isToggled) {
        menu.classList.remove('hidden');
        menu.classList.add('flex', 'flex-col', 'justify-between');
        menuButton.classList.add('hidden');
    } else {
        menu.classList.add('hidden');
        menu.classList.remove('flex', 'flex-col', 'justify-between');
        menuButton.classList.remove('hidden');
    }
};


    </script>
    <script src="/dist/js/newarrival.js"></script>
    <script src="/dist/js/trending.js"></script>
    <script src="/dist/js/nav-bar.js"></script>
</body>
</html>