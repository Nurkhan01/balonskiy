import httpClient from "@/services/http.service"

const formationEducationProgramService = {
    getGosoCycles() {
        return httpClient.get(`goso-cycle-name`)
    },
    getGosoComponents() {
        return httpClient.get(`goso-component-name`)
    },
    getEducationModules(education_program_id) {
        return httpClient.get(`education-module` + `?education_program_id=${education_program_id}`)
    },
    post(form) {
        return httpClient.post(`formation-education-program/create`, form)
    },
    postEducationModule(form) {
        return httpClient.post(`education-module/create`, form)
    },
    put(form) {
        return httpClient.put(`formation-education-program/update/${form.id}`, form)
    },
    delete(formation_education_program_id) {
        return httpClient.delete(`formation-education-program/delete/${formation_education_program_id}`)
    },
    deleteEducationModule(education_module_id) {
        return httpClient.delete(`education-module/delete/${education_module_id}`)
    },
    get() {
        return httpClient.get(`formation-education-program`)
    },
}

export default formationEducationProgramService