import React, { useEffect, useState } from 'react';

export default function Search_Section() {
    return(
        <>
        <div className="Search_container mt-[7.65%] mb-[10%]">
            <h1 className='text-h1 leading-h1 font-arial font-bold text-center max-ml:text-h2 max-ml:leading-h2 max-sm:text-h3 max-sm:leading-h3'>
            Découvrez nos activités près de chez vous
            </h1>

            <div className="search_main_content w-[100%] max-h-[800px] m-auto mt-[2%] flex justify-center items-center">
            <div className="outline_container h-[700px] w-[80%] border-[#C8102E] border-opacity-25 border-[5px] rounded-[30px] flex items-center m-auto max-xl:h-[600px] max-ml:h-[675px] max-xl:w-[90%] max-ml:w-[90%]">
                <div className=" bg-dot-search bg-repeat  bg-cover bg-center mt-[2.15%] rounded-l-[25px] w-[49%] h-[100%] flex-col">
                <div className="flex w-[78%] mt-[4%] h-[40%]  m-auto gap-[27px] max-ml:w-[90%]">
                    <div className="shadow-search-box w-[275px] h-[100%] bg-main-blue rounded-[24px] flex flex-col max-xl:h-[95%]">
                        <div className="text-[96px] font-arial leading-[110px] text-white mt-[14%] ml-[6%] max-2xl:text-[70px]"> +15 </div>
                        <div className="text-h6 leading-h6 w-[77%] m-auto mb-[22.5%] text-white font-semibold font-quicksand max-xl:text-p max-xl:leading-[20px] max-ml:w-[85%] ">
                        sports à découvrir avec Ket Ket
                        <br />
                        </div>
                    </div>
                    <div className="shadow-search-box  w-[275px] h-[275px] bg-main-blue rounded-[24px] max-xl:h-[95%]">
                    <div className="text-[96px] font-arial leading-[110px] text-white mt-[14%] ml-[6%] max-2xl:text-[70px]"> +XX </div>
                        <div className="text-h6 leading-h6 w-[77%] m-auto mt-[5%]  h-[100px]  text-white font-semibold font-quicksand max-xl:text-p max-xl:leading-[20px] max-ml:w-[85%]">
                        leçons de cours physiques à découvrir avec Ket Ket
                        </div>
                    </div>
                </div>

                
                <div className="flex w-[78%] mt-[5%] h-[40%] m-auto gap-[27px] max-ml:w-[90%]">
                    <div className="shadow-search-box w-[275px] h-[275px] bg-main-blue rounded-[24px] max-xl:h-[95%]">
                    <div className="text-[96px] font-arial leading-[110px] text-white mt-[14%] ml-[6%] max-2xl:text-[70px]"> +XX </div>
                    <div className="text-h6 leading-h6 w-[77%] m-auto mt-[5%]  h-[100px]  text-white font-semibold font-quicksand max-xl:text-p max-xl:leading-[20px] max-ml:w-[85%] ">
                        leçons de cours bien-être à découvrir avec Ket Ket              
                        </div>
                    </div>
                    <div className="shadow-search-box  w-[275px] h-[275px] bg-main-blue rounded-[24px] max-xl:h-[95%]">
                    <div className="text-[96px] font-arial leading-[110px] text-white mt-[14%] ml-[6%] max-2xl:text-[70px]"> +XX </div>
                    <div className="text-h6 leading-h6 w-[77%] m-auto mt-[5%]  h-[100px]  text-white font-semibold font-quicksand max-xl:text-p max-xl:leading-[20px] max-ml:w-[85%] ">
                        clubs sportifs à découvrir avec Ket Ket
                        
                        </div>
                    </div>
                </div>
                </div>
                <div className="bg-main-red opacity-25 ml-[0.5%] w-[6px] h-[90%] max-xl:h-[90%]"></div>
                <div className=" bg-red-400 ml-[0.5%] rounded-r-[25px] w-[49%] h-[100%]"></div>
            </div>
            </div>
        </div>
        
        
        </>
    )
 }