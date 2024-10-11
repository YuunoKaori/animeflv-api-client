const axios = require('axios');

const API_URL = 'https://animeflv.net/api'; // Cambia esto a la URL real de la API si es necesario.

// Ejemplo: Obtener una lista de últimos episodios
async function getLatestEpisodes() {
  try {
    const response = await axios.get(`${API_URL}/list/latest-episodes`);
    console.log(response.data);
  } catch (error) {
    console.error('Error al obtener los episodios:', error);
  }
}

getLatestEpisodes();
