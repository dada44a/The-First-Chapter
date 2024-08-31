"use strict";
class NavBar extends HTMLElement {
    constructor() {
        super();
    }
    connectedCallback() {
        this.render();
    }
    render() {
        this.innerHTML = `
            <style>
            @import url('https://fonts.googleapis.com/css2?family=Matemasie&family=Rubik:ital,wght@0,300..900;1,300..900&display=swap');
        
        
            .rubik {
            font-family: "Rubik", sans-serif;
            font-optical-sizing: auto;
            font-style: normal;
            }
            </style>

            <div class="h-[55px] flex items-center p-3 justify-between menu">
               <a href="/"> <p class="text-red-300 text-[20px] lg:text-[30px] font-semibold rubik">The 1st Chapter</p></a>
                <p id ="menuButton" class="lg:hidden" onclick="menuToggle()">Menu</p>
                <div class="hidden lg:flex lg:gap-4 lg:text-[19px] lg:font-[500] ">
                    <a href="/">Home</a>
                    <a href="/dist/php/store.php">Store</a>
                    <a href="/dist/php/cart.php">Cart</a> 
                    <a href="/dist/php/account.php">Account</a>

                </div>
            </div>`;
    }
}
customElements.define('nav-bar', NavBar);
//# sourceMappingURL=nav-bar.js.map