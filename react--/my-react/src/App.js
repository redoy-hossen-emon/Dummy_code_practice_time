// import logo from './logo.svg';
import './App.css';
import { useState } from 'react';

import Navbar from './navbar';
import Card from './component/card';



function App() {
  const [value, setValue] = useState(0)

  return (
    <div className="App">
      <Navbar logo="redoy hossen"/>
      <div className="cardWrapper">
    <Card title="arcitacture"/>
    <Card title="Designing"/>
    <Card title="developer"/>
    <Card title="Builder"/>
    <Card title="marketing "  />

      </div>
      <h2>{value}</h2>
      <button onClick={() => { setValue(value +2) }}>click me</button>
    </div>
  );
}

export default App;
