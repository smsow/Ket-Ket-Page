import React, { useEffect, useState } from 'react';
import NavBar from "../components/navbar";
import NavIcon from "../components/components_search_page/nav_icon";
import Search_main from "../components/components_search_page/search_main";
import ComponentSearch from "../components/components_search_page/small_components/component_search";
import { MapContainer } from "react-leaflet";
import Map from "../components/components_search_page/map";

export default function SearchPage() {
    const [selectedEnterprise, setSelectedEnterprise] = useState();
    console.log(selectedEnterprise);
    return(
        <>
        <head>
        <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
     integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY="
     crossorigin=""/>
        </head>
        <body className="overflow-hidden">
        <div className="flex w-[100%] h-[100%] ">
        <div className="w-[37.5%] h-[100%] ">
        <NavIcon />
        <Search_main setSelectedEnterprise={setSelectedEnterprise} />
        </div>
        <div className="w-[62.5%] h-[100%]">
        <Map latitude={selectedEnterprise?.latitude} longitude={selectedEnterprise?.longitude} entrepriseName={selectedEnterprise?.nom} />
        </div>
        </div> 

        </body>

        </>

    )

}