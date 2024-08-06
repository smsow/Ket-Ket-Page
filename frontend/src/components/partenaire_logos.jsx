import React, { useEffect, useState } from 'react';

const Logos = () => {
  const [logos, setLogos] = useState([]);
  const [useStaticImage, setUseStaticImage] = useState(false);

  useEffect(() => {
    const fetchData = async () => {
      try {
        const response = await fetch('http://127.0.0.1:8000/api/operations', {
          method: 'GET',
          headers: {
            'Cache-Control': 'no-cache'
          }
        });
        const data = await response.json();

        let fetchedLogos = [];
        if (data.data && Array.isArray(data.data)) {
          fetchedLogos = data.data;
          setUseStaticImage(false); // Use dynamic data
        } else {
          console.warn('No valid data found in response');
        }

        // Set logos to be fetched data or static data as needed
        setLogos(fetchedLogos.length ? fetchedLogos : getFallbackData());
      } catch (error) {
        console.error('Error fetching data:', error);
        // Use static images if there's an error
        setLogos(getFallbackData());
        setUseStaticImage(true); // Use static images
      }
    };

    fetchData();
  }, []);

  const getFallbackData = () => [
    '/img/parter/senelec.png',
    '/img/parter/baobab.png',
    '/img/parter/elton.png',
    '/img/parter/wave.png',
    '/img/parter/prem.png',
    '/img/parter/senelec.png',
    '/img/parter/baobab.png',
    '/img/parter/elton.png',
    '/img/parter/wave.png',
  ];

  return (
    <div className="flex flex-col gap-[10%] -mt-[2%] mb-[5%] max-sm:mb-[15%]">
      <h4 className="text-[38.08px] text-center font-arial font-bold text-main-blue w-[100%] h-[30px] mb-[2.5%] max-sm:text-h5 max-sm:leading-h5 max-sm:mb-[5%]">
        {logos?.title ? logos.title : 'Ils nous font confiance'}
      </h4>
      <div className="pause relative w-[100vw] h-[100px] overflow-x-scroll">
        <div className=" logos flex flex-nowrap gap-[30px] h-full">
        {logos.map((logo, index) => (
  <div
    key={index}
    className="  w-[190px] h-[100px] bg-cover bg-center"
    style={{
      backgroundImage: `url(${logo.image ? `http://localhost:8000/storage/${logo.image}` : logo})`,
      backgroundSize: 'cover', // Ensures the image covers the entire div
      backgroundPosition: 'center', // Centers the image within the div
      backgroundRepeat: 'no-repeat', // Prevents the image from repeating

    }}

  />

))}


    
        </div>
        <div className="absolute top-0 left-0 h-full w-[100%] flex">
          <div className=" logoing flex flex-nowrap gap-[30px] h-full animate-marquee">
          {logos.map((logo, index) => (
  <div
    key={index}
    className="w-[190px] h-[100px] bg-cover bg-center"
    style={{
      backgroundImage: `url(${logo.image ? `http://localhost:8000/storage/${logo.image}` : logo})`,
    }}
  />
))}

          </div>
        </div>
      </div>
    </div>
  );
};

export default Logos;
