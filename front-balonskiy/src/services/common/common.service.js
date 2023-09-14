import httpClient from "@/services/http.service"

const commonService = {
    getDepartments() {
        return httpClient.get(`department`)
    },
    getStudyLevels() {
        return httpClient.get(`study-level`)
    },
    getEducationFields() {
        return httpClient.get(`education-field`)
    },
    getDecreeGosoTemplates() {
        return httpClient.get(`decree-goso-templates`)
    },
}

export default commonService