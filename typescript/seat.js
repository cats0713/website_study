"use strict";
class Hall {
    constructor(name, seat) {
        this.name = name;
        this.seat = seat;
    }
    displaySeat() {
        let i = 0;
        let display = ``;
        while (i < this.seat) {
            display += `<button id="${this.name}_${i}"></button>`;
            i++;
        }
        return display;
    }
}
const AHall = new Hall('A', 36);
console.log(AHall.displaySeat());
