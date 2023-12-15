import { createStore } from "vuex";

const store = createStore({
    state: {
        token: null
    },
    getters: {
        getToken(state){
            return state.token
        }
    },
    mutations: {
        defineTokenToNull(state){
            state.token = null
        }
    },
    actions: {
        defineTokenToNull(context){
            context.commit('defineTokenToNull');
        }
    }
})

export default store;