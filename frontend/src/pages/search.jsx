import React, { useEffect, useState, useRef } from 'react';
import NavBar from "../components/navbar";
import NavIcon from "../components/components_search_page/nav_icon";
import Search_main from "../components/components_search_page/search_main";
import { MapContainer } from "react-leaflet";
import Map from "../components/components_search_page/map";
import { Modal_search } from '../components/components_search_page/modal_search';

export default function SearchPage() {
    const [selectedEnterprise, setSelectedEnterprise] = useState();
    const [showModal, setShowModal] = useState(false); // Show modal
    const modalRef = useRef(null);

    const handleOpenModal = () => setShowModal(true);
    const handleCloseModal = () => setShowModal(false);

    useEffect(() => {
        // Add Leaflet CSS to the head
        const link = document.createElement('link');
        link.rel = 'stylesheet';
        link.href = 'https://unpkg.com/leaflet@1.9.4/dist/leaflet.css';
        link.integrity = 'sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=';
        link.crossOrigin = '';
        document.head.appendChild(link);

        // Clean up by removing the link when the component unmounts
        return () => {
            document.head.removeChild(link);
        };
    }, []);

    useEffect(() => {
        const handleClickOutside = (event) => {
            if (modalRef.current && !modalRef.current.contains(event.target)) {
                handleCloseModal();
            }
        };

        if (showModal) {
            document.addEventListener('mousedown', handleClickOutside);
        }

        return () => {
            document.removeEventListener('mousedown', handleClickOutside);
        };
    }, [showModal]);

    return (
        <div className="overflow-hidden relative">
            {showModal && (
                <div className="fixed inset-0 z-50 bg-[#1D428A] bg-opacity-25 flex justify-center" >
        <div className=" mt-[4.85%]" ref={modalRef}>
                            <Modal_search onClose={handleCloseModal} />
                            </div>
                    </div>
            )}
            <div className="flex w-full h-full z-10">
                <div className="w-[37.5%] h-full">
                    <NavIcon />
                    <Search_main setSelectedEnterprise={setSelectedEnterprise} onOpenModal={handleOpenModal} />
                </div>
                <div className="w-[62.5%] h-full z-10">
                    <Map latitude={selectedEnterprise?.latitude} longitude={selectedEnterprise?.longitude} entrepriseName={selectedEnterprise?.nom} />
                </div>
            </div>
        </div>
    );
}
