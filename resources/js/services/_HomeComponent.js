import axiosClient from "../axios";
import { ref, reactive } from "vue";

export default function useHome () {

    const job = ref();
    const experience = reactive({
        description: null,
        structure: {}
    })

    const getProfil = async() => {
        await axiosClient.get('/profil')
        .then(response => {
            job.value = response.data.data[0].job;
            experience.description = response.data.data[0].experiences[0].description
            experience.structure = response.data.data[0].experiences[0].structure[0]
        })
    } 

    return {
        getProfil,
        job,
        experience
    }
}