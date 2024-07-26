export default function NavBar() {
    return (
        <div className="Navbar  flex items-center max-[1200px]:w-[100%]">
            <div className="logo flex items-center">
            <img src="../img/img1.png" alt="anyting" /> 
            <h2 className="font-bold pl-5 text-h2">Ket Ket</h2>
            </div>
            <div className="Navlinks relative flex place-content-between text-xl max-[1690px]:gap-[45px] max-2xl:gap-[30px] max-ml:gap-[20px] max-ml:text-base
            max-xl:left-8 max-[1200px]:hidden">
                <a href="#home">ACCUEIL</a>
                <a href="#about">QUI SOMMES-NOUS</a>
                <a href="#service">NOS SERVICES</a>
                <a href="#partenaire">PARTENAIRES</a>
            </div>
                <div className="ButtonContainer absolute left-[75.2%]  flex place-content-between 
                max-ml:w-[26.85%] max-ml:left-[72%] max-[1200px]:hidden">
                <button className="relative bg-main-blue border-2 border-[#1D428A] group-hover:fill-[#1D428A] hover:path-[#1D428A] hover:stroke-[#1D428A] hover:bg-white hover:text-[#1D428A] text-xl  text-white w-[41.5%] font-light h-[100%] rounded-full flex justify-center items-center gap-[19px]">
                <img className="w-[24px] h-[24px] max-ml:w-[20px] max-ml:h-[20px]" src="../svg/search.svg" alt="..."></img>
             <div className="relative right-1.5 bottom-[1px] max-[1690px]:text-lg max-2xl:text-base 
              max-xl:text-sm">Recherche</div>
              </button>
              
              <button className="relative rendezvous-button-shadow bg-main-red text-white text-xl w-[52%] font-bold h-[100%] 
              rounded-[10px] flex justify-center items-center gap-[12px] max-[1690px]:text-lg max-2xl:text-base 
              max-xl:text-sm">
                 
             <div className="relative ">Prenez Rendez-Vous</div>
              </button>

                </div>    
                <div className="w-4 h-5 ml-auto">
                </div> 
                
        </div>
      )
}