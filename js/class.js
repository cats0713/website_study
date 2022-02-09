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

  class Foo2 {
    constructor(prop){
      this.prop = prop;
    }
    static staticM(){
      return 'we';
    }
    proptoype(){
      return this.prop;
    }
  }

  console.log(Foo2.staticM());
  
  let foo2 = new Foo2(123);
  
  //console.log(foo2.staticM());


  class Circle{
    constructor(radius){
      this.radius = radius;
    }

    getDiameter(){
      return 2* this.radius;
    }

    getPerimeter(){
      return 2 * Math.PI * this.radius;
    }
    getArea(){
      return Math.PI * Math.pow(this.radius);
    }
  }

  class Cylinder extends Circle{
    constructor( aa, heigth ){
      super(aa);
      this.heigth;
    }

    getArea(){ //overriding
      return (this.heigth * super.getPerimeter()) + (2 * super.getArea());
    }
    getVolume(){
      return super.getArea() * this.heigth;
    }
  }

  const cylinder = new Cylinder(2, 10);

  console.log(cylinder.getDiameter());  // 4
  // 원의 둘레
  console.log(cylinder.getPerimeter()); // 12.566370614359172
  // 원통의 넓이
  console.log(cylinder.getArea());      // 150.79644737231007
  // 원통의 부피
  console.log(cylinder.getVolume());    // 125.66370614359172

  // cylinder는 Cylinder 클래스의 인스턴스이다.
  console.log(cylinder instanceof Cylinder); // true
  // cylinder는 Circle 클래스의 인스턴스이다.
  console.log(cylinder instanceof Circle);   // true


  class perent {
    constructor(){}
  }

  class Child extends perent{
    constructor(aaa){
      super();
      this.aaa = aaa;
    }
    get  preintValue(){
      return this.aaa;
    }
  }
  const child = new Child(123);
  console.log(child.preintValue);
}

