import React from "react";
import NavBar from "../components/navbar";
import NavIcon from "../components/components_search_page/nav_icon";
import Search_main from "../components/components_search_page/search_main";
import ComponentSearch from "../components/components_search_page/small_components/component_search";

export default function SearchPage() {
    return(
        <>
        <body className="overflow-hidden">
            
        <NavIcon />

        <Search_main />

        </body>

        </>

    )

}