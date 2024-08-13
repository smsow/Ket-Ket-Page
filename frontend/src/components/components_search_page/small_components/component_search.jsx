
import React from "react";


function ComponentSearch({ backgroundImage, Title, Time, pNumber, Location}) {

    return (
        <>
        <div className="bg-white h-[228px] w-[34.5vw] border-[#1D428A] border-2 rounded-[5px] shadow-shadow-search mt-[5px] ml-[36px] flex">
            <div className="h-[100%] w-[40%] flex items-center">
            <div
      className={`bg-cover bg-center h-[82%] w-[84%] mx-auto rounded-[5px]`}
      style={{ backgroundImage: `url(${backgroundImage})` }}
    >
      {/* Content can go here if needed */}
    </div>            </div>

            <div className="h-[100%] w-[60%] bg-white">
                <div className="flex flex-col gap-[15px] ">
                <h6 className="text-h6 font-quicksand w-[348px] text-center font-semibold mt-[25px] text-black">
                {Title}
                </h6>

                <div className="flex w-[80%] h-[24px]  ml-[22px] gap-auto">
                <div className="flex gap-[7px] ">
                <svg width="20" height="20" className="ml-[2px]" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M10 0C8.68678 0 7.38642 0.258658 6.17317 0.761205C4.95991 1.26375 3.85752 2.00035 2.92893 2.92893C1.05357 4.8043 0 7.34784 0 10C0 12.6522 1.05357 15.1957 2.92893 17.0711C3.85752 17.9997 4.95991 18.7362 6.17317 19.2388C7.38642 19.7413 8.68678 20 10 20C12.6522 20 15.1957 18.9464 17.0711 17.0711C18.9464 15.1957 20 12.6522 20 10C20 8.68678 19.7413 7.38642 19.2388 6.17317C18.7362 4.95991 17.9997 3.85752 17.0711 2.92893C16.1425 2.00035 15.0401 1.26375 13.8268 0.761205C12.6136 0.258658 11.3132 0 10 0ZM14.2 14.2L9 11V5H10.5V10.2L15 12.9L14.2 14.2Z" fill="black"/>
                </svg>
                <p className="font-arial font-bold text-p w-[138px] mt-[1px] ">
                {Time}
                </p>
                

                </div>

                <div className="flex gap-[8px] ">
                <svg className="mt-[1px]" width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M18 12.46L12.73 11.85L10.21 14.37C7.37121 12.9262 5.0638 10.6188 3.62002 7.78L6.15002 5.25L5.54002 0H0.0300246C-0.549975 10.18 7.82002 18.55 18 17.97V12.46Z" fill="black"/>
                </svg>

                <p className="font-arial text-p mt-[1px] ">
                    {pNumber}
                </p>
                

                </div>
                </div>

                <div className="flex w-[80%] h-[24px] ml-[22px] gap-[13.5px]">
                <svg className="ml-[5px]" width="14" height="20" viewBox="0 0 14 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M7 9.5C6.33696 9.5 5.70107 9.23661 5.23223 8.76777C4.76339 8.29893 4.5 7.66304 4.5 7C4.5 6.33696 4.76339 5.70107 5.23223 5.23223C5.70107 4.76339 6.33696 4.5 7 4.5C7.66304 4.5 8.29893 4.76339 8.76777 5.23223C9.23661 5.70107 9.5 6.33696 9.5 7C9.5 7.3283 9.43534 7.65339 9.3097 7.95671C9.18406 8.26002 8.99991 8.53562 8.76777 8.76777C8.53562 8.99991 8.26002 9.18406 7.95671 9.3097C7.65339 9.43534 7.3283 9.5 7 9.5ZM7 0C5.14348 0 3.36301 0.737498 2.05025 2.05025C0.737498 3.36301 0 5.14348 0 7C0 12.25 7 20 7 20C7 20 14 12.25 14 7C14 5.14348 13.2625 3.36301 11.9497 2.05025C10.637 0.737498 8.85652 0 7 0Z" fill="black"/>
                </svg>

                <p className="font-arial text-p mt-[2px] ">
                    {Location}
                </p>


                </div>

                <div className="flex w-[80%] h-[41px] ml-[24px] mt-[1px] gap-[10px]">
                <button className="h-[100%] w-[150px] bg-main-blue rounded-[30px] text-center text-white font-quicksand font-medium  text-p">
                Voir le Club
                </button>
                <button className="h-[100%] w-[150px] bg-white border-[#1D428A] border-[1.5px] rounded-[30px] text-center text-main-blue font-quicksand font-medium  text-p">
                S’inscrire
                </button>
                </div>


                </div>
            </div>
                
        </div>
        </>
    )
}

export default ComponentSearch;