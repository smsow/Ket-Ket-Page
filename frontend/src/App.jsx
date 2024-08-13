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

import React, { useState, useRef, useEffect } from 'react';
import NavBar from "./components/navbar";
import Hero from "./components/hero";
import About from "./components/about";
import Advantage from './components/advantage';
import Service from './components/service';
import Partenaire from './components/partenaire';
import Logos from './components/partenaire_logos';
import Activities from './components/activity';
import Search_Section from './components/search_section';
import { Modal_partner_3 } from './components/modal_partner3';


export default function App() {
  const [showModal, setShowModal] = useState(false); // Always visible for CSS work
  const modalRef = useRef(null);

  const handleOpenModal = () => setShowModal(true);
  const handleCloseModal = () => setShowModal(false);

  useEffect(() => {
    const handleClickOutside = (event) => {
      if (modalRef.current && !modalRef.current.contains(event.target)) {
        handleCloseModal();
      }
    };

    if (showModal) {
      document.addEventListener('mousedown', handleClickOutside);
    }

    return () => {
      document.removeEventListener('mousedown', handleClickOutside);
    };
  }, [showModal]);

  return (
    <>
      <head>
      <meta charSet="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      </head>
      <body>
        <NavBar onOpenModal={handleOpenModal} /> 
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
        <div className="">
          <Partenaire />
        </div>
        <div className="">
          <Logos />
        </div>
        <div className="">
          <Activities />
        </div>
        <div className="">
          <Search_Section />
        </div>

        {showModal && (
          <div className="fixed inset-0 z-40 bg-[#1D428A] bg-opacity-25 flex items-center justify-center">
          <div className="shadow-lg z-50 flex justify-center" ref={modalRef}>
      <Modal_partner_3 onClose={handleCloseModal} />
    </div>
  </div>
)}
      </body>
    </>
  );
}
