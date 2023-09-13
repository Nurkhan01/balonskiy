import { createStore } from 'vuex'
import common from './common/common'
import educationProgram from './education/educationProgram'
import educationDiscipline from './education/educationDiscipline'
import formationEducationProgram from './education/formationEducationProgram'
export default createStore({
  modules: {
    common,
    educationProgram,
    educationDiscipline,
    formationEducationProgram,
  },
  state: {
    error: null
  },
  mutations: {
    SET_ERROR(state, error) {
      state.error = {
        message: error.message,
        errors: error?.response?.data?.errors
      }
    }
  },
  actions: {
  },
  getters: {
    error: (s) => s.error
  },

})
