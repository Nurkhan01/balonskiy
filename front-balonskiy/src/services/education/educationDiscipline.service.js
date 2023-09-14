import httpClient from "@/services/http.service"

const educationDisciplineService = {
    post(form) {
        return httpClient.post(`education-discipline/create`, form)
    },
    put(form) {
        return httpClient.put(`education-discipline/update/${form.id}`, form)
    },
    delete(discipline_id) {
        return httpClient.delete(`education-discipline/delete/${discipline_id}`)
    },
    get() {
        return httpClient.get(`education-discipline`)
    },
}

export default educationDisciplineService