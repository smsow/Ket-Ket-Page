import React from 'react';

// Define the ActivityBox component with props for dynamic and static data
export default function ActivityBox({ backgroundImage, text }) {
  return (
    <div
      className="z-0 rounded-[15px] h-[100%] w-[340px] flex items-center cursor-pointer max-sm:h-[90%] max-sm:w-[320px]"
      style={{ backgroundImage: `url(${backgroundImage})`, backgroundSize: 'cover', backgroundPosition: 'center' }}
    >
      <div className="relative flex items-center justify-center w-full h-[50px]">
        <div className="absolute inset-0 backdrop-blur-[40px] bg-black mix-blend-overlay opacity-40" />
        <div className="relative z-10 flex items-center justify-center w-full h-[50px]">
          <div className="text-white font-r-mono font-bold text-[30px] mt-1 leading-[32px] text-center uppercase">
            {text}
          </div>
        </div>
      </div>
    </div>
  );
}
