import React, { memo } from 'react'

const Navbar = ({title, getTitle}) => {
  console.log("navbar rendered"); 
  return (
    
    <div>
      <h3> Hay I am a {title} </h3>
      <button onClick={()=> getTitle()}> 
          Click {getTitle()}
      </button>
    </div>
  )
}

export default memo(Navbar)