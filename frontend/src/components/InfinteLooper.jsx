import React, { useRef, useEffect } from 'react';

const InfiniteLooper = ({ speed, direction, children }) => {
  const outerRef = useRef(null);
  const innerRef = useRef(null);

  useEffect(() => {
    if (outerRef.current && innerRef.current) {
      const outerWidth = outerRef.current.offsetWidth;
      const innerWidth = innerRef.current.scrollWidth;
      innerRef.current.style.width = `${innerWidth}px`; // Adjust width to fit images

      const animationName = direction === 'right' ? 'scrollRight' : 'scrollLeft';
      const keyframes = `
        @keyframes ${animationName} {
          0% { transform: translateX(0); }
          100% { transform: translateX(-${innerWidth / 2}px); } // Adjust to scroll half the width
        }
      `;
      const styleSheet = document.createElement('style');
      styleSheet.type = 'text/css';
      styleSheet.innerText = keyframes;
      document.head.appendChild(styleSheet);

      innerRef.current.style.animation = `${animationName} ${speed}s linear infinite`;
    }
  }, [speed, direction]);

  return (
    <div ref={outerRef} className="overflow-hidden whitespace-nowrap">
      <div ref={innerRef} className="h-[200px] w-[100%] mb-[5%] -mt-[5%] flex gap-[30px] items-center ">
        {children}
        {children} {/* Duplicate the content to create the looping effect */}
      </div>
    </div>
  );
};

export default InfiniteLooper;
