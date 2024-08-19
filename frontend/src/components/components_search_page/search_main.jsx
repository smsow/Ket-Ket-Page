import React, { useEffect, useState } from 'react';
import ComponentSearch from "./small_components/component_search";
import gym1 from "../../img/gym1.webp";
import 'leaflet/dist/leaflet.css';
import ScrollableContainer from './small_components/checkbox_endpoint';



export default function Search_main({setSelectedEnterprise, onOpenModal, checkboxState }) {
    const [activeIndex, setActiveIndex] = useState(null);

    const [isClicked, setIsClicked] = useState(false);


    const [isChecked, setIsChecked] = useState(false);

    const handleCheckboxChange = (checked) => {
      setIsChecked(checked);
    };
    
  
  
  const handleDivClick = (index, location) => { 
    setSelectedEnterprise(location);
    setActiveIndex(index); // Set the active index
  };


  const handleButtonClick = () => {
    console.log('Button clicked!');
};
    const [locations, setLocations] = useState([]);
  const [useStaticImage, setUseStaticImage] = useState(false); 
  

  useEffect(() => {
    fetch('http://127.0.0.1:8000/api/partenaire-sports', {
      method: 'GET',
      headers: {
        'Cache-Control': 'no-cache',
      },
    })
      .then((response) => response.json())
      .then((data) => {
        // Check if the response contains valid data
        if (data.data && Array.isArray(data.data)) {
          setLocations(data.data); // Set all locations
        } else {
          console.warn('No valid data found in response, using fallback data.');
          setLocations(fallbackLocations); // Use fallback data
        }
      })
      .catch((error) => {
        console.error('Error fetching data:', error, 'Using fallback data.');
        setLocations(fallbackLocations); // Use fallback data in case of error
      });
  }, []);

    const fallbackLocations = [
        {
          title: "RMS Static",
          time: "07:00 - 21:00",
          pNumber: "33 867 00 01",
          location: `15°43'23.2"N 18°28'35., Rue 1, Dakar`,
        },
        {
          title: "Life Static",
          time: "08:00 - 22:00",
          pNumber: "33 867 00 02",
          location: `16°43'43.2"N 19°29'45., Rue 2, Dakar`,
        },
        {
          title: "Fallback Sport 3",
          time: "06:00 - 19:00",
          pNumber: "33 867 00 03",
          location: `17°43'53.2"N 20°30'55., Rue 3, Dakar`,
        },
      ];

      const fallbackImages = [
        '/img/gym1.webp',
        '/img/lifefitness.jpg',
        '/img/running-icon.png',
        '/img/equality.png'
      ];
      
    return(
        <>
        <div className="h-[50px] w-[100%] flex justify-center gap-[10px]">
                <div className=" h-[100%] w-[350px]  flex items-center">
                    <div className=" w-[12.5%] rounded-l-[5px] h-[100%] bg-placeholder-grey">
                    <svg className="ml-[11px] mt-[32%]" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M11 19C15.4183 19 19 15.4183 19 11C19 6.58172 15.4183 3 11 3C6.58172 3 3 6.58172 3 11C3 15.4183 6.58172 19 11 19Z" stroke="#828282" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M21.0004 20.9999L16.6504 16.6499" stroke="#828282" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>

                    </div>
                    <input className="h-[100%] w-[87.5%] indent-2 bg-placeholder-grey rounded-r-[5px] text-h6 font-bold font-quicksand text-black placeholder:text-[#828282] placeholder:indent-2 placeholder:-mb-[10px]" placeholder="Salle de sport, ou activité" type="text" />
                </div>
                <div className=" h-[100%] w-[300px] flex items-center">
                <div className=" w-[12.5%] rounded-l-[5px] h-[100%] bg-placeholder-grey flex items-center">
                <svg className="ml-[10px]" width="22" height="24" viewBox="0 0 22 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M20.2928 15.0003C21.1018 13.5255 21.5233 11.8795 21.52 10.2084C21.52 4.57035 16.8146 0 11.01 0C5.2054 0 0.500016 4.57035 0.500016 10.2084C0.495654 12.6165 1.37206 14.9479 2.97295 16.7868L2.98532 16.8018L2.99645 16.8138H2.97295L9.2097 23.2451C9.4409 23.4835 9.71984 23.6734 10.0294 23.8032C10.3389 23.933 10.6725 24 11.0097 24C11.3469 24 11.6805 23.933 11.99 23.8032C12.2995 23.6734 12.5785 23.4835 12.8097 23.2451L19.047 16.8138H19.0236L19.0334 16.8024L19.0347 16.8012C19.0792 16.7496 19.1235 16.6975 19.1676 16.6451C19.5965 16.1332 19.9734 15.5828 20.2928 15.0003ZM11.0131 14.111C10.0293 14.111 9.08579 13.7314 8.39014 13.0557C7.6945 12.38 7.30368 11.4636 7.30368 10.508C7.30368 9.55246 7.6945 8.63604 8.39014 7.96035C9.08579 7.28467 10.0293 6.90507 11.0131 6.90507C11.9969 6.90507 12.9404 7.28467 13.636 7.96035C14.3317 8.63604 14.7225 9.55246 14.7225 10.508C14.7225 11.4636 14.3317 12.38 13.636 13.0557C12.9404 13.7314 11.9969 14.111 11.0131 14.111Z" fill="#828282"/>
                </svg>



                    </div>
                    <input className="h-[100%] w-[87.5%] indent-2 bg-placeholder-grey rounded-r-[5px] text-h6 font-bold font-quicksand text-black placeholder:text-[#828282] placeholder:font-bold placeholder:indent-2 placeholder:pt-[1px]" placeholder="Quartiers, Villes" type="text" />
                </div>
            </div>
            <div className="h-[95px] w-[100%]  flex justify-center">

                <button onClick={onOpenModal} className="w-[250px] h-[60px] bg-white border-[#1D428A] border-2 rounded-[15px] mx-auto mt-[25px] flex items-center justify-center gap-[10px]">
                    <h4 className="text-h6 text-main-blue font-bold font-quicksand">
                    Filtrer les résultats
                    </h4>
                    <svg width="18" height="14" viewBox="0 0 18 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M1 2.00001H9.17C9.3766 1.41448 9.75974 0.907443 10.2666 0.548799C10.7735 0.190154 11.3791 -0.00244141 12 -0.00244141C12.6209 -0.00244141 13.2265 0.190154 13.7334 0.548799C14.2403 0.907443 14.6234 1.41448 14.83 2.00001H17C17.2652 2.00001 17.5196 2.10537 17.7071 2.2929C17.8946 2.48044 18 2.73479 18 3.00001C18 3.26523 17.8946 3.51958 17.7071 3.70712C17.5196 3.89465 17.2652 4.00001 17 4.00001H14.83C14.6234 4.58554 14.2403 5.09258 13.7334 5.45122C13.2265 5.80986 12.6209 6.00246 12 6.00246C11.3791 6.00246 10.7735 5.80986 10.2666 5.45122C9.75974 5.09258 9.3766 4.58554 9.17 4.00001H1C0.734784 4.00001 0.48043 3.89465 0.292893 3.70712C0.105357 3.51958 0 3.26523 0 3.00001C0 2.73479 0.105357 2.48044 0.292893 2.2929C0.48043 2.10537 0.734784 2.00001 1 2.00001ZM1 10H3.17C3.3766 9.41448 3.75974 8.90744 4.2666 8.5488C4.77346 8.19015 5.37909 7.99756 6 7.99756C6.62091 7.99756 7.22654 8.19015 7.7334 8.5488C8.24026 8.90744 8.6234 9.41448 8.83 10H17C17.2652 10 17.5196 10.1054 17.7071 10.2929C17.8946 10.4804 18 10.7348 18 11C18 11.2652 17.8946 11.5196 17.7071 11.7071C17.5196 11.8947 17.2652 12 17 12H8.83C8.6234 12.5855 8.24026 13.0926 7.7334 13.4512C7.22654 13.8099 6.62091 14.0025 6 14.0025C5.37909 14.0025 4.77346 13.8099 4.2666 13.4512C3.75974 13.0926 3.3766 12.5855 3.17 12H1C0.734784 12 0.48043 11.8947 0.292893 11.7071C0.105357 11.5196 0 11.2652 0 11C0 10.7348 0.105357 10.4804 0.292893 10.2929C0.48043 10.1054 0.734784 10 1 10Z" fill="#1D428A"/>
                    </svg>

                </button>
            </div>
            <div className="h-[60px] bg-slate-400 ml-[2.25%] w-[700px] overflow-x-auto flex gap-[9px]">
            {isChecked && (
        <ScrollableContainer
          title="Salle de Sport"
          onButtonClick={handleButtonClick}
          checkboxState={checkboxState}
        />
      )}
      

            
            {/* <ScrollableContainer
                title="Salle de Sport"
                onButtonClick={handleButtonClick}
            />
            <ScrollableContainer
                title="Salle de Sport"
                onButtonClick={handleButtonClick}
            />

<ScrollableContainer
                title="Salle de Sport"
                onButtonClick={handleButtonClick}
            /> */}
      
        </div>
            <div className="h-[805px] w-[100%]  overflow-y-scroll">
                <div className="wrapper h-auto w-[100%] flex flex-col gap-[18px]">
                {locations.map((location, index) => (
        <ComponentSearch
          key={index}
          backgroundImage={
            location.images
              ? `http://localhost:8000/storage/${location.images}`
              : fallbackImages[index % fallbackImages.length]
          }
          Title={location.nom || fallbackLocations[index % fallbackLocations.length].title}
          Time={location.horaire || fallbackLocations[index % fallbackLocations.length].time}
          pNumber={location.numero || fallbackLocations[index % fallbackLocations.length].pNumber}
          Location={location.address || fallbackLocations[index % fallbackLocations.length].location}
          isClicked={activeIndex === index} 
          onDivClick={() => handleDivClick(index, location)} 
        />
      ))}
                     {/* <ComponentSearch backgroundImage={gym1}
                Title={"Life Fitness"}
                Time = {"10:00 - 22:00"}
                pNumber={"771542149"}
                Location={`40 Rue LIB 22, Dakar`}
                
                />
                <ComponentSearch backgroundImage={gym1}
                Title={"Dakar FitBox Club"}
                Time = {"11:00 - 22:00"}
                pNumber={"33 867 35 47"}
                Location={`14°43'33.2"N 17°27'35., Rue 6, Dakar`}
                
                />
                <ComponentSearch backgroundImage={gym1}
                Title={"Club Sport & Bien Être"}
                Time = {"06:30 - 22h00"}
                pNumber={"33 820 00 32"}
                Location={`Virage de Ngor, Lot numéro 18, Dakar 12000`}
                
                />             */}
                    <div className="bg-white h-[228px] w-[662px] border-[#1D428A] border-2 rounded-[5px] shadow-shadow-search mt-[5px] ml-[36px]"></div>
                <div className="bg-white h-[228px] w-[662px] border-[#1D428A] border-2 rounded-[5px] shadow-shadow-search mt-[5px] ml-[36px]"></div>
                </div>
            </div>
        
        
        </>
    )

}