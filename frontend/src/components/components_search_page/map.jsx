import React, { useEffect, useState } from 'react';
import { MapContainer, TileLayer, Marker, Popup, useMap, useMapEvents } from 'react-leaflet';
import 'leaflet/dist/leaflet.css';
import L from 'leaflet';


// const fallbackData = [
//   {
//     latitude: 14.6900,
//     longitude: -17.4500,
//     description: 'Fallback Location 1',
//   },
//   {
//     latitude: 14.6950,
//     longitude: -17.4600,
//     description: 'Fallback Location 2',
//   },
// ];

// Geocoder component to add the control to the map
// function Geocoder() {
//   const map = useMap();

//   useEffect(() => {
//     // Check if the geocoder script is loaded before initializing
//     if (typeof L.Control.Geocoder === 'undefined') {
//       console.warn('Geocoder script not loaded yet.');
//       return;
//     }

//     const geocoder = L.Control.Geocoder.nominatim(); // Using Nominatim geocoder

//     const control = L.Control.geocoder({
//       geocoder,
//       defaultMarkGeocode: false,
//     }).on('markgeocode', function (e) {
//       const latlng = e.geocode.center;
//       L.marker(latlng, { icon: new L.Icon.Default() }).addTo(map);
//       map.setView(latlng, 13);
//     }).addTo(map);

//     return () => {
//       // Cleanup the geocoder control when the component unmounts
//       map.removeControl(control);
//     };
//   }, [map]);

//   return null;
// }

export default function Map( {latitude=14.68128, longitude=-17.4567, entrepriseName}) {
  const defaultPosition = [Number(latitude), Number(longitude)]; // Central position for Dakar
  const [positions, setPositions] = useState([Number(latitude), Number(longitude) ]);
  const markerIcon = new L.Icon({
    iconUrl: require('../../img/markericon.png'),
    iconSize: [31, 40],
    iconAnchor: [12, 41],
    popupAnchor: [1, -34],
    shadowSize: [41, 41],
  });

  console.log(latitude);
  console.log(longitude);
  console.log(positions);

  useEffect(() => {
    setPositions([latitude, longitude])
  },[latitude,longitude])

//   useEffect(() => {
//     const geocoderLink = document.createElement('link');
//     geocoderLink.rel = 'stylesheet';
//     geocoderLink.href = 'https://unpkg.com/leaflet-control-geocoder/dist/Control.Geocoder.css';
//     document.head.appendChild(geocoderLink);

//     const geocoderScript = document.createElement('script');
//     geocoderScript.src = 'https://unpkg.com/leaflet-control-geocoder/dist/Control.Geocoder.js';
//     geocoderScript.async = true;
//     document.body.appendChild(geocoderScript);

//     // Fetch data from API
//     fetch('http://127.0.0.1:8000/api/partenaire-sports', {
//       method: 'GET',
//       headers: {
//         'Cache-Control': 'no-cache',
//       },
//     })
//       .then(response => response.json())
//       .then(data => {
//         if (data.data && Array.isArray(data.data)) {
//           setPositions(data.data);
//         } else {
//           setPositions(fallbackData);
//         }
//       })
//       .catch(error => {
//         console.error('Error fetching data:', error);
//         setPositions(fallbackData);
//       });

//     return () => {
//       document.head.removeChild(geocoderLink);
//       document.body.removeChild(geocoderScript);
//     };
//   }, []);

function LocationMarker() {
    const [positions, setPositions] = useState([Number(latitude), Number(longitude) ]);
    const map = useMap();

    useEffect(() => {
      if (positions) {
        map.flyTo(positions, map.getZoom());
      }
    }, [positions, map]);
  
    useMapEvents({
      click() {
        map.locate(); 
      },
      locationfound(e) {
        setPositions(e.latlng); 
      },
    });
  
    return  (
      <Marker icon={markerIcon} position={positions}>
        <Popup>You are here</Popup>
      </Marker>
    )
  }


  return (
    <MapContainer  center={positions} zoom={15} style={{ height: '100vh', width: '100%' }}>
      <TileLayer
        url='https://tile.jawg.io/jawg-lagoon/{z}/{x}/{y}{r}.png?access-token=2U5baWI92SCFF5D9Gp53vRanR2r9g5TQ6X5qhEY4Z0tIQUijlbOEbW2eZmOLGfx9'
        attribution='<a href="https://jawg.io" title="Tiles Courtesy of Jawg Maps" target="_blank">&copy; <b>Jawg</b>Maps</a> &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
      />
     
        <LocationMarker key={entrepriseName} position={positions} icon={markerIcon}>
          <Popup>{entrepriseName}, {latitude}, {longitude}</Popup>
        </LocationMarker>

      {/* {typeof L.Control.Geocoder !== 'undefined' && <Geocoder />} */}
       {/* Conditional rendering */}
    </MapContainer>
  );
}
