window.onload = () => {
  class Person{
    constructor(name, age){
      this.name = name;
      this.age = age;

    }
    sayHi(){
      console.log(`Hi ${this.name}`);
    }
    sayHello(a){
      console.log(`${a}Hello ${this.name}`);
    }
  }

  const you = new Person('ah',4);
  you.sayHi();
  you.sayHello('hoho ');
  console.log(you.age);

  const Foo = class Myclass{};
  console.log(Foo);
  // console.log(Myclass);
  const foo = new Foo();
  //new Myclass();

  class food{
    // constructor(){}
    hi(a){
      console.log(a);
    }
  }
  const me = new food();
  me.hi("add");
  console.log(me);

  const me2 = new food();
  me2.hi();

  class userA{
    constructor(arrA = []){
      this.arrA = arrA;

    }
    get firstElem(){
      return this.arrA.length ? this.arrA[0] : null; 
    }

    set firstEle(elem){
      this.arrA = [elem, ...this.arrA];
    }
  } //class filed에 접근하는 것을 방지 하기위해

  const userB = new userA([1,2,3,4]);

  console.log(userB.firstElem);

  userB.firstEle = 100; //set 표기만 가능하다.

  console.log(userB.firstElem);












}

