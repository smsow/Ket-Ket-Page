import React, { useEffect, useState } from 'react';
export default function About() {
    const [about, setAbout] = useState(null);

    useEffect(() => {
        // Fetch data from Laravel API
        fetch('http://127.0.0.1:8000/api/abouts', {
            method: 'GET',
            headers: {
                'Cache-Control': 'no-cache' // Prevent caching
            }
        })
        .then(response => response.json())
        .then(data => {
            // Check if the response contains valid data
            if (data.data && Array.isArray(data.data)) {
                const newestAbout = data.data[0] || null; // Take the first item if available
                setAbout(newestAbout);
            } else {
                console.warn('No valid data found in response');
            }
        })
        .catch(error => {
            console.error('Error fetching data:', error);
        });
    }, []);

    const aboutImage1 = about ? `http://localhost:8000/storage/${about.image1}` : '';
    const aboutImage2 = about ? `http://localhost:8000/storage/${about.image2}` : '';
    const aboutImage3 = about ? `http://localhost:8000/storage/${about.image3}` : '';
    const aboutImage4 = about ? `http://localhost:8000/storage/${about.image4}` : '';
    const aboutImage5 = about ? `http://localhost:8000/storage/${about.image5}` : '';


    console.log(about);

    return (
        
        <>
        <div className="about-title relative h-[50.8%] pt-[7.8%] w-[100%] flex place-content-evenly max-lg:mt-[30%]">
            <div className="squibbly-container w-[23%] h-[100%] max-lg:hidden">
                <div className="squib ml-[29%] mt-[18.25%] max-ml:mt-[40%]">
                  <img className="w-[35%]" src="../img/blue-vector.png" alt="" />
                </div>
            </div>
            <div className="relative w-[50vw] h-[38vh] mx-auto bg-dots-about bg-center bg-no-repeat grid place-items-center max-lg:w-[86%]">
                <div className="text-center w-[90%] font-arial font-bold text-h1 leading-h1 text-main-black max-ml:text-h2 max-ml:leading-h2 max-sm:text-h3 max-sm:leading-h3">
                {about?.title ? about.title : "Nous Sommes Ket Ket"}

                </div>
            </div>
            <div className="squibbly-containr w-[24%] h-[100%] max-lg:hidden">
                <div className="squib ml-[39%] mt-[43.25%] max-ml:mt-[80%]">
                <img className="w-[35%] -rotate-45" src="../img/blue-vector.png" alt="" />
                </div>
               
            </div>
        </div>
        
        
        <div className="about-container h-[100%] m-auto w-[88%] relative  mt-[8.5%] max-lg:w-[100%]  ">
        <img className="absolute left-[17%] w-[9.5%] -top-[9.45%]" src="../img/blue-x.png" alt="" />
        <img className="absolute left-[49%] w-[8%] -top-[0.25%]" src="../img/red-x.png" alt="" />
            <div className="about-blocks flex h-[45%] w-[100%] max-lg:flex-col max-lg:space-y-[10%] max-lg:h-[70%]  ">
                <div className="about-des1 w-[38%] ml-[5.25%] h-[100%] flex-col max-ml:w-[48.5%] max-ml:ml-[0] max-lg:w-[95%] max-lg:m-auto">
                    <div className="text-h3 leading-h3 font-bold font-quicksand text-main-blue mt-[14.55%]">
                    {about?.section1_title ? about.section1_title : "Ket Ket, C’est Quoi?"}
                                        </div>

                <div className="text-h6 font-quicksand leading-[28px] font-semibold w-[100%]  mt-[4%]">
                {about?.section1_content ? about.section1_content : "Ket Ket est une entreprise sénégalaise dédiée à l'amélioration du bien-être des salariés en simplifiant l'accès aux structures sportives amateurs, en proposant des solutions d'adhésion aux entreprises pour soutenir et financer la pratique sportive de leurs employés."}
                </div>

            </div>

            <div className="relative h-[45%] w-[48%] ml-[15.3%] mt-[0.15%] max-ml:w-[48.5%] max-ml:ml-auto max-lg:w-[100%] max-lg:m-auto">
            <img 
      className="macbook relative w-[92%] max-lg:m-auto max-sm:mt-[12.5%]" 
      src={aboutImage1 ? aboutImage1 : "../img/macbook.png" } 
      alt="Description of the image" 
    />          
      <img  id="half-blue-circle" className="absolute w-[26.6%] left-[15.5%] -bottom-[7.65%] max-2xl:bottom-[25%] max-ml:bottom-[20%]" src="../img/blue-circles.png" alt=""/>

            </div>

            </div>
            <div className="about-blocks flex h-[65%] w-[100%] pb-[15%]  max-lg:flex-col-reverse max-lg:min-h-[50%] max-lg:mt-[20%] max-md:mt-[0%]">
                <div className="image-bundles w-[35.1%] ml-[5.1%] mt-[5%] h-[77.5%]  max-lg:w-[95%] max-lg:h-[100%] max-ml:w-[48.5%] max-ml:ml-[0] max-lg:m-auto">
                    <div className="macbook min-h-[215px] mt-[5%] w-[89.95%]  rounded-[20px] z-6 max-lg:h-[37.8] max-lg:ml-[10%] max-lg:w-[80.95%] max-sm:mt-[12.5%]"  
                    style={{
                        backgroundImage: aboutImage2 ? `url(${aboutImage2})` : 'url(../img/about2.png)',
                        backgroundSize: 'cover',
                        backgroundPosition: 'center'
                    }} > </div>

                    <div  className="macbook vertical-image min-h-[325px] w-[40%] -mt-[12%] ml-[4.9%] z-6 rounded-[20px]  z-10 max-lg:ml-[20%] max-lg:-mt-[6%] max-lg:h-[60%] max-lg:w-[25%] max-sm:w-[35%]"
                     style={{
                        backgroundImage: aboutImage3 ? `url(${aboutImage3})` : 'url(../img/about3.png)',
                        backgroundSize: 'cover',
                        backgroundPosition: 'center'
                    }}>
                    </div>

                    <div className="macbook min-h-[0px] w-[50.5%] ml-[47.5%] -mt-[38.5%] rounded-[20px] bg-blue-400 max-lg:h-[27.5] max-lg:w-[40.5%] max-lg:ml-[50%] max-lg:-mt-[22.5%] max-md:-mt-[35%] max-sm:-mt-[42.5%]" 
                    style={{
                        backgroundImage: aboutImage4 ? `url(${aboutImage4})` : 'none',
                        backgroundSize: 'cover',
                        backgroundPosition: 'center'
                    }}>

                    </div>

                </div>

                <div className="about-des1 w-[45%] mt-[0.35%] ml-[17.25%] h-[80%] flex-col max-ml:w-[48.5%] max-ml:ml-auto max-lg:w-[95%] max-lg:m-auto ">
                    <div className="text-h3 leading-h3 font-bold font-quicksand text-main-blue mt-[16.55%]">
                    {about?.section2_title ? about.section2_title : "Accès au sport & promotion d'un mode de vie actif"}
                                        </div>

                <div className="text-h6 font-quicksand leading-[28px] font-semibold w-[95%]  mt-[4.8%]">
                {about?.section2_content ? about.section2_content : "Ket Ket facilite l'accès des salariés à des installations sportives de qualité, encourage une pratique régulière du sport et soutient le financement des activités sportives par les entreprises pour promouvoir un mode de vie actif, réduire le stress et renforcer les liens sociaux."}
                </div>

            </div>

            </div>

            <div className="about-blocks mt-[1.25%] flex h-[45%] w-[100%] max-lg:flex-col max-lg:h-[100%] max-md:mt-[30%] max-sm:mt-[30%]">
                <div className="about-des1 w-[50%] ml-[5.25%] h-[100%]  flex-col max-ml:w-[48.5%] max-ml:ml-[0] max-lg:w-[95%] max-lg:h-[40%] max-lg:m-auto">
                    <div className="text-h3 leading-[49px] font-bold font-quicksand text-main-blue mt-[6.55%]">
                    {about?.description ? about.description : "Bien-être global et développement personnel"}
                                        </div>

                <div className="text-h6 font-quicksand leading-[28px] font-semibold w-[90%] mt-[3.25%]">
                {about?.extra_info ? about.extra_info : "Chez Ket Ket, notre engagement est de promouvoir le bien-être des salariés par des programmes sportifs qui améliorent la santé physique, renforcent la confiance en soi et soutiennent le développement personnel pour une atmosphère de travail équilibrée et productive."}
                </div>

            </div>

            <div className="relative h-[45%] w-[48%] ml-[5.3%] mt-[1.5%] max-ml:w-[48.5%] max-ml:ml-auto max-lg:w-[100%] max-lg:m-auto max-lg:mt-[0] max-sm:mt-[15%]">
            <img 
      className="macbook relative w-[92.5%] rounded-[20px] max-lg:m-auto" 
      src={aboutImage5 ? aboutImage5 : "../img/about5.png"} 
      alt="Description of the image" 
    />          
            </div>

            </div>
        </div>
            </>
    )}