import axios from 'axios'

const app = axios = axios.create({
    baseURL: "https://localhost:8000"
});

export default app;