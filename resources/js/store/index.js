import { createStore } from "vuex";

const store = createStore({
    state: {
        token: null
    },
    getters: {
        getToken(state){
            return state.token
        }
    }
})

export default store;