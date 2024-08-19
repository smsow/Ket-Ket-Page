import React, { useState } from 'react';

const CheckboxItem = ({ label, id, smallFontSize, width }) => {
  const [isChecked, setIsChecked] = useState(false);
  const [borderAnimation, setBorderAnimation] = useState(false);

  const handleChange = () => {
    setIsChecked(!isChecked);
    setBorderAnimation(true);
    setTimeout(() => {
      setBorderAnimation(false);
    }, 300); 
  };

  return (
    <div
      className={`h-[40px] w-fit py-2 flex gap-[7px] rounded-[5px] ml-[5px] mt-1 px-2 transition-all duration-400 ${isChecked ? 'bg-white opacity-80' : 'bg-[#F6F9FF]'} ${borderAnimation ? 'border-black border-2' : ' border-black'}`}
    >
      <input
        id={id}
        className={`rounded-[6px] cursor-pointer w-[22px] h-[22px] accent-black border-[1px] border-black appearance-none transition-all duration-400 ${isChecked ? 'bg-black' : ''}`}
        type="checkbox"
        onChange={handleChange}
        checked={isChecked}
      />
      <label
        htmlFor={id}
        className={`text-p font-quicksand text-black ${smallFontSize ? 'text-[14.5px]' : ''} ${width ? 'w-[60px]' : 'w-[81px]'} transition-all duration-400`}
      >
        {label}
      </label>
    </div>
  );
};

export default CheckboxItem;
