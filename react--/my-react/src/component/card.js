import "./card.css"
import { useState } from "react";

const Card = (props) => {
  const [Calue, setValue] = useState(0)
  return (
    <div className="siglebox">
      <div className="sboxicon"><i className="fab fa-accusoft" aria-hidden="true"></i></div>
      <div className="sboxtitle">
        <a href="http://localhost:3000/#">
          <h2>{props.title } onClick={() => { setValue(Calue +2) }}</h2>
        </a>
      </div>
      <div className="sboxdesc"> Mauris mattis auctor tellus imperdiet eu ut imperdiet tellus, imperdiet ut</div>
      <div className="sboxlink"><a className="larnmore" href="http://localhost:3000/#">Learn more <i className="fas fa-arrow-right" aria-hidden="true"></i> </a></div>
    </div>
  )
}

export default Card;