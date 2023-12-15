import axios from "axios";
import store from '../store';
import { useStore } from "vuex";

const { getToken } = useStore().getters;

const axiosClient = axios.create({
    baseURL: 'http://127.0.0.1:8000',
})

axiosClient.interceptors.request.use((config) => {
    config.withCredentials = false
    config.headers.Authorization= `Bearer + ${getToken}`

    return config
})

export default axiosClient;