import React, { useEffect, useState } from 'react';


export default function Advantage() {
    const [advantage, setAdvantage] = useState(null);
    const [stat, setStat] = useState(null);

    useEffect(() => {
        // Fetch data from Laravel API
        fetch('http://127.0.0.1:8000/api/advantages', {
            method: 'GET',
            headers: {
                'Cache-Control': 'no-cache' // Prevent caching
            }
        })
        .then(response => response.json())
        .then(data => {
            // Check if the response contains valid data
            if (data.data && Array.isArray(data.data)) {
                const newestAdvantage = data.data[0] || null; // Take the first item if available
                setAdvantage(newestAdvantage);
            } else {
                console.warn('No valid data found in response');
            }
        })
        .catch(error => {
            console.error('Error fetching data:', error);
        });
    }, []);

    useEffect(() => {
        // Fetch data from Laravel API
        fetch('http://127.0.0.1:8000/api/statistics', {
            method: 'GET',
            headers: {
                'Cache-Control': 'no-cache' // Prevent caching
            }
        })
        .then(response => response.json())
        .then(data => {
            // Check if the response contains valid data
            if (data.data && Array.isArray(data.data)) {
                const newestStat = data.data[0] || null; // Take the first item if available
                setStat(newestStat);
            } else {
                console.warn('No valid data found in response');
            }
        })
        .catch(error => {
            console.error('Error fetching data:', error);
        });
    }, []);



    console.log(advantage);

    const hideScrollBarStyle = {
        msOverflowStyle: 'none', // for Internet Explorer and Edge
        scrollbarWidth: 'none',  // for Firefox
      };
      
      const hideScrollBarWebkit = {
        // for Webkit browsers (Chrome, Safari)
        overflow: 'hidden',
      };

    return (
        
        <>
        <div className="advantage-title relative h-[50.8%] z-2 pt-[7.8%] w-[100%] flex place-content-evenly max-lg:mt-[30%]">
            <div className="relative w-[100%] h-[70vh] mx-auto mt-[5.6%] bg-dots-advantage bg-center bg-no-repeat grid">
                <div className="text-center pt-[2.5%] mb-[1.25%] w-[90%] text-main-blue max-sm:pt-[0.4%]">
                    <div className="font-arial font-bold text-h3 w-[100vw] leading-[20px] mr-[34.2%] max-sm:leading-h3 ">
                        <br className='max-sm:hidden' />
                        <br  className='' />
                        <br />
                    {advantage?.titre ? advantage.titre : "NOS ATOUTS, VOTRE AVANTAGE"}
                    </div>
                
            <section className="h-[440px] w-[1620px] ml-[11.5%] relative pt-[2%] overflow-x-scroll overflow-y-hidden max-2xl:ml-[7%] max-ml:ml-[4%] max-lg:ml-[3%] max-sm:ml-[1%] max-sm:pt-[3%] max-sm:mt-[2%]" >
                  
            <div className="advantage-container flex flex-nowrap h-[100%] overflow-hidden w-[3239px] gap-[20px] relative max-2xl:h-[90%]">
                <div className="relative adv-card bg-main-blue h-[100%] w-[524px] rounded-[15px] flex-col max-sm:w-[320px]">
                        <div className=" text-[31.25px] leading-[39px] text-white font-bold font-quicksand w-[70%] mt-[6.35%] text-left ml-[4%] max-sm:text-h6 max-sm:leading-h6 max-sm:w-[83%]">
                        {advantage?.sous_titre ? advantage.sous_titre : "Installations ultramodernes"}
                        </div>

                        <div className="white-line h-[0.65%] w-[90.15%] bg-white m-auto mt-[2.35%] "></div>

                        <div className="paragraph-card text-p text-white text-left font-r-mono font-normal leading-[32px] w-[92%] mt-[3.75%] ml-[4%] ">
                            {advantage?.description ? advantage.description : "Lorem ipsum dolor sit amet consectetur. Pellentesque sit lorem ac nec nulla habitasse elit. Sit consequat cursus integer nam risus amet urna. "}
                        </div>

                        <div className="text-[320px] font-r-mono font-bold  text-left text-white text-opacity-10 -mt-[50.25%] ml-[3%] mix-blend-overlay max-sm:-mt-[90%]">
                            1
                        </div>
                </div>
                <div className="relative adv-card bg-main-blue h-[100%] w-[524px] rounded-[15px] max-sm:w-[300px]">
                <div className=" text-[31.25px] leading-[39px] text-white font-bold font-quicksand w-[82%] mt-[6.35%] text-left ml-[4%] max-sm:text-h6 max-sm:leading-h6 max-sm:w-[90%]">
                        {advantage?.sous_titre1 ? advantage.sous_titre1 : "Programme d'Entraînement Personnalisé"}
                        </div>

                        <div className="white-line h-[0.65%] w-[90.15%] bg-white m-auto mt-[2.35%] "></div>

                        <div className="paragraph-card text-p text-white text-left font-r-mono font-normal leading-[32px] w-[92%] mt-[3.75%] ml-[4%]">
                            {advantage?.description1 ? advantage.description1 : "Lorem ipsum dolor sit amet consectetur. Pellentesque sit lorem ac nec nulla habitasse elit. Sit consequat cursus integer nam risus amet urna. "}
                        </div>

                        <div className="text-[320px] font-r-mono font-bold  text-left text-white text-opacity-10 -mt-[50.25%] ml-[3%] mix-blend-overlay max-sm:-mt-[100%]">
                            2
                        </div>

                </div>
                <div className="relative adv-card bg-main-blue h-[100%] w-[524px] rounded-[15px] max-sm:w-[300px]">
                <div className=" text-[31.25px] leading-[39px] text-white font-bold font-quicksand w-[69%] mt-[6.35%] text-left ml-[4%] max-sm:text-h6 max-sm:leading-h6 max-sm:w-[78%]  ">

                        {advantage?.sous_titre2 ? advantage.sous_titre2 : "Communauté de Soutien"}
                       
                        </div>

                        <div className="white-line h-[0.65%] w-[90.15%] bg-white m-auto mt-[2.35%] "></div>

                        <div className="paragraph-card text-p text-white text-left font-r-mono font-normal leading-[32px] w-[92%] mt-[3.75%] ml-[4%]">
                            {advantage?.description2 ? advantage.description2 : "Lorem ipsum dolor sit amet consectetur. Pellentesque sit lorem ac nec nulla habitasse elit. Sit consequat cursus integer nam risus amet urna. "}
                        </div>

                        <div className="text-[320px] font-r-mono font-bold  text-left text-white text-opacity-10 -mt-[50.25%] ml-[3%] mix-blend-overlay max-sm:-mt-[100%]">
                            3
                        </div>
                </div>


                <div className="relative adv-card bg-main-blue h-[100%] w-[524px] rounded-[15px] max-sm:w-[300px]">
                <div className=" text-[31.25px] leading-[39px] text-white font-bold font-quicksand w-[63%] mt-[6.35%] text-left ml-[4%] max-sm:text-h6 max-sm:leading-h6 max-sm:w-[71%] ">

                        {advantage?.sous_titre3 ? advantage.sous_titre3 : "Installations de Pointe"}
                       
                        </div>

                        <div className="white-line h-[0.65%] w-[90.15%] bg-white m-auto mt-[2.35%] "></div>

                        <div className="paragraph-card text-p text-white text-left font-r-mono font-normal leading-[32px] w-[92%] mt-[3.75%] ml-[4%]">
                            {advantage?.description3 ? advantage.description3 : "Lorem ipsum dolor sit amet consectetur. Pellentesque sit lorem ac nec nulla habitasse elit. Sit consequat cursus integer nam risus amet urna. "}
                        </div>

                        <div className="text-[320px] font-r-mono font-bold  text-left text-white text-opacity-10 -mt-[50.25%] ml-[3%] mix-blend-overlay max-sm:-mt-[100%]">
                            4
                        </div>
                </div>

                <div className="relative adv-card bg-main-blue h-[100%] w-[524px] rounded-[15px] max-sm:w-[300px]">
                <div className=" text-[31.25px] leading-[39px] text-white font-bold font-quicksand w-[69%] mt-[6.35%] text-left ml-[4%] max-sm:text-h6 max-sm:leading-h6 max-sm:w-[90%] ">

                        {advantage?.sous_titre4 ? advantage.sous_titre4 : "Lorem ipsum dolor sit amet consectetur."}
                       
                        </div>

                        <div className="white-line h-[0.65%] w-[90.15%] bg-white m-auto mt-[2.35%] "></div>

                        <div className="paragraph-card text-p text-white text-left font-r-mono font-normal leading-[32px] w-[92%] mt-[3.75%] ml-[4%]">
                            {advantage?.description4 ? advantage.description4 : "Lorem ipsum dolor sit amet consectetur. Pellentesque sit lorem ac nec nulla habitasse elit. Sit consequat cursus integer nam risus amet urna. "}
                        </div>

                        <div className="text-[320px] font-r-mono font-bold  text-left text-white text-opacity-10 -mt-[50.25%] ml-[3%] mix-blend-overlay max-sm:-mt-[100%]">
                            5
                        </div>
                </div>

                <div className="relative adv-card bg-main-blue h-[100%] w-[524px] rounded-[15px] max-sm:w-[300px]">
                <div className=" text-[31.25px] leading-[39px] text-white font-bold font-quicksand w-[69%] mt-[6.35%] text-left ml-[4%] max-sm:text-h6 max-sm:leading-h6 max-sm:w-[90%] ">

                        {advantage?.sous_titre5 ? advantage.sous_titre5 : "Lorem ipsum dolor sit amet consectetur."}
                       
                        </div>

                        <div className="white-line h-[0.65%] w-[90.15%] bg-white m-auto mt-[2.35%] "></div>

                        <div className="paragraph-card text-p text-white text-left font-r-mono font-normal leading-[32px] w-[92%] mt-[3.75%] ml-[4%]">
                            {advantage?.description5 ? advantage.description5 : "Lorem ipsum dolor sit amet consectetur. Pellentesque sit lorem ac nec nulla habitasse elit. Sit consequat cursus integer nam risus amet urna. "}
                        </div>

                        <div className="text-[320px] font-r-mono font-bold  text-left text-white text-opacity-10 -mt-[50.25%] ml-[3%] mix-blend-overlay max-sm:-mt-[100%]">
                            6
                        </div>
                </div>

                
                

                
                
            

                

     
                
            </div>
            </section>  

            </div>

        </div>

                </div>
       
                <div className="h-[5vh] -mt-[6.25%] m-auto w-[20%] flex max-ml:-mt-[2%] max-xl:-mt-[1%] max-lg:hidden max-sm:hidden ">
                    <div className="h-[25%] w-[16%] rounded-[50px] bg-[#D9D9D9] mt-auto mb-auto ml-[18.5%]"></div>
                    <div className="h-[37%] w-[26%] rounded-[50px] bg-main-red mt-auto mb-auto ml-[7.5%]"></div>
                    <div className="h-[25%] w-[16%] rounded-[50px] bg-[#D9D9D9] mt-auto mb-auto ml-[7.5%]"></div>
            </div>   
        
        <div className="advantage-blocks mt-[7%] flex-col h-[45%] w-[100%] max-2xl:mt-[10%] max-ml:mt-[5%] max-xl:mt-[9%] max-lg:mt-[12%] max-sm:mt-[20%] max-[400px]:mt-[10%]">
        <img className="relative m-auto h-[100%] max-2xl:opacity-0" src="../img/stats_vector.png" alt="" /> 
        <div className="h-[30vh] -mt-[16.25%] w-[80%] m-auto  flex flex-wrap place-content-evenly max-lg:h-[35vh] max-lg:-mt-[40%] max-sm:h-[38vh] max-[400px]:mt-[10%] max-[380px]:mt-[40%] ">
            <div className="h-[80%] w-[437px] flex-col mt-auto mb-auto">
            <div className="text-[120px] text-center font-r-mono font-bold text-main-black"> {stat?.clients_satisfaits ? stat.clients_satisfaits : "750"}+</div>
            <div className="text-h4 text-center -mt-[2%] leading-h4 font-r-mono font-bold">{stat?.additional_column1 ? stat.additional_column1 : "Client satisfaits"}</div>
            </div>
            <div className="h-[80%] w-[437px] flex-col  mt-auto mb-auto">
            <div className="text-[120px] text-center font-r-mono font-bold text-main-black"> {stat?.avis_rares ? stat.avis_rares : "26"}+</div>
            <div className="text-h4 text-center -mt-[2%]  leading-h4 font-r-mono font-bold">{stat?.additional_column2 ? stat.additional_column2 : "Activités"}</div>
            </div>
            <div className="h-[80%] w-[437px] flex-col mt-auto mb-auto">
            <div className="text-[120px] text-center font-r-mono font-bold text-main-black"> {stat?.sports_offerts ? stat.sports_offerts : "8"}+</div>
            <div className="text-h4 text-center -mt-[2%]  leading-h4 font-r-mono font-bold">{stat?.additional_column3 ? stat.additional_column3 : "Enterprises clients"}</div>
            </div>
        </div>   
        </div>

        <div className="pt-[10%]"></div>

        
        
   

      
        
        </>

    )}