export function setCookie(name, value, seconds = null) {
    let expires = "";
    if (seconds) {
        const date = new Date();
        date.setTime(date.getTime() + (seconds * 1000));
        expires = "; expires=" + date.toUTCString();
    }
    document.cookie = name + "=" + value + expires + "; path=/";
}

export function getCookie(name) {
    const cookieValue = document.cookie.match('(^|;)\\s*' + name + '\\s*=\\s*([^;]+)');
    return cookieValue ? cookieValue.pop() : '';
}

export function checkCookieVariable(variableName) {
    var cookies = document.cookie.split(';');

    for (let i = 0; i < cookies.length; i++) {
        let cookie = cookies[i].trim();
        let keyValue = cookie.split('=');
        let key = keyValue[0];

        if (key === variableName) {
            return true;
        }
    }

    return false;
}

export function deleteCookie(name) {
    document.cookie = name + '=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;';
}