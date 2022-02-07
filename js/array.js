window.onload = () => {
  const arr = [1, 2, 3, 4, 5]

  const [arr1, arr2, ...arr3] = arr;
  arr[4] = 6;
  console.log(arr1, arr2, arr3);

  const today = new Date(); // Tue May 21 2019 22:19:42 GMT+0900 (한국 표준시)
  const formattedDate = today.toISOString().substring(/^[.]{10}$/); // "2019-05-21"
  console.log(formattedDate);
  const [year, month, day] = formattedDate.split(/\-/); //글자를 기준선으로 파싱하는 것
  console.log([year, month, day]); // [ '2019', '05', '21' ]

  const obj = { firstName: 'Ungmo', lastName: { aa: 1, bb: 2 } };
  const { ...firstName } = obj; //객체 복사
  obj.firstName = 'aaa';
  console.log(firstName); // Ungmo Lee
  console.log(obj);

  const { propp1: p1, propp2: p2 } = { propp1: 'a', propp2: 'b' };
  console.log(p1, p2); // 'a' 'b'
  console.log({ propp1: p1, propp2: p2 }); // { prop1: 'a', prop2: 'b' }

  const { propt1, propt2 } = { propt1: 'a', propt2: 'b' };
  console.log({ propt1, propt2 });

  const { prop1, prop2, prop3 = 'c' } = { prop1: 'a', prop2: 'b' };
  console.log({ prop1, prop2, prop3 }); // { prop1: 'a', prop2: 'b', prop3: 'c'

  //let arra,arrb;
  let myObj = {arra , arrb, arrc = 2} = {arra: 'a', arrb: 'b'};
  console.log(myObj.arra);
  console.log(myObj);
  console.log(arrc);
}