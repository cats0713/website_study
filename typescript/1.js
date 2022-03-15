"use strict";
class Person {
    constructor(name) {
        this.name = name;
    }
    sayHello() {
        return "hello," + this.name;
    }
}
const person = new Person('aaa');
console.log(person.sayHello());
