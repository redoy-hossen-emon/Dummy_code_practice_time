import { NavLink } from 'react-router-dom';

const Navbar = ({ title }) => (
  <>
    <nav>

      <ul>


        <li><NavLink className={(e) => { return e.isActive ? "red" : "" }} to='/'> home</NavLink></li>
        <li><NavLink className={(e) => { return e.isActive ? "red" : "" }} to='/about'> about</NavLink></li>
        <li><NavLink className={(e) => { return e.isActive ? "red" : "" }} to='/blog'> bloging</NavLink></li>
        <li><NavLink className={(e) => { return e.isActive ? "red" : "" }} to='/contact'> contact</NavLink></li>
      </ul>
    </nav>

  </>
);

export default Navbar;