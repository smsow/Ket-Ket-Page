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

export default function Map( {latitude=14.71128, longitude=-17.4567, entrepriseName}) {
  const defaultPosition = [Number(latitude), Number(longitude)]; // Central position for Dakar
  const [positions, setPositions] = useState([Number(latitude), Number(longitude) ]);

  const [locations, setLocations] = useState([]);
  const [useStaticImage, setUseStaticImage] = useState(false); // State to decide which image to use

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
      

  const markerIconclicked = new L.Icon({
    iconUrl: require('../../img/redmarkericon.png'),
    iconSize: [31, 40],
    iconAnchor: [12, 41],
    popupAnchor: [1, -34],
    shadowSize: [41, 41],
  });

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
  const [positions, setPositions] = useState([Number(latitude), Number(longitude)]);
  const map = useMap();

  useEffect(() => {
    if (positions.length > 0) {
      
      map.setView(positions, 13);
    }
  }, [positions, map]);

  useMapEvents({
    click() {
      map.locate({ setView: true });
    },
    locationfound(e) {
      setPositions([e.latlng.lat, e.latlng.lng]); 
      const currentZoom = map.getZoom(10); 
      const newZoom = currentZoom + 10; 
      map.flyTo(e.latlng, newZoom);
    },
  });


    return  (
      <Marker icon={markerIconclicked} position={positions}>
         <Popup>{entrepriseName}, {latitude}, {longitude}</Popup>
      </Marker>
    )
  }

  

  return (
    <MapContainer  center={positions} zoom={13} style={{ height: '100vh', width: '100%' }}>
      <TileLayer
        url='https://tile.jawg.io/jawg-lagoon/{z}/{x}/{y}{r}.png?access-token=2U5baWI92SCFF5D9Gp53vRanR2r9g5TQ6X5qhEY4Z0tIQUijlbOEbW2eZmOLGfx9'
        attribution='<a href="https://jawg.io" title="Tiles Courtesy of Jawg Maps" target="_blank">&copy; <b>Jawg</b>Maps</a> &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
      />

{locations.map(({ nom, latitude, longitude }, index) => (
        <Marker
          key={index} // Use a unique key if possible
          position={[
            latitude ?? 14.8928,  // Use fallback value if latitude is null or undefined
            longitude ?? -17.4467 // Use fallback value if longitude is null or undefined
          ]}
          icon={markerIcon}
        >
          <Popup>
            {nom }, {latitude ?? 14.8928}, {longitude ?? -17.4467}
          </Popup>
        </Marker>
      ))}

        <LocationMarker key={entrepriseName} position={positions} icon={markerIcon}>
        </LocationMarker>

    

      {/* {typeof L.Control.Geocoder !== 'undefined' && <Geocoder />} */}
       {/* Conditional rendering */}
    </MapContainer>
  );
}
