import React from 'react';
import ReactDOM from 'react-dom/client';

function ExampleComponent() {
    return (
        <div className="container">
            <h1>Hello, React!</h1>
        </div>
    );
}

if (document.getElementById('example')) {
    const container = document.getElementById('example');
    const root = ReactDOM.createRoot(container);
    root.render(<ExampleComponent />);
}

