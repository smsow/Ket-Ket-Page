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
            <div className="relative w-[65%] mx-auto bg-dots-about bg-center bg-no-repeat grid place-items-center max-lg:w-[86%]">
                <div className="text-center w-[90%] font-arial font-bold text-h1 leading-h1 text-main-black max-ml:text-h2 max-ml:leading-h2 max-sm:text-h3 max-sm:leading-h3">
                {about?.title}

                </div>
            </div>
            <div className="squibbly-containr w-[24%] h-[100%] max-lg:hidden">
                <div className="squib ml-[39%] mt-[43.25%] max-ml:mt-[80%]">
                <img className="w-[35%] -rotate-45" src="../img/blue-vector.png" alt="" />
                </div>
               
            </div>
        </div>
        
        
        <div className="about-container h-[100%] m-auto w-[88%] relative  mt-[8.5%] max-lg:w-[100%]  ">
        <img className="absolute left-[17%] w-[9.5%] -top-[11%]" src="../img/blue-x.png" alt="" />
        <img className="absolute left-[49%] w-[8%] top-[1%]" src="../img/red-x.png" alt="" />
            <div className="about-blocks flex h-[45%] w-[100%] max-lg:flex-col max-lg:h-[70%]  ">
                <div className="about-des1 w-[38%] ml-[5.25%] h-[100%] flex-col max-ml:w-[48.5%] max-ml:ml-[0] max-lg:w-[95%] max-lg:m-auto">
                    <div className="text-h3 leading-h3 font-bold font-quicksand text-main-blue mt-[16.55%]">
                    {about?.section1_title}
                                        </div>

                <div className="text-h6 font-quicksand leading-[28px] font-semibold w-[100%]  mt-[4%]">
                {about?.section1_content}
                </div>

            </div>

            <div className="relative h-[45%] w-[48%] ml-[15.3%] mt-[0.75%] max-ml:w-[48.5%] max-ml:ml-auto max-lg:w-[100%] max-lg:m-auto">
            <img 
      className="macbook relative w-[92%] max-lg:m-auto max-sm:mt-[12.5%]" 
      src={aboutImage1} 
      alt="Description of the image" 
    />          
      <img  id="half-blue-circle" className="relative w-[26.6%] left-[15.5%] bottom-[78%] max-2xl:bottom-[25%] max-ml:bottom-[20%]" src="../img/blue-circles.png" alt=""/>

            </div>

            </div>
            <div className="about-blocks flex h-[65%] w-[100%]  max-lg:flex-col-reverse max-lg:h-[90%] max-lg:mt-[20%]  ">
                <div className="image-bundles w-[35.1%] ml-[5.1%] mt-[5%] h-[77.5%]  max-lg:w-[95%] max-lg:h-[100%] max-ml:w-[48.5%] max-ml:ml-[0] max-lg:m-auto">
                    <div className="macbook h-[42.8%] mt-[5%] w-[89.95%]  rounded-[20px] z-6 max-lg:h-[37.8] max-lg:ml-[10%] max-lg:w-[80.95%] max-sm:mt-[12.5%]"  
                    style={{
                        backgroundImage: aboutImage2 ? `url(${aboutImage2})` : 'none',
                        backgroundSize: 'cover',
                        backgroundPosition: 'center'
                    }} > </div>

                    <div  className="macbook vertical-image h-[65%] w-[40%] -mt-[12%] ml-[4.9%] z-6 rounded-[20px]  z-10 max-lg:ml-[20%] max-lg:-mt-[6%] max-lg:h-[60%] max-lg:w-[25%] max-sm:w-[35%]"
                     style={{
                        backgroundImage: aboutImage3 ? `url(${aboutImage3})` : 'none',
                        backgroundSize: 'cover',
                        backgroundPosition: 'center'
                    }}>
                    </div>

                    <div className="macbook h-[32.5%] w-[50.5%] ml-[47.5%] -mt-[38.5%] rounded-[20px] bg-blue-400 max-lg:h-[27.5] max-lg:w-[40.5%] max-lg:ml-[50%] max-lg:-mt-[22.5%] max-md:-mt-[35%] max-sm:-mt-[42.5%]" 
                    style={{
                        backgroundImage: aboutImage4 ? `url(${aboutImage4})` : 'none',
                        backgroundSize: 'cover',
                        backgroundPosition: 'center'
                    }}>

                    </div>

                </div>

                <div className="about-des1 w-[45%] mt-[0.35%] ml-[17.25%] h-[80%] flex-col max-ml:w-[48.5%] max-ml:ml-auto max-lg:w-[95%] max-lg:m-auto">
                    <div className="text-h3 leading-h3 font-bold font-quicksand text-main-blue mt-[16.55%]">
                    {about?.section2_title}
                                        </div>

                <div className="text-h6 font-quicksand leading-[28px] font-semibold w-[95%]  mt-[4.8%]">
                {about?.section2_content}
                </div>

            </div>

            </div>

            <div className="about-blocks flex h-[45%] w-[100%] max-lg:flex-col max-lg:h-[100%] max-sm:mt-[10%]  ">
                <div className="about-des1 w-[50%] ml-[5.25%] h-[100%]  flex-col max-ml:w-[48.5%] max-ml:ml-[0] max-lg:w-[95%] max-lg:h-[40%] max-lg:m-auto">
                    <div className="text-h3 leading-h3 font-bold font-quicksand text-main-blue mt-[6.55%]">
                    {about?.description}
                                        </div>

                <div className="text-h6 font-quicksand leading-[28px] font-semibold w-[100%] mt-[4.25%]">
                {about?.extra_info}
                </div>

            </div>

            <div className="relative h-[45%] w-[48%] ml-[5.3%] mt-[1.5%] max-ml:w-[48.5%] max-ml:ml-auto max-lg:w-[100%] max-lg:m-auto max-lg:mt-[0] max-sm:mt-[15%]">
            <img 
      className="macbook relative w-[92.5%] rounded-[20px] max-lg:m-auto" 
      src={aboutImage5} 
      alt="Description of the image" 
    />          
            </div>

            </div>
        </div>
            </>
    )}