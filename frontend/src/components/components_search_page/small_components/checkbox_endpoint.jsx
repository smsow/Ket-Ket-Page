import React, { useState } from 'react';

const ScrollableContainer = ({ title, onButtonClick }) => {
    const [isChecked, setIsChecked] = useState(false);

    const handleClick = () => {
        setIsChecked(!isChecked);
    };

    return (
        <div
            className={`w-[95%] h-[40px] m-auto flex gap-1`}
            onClick={handleClick} 
            style={{ transition: 'border 300ms' }}
        >
            <div 
                className={`h-[40px] w-[177px] rounded-[5px] flex items-center justify-center px-2 gap-[8px] ease-in-out duration-300
                ${isChecked ? 'border-[#c8102e] border-2' : 'border-transparent'}
                ${isChecked ? 'bg-white text-main-red' : 'bg-main-red text-white'}`}
            >
                <div className={`text-p font-semibold font-quicksand ease-in-out duration-300 ${isChecked ? 'text-main-red' : 'text-white'}`}>
                    {title}
                </div>
                <button onClick={onButtonClick} >
                    {isChecked ? (
                        <svg className='ease-in-out duration-300' width="36" height="34" viewBox="0 0 36 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M27 19H8V16H27V19Z" fill="#C8102E"/>
                            <path d="M16 26L16 9H19L19 26H16Z" fill="#C8102E"/>
                        </svg>
                    ) : (
                        <svg className='ease-in-out duration-300' width="37" height="34" viewBox="0 0 37 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M27.5 18H8.5V16H27.5V18Z" fill="white"/>
                        </svg>
                    )}
                </button>
            </div>
        </div>
    );
};

export default ScrollableContainer;
