import React from "react";
import "./css/NewProdect.css";

function NewProdect(){
  return(
    <div className="prodectBox">
      <section className="prodect1">
        <img src={require('./img/cat1.jpg')} alt="고양이1"/>
        <h2>고양이1</h2>
      </section>
      <section className="prodect2">
      <img src={require('./img/cat2.jpg')} alt="고양이2"/>
        <h2>고양이2</h2>
      </section>
      <section className="prodect3">
      <img src={require('./img/cat3.png')} alt="고양이3"/>
        <h2>고양이3</h2>
      </section>
    </div>
  );
}
export default NewProdect;