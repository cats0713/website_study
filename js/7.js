const tel = '0101234567팔';
const myString = /^[0-9]+$/;

console.log(myString.test(tel));


let tarGetStr = 'This is a pen. is a vary good';
const regexr = /is/ig; //ig는 끝까지 간다.

let A = regexr.exec(tarGetStr);
console.log(A);
console.log(A['index']);

console.log(regexr.test(tarGetStr));
console.log(tarGetStr.match(regexr).length);
console.log(tarGetStr.replace(regexr,'IS'));
//tarGetStr = tarGetStr.replace(regexr,'IS'); 
console.log(tarGetStr); //값을 담아야 값이 바뀐다.(함수는 그냥 동작을 했을뿐)
console.log(tarGetStr.search(regexr));

console.log(tarGetStr.split(regexr));

const Astring = 'Is this all there is?';

let regText = /is/;

console.log(Astring.match(regText));

regText = /is/ig;

console.log(Astring.match(regText).length);

const text = 'AA BB Aa Bb';
const reg = /./g;

console.log(text.match(reg)); //글자 뽀개기 가능

