import axiosClient from "../axios";
import { ref } from "vue";

export default function useExperience () {

    const error = ref()
    const experiences = ref([])
    const experience = ref([])

    const getExperience = async() => {
        await axiosClient.get('/experience')
        .then(response => {
            experiences.value = response.data.data
        })
        .catch(e => {
            error.value = e
        })
    }

    const showExperience = async(id) => {
        await axiosClient.get('experience/' + id)
        .then(response => {
            experience.value = response.data.data
        })
    }

    return {
        getExperience,
        showExperience,
        experiences,
        experience,
        error
    }
}