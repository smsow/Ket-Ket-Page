import React, { useState, useRef, useEffect } from 'react';
import { ArrowDownIcon } from '@heroicons/react/20/solid';

export function PhoneCustomSelect({ name, options, onSelect }) {
    const [isOpen, setIsOpen] = useState(false);
    const [selectedOption, setSelectedOption] = useState('+221');
    const dropdownRef = useRef(null);

    const handleToggle = () => setIsOpen(!isOpen);

    const handleOptionClick = (option) => {
        // Extract the code part before the colon
        const selectedCode = option.split(':')[0].trim();
        setSelectedOption(selectedCode);
        setIsOpen(false);
        if (onSelect) onSelect(selectedCode);
    };

    useEffect(() => {
        const handleClickOutside = (event) => {
            if (dropdownRef.current && !dropdownRef.current.contains(event.target)) {
                setIsOpen(false);
            }
        };

        document.addEventListener('mousedown', handleClickOutside);

        return () => {
            document.removeEventListener('mousedown', handleClickOutside);
        };
    }, []);

    return (
        <div className="relative" ref={dropdownRef}>
            <button
                type="button"
                onClick={handleToggle}
                className="w-[90px] h-[51px] bg-[#F6F9FF] text-black text-[19px] font-medium font-quicksand pl-4 pr-8 rounded-[5px] appearance-none flex items-center justify-between focus:outline-none "
            >
                {selectedOption}
            </button>
            {isOpen && (
                <div className="absolute w-[383px] mt-1 bg-[#F6F9FF] rounded-[5px] border border-gray-300 z-10 ">
                    {options.map((option, index) => (
                        <button
                            key={index}
                            onClick={() => handleOptionClick(option)}
                            className="w-full px-4 py-2 text-left text-black text-[19px] font-medium font-quicksand hover:bg-gray-200 focus:outline-none"
                        >
                            {option}
                        </button>
                    ))}
                </div>
            )}
            {/* Hidden input to include selected value in form submission */}
            <input type="hidden" name={name} value={selectedOption} />
        </div>
    );
}
