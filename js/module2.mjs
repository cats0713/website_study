import { y as Y} from "./module1.mjs";
let x = 'hello wordl';

console.log(x);
// console.log(window.x); 모듈은 window객체를 모
console.log(Y); // 모듈간에  스코프는 따로 존재한다.
//document.write(x); window객체라서 안됨