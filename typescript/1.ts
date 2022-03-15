class Person{
  private name: string;

  constructor(name:string){
    this.name = name;
  }

  sayHello(){
    return "hello," + this.name;
  }
}

const person = new Person('aaa');
console.log(person.sayHello());