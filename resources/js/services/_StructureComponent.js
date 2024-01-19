import axiosClient from "../axios";
import { ref } from "vue";


export default function useStructure () {

    const structures = ref([]);

    const getStructure = async() => {
        await axiosClient.get('/structure')
        .then(response => {
            structures.value = response.data.data
        })
        .catch(e => {
            error.value = e
        })
    }

    return {
        getStructure,
        structures
    }

}