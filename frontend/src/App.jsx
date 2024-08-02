// import NavBar from "./components/navbar";
// import Hero from "./components/hero";
// import About from "./components/about";

// export default function App() {
//   return (
//   <html>
//     <head>
//       <meta charset="UTF-8" />
//       <meta name="viewport" content="width=device-width, initial-scale=1.0" />
//     </head>
//   <body>
//   <NavBar/> 
//   <Hero />
//   <About />
//   </body>
//   </html>
//   )
// }

import React from 'react'; // Import React
import NavBar from "./components/navbar";
import Hero from "./components/hero";
import About from "./components/about";
import Advantage from './components/advantage';
import Service from './components/service';

export default function App() {
  return (
    <>
      <head>
      <meta charSet="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      </head>
      <body>
        <NavBar /> 
        <Hero />
        <div className="">
        <About />
        </div>
        <div className="">
        <Advantage />
        </div>
        <div className="">
          <Service/>
        </div>
      </body>
    </>
  );
}
