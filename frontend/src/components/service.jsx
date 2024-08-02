import React, { useEffect, useState } from 'react';
// import fallbackImage1 from '../../public/img/service1.png'; // Local fallback image


export default function Service() {     
  
  const [services, setServices] = useState([]);
  const [useStaticImage, setUseStaticImage] = useState(false); // State to decide which image to use

  useEffect(() => {
    fetch('http://127.0.0.1:8000/api/services', {
      method: 'GET',
      headers: {
        'Cache-Control': 'no-cache'
      }
    })
      .then(response => response.json())
      .then(data => {
        if (data.data && Array.isArray(data.data)) {
          const latestServices = data.data.slice(-4);
          setServices(latestServices);
          setUseStaticImage(false); // Use server images if available
        } else {
          console.warn('No valid data found in response');
          setServices(getFallbackData());
          setUseStaticImage(true); // Use static images if server data is not available
        }
      })
      .catch(error => {
        console.error('Error fetching data:', error);
        setServices(getFallbackData());
        setUseStaticImage(true); // Use static images if there's an error
      });
  }, []);

  const fallbackImages = [
    '/img/service1.png',
    '/img/puzzle.png',
    '/img/running-icon.png',
    '/img/equality.png'
  ];

  const servicesimage = services ? `http://localhost:8000/storage/${services.image}` : '';


  const getFallbackData = () => [
    { 
       
      // image:  <img src="../img/service1.png" alt="Service 1" />,
      subtitle: 'Accès au sport pour tous:', 
      description: "Ket Ket s'engage à faciliter l'accès des salariés à des structures sportives amateurs de qualité. En rendant le sport plus accessible, l'entreprise encourage une pratique régulière et contribue ainsi à améliorer la santé physique et mentale des employés." 
    },

    { 
     
    //  image:  <img src="../img/service1.png" alt="Service 1" />,
     subtitle: "Cohésion d'équipe renforcée", 
     description: "La pratique sportive en entreprise peut être un excellent moyen de renforcer la cohésion d'équipe. Ket Ket propose des solutions d'adhésion qui permettent aux salariés de partager des moments conviviaux et de développer des liens solides en dehors du cadre professionnel." 
   },

   { 
  
  //  image:  <img src="../img/service1.png" alt="Service 1" />,
   subtitle: "Promotion d'un mode de vie actif", 
   description: "Ket Ket encourage les entreprises à soutenir et à financer la pratique sportive de leurs employés. En mettant l'accent sur un mode de vie actif, l'entreprise vise à réduire le stress, favoriser le bien-être mental et renforcer le lien social au sein de l'entreprise de l'entreprise." 
 },

 { 
  // Use symlinked image path
//  image: "../img/service1.png",
 subtitle: "Promotion de la diversité et de l'inclusion", 
 description: "En rendant le sport accessible à tous les employés, quel que soit leur niveau ou leur expérience, Ket Ket encourage la diversité et l'inclusion en milieu professionnel. Chaque employé a la possibilité de participer et de s'épanouir dans un environnement sportif inclusif." 
},
  ];

    return (
        
        <>
        <div className="service-container -mt-[10%] max-lg:mt-[60%] max-[1094px]:mt-[20%] max-sm:mt-[70%] max-[520px]:mt-[100%] max-[420px]:mt-[475px]">
        <div className="service-title relative h-[50.8%] pt-[7.8%] w-[100%] bottom-[20%]  flex place-content-evenly max-lg:mt-[30%] max-sm:mt-[40%] max-[400px]:mt-[50%] max-[330px]:mt-[60%]">
            <div className="squibbly-container w-[24.65%] h-[100%] max-lg:hidden">
                <div className="squib ml-[46%] mt-[2.25%] max-ml:mt-[40%] -rotate-[10deg]">
                    <img className="w-[58%] mt-[5%] -rotate-[5deg]" src="../img/blue-x.png" alt="" />
                  <img className="w-[45%] mt-[10%] rotate-[15deg]" src="../img/blue-vector.png" alt="" />
                </div>
            </div>
            <div className="relative w-[50vw] h-[38vh] right-[0.8%] mx-auto bg-dots-service bg-center bg-no-repeat grid place-items-center max-lg:w-[86%]">
                <div className="text-center w-[90%] ml-[3%] font-arial font-bold text-h1 leading-h1 text-main-black max-ml:text-h2 max-ml:leading-h2 max-sm:text-h3 max-sm:leading-h3">
                {services?.title ? services.title : "Nos Services"}

                </div>
            </div>
            <div className="squibbly-containr w-[24%] h-[100%] max-lg:hidden">
            <div className="squib ml-[36%] mt-[20.25%] max-ml:mt-[40%] -rotate-[10deg">
                  <img className="w-[45%] mt-[10%] -rotate-[30deg]" src="../img/blue-vector.png" alt="" />
                    <img className="w-[58%] mt-[5%] -rotate-[5deg]" src="../img/blue-x.png" alt="" />
                </div>
            <img className='ml-auto w-[22.25%] -mt-[31%]'  src="../img/half-circle.png" alt="" />
               
            </div>
        </div>
        
        
        <div className="service-main-container h-[475px] m-auto w-[70%] mt-[2.25%] max-[1750px]:w-[80%] max-2xl:w-[90%] relative mb-[10%] max-lg:w-[100%]">
        <img src="../img/red-circles.png" alt="" className="absolute z-1 ml-[10%] mt-[22.5%] hidden max-sm:block max-sm:mt-[600px]" />
        <img src="../img/red-circles.png" alt="" className="absolute z-1 ml-[5%] mt-[22.5%] hidden max-sm:block max-sm:mt-[1500px]" />
      <div className="service-blocks-container flex h-[100%] max-ml:flex-wrap  max-ml:justify-center gap-[3%] ml-[1.5%] w-[100%] max-lg:gap-[3%]  max-lg:space-y-[10%] max-lg:h-[70%]">
      <img src="../img/red-circles.png" alt="" className="absolute z-1 -ml-[135px] mt-[22px] max-ml:-ml-[90%] max-sm:hidden" />
      {services.map((service, index) => (
        <div key={index} className="bg-main-blue box-service-shadow w-[300px] flex flex-col items-center z-10 justify-center max-lg:m-auto">
          <img
            src={useStaticImage ? fallbackImages[index % fallbackImages.length] : `http://localhost:8000/storage/${service.image}`} // Conditional src with multiple static images
            alt={`Image for ${service.subtitle}`}
            className="w-[35%] m-auto mt-6 overflow-visible max-[1630px]:w-[30%] max-ml:mt-7 "
          />
          <h2 className="text-h6 leading-h6 text-white font-quicksand font-bold w-[80%] text-center mb-5 max-ml:mb-[10px]">
            <br className='hidden max-ml:block' />
            {service.subtitle}
          </h2>
          <p className="text-p leading-[25px] text-white font-arial w-[81%] text-center mb-9 max-ml:mb-[50px]">
            {service.description}
          </p>
        </div>
      ))}
       <img src="../img/red-circles.png" alt="" className="absolute z-1 ml-[88%] mt-[22.5%] max-sm:-mt-40" />

      </div>
      <img src="../img/red-circles.png" alt="" className="absolute z-1 ml-[50%] mt-[22.5%] hidden max-sm:block max-sm:mt-[800px]" />
    </div>
        </div>
            </>
    )}
    