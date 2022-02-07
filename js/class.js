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

}

