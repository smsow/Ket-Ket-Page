import React, { useEffect, useState } from 'react';
import ActivityBox from './activity_box';

export default function Activities() {
const [activities, setActivities] = useState([]);
const [useStaticImage, setUseStaticImage] = useState(false);

useEffect(() => {
  fetch('http://127.0.0.1:8000/api/activities', {
    method: 'GET',
    headers: {
      'Cache-Control': 'no-cache'
    }
  })
    .then(response => response.json())
    .then(data => {
      if (data.data && Array.isArray(data.data)) {
        setActivities(data.data);
        setUseStaticImage(false); // Use dynamic data
      } else {
        console.warn('No valid data found in response');
        setActivities(getFallbackData());
        setUseStaticImage(true); // Use static images
      }
    })
    .catch(error => {
      console.error('Error fetching data:', error);
      setActivities(getFallbackData());
      setUseStaticImage(true); // Use static images if there's an error
    });
}, []);

const getFallbackData = () => [
  { backgroundImage: '/img/activities/badminton.jpg', text: 'badminton' },
  { backgroundImage: '/img/activities/pexels-pixabay-46798.jpg', text: 'football' },
  { backgroundImage: '/img/activities/blackman2.png', text: 'musculation' },
  { backgroundImage: '/img/activities/yoga1.png', text: 'yoga' },
  { backgroundImage: '/img/activities/mma.png', text: 'mma' },
  { backgroundImage: '/img/activities/boxe.png', text: 'boxe' },
  { backgroundImage: '/img/activities/swim.png', text: 'natation' },
  { backgroundImage: '/img/activities/jjk.png', text: 'Jiujitsu brésilien' },
  { backgroundImage: '/img/activities/fitness.png', text: 'fitness' },
  { backgroundImage: '/img/activities/gym.png', text: 'gym' },
  { backgroundImage: '/img/activities/karate.png', text: 'karaté' },
  { backgroundImage: '/img/activities/muaythai.png', text: 'muay thai' },
  

  // Add more fallback data if needed
];

const chunkArray = (array, size) => {
  const result = [];
  for (let i = 0; i < array.length; i += size) {
    result.push(array.slice(i, i + size));
  }
  return result;
};

const rows = chunkArray(activities, 6);

    return(
        <>
        <div className="Activity_container mb-[4%]">
            <div className="activity_heading text-h3 text-main-blue text-center font-bold font-arial max-sm:text-h5 max-sm:leading-h5 max-sm:mb-[10%]">
            Nos Activités: conçus pour chaque objectif
         </div>
            <div className="dots_n_activities w-[100%] min-h-[865px] bg-dots-active bg-cover bg-center mt-[1.6%] flex flex-col max-lg:min-h-[700px] max-sm:h-[400px]">
            <div className="relative w-[100vw] h-[293px] mt-[3.7%] overflow-x-scroll overflow-y-hidden max-sm:mb-[10%] ">
  <div className="activity_row1 flex ml-[0.8%] h-[100%] w-[2195px] overflow-hidden rounded-[15px] z-0 gap-[30px] ">
  {rows[0] && rows[0].map((activity, index) => (
              <ActivityBox
                key={index}
                backgroundImage={useStaticImage ? activity.backgroundImage : `http://localhost:8000/storage/${activity.image}`}
                text={activity.text || "Default Text"}
              />
            ))}
          </div>
        </div>

        <div className="relative w-[100vw] h-[293px] mt-[3.25%] overflow-x-scroll overflow-y-hidden  max-sm:mb-[10%] ">
          <div className="activity_row1 flex ml-[0.8%] h-[100%] w-[2195px] overflow-hidden rounded-[15px] z-0 gap-[30px] ">
            {rows[1] && rows[1].map((activity, index) => (
              <ActivityBox
                key={index}
                backgroundImage={useStaticImage ? activity.backgroundImage : `http://localhost:8000/storage/${activity.image}`}
                text={activity.text || "Default Text"}
              />
            ))}
  </div>
            </div>

            <div className=" h-[20px] w-[285px] m-auto mt-[3.65%] flex place-content-evenly items-center max-lg:hidden">
              <div className="bg-main-red w-[35%] rounded-[50px] h-[90%] " ></div>
              <div className="bg-[#D9D9D9] w-[22.5%] h-[60%] rounded-[50px]"></div>
              <div className="bg-[#D9D9D9] w-[22.5%] h-[60%] rounded-[50px]"></div>
            </div>

            <div className=" w-[320px] h-[60px] m-auto mt-[1%] mb-[90%]">
            <button className='w-[100%] h-[100%] bg-main-red rounded-[15px] hover:text-main-red hover:bg-white hover:border-2 hover:border-[#C8102E] text-h6 font-bold font-r-mono text-white text-center transition-all duration-500 ease-in-out'>
            Voir Tous les Activités
              </button>
            </div>
          
            </div>
            
        </div>
        
        
        
        
        
        </>
    )
}