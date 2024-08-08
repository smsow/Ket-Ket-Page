import React, { useState } from 'react';
import { FontAwesomeIcon } from '@fortawesome/react-fontawesome';
import { faArrowRight } from '@fortawesome/free-solid-svg-icons';
import { faUser, faEnvelope, faPhone, faCalendar, faClipboard, faTimes, faComment } from '@fortawesome/free-solid-svg-icons';

const RendezVousForm = () => {
    const [showForm, setShowForm] = useState(false);
    const [formData, setFormData] = useState({
        prenom: '',
        nom: '',
        email: '',
        telephone: '',
        date: '',
        motif: '',
        message: ''
    });

    const toggleForm = () => {
        setShowForm(!showForm);
    };

    const handleChange = (e) => {
        const { name, value } = e.target;
        setFormData(prevData => ({
            ...prevData,
            [name]: value
        }));
    };

    const handleSubmit = async (e) => {
        e.preventDefault();

        try {
            const response = await fetch('http://127.0.0.1:8000/prendre-rendez-vous', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify(formData)
            });

            if (response.ok) {
                console.log('Rendez-vous successfully created!');
                setShowForm(false); // Close the form on success
                setFormData({
                    prenom: '',
                    nom: '',
                    email: '',
                    telephone: '',
                    date: '',
                    motif: '',
                    message: ''
                });
            } else {
                const errorData = await response.json();
                console.error('Failed to create rendez-vous:', errorData);
            }
        } catch (error) {
            console.error('An error occurred:', error);
        }
    };

    return (
        <div>
            <div className="relative cursor-pointer text-blue-500 p-4" onClick={toggleForm}>
                Prenez Rendez-Vous
            </div>

            {showForm && (
                <div className="fixed top-0 left-0 w-full h-full flex items-center justify-center bg-gray-900 bg-opacity-50 p-10">
                    <div className="bg-white p-12 rounded-lg shadow-lg max-w-4xl w-full m-8 relative">
                        {/* Close Button */}
                        <button
                            type="button"
                            onClick={toggleForm}
                            className="absolute top-4 right-4 text-gray-500 hover:text-gray-700"
                        >
                            <FontAwesomeIcon icon={faTimes} className="text-2xl" />
                        </button>
                        <h2 className="text-h4-custom font-bold mb-8">Prenez Rendez-Vous</h2>
                        <p className="text-custom-lg text-gray-700 mb-8">
                            Afin que notre équipe puisse vous contacter à temps, veuillez remplir le formulaire avec des informations précises.
                        </p>
                        <form onSubmit={handleSubmit}>
                            <div className="grid grid-cols-2 gap-8 mb-8">
                                <div>
                                    <label className="font-quicksand block text-lg font-medium text-gray-700 flex items-center">
                                        <FontAwesomeIcon icon={faUser} className="mr-3 text-2xl" />
                                        Prénom
                                    </label>
                                    <input
                                        type="text"
                                        name="prenom"
                                        value={formData.prenom}
                                        onChange={handleChange}
                                        placeholder="Votre prénom"
                                        className="bg-[#F9F9FF] mt-2 block w-full border border-gray-300 rounded-lg shadow-sm py-4 px-6 text-xl"
                                    />
                                </div>
                                <div>
                                    <label className="block text-lg font-medium text-gray-700 flex items-center">
                                        <FontAwesomeIcon icon={faCalendar} className="mr-3 text-2xl" />
                                        Date Disponible
                                    </label>
                                    <input
                                        type="date"
                                        name="date"
                                        value={formData.date}
                                        onChange={handleChange}
                                        className="bg-[#F9F9FF] font-quicksand mt-2 block w-full border border-gray-300 rounded-lg shadow-sm py-4 px-6 text-xl"
                                    />
                                </div>
                            </div>
                            <div className="grid grid-cols-2 gap-8 mb-8">
                                <div>
                                    <label className="block text-lg font-medium text-gray-700 flex items-center">
                                        <FontAwesomeIcon icon={faUser} className="mr-3 text-2xl" />
                                        Nom
                                    </label>
                                    <input
                                        type="text"
                                        name="nom"
                                        value={formData.nom}
                                        onChange={handleChange}
                                        placeholder="Votre nom"
                                        className="bg-[#F9F9FF] font-quicksand mt-2 block w-full border border-gray-300 rounded-lg shadow-sm py-4 px-6 text-xl"
                                    />
                                </div>
                                <div>
                                    <label className=" font-quicksand block text-lg font-medium text-gray-700 flex items-center">
                                        <FontAwesomeIcon icon={faComment} className="mr-3 text-2xl" />
                                        Message Option de Demande
                                    </label>
                                    <select
                                        name="message"
                                        value={formData.message}
                                        onChange={handleChange}
                                        className=" bg-[#F9F9FF] mt-2 block w-full border border-gray-300 rounded-lg shadow-sm py-4 px-6 text-xl"
                                    >
                                        <option value="">Sélectionnez un message</option>
                                        <option value="partenariat">Demande de Partenariat</option>
                                        <option value="demo">Demande de Demo</option>
                                        <option value="rendezvous">Demande de Rendez-vous</option>
                                        <option value="etc">Demande etc...</option>
                                    </select>
                                </div>
                            </div>
                            <div className="grid grid-cols-2 gap-8 mb-8">
                                <div>
                                    <div>
                                        <label className="font-quicksand block text-lg font-medium text-gray-700 flex items-center">
                                            <FontAwesomeIcon icon={faEnvelope} className="mr-3 text-2xl" />
                                            Email
                                        </label>
                                        <input
                                            type="email"
                                            name="email"
                                            value={formData.email}
                                            onChange={handleChange}
                                            placeholder="Votre email"
                                            className="bg-[#F9F9FF] mt-2 block w-full border border-gray-300 rounded-lg shadow-sm py-4 px-6 text-xl"
                                        />
                                    </div>
                                </div>
                                <div>
                                    <label className="font-quicksand block text-lg font-medium text-gray-700 flex items-center">
                                        <FontAwesomeIcon icon={faClipboard} className="mr-3 text-2xl" />
                                        Motif ce rendez-vous
                                    </label>
                                    <textarea
                                        name="motif"
                                        value={formData.motif}
                                        onChange={handleChange}
                                        placeholder="Expliquez le motif de votre rendez-vous"
                                        className="bg-[#F9F9FF] mt-2 block w-full border border-gray-300 rounded-lg shadow-sm py-4 px-6 text-xl"
                                    ></textarea>
                                </div>
                            </div>
                            <div className="grid grid-cols-2 gap-8 mb-8">
                                <div>
                                    <label className="font-quicksand block text-lg font-medium text-gray-700 flex items-center">
                                        <FontAwesomeIcon icon={faPhone} className="mr-3 text-2xl" />
                                        Téléphone
                                    </label>
                                    <input
                                        type="text"
                                        name="telephone"
                                        value={formData.telephone}
                                        onChange={handleChange}
                                        placeholder="Votre numéro de téléphone"
                                        className="bg-[#F9F9FF] mt-2 block w-full border border-gray-300 rounded-lg shadow-sm py-4 px-6 text-xl"
                                    />
                                </div>
                            </div>

                            <div className="flex justify-end">
                                <button
                                    type="submit"
                                    className="font-quicksand bg-main-blue text-white px-8 py-4 rounded-lg text-xl font-semibold flex items-center"
                                >
                                    Reserve maintenant
                                    <FontAwesomeIcon icon={faArrowRight} className="ml-3 text-xl" /> {/* Icône ajoutée ici */}
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            )}
        </div>
    );
};

export default RendezVousForm;
