class Hall{
  name: string;
  seat: number;

  constructor(name: string, seat:number){
    this.name = name;
    this.seat = seat;
  }

  makeSeat(){
    let i: number = 0;
    let display:string =``;
    while(i < this.seat){
      if(i % 10 == 0){
        display += `<button id="${this.name}_${i}"></button><br>`;
      }else if(){
        
      }
      
    i++;
    }
    return display;
  }
}


const AHall = new Hall('A',36);
console.log(AHall.makeSeat());