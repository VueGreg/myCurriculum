import axiosClient from "../axios";
import { reactive } from "vue";

export default function useExperience () {

    const experience = reactive({
        job: null,
        description: null,
        structure: null,
        dateStart: null,
        dateEnd: null
    })

    const getExperience = async() => {
        await axiosClient.get('/experience')
        .then(response => {

            const expData = response.data.data[0]

            experience.job = expData.job;
            experience.description = expData.description
            experience.structure = expData.structure[0].name
            experience.dateStart = expData.date_start
            experience.dateEnd = expData.date_end
        })
    } 

    return {
        getExperience,
        experience
    }
}