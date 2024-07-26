// resources/js/components/ExampleComponent.jsx

import React from 'react';
import ReactDOM from 'react-dom/client';

function ExampleComponent() {
    return (
        <div className="container">
            <h1>Hello, React from ExampleComponent!</h1>
        </div>
    );
}

export default ExampleComponent;

// Check if the element with id 'example' exists and then render the component
if (document.getElementById('example')) {
    const container = document.getElementById('example');
    const root = ReactDOM.createRoot(container);
    root.render(<ExampleComponent />);
}
