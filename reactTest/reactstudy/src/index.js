import React from "react";
import ReactDOM from "react-dom";

function MyCom(){
  let test;
  for(let i=0;i<10;i++){
    test += <div>good</div>;
  }
  console.log(test);
  return(<>test</>);
}
function MyCom2(){
  return(<div>good</div>);
}

function App(){
  return(<><MyCom/><MyCom2/></>);
}


ReactDOM.render(
  <App/>,
  document.getElementById("root")
);