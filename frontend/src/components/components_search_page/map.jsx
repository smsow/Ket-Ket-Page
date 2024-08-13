import React from 'react';
import { MapContainer, TileLayer, Marker, Popup } from 'react-leaflet';
import 'leaflet/dist/leaflet.css';

// Coordinates for the map center (example: Toulouse, France)

export default function Map({latitude=14.6928, longitude=-17.4467}) {
    const position = [latitude, longitude ];
    return (
        <MapContainer center={position} zoom={30} style={{ height: '100vh', width: '100%' }}>
            <TileLayer
                url='https://tile.jawg.io/jawg-lagoon/{z}/{x}/{y}{r}.png?access-token=2U5baWI92SCFF5D9Gp53vRanR2r9g5TQ6X5qhEY4Z0tIQUijlbOEbW2eZmOLGfx9'
                attribution='<a href="https://jawg.io" title="Tiles Courtesy of Jawg Maps" target="_blank">&copy; <b>Jawg</b>Maps</a> &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
            />
            <Marker position={position}>
                <Popup>
                    Example Location.<br />Description here.
                </Popup>
            </Marker>
        </MapContainer>
    );
}
