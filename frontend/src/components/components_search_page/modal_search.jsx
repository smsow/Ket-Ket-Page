import React, { useState } from "react";
import CheckboxItem from "./small_components/checkbox_component";

export function Modal_search({ label, id, smallFontSize, width }) {
    const [localCheckboxState, setLocalCheckboxState] = useState({
        salleDeSport: false,
        football: false,
        natation: false,
        // Other sports...
      });
    
      const handleCheckboxChange = (id) => {
        setLocalCheckboxState((prevState) => ({
          ...prevState,
          [id]: !prevState[id],
        }));
      };


    return(
        <>
        <div className="bg-white w-[640px] mt-[7.35%] h-[550px] rounded-[5px] ">
                <div className="flex flex-col">
                    <div className="text-p leading-p text-black font-quicksand mt-[6.25%] font-bold w-[237px] m-auto">
                    Filtrer par horaires et options
                    </div>


                    <div className="text-p leading-p text-black font-quicksand ml-[4.5%] mt-[5.6%] font-bold">
                    Horaires
                    </div>

                    <form action="" className="bg-black-400 m-auto w-[600px] h-[408px]  flex flex-col place-content-between">
                    <div className="w-[249px] flex place-content-between">
                    <div className="h-[40px] w-fit py-2 bg-[#F6F9FF] flex gap-[9px] rounded-[5px] mt-1 mx-2 px-2">
                        <input className=" rounded-[6px] w-[22px] ml-[1px] h-[22px] accent-black border-[1px] checked:bg-black cursor-pointer border-black appearance-none" type="checkbox" />
                        <div className="text-p pr-5 font-quicksand -mt-[1px] text-black">24h/7h</div>
                    </div>
                    <div className="h-[40px] w-fit py-2 bg-[#F6F9FF] flex gap-[9px] rounded-[5px] mt-1 mx-1 px-2">
                        <input className=" rounded-[6px] w-[22px] ml-[2px] h-[22px] accent-black border-[1px] checked:bg-black cursor-pointer border-black appearance-none" type="checkbox" />
                        <div className="text-p pr-3 font-quicksand -mt-[1px] text-black">24h/24h</div>
                    </div>
                    </div>

                    <div className=" h-[297.5px] w-[600px] flex flex-col ">
                        <div className="w-[576px] border-[2px] border-[#828282] mt-1 mx-auto border-dashed"></div>


                    <div className="text-p leading-p text-black font-quicksand ml-[1.35%] mt-[10px] font-bold">
                    Options de fitness et bien-être
                    </div>

                    <div className="w-[430px]  flex mt-1 place-content-evenly">
                    <div className="h-[40px] w-fit py-2 bg-[#F6F9FF] flex gap-[9px] rounded-[5px] mt-1 px-2">
                        <input className=" rounded-[6px] w-[22px] ml-[1px] h-[22px] accent-black border-[1px] checked:bg-black cursor-pointer border-black appearance-none"
                    type="checkbox"
                    id="salleDeSport"
                    checked={localCheckboxState.salleDeSport}
                    onChange={() => handleCheckboxChange('salleDeSport')}
                           />
                        <div className="text-p font-quicksand w-[103px] -mt-[1px] text-black">Salle de sport</div>
                    </div>
                    <div className="h-[40px] w-fit py-2 bg-[#F6F9FF] flex gap-[7px] rounded-[5px] mt-1 mx-1 px-2">
                        <input className=" rounded-[6px] w-[22px] mr-[2px] h-[22px] accent-black border-[1px] checked:bg-black cursor-pointer border-black appearance-none" type="checkbox" />
                        <div className="text-p w-[81px] font-quicksand -mt-[1px] text-black">Club</div>
                    </div>
                    <div className="h-[40px] w-fit py-2 bg-[#F6F9FF] flex gap-[7px] rounded-[5px] mt-1 px-2">
                        <input className=" rounded-[6px] w-[22px] mr-[5px] h-[22px] accent-black border-[1px] checked:bg-black cursor-pointer border-black appearance-none" type="checkbox" />
                        <div className="text-p pr-3 font-quicksand -mt-[1px] text-black">Cours</div>
                    </div>
                    </div>

                    <div className="text-p leading-p text-black font-quicksand ml-[1.35%] mt-[12px] font-bold">
                    Nos options
                    </div>

                 
                    <div className="w-[555px] flex flex-wrap mt-1 ml-1 gap-[10px]">
      <CheckboxItem id="football" label="Football" />
      <CheckboxItem id="natation" label="Natation" />
      <CheckboxItem id="badminton" label="Badminton" />
      <CheckboxItem id="yoga" label="Yoga" width />
      
      <div className=" flex gap-[10px] -mt-[6px]">
      <CheckboxItem id="karate" label="Karaté" />
      <CheckboxItem id="boxe" label="Boxe" />
      <CheckboxItem id="mma" label="MMA" />
      <CheckboxItem id="Gym" label="Gym" width />
      </div>

      <div className=" flex gap-[10px] -mt-[6px]"> 

      <CheckboxItem id="thai" label="Muay Thai" />
      <CheckboxItem id="musculation" label="Musculation" smallFontSize  />
      <CheckboxItem id="jjb" label="Jiujitsu 🇧🇷" />
      <CheckboxItem id="fitness" label="Fitness" width />

      </div>

      <div className=" flex gap-[10px] -mt-[6px]">

      <CheckboxItem id="autre" label="Autre" width />
      </div>
    </div>

                    </div>
                

                    <div className=" h-[40px] w-[100%] flex justify-center">
                        <button className="w-[201px] h-[40px] hover:opacity-80 bg-main-blue rounded-[15px] text-center text-white font-semibold font-quicksand text-p">
                        Réinitialiser les filtres
                        </button>
                    </div>
                    </form>

                </div>
        </div>
        </>
    )}