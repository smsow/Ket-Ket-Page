import React from "react";
import { ArrowRightIcon } from '@heroicons/react/20/solid';
import { CustomSelect } from "./customselect";
import { PhoneCustomSelect } from "./phonenumberselect";

export function Modal_partner_3({ onClose }) {
    return(
        <>
        <div className="h-[861px] w-[886px] m-auto bg-white rounded-[15px] flex flex-col items-center max-ml:h-[800px] max-xl:h-[650px] max-[1390px]:h-[650px] max-md:w-[90vw]">
            <button className="h-[1%] w-[100%]" onClick={onClose}>
                <img src="../img/X.png" className="ml-[94.35%] mt-[2.25%]" alt="" />
            </button>
            <form action="/submit" method="post" className="content_container w-[90%] h-[90%]  m-auto flex flex-col max-[1390px]:overflow-auto max-[1020px]:w-[90vw] max-lg:overflow-hidden max-[1020px]:overflow-y-scroll max-[1020px]:overflow-x-hidden">
                <div className=" w-[100%] h-[19%] flex flex-col gap-[10px] mb-[3%]">
                <h3 className="w-[70%] text-[31.25px] font-semibold font-quicksand text-black leading-[39px] pl-[0.8%] mt-[0.5%]">
                Financer la pratique sportive de vos collaborateurs
                </h3>

                <p className="text-p w-[60%] text-black font-quicksand font-semibold pl-[0.8%] mt-[0.1%]">
                Afin que notre équipe puisse vous contacter à temps
                </p>
                </div>
                <div className=" w-[100%] h-[67%] flex">
                <div className="h-[100%] w-[50%]  flex flex-col gap-[20px]">
                    <div className="h-[86px] w-[388px] flex flex-col gap-[10px] mt-[0.5%]">
                        <label className="text-h6 text-black font-semibold font-quicksand leading-h5 ml-[1.4%]" htmlFor="">Prénom</label>
                        <input className="w-[383px] ml-auto h-[51px] rounded-[5px] text-h6 indent-[10px] bg-[#F6F9FF] placeholder:text-[#C8C8C8] placeholder:font-quicksand placeholder:text-[18px] placeholder:font-semibold placeholder:indent-[12px] max-[1020px]:w-[70%] max-lg:m-0 " placeholder="eg: Cheikh" type="text" name="" id="" />
                    </div>

                    <div className="h-[86px] w-[388px]  flex flex-col gap-[10px] mt-[0.25%]">
                        <label className="text-h6 text-black font-semibold font-quicksand leading-h5 ml-[1.4%]" htmlFor="">Nom</label>
                        <input className="w-[383px] ml-auto h-[51px] rounded-[5px] text-h6 indent-[10px] bg-[#F6F9FF] placeholder:text-[#C8C8C8] placeholder:font-quicksand placeholder:text-[18px] placeholder:font-semibold placeholder:indent-[12px] max-[1020px]:w-[70%] max-lg:m-0   " type="text" placeholder="eg: Ndiaye" name="" id="" />
                    </div>

                    <div className="h-[86px] w-[388px]  flex flex-col gap-[10px] mt-[0.25%]">
                        <label className="text-h6 text-black font-semibold font-quicksand leading-h5 ml-[1.4%]" htmlFor="">E-mail</label>
                        <input className="w-[383px] ml-auto h-[51px] rounded-[5px] text-h6 indent-[10px] bg-[#F6F9FF] placeholder:text-[#C8C8C8] placeholder:font-quicksand placeholder:text-[18px] placeholder:font-semibold placeholder:indent-[12px] max-[1020px]:w-[70%] max-lg:m-0  " type="text" placeholder="eg: CheikhNdiaye@email.com " name="" id="" />
                    </div>

                    <div className="h-[86px] w-[388px]  flex flex-col gap-[10px] -mt-[1%]">
                    <label className="text-h6 text-black font-semibold font-quicksand leading-h5 ml-[1.4%]" htmlFor="phone-number">
                        Numéro de téléphone
                        </label>
                        <div className="flex  rounded-[5px]">
                        <div className="relative flex items-center ml-[1%]">
                        <PhoneCustomSelect
    options={[
        '+221: Senegal',
        '+33: France',
        '+1: United States',
       
    ]}
    onSelect={(selectedOption) => console.log('Selected:', selectedOption)}
/>
                            <div className="absolute right-2 top-1/2 transform -translate-y-1/2 pointer-events-none">
                            <svg className="w-6 h-6 text-gray-500 ml-[22%]" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                            </svg>
                            </div>
                        </div>
                        <input className="w-[283px] ml-auto h-[51px] rounded-[5px] bg-[#F6F9FF] text-h6 indent-[2px] placeholder:text-[#C8C8C8] placeholder:font-quicksand placeholder:text-[18px] placeholder:font-semibold placeholder:indent-[1px] max-[1020px]:w-[45%] max-[1020px]:m-0 " placeholder="77XXXXXX" type="text" name="phone-number" id="phone-number" />
                        </div>
                    </div>


                    <div className="h-[86px] w-[388px] flex flex-col gap-[10px] mt-[0.25%]">
                        <label className="text-h6 text-black font-semibold font-quicksand leading-h5 ml-[1.4%]" htmlFor="">Date disponible</label>
                        <input className="w-[383px] ml-auto h-[51px] rounded-[5px] text-h6 indent-[10px] bg-[#F6F9FF] placeholder:text-[#C8C8C8] placeholder:font-quicksand placeholder:text-[18px] placeholder:font-semibold placeholder:indent-[12px] max-[1020px]:w-[70%] max-[1020px]:m-0 " type="date" placeholder="eg: CheikhNdiaye@email.com " name="" id="" />
                    </div>


                </div>
                <div className="h-[100%] w-[50%] ml-[1%]">
                <div className=" w-[100%] h-[67%] flex">
                <div className="h-[100%] w-[50%]  flex flex-col gap-[20px]">
                    <div className="h-[86px] w-[388px] flex flex-col gap-[10px] mt-[0.5%]">
                        <label className="text-h6 text-black font-semibold font-quicksand leading-h5 ml-[1.4%]" htmlFor="">Noms de votre entreprise</label>
                        <input className="w-[383px] ml-auto h-[51px] rounded-[5px] text-h6 indent-[10px] bg-[#F6F9FF] placeholder:text-[#C8C8C8] placeholder:font-quicksand placeholder:text-[18px] placeholder:font-semibold placeholder:indent-[12px] max-[1020px]:w-[70%] max-[1020px]:m-0 max-[1020px]:placeholder:w-[100px]  " placeholder="eg: Ket Ket" type="text" name="" id="" />
                    </div>

                    <div className="h-[86px] w-[388px] flex flex-col gap-[10px] mt-[0.5%]">
                        <label className="text-h6 text-black font-semibold font-quicksand leading-h5 ml-[1.4%]" htmlFor="">Votre position dans l'entreprise</label>
                        <input className="w-[383px] ml-auto h-[51px] rounded-[5px] text-h6 indent-[10px] bg-[#F6F9FF] placeholder:text-[#C8C8C8] placeholder:font-quicksand placeholder:text-[16px] placeholder:font-semibold placeholder:indent-[12px] max-[1020px]:w-[70%] max-[1020px]:m-0  " placeholder="eg: Responsable des Ressources Humaines " type="text" name="" id="" />
                    </div>

                    <div className="h-[86px] w-[388px]  flex flex-col gap-[10px] -mt-[1%]">
                    <label className="text-h6 text-black font-semibold font-quicksand leading-h5 ml-[1.4%]" htmlFor="phone-number">
                        Nombre d'employés
                        </label>
                        <div className="flex rounded-[5px]">
                        <div className="relative flex items-center ml-[1%]">
                        <CustomSelect
    options={[
        '1 à 10',
        'de 11 à 50',
        'de 51 à 100',
        'de 101 à 200',
        'de 201 à 500',
        'de 501 à 1000',
        'de 1001 à 1500',
        'plus de 1500'
    ]}
    onSelect={(selectedOption) => console.log('Selected:', selectedOption)}
/>
                            <div className="absolute right-2 top-1/2 transform -translate-y-1/2 pointer-events-none">
                            <svg className="w-6 h-6 text-gray-500 ml-[22%]" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                            </svg>
                            </div>
                        </div>
                        </div>
                    </div>


                    <div className="h-[200px] w-[388px] flex flex-col gap-[10px] mt-[0.5%]">
  <label className="text-h6 text-black font-semibold font-quicksand leading-h5 ml-[1.4%]" htmlFor="companyDescription">
    Description de votre entreprise
  </label>
  <textarea
    id="companyDescription"
    className="w-full h-[160px] rounded-[5px] text-h6 bg-[#F6F9FF] placeholder-black placeholder:text-[20px] placeholder:font-normal placeholder:indent-[0px] pl-[10px] pt-[10px] resize-none max-[1020px]:w-[70%] max-[1020px]:m-0 "
    placeholder="eg: Message"
  ></textarea>
</div>



                </div>
                </div>
                </div>
                </div>
                <div className="w-[100%] h-[7%] max-ml:mt-[8%] max-[1390px]:mt-[17.5%] ">
                    <div className="h-[90%] w-[100%] max-lg:h-[100%]">
                    <button className="w-[29%] h-[40px] ml-[70.25%] rounded-[5px] mt-[10px] bg-main-blue text-white font-quicksand text-p leading-p font-semibold flex items-center justify-center space-x-2 max-lg:ml-[58.9%] max-lg:w-[36%] max-lg:pl-[1%]"
                    onClick={onClose}>
                    Reserve maintenant
                    <ArrowRightIcon className="h-6 w-6 ml-3" />
                    </button>
                    </div>
                </div>

            </form>
        </div>
        
        </>

    )


}