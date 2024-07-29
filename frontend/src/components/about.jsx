export default function About() {
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
                    Nous Sommes Ket Ket
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
            <div className="about-blocks flex h-[45%] w-[100%] bg-purple-300 max-lg:flex-col max-lg:h-[70%]  ">
                <div className="about-des1 w-[38%] ml-[5.25%] h-[100%] bg-green-400 flex-col max-lg:w-[95%] max-lg:m-auto">
                    <div className="text-h3 leading-h3 font-bold font-quicksand text-main-blue mt-[16.55%]">
                    Ket Ket, C’est Quoi?
                    </div>

                <div className="text-h6 font-quicksand leading-[28px] font-semibold w-[100%] bg-red-300 mt-[4%]">
                Ket Ket est une entreprise sénégalaise dédiée à l'amélioration du bien-être des salariés en simplifiant 
                l'accès aux structures sportives amateurs, en proposant des solutions d'adhésion aux entreprises pour 
                soutenir et financer la pratique sportive de leurs employés.
                </div>

            </div>

            <div className="relative h-[45%] w-[48%] ml-[15.3%] mt-[0.75%] max-lg:w-[100%] max-lg:m-auto">
            <img className="macbook relative  w-[92%] max-lg:m-auto" src="../img/macbook.png" alt="" />
            <img  id="half-blue-circle" className="relative w-[26.6%] left-[15.5%] bottom-[78%] max-2xl:bottom-[25%] max-ml:bottom-[20%]" src="../img/blue-circles.png" alt=""/>
            </div>

            </div>
            <div className="about-blocks flex h-[65%] w-[100%] bg-orange-300 max-lg:flex-col max-lg:h-[80%]  ">
                <div className="image-bundles ">

                </div>
            </div>
        </div>
            </>
    )}