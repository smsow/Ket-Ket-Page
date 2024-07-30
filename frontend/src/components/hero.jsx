
import React, { useEffect, useState } from 'react';


export default function Hero() {
    const [articleWithId1, setArticleWithId1] = useState(null);
    const [awards, setAwards] = useState(null); // State to hold awards

    useEffect(() => {
        // Fetch data from Laravel API
        Promise.all([
            fetch('http://127.0.0.1:8000/api/articles', {
                method: 'GET',
                headers: {
                    'Cache-Control': 'no-cache' // Prevent caching
                }
            }).then(response => response.json()),

            fetch('http://127.0.0.1:8000/api/accolands', {
                method: 'GET',
                headers: {
                    'Cache-Control': 'no-cache' // Prevent caching
                }
            }).then(response => response.json())
        ])
        .then(([articlesResponse, awardsResponse]) => {
            // Handle articles
            const newestArticle = articlesResponse.data[0]; // Take the first article if sorted by newest
            setArticleWithId1(newestArticle);

            // Handle awards
            const newestAwards = awardsResponse.data[0];
            setAwards(newestAwards); // Corrected variable name
        })
        .catch(error => {
            console.error('Error fetching data:', error);
        });
    }, []);

    // Construct the absolute URL for the images
    const imageUrl = articleWithId1 ? `http://localhost:8000/storage/${articleWithId1.image}` : '';
    const imageAward1 = awards ? `http://localhost:8000/storage/${awards.image}` : '';
    const imageAward2 = awards ? `http://localhost:8000/storage/${awards.image1}` : '';
    const imageAward3 = awards ? `http://localhost:8000/storage/${awards.image2}` : ''; // Assuming awards is an array

    console.log(articleWithId1);



    return (
      <div className="hero_container relative  h-[82%] w-[100%] overflow-visible max-lg:h-[100%]">
                <div className="hero-content-container relative flex h-[96.5%] w-[100%] mt-[1.2%] max-lg:flex-col-reverse">
                    <div className="hero-text-container relative w-[52%] h-[100%] flex-col overflow-visible max-lg:w-[100%] max-lg:h-[40%] max-lg:mt-12 max-md:h-[60%]">
                        <div className="hero-text relative ml-[10.8%] h-[38%] w-[59%] bg-white max-lg:ml-[0%] max-lg:w-[65%] max-md:w-[100%] max-md:h-[30.5%]">
                            <div className="hero-title ml-[0.58%] mt-[1.25%] w-[100%] h-[100%] bg-hero-texture flex items-center">
                                <div className="text-title relative font-arial font-bold leading-title left-7 text-main-blue max-lg:text-h1 max-lg:leading-h1 max-xs:text-h2 max-xs:leading-h2">
                                {articleWithId1?.title}
                                    
                                </div>
                            </div>
                        </div> 
                        <div className="hero-subtitle min-h-[18%] w-[51%]  ml-[12.8%] mt-[3.25%] max-2xl:ml-[12%] max-2xl:w-[60%] max-lg:ml-[2.5%] max-lg:w-[65%] max-md:w-[95%]">
                            <div className="text-h5 leading-h5 font-arial max-md:text-h6 max-md:leading-h6">
                            {articleWithId1?.subtitle}
                            
                            </div>
                        </div>
                        <div className="email-input h-[15%] w-[64%] ml-[12.45%] mt-[6.5%] flex-col max-lg:ml-[2.5%] max-lg:w-[70%] max-lg:mt-[3%] max-lg:h-[25%] max-2xl:ml-[12.5%] max-md:w-[95%] max-md:h-[20%]">
                            <div className="text-h6 leading-h6 font-quicksand mb-[5px] max-md:text-p max-md:leading-p">Entrez votre e-mail address pour s'inscrire au newsletter</div>
                            <div className="inputcontainer h-[77%] w-[100%]  flex">
                                <div className="blackbox relative h-[78%] w-[84.8%] rounded-l-xl bg-dark-gray flex items-center">
                                        <input className=" bg-transparent text-white font-quicksand text-h6 w-[80%] mt-[0.25%] h-[62.5%] ml-[2.8%] placeholder:font-lighter placeholder:text-white placeholder:text-h6 placeholder:font-quicksand max-lg:placeholder:text-p max-lg:placeholder:leading-p"  type="text" placeholder="Votre address émail" />
                                </div>
                                <button className="inputSubmit h-[78%] w-[14.8%] bg-main-red rounded-r-[18px] flex justify-center items-center">
                                    <img className="h-[50px] w-[50px] mr-[10%]" src="./img/clarity_arrow-line.png" alt="arrow-icon" />
                                </button>
                            </div>
                        </div>

                        <div className="space hidden h-[8%] max-2xl:block max-lg:h-[0%] max-xl:h-[0%] max-ml:h-[0%]">

                        </div>

                        
                        <div className="accolades h-[10%] mt-[5%] w-[87.5%]  ml-auto flex gap-[1%] max-ml:ml-[12.5%] max-2xl:flex-wrap max-2xl:place-content-start max-2xl:gap-[5%] max-lg:flex-wrap max-lg:ml-[2.5%] max-lg:h-auto max-lg:w-[90%] max-2xl:h-[20%] max-xl:w-[90%]">

                            <div className="award  w-[280px] h-[70px] flex place-content-start items-center gap-[9.55%] max-[1690px]:gap-[5%] max-2xl:gap[15%] max-lg:mt-[30px]">
                                <img className="h-[59px] w-[58px]" src={imageAward1} alt="award-icon-1" />
                                <div className="text-h6 leading-6 font-arial font-bold mb-2">
                                {awards?.description}
                                </div>
                            </div>


                            <div className="award  w-[280px] h-[70px] flex place-content-start items-center gap-[9.5%] max-[1690px]:gap-[5%] max-2xl:gap[15%] max-lg:mt-[30px]">
                                <img className="h-[58px] w-[58px]" src={imageAward2} alt="award-icon-1" />
                                <div className="text-h6 leading-6 font-arial font-bold mb-2">
                                {awards?.description1}

                                </div>
                            </div>

                            <div className="award  w-[280px] h-[70px] flex place-content-center items-center gap-[9.5%] max-[1690px]:gap-[5%] max-2xl:gap[15%] max-lg:mt-[30px]">
                                <img className="h-[64px] w-[86px]" src={imageAward3} alt="award-icon-1" />
                                <div className="text-h6 leading-6 font-arial font-bold mb-2">
                                {awards?.description2}
                                </div>
                            </div>
    
                        </div>
                    </div>
                    
                    <div className="hero-image-container  relative w-[48%] h-[93%]  max-lg:w-[100%] max-lg:h-[60%] max-lg:flex max-lg:place-content-center max-md:h-[50%] ">
                    <div className="relative h-[71%] w-[71.8%] mt-[5.75%] ml-[15%] right-[1.9%] hero-image-shadow  bg-no-repeat bg-cover bg-center max-lg:h-[95%] max-lg:ml-[0%] max-lg:w-[95%] max-lg:mt-[2%]"
                    style={{
                        backgroundImage: imageUrl ? `url(${imageUrl})` : 'none',
                        backgroundSize: 'cover',
                        backgroundPosition: 'center'
                    }} >   
                    </div>
                    <img className="absolute bottom-0 left-[68.5%] max-2xl:h-[30%] max-2xl:w-[30%] max-2xl:bottom-8 max-lg:hidden" src="./img/red-circle.png" alt="..." />  
                    </div>
                </div>
      </div>
    )
}