import React from "react";


const navbar = (proo) => {
  return (
    <div>
      <div className="logo"> { proo.logo} </div>

      <ul>
        <li>home</li>
        <li>about</li>
        <li>blog</li>
        <li>const</li>
      </ul>



    </div>
  )
}
export default navbar;