import React, { useEffect, useState } from 'react';
// import fallbackImage1 from '../../public/img/service1.png'; // Local fallback image


export default function Partenaire() {  

    const [partenaire, setPartenaire] = useState(null);
    const [useStaticImage, setUseStaticImage] = useState(false); // State to decide which image to use
  
    useEffect(() => {
      fetch('http://127.0.0.1:8000/api/partenaires', {
        method: 'GET',
        headers: {
          'Cache-Control': 'no-cache'
        }
      })
      .then(response => response.json())
      .then(data => {
          // Check if the response contains valid data
          if (data.data && Array.isArray(data.data)) {
              const newestPartner = data.data[0] || null; // Take the first item if available
              setPartenaire(newestPartner);
          } else {
              console.warn('No valid data found in response');
          }
      })
      .catch(error => {
          console.error('Error fetching data:', error);
      });
  }, []);

    return (
    <>
        <div className="partner_container max-ml:mt-[50%] max-lg:mt-[75%] max-md:mt-[90%] max-sm:mt-[100%] max-[620px]:mt-[1600px]">

        <div className="about-title relative h-[50.8%] -mt-[9.3%] pt-[2.8%] pb-[10%] w-[100%] flex place-content-evenly max-lg:mt-[30%] max-sm:mt-[40%] max-[400px]:mt-[50%] max-[330px]:mt-[60%] max-[620px]:-mt-[0%] ">
            <div className="squibbly-container w-[24%] h-[100%] max-lg:hidden">
                <div className="squib ml-[29%] mt-[9.25%] max-ml:mt-[40%]">
                  <img className="w-[50%] ml-[16.5%] rotate-[17deg]" src="../img/red-x.png" alt="" />
                </div>
            </div>
            <div className="relative w-[48vw] h-[38vh] mx-auto  bg-center bg-no-repeat grid place-items-center max-lg:w-[90%]">
                <div className="text-center w-[90%] font-arial font-bold text-h1 leading-h1 text-main-black max-ml:text-h2 max-ml:leading-h2 max-sm:text-h3 max-sm:leading-h3">
                {partenaire?.title ? partenaire.title : "Faites un partenariat avec Ket Ket"}

                </div>
            </div>
            <div className="squibbly-containr w-[24%] h-[100%] max-lg:hidden">
                <div className="squib ml-[39%] mt-[21.25%] max-ml:mt-[80%]">
                <img className="w-[60%] -ml-[40%] rotate-[5deg]" src="../img/blue-x.png" alt="" />
                </div>
               
            </div>
        </div>

  
        <div className="partner_description_container min-h-[220px] left-[5%] m-auto -mt-[12.25%] w-[80.05%] max-sm:-mt-[20%] max-sm:mb-[20%] max-sm:w-[90%]">
            <h4 className='text-h4 leading-[37px] font-roboto text-black text-left font-normal max-sm:text-h5 max-sm:leading-h5'>
            {partenaire?.description ? partenaire.description : "Nous vous proposons un portail exclusif pour explorer toutes les activités sportives de la capitale, simplifiant ainsi la découverte et la participation. En tant qu'entreprise, nous comprenons profondément les besoins et les défis de l'industrie sportive. Nous offrons des solutions sur mesure pour vos employés. Devenez notre partenaire et partagez notre vision de devenir l'entreprise qui enrichit la vie des employés, un pilier essentiel de l'économie du Sénégal."}
            </h4>
        </div>

        <div className="mb-[5%] max-sm:mb-[40%]">
        <div className=" min-h-[70px] w-[589px] mt-[3.5%] ml-[10%] flex max-ml:mt-[10%] max-sm:mt-[20%] max-sm:m-auto max-sm:w-[500px]">
            <div className="blue-deco w-[16%] h-[10%] max-sm:hidden">
                <img src="../img/small-blue-line.png" alt="" />
            </div>
            <button className="button_partner z-10 w-[65%] h-[70px] bg-main-blue rounded-[10px] flex justify-center items-center font-quicksand text-[22px] font-semibold text-white max-sm:ml-[4%] max-sm:w-[60%]">
            Devenons partenaire
            </button>
            <div className="blue-deco w-[17%] max-sm:hidden">
            <img className='ml-auto mt-[10%] -rotate-[61deg]' src="../img/small-blue-line.png" alt="" />
            </div>
        </div>
        <img className="w-[8%] z-2 mt-[1.5%] ml-[25.8%] rotate-[5deg]" src="../img/blue-x.png" alt="" />
                </div>

        <div className="min-h-[1031px] mb-[10%] mt-[6.75%] w-[100%] bg-partner-background bg-center bg-cover">
            <div className="partner-subtitle h-fit w-[70%] ml-[9%] text-main-blue">
                <h3 className='text-h3 font-quicksand font-bold'>
                {partenaire?.subtitle ? partenaire.subtitle : "Pourquoi être partenaire avec Ket Ket ?"}

                </h3>
            </div>
            <div className="min-h-[770px] w-[80%] mt-[5%] m-auto flex gap-[3.2%] max-2xl:w-[90%] max-ml:flex-wrap max-md:justify-center">
                <div className="bg-main-blue h-[60vh] w-[31.2%] mb-[10%] rounded-[46px] max-ml:w-[40%] max-xl:w-[50%] max-lg:w-[60%] max-md:w-[80%] max-md:mx-auto max-sm:w-[100%]">
                    <div className="card-content h-fit">
                        <h4 className='text-h4 leading-h4 text-white font-arial mt-[12.2%] w-[80%] m-auto font-bold max-[450px]:text-h5 max-[450px]:leading-h5'>
                        {partenaire?.cart_titre ? partenaire.cart_titre : "Amélioration du bien-être en entreprise"}
                        </h4>
                        <p className='text-white font-arial text-h5 leading-[38px] font-light mt-[4.6%] m-auto w-[81%] max-[450px]:text-[20px] max-[450px]:leading-[32px]'>
                        {partenaire?.cart_description1 ? partenaire.cart_description1: "En devenant partenaire de Ket Ket, vous contribuez à améliorer le bien-être de vos employés. Cette collaboration permet d'offrir des solutions innovantes pour favoriser la santé et le dynamisme de votre équipe, renforçant ainsi la productivité et la satisfaction au travail."}
                        </p>
                    </div>
                </div>
                <div className="bg-main-red h-[60vh] w-[31.2%] mt-[6%] rounded-[46px] max-ml:w-[40%] max-xl:w-[50%] max-xl:mx-auto max-lg:w-[60%] max-md:w-[80%] max-md:mx-auto max-sm:w-[100%] ">
                    <div className="card-content h-fit">
                        <h4 className='text-h4 leading-h4 text-white font-arial mt-[10.2%] w-[80%] m-auto font-bold max-[450px]:text-h5 max-[450px]:leading-h5'>
                        {partenaire?.cart_description3 ? partenaire.cart_description3 : "Investissement dans la performance et la durabilitét"}
                        </h4>
                        <p className='text-white font-arial text-h5 leading-[38px] font-light mt-[2.6%] mb-[10%]  m-auto w-[81%] max-[450px]:text-[20px] max-[450px]:leading-[32px] '>
                        {partenaire?.cart_description2 ? partenaire.cart_description2: "Collaborer avec Ket Ket est un investissement stratégique pour la performance durable de votre entreprise. En intégrant des programmes de sport et de bien-être, vous stimulez l'engagement des employés, réduisez les coûts liés à l'absentéisme et améliorez la satisfaction client, renforçant ainsi votre position sur le marché."}
                        </p>
                    </div>
                </div>
                <div className="bg-main-blue min-h-[60vh] w-[31.2%] mt-[10%]  rounded-[46px] max-ml:w-[40%] max-xl:w-[50%] max-xl:ml-auto max-lg:w-[60%] max-md:w-[80%] max-md:mx-auto max-sm:w-[100%]">
                    <div className="card-content h-fit">
                        <h4 className='text-h4 leading-h4 text-white font-arial mt-[10.2%] w-[80%] m-auto font-bold max-[450px]:text-h5 max-[450px]:leading-h5'>
                        {partenaire?.cart_description4 ? partenaire.cart_description4 : "Expansion dans le secteur sportif au Sénégal"}
                        </h4>
                        <p className='text-white font-arial text-h5 leading-[38px] font-light mt-[2.6%] mb-[10%] m-auto w-[81%] max-[450px]:text-[20px] max-[450px]:leading-[32px] '>
                        {partenaire?.cart_description5 ? partenaire.cart_description5: "En partenariat avec Ket Ket, vous pouvez étendre votre présence et renforcer votre impact dans le domaine du sport au Sénégal. Ensemble, nous facilitons l'accès à des infrastructures sportives de qualité et proposons des solutions d'adhésion attractives aux entreprises, promouvant un mode de vie sain et actif pour les salariés."}
                        </p>
                    </div>
                </div>
            </div>
        </div>

      


        </div>
        
        











    </>
)}