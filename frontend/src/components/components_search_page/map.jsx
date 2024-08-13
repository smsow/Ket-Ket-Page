import React from 'react';
import { MapContainer, TileLayer, Marker, Popup } from 'react-leaflet';
import 'leaflet/dist/leaflet.css';

// Coordinates for Dakar, Senegal
const position = [14.6928, -17.4467];

export default function Map() {
    return (
        <MapContainer center={position} zoom={12} style={{ height: '100vh', width: '100%' }}>
            <TileLayer
                url='https://tile.jawg.io/jawg-lagoon/{z}/{x}/{y}{r}.png?access-token=2U5baWI92SCFF5D9Gp53vRanR2r9g5TQ6X5qhEY4Z0tIQUijlbOEbW2eZmOLGfx9'
                attribution='<a href="https://jawg.io" title="Tiles Courtesy of Jawg Maps" target="_blank">&copy; <b>Jawg</b>Maps</a> &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
            />
            <Marker position={position}>
                <Popup>
                    Dakar, Senegal.<br />A vibrant city with rich culture.
                </Popup>
            </Marker>
        </MapContainer>
    );
}
