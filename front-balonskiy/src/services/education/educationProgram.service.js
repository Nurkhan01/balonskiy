import httpClient from "@/services/http.service"

const educationProgramService = {
    getEducationFields() {
        return httpClient.get(`education-field`)
    },
    getEducationDirections() {
        return httpClient.get(`education-direction`)
    },
    getEducationGroups() {
        return httpClient.get(`education-group`)
    },
    post(form) {
        return httpClient.post(`education-program/create`, form)
    },
    put(form) {
        return httpClient.put(`education-program/update/${form.id}`, form)
    },
    delete(education_program_id) {
        return httpClient.delete(`education-program/delete/${education_program_id}`)
    },
    get() {
        return httpClient.get(`education-program`)
    },
}

export default educationProgramService