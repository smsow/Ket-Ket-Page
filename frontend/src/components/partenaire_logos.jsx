import React, { useEffect, useState } from 'react';

const Logos = () => {

    const [logos, setLogos] = useState([]);
const [useStaticImage, setUseStaticImage] = useState(false); // State to decide which image to use

  useEffect(() => {
    fetch('http://127.0.0.1:8000/api/operations', {
      method: 'GET',
      headers: {
        'Cache-Control': 'no-cache'
      }
    })
      .then(response => response.json())
      .then(data => {
        if (data.data && Array.isArray(data.data)) {
          const latestServices = data.data.slice(-10);
          setLogos(latestServices);
          setUseStaticImage(false); // Use server images if available
        } else {
          console.warn('No valid data found in response');
          setLogos(getFallbackData());
          setUseStaticImage(true); // Use static images if server data is not available
        }
      })
      .catch(error => {
        console.error('Error fetching data:', error);
        setLogos(getFallbackData());
        setUseStaticImage(true); // Use static images if there's an error
      });
  }, []);

  const fallbackImages = [
    '/img/service1.png',
    '/img/puzzle.png',
    '/img/running-icon.png',
    '/img/equality.png'
  ];


  const staticImages = [
    'img/parter/wave.png',
    'img/parter/prem.png',
    'img/parter/senelec.png',
    'img/parter/s_chambre.png',
    'img/parter/elton.png',
    'img/parter/wave.png',
    'img/parter/senelec.png',
    'img/parter/s_chambre.png',
    'img/parter/elton.png',
    'img/parter/wave.png',
    'img/parter/senelec.png',
    // Add more images as needed
  ];

  const images = [
    'img/parter/wave.png',
    'img/parter/prem.png',
    'img/parter/senelec.png',
    'img/parter/s_chambre.png',
    'img/parter/elton.png',
    'img/parter/wave.png',
    'img/parter/senelec.png',
    'img/parter/s_chambre.png',
    'img/parter/elton.png',
    'img/parter/wave.png',
    'img/parter/senelec.png',
    // Add more images as needed
  ];

const getFallbackData = () => [
    { 
       
      // image:  <img src="../img/service1.png" alt="Service 1" />,
      title: 'Accès au sport pour tous:', 
    },

  ];

  return (
    <div className="flex flex-col gap-[10%] -mt-[2%]">
      <h4 className="text-[38.08px] text-center font-arial font-bold text-main-blue w-[100%] h-[30px] mb-[2.5%]">
        {logos?.title ? logos.title : "Ils nous font confiance"}
      </h4>
      <div className=" logos inline-flex whitespace-nowrap gap-[30px] mb-[5%]">
      <div className=" flex gap-[30px] items-center">
      {(useStaticImage ? staticImages : logos).map((item, index) => {
            const imageUrl = useStaticImage ? `/${item}` : `http://localhost:8000/storage/${item.image}`;
            return (
              <img
                key={index}
                src={imageUrl}
                alt={`Logo ${index}`}
                className="h-[100px] w-[190px] object-cover"
              />
            );
          })}
      </div>
      <div className=" flex gap-[30px] items-center">
        {images.map((image, ind) => (
          <div
            key={ind}
            className=" h-[100px] w-[190px]"
            style={{
              backgroundImage: `url(/${image})`,
              backgroundSize: 'cover',
              backgroundPosition: 'center',
            }}
          />
        ))}
      </div>
      </div>
    </div>
  );
};

export default Logos;
