"use strict";
const scrollContainer = document.getElementById('scrollContainer');
const scrollLeftBtn = document.getElementById('scrollLeft');
const scrollRightBtn = document.getElementById('scrollRight');
const counter = document.getElementById('counter');
const totalCards = document.querySelectorAll('.cards').length;
const scrollAmount = 200; // Adjust the amount to scroll per click
var count = 1;
if (counter) {
    counter.innerHTML = `${count}/${totalCards}`;
}
scrollLeftBtn === null || scrollLeftBtn === void 0 ? void 0 : scrollLeftBtn.addEventListener('click', (e) => {
    e.preventDefault();
    if (count > 1) {
        count = count - 2;
        if (counter) {
            counter.innerHTML = `${count}/${totalCards}`;
        }
        scrollContainer === null || scrollContainer === void 0 ? void 0 : scrollContainer.scrollBy({ left: -scrollAmount, behavior: 'smooth' });
    }
});
scrollRightBtn === null || scrollRightBtn === void 0 ? void 0 : scrollRightBtn.addEventListener('click', (e) => {
    e.preventDefault();
    if (count < totalCards - 1) {
        count = count + 2;
        if (counter) {
            counter.innerHTML = `${count}/${totalCards}`;
        }
        scrollContainer === null || scrollContainer === void 0 ? void 0 : scrollContainer.scrollBy({ left: scrollAmount, behavior: 'smooth' });
    }
});
//# sourceMappingURL=newarrival.js.map