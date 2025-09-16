import { useState } from 'react';
import { createBrowserRouter, RouterProvider } from 'react-router-dom';
import './App.css';
import Navbar from './component/navbar';
import Home from './component/home';
import About from './component/about';
import Contact from './component/contact';
import Blog from './component/blog';
import User from './component/user';

function App({title}) {
  const [count, setCount] = useState(0)

  const router = createBrowserRouter([
    {
      path: "/",
      element:<>  <Navbar /> <Home title={"Home"} /> </>
    },
    {
      path: "/about",
      element:<>  <Navbar /> <About title={"About"} /> </>
    },
    {
      path: "/blog",
      element:<>  <Navbar /> <Blog title={"Blog"} /> </>
    },
    {
      path: "/contact",
      element: <>  <Navbar /> <Contact title={"Contact"} /></>
    },
    {
      path: "/user/:names",
      element: <>  <Navbar /> <User  /></>
    },
  ])

  return (
    <>



      <RouterProvider router={router} />





    </>
  )
}

export default App
