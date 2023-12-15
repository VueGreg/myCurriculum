import axios from "axios";
import store from '../store';
import { ref } from 'vue';
import router from '../router'

export default function useLogin() {

    const errors = ref([]);

    const getToken = async(email, password) => {
        try {
            await axios.post('http://127.0.0.1:8000/api/login', {
                        email: email,
                        password: password
                    })
                    .then(response => {
                        store.state.token = response.data.token
                        router.push({name: 'Dashboard'})
                    })
            }
        catch (error) {
            errors.value = error
        }
    }

    return {
        errors,
        getToken
    }
}