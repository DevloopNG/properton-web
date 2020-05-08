const TOKEN_ID = 'access_token';
// const BASE_URL = 'http://165.227.116.248/';
const LOGIN_ENDPOINT = '/api/auth/login';
const SIGNUP_ENDPOINT = '/api/auth/signup'
const proxyurl = "https://cors-anywhere.herokuapp.com/";
axios.defaults.baseURL = 'http://165.227.116.248/';
// axios.defaults.headers.common['Authorization'] = AUTH_TOKEN;
axios.defaults.headers.post['Content-Type'] = 'application/form-data';

// const axiosInstance = axios.create({
//     baseURL: BASE_URL,
//     headers: {
//         'Content-Type': 'application/json'
//     }
// });


const getToken = () => {
    return localStorage.getItem(TOKEN_ID);
}

const setToken = (token) => {
    return localStorage.setItem(TOKEN_ID, token);
}

const removeToken = () => {
    return localStorage.removeItem(TOKEN_ID);
}

const checkLogin = () => {
    const token = getToken();
    if (!token && AUTH_REQUIRED === true) {
        // redirect to login page
        window.location.replace('/login.html');

    }
}

function check(event) {
    event.preventDefault();
    const params = new URLSearchParams();
    params.append("email", (document.getElementById('email').value).toString())
    params.append('password', (document.getElementById('password').value).toString())

    axios.post(proxyurl + LOGIN_ENDPOINT, {
        params
    }).then((data) => {
        console.log(data);
    })

    //return true;
};
function signup(event) {
    event.preventDefault();
    // const params = new URLSearchParams();
    // params.append("name", document.getElementById('first_name').value);
    // params.append("last_name", document.getElementById('last_name').value);
    // params.append("email", document.getElementById('email').value);
    // params.append("nationality", document.getElementById('nationality').value);
    // params.append("gender", document.getElementById('gender').value);
    // params.append("occupation", document.getElementById('occupation').value);
    // params.append('password', document.getElementById('password').value)
    // params.append('phone_number', document.getElementById('password').value)
    // params.append('password_confirmation', document.getElementById('password').value)
    axios.post(proxyurl + SIGNUP_ENDPOINT,
        {
            name: (document.getElementById('first_name').value).toString(),
            last_name: (document.getElementById('last_name').value).toString(),
            email: (document.getElementById('email').value).toString(),
            nationality: (document.getElementById('nationality').value).toString(),
            gender: (document.getElementById('gender').value).toString(),
            occupation: (document.getElementById('occupation').value).toString(),
            password: (document.getElementById('password').value).toString(),
            phone_number: (document.getElementById('password').value).toString(),
            password_confirmation: (document.getElementById('password').value).toString()
        }).then((data) => {
            console.log(data);
        })

    //return true;
};

$(document).ready(function () {
    checkLogin();
});