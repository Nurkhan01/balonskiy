export const commonData = {
    appName: 'Bologna Process',
    siteUrl() {
        if (process.env.VUE_APP_MODE === 'production') {
            return 'https://app.uib.kz/'
        }
        return 'http://localhost:8080/'
    },
    baseApiEndpoint() {
        if (process.env.VUE_APP_MODE === 'production') {
            return 'https://backapp.uib.kz/'
        }
        return 'http://localhost/uib_abiturient/frontend/web/'
        // return 'http://abiturient.localhost/'
    },
    uploadsPath() {
        if (process.env.VUE_APP_MODE === 'production') {
            return 'https://backapp.uib.kz/uploads/'
        }
        return 'http://localhost/uib_abiturient/frontend/web/uploads/'
        // return 'http://abiturient.localhost/uploads/'
    },
}