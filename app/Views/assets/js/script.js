const BASE_URL = "http://localhost/palpitesbrasileirao"
function entrar() {
    document.querySelector('#form-login').addEventListener('submit', event => {
        event.preventDefault()
    })
    let login = document.querySelector('#login').value
    let senha = document.querySelector('#senha').value

    let data = {
        login: login,
        senha: senha
    }
    console.log(data)
    let options = {
        method: 'POST',
        body: JSON.stringify(data),
        headers: {
            'Content-Type': 'application/json'
        }
    }
    fetch(BASE_URL+"/route.php?url=Auth/login",options)
        .then(response => response.json())
        .then(data => {
            console.log(data)
            if (data.nome){
                window.location = BASE_URL+"/app/Views/template.php";
            }
            console.log(data)
        }).catch(error => {
        console.log(error)
    })
}

function logout(){
    fetch(BASE_URL+"/route.php?url=Auth/logout",{
        method: "POST"
    })
        .then(response => response.json())
        .then(data => {
            if (data.logout){
                window.location = BASE_URL
            }
        })
}

function  cadastroForm() {
    $('#content').load(BASE_URL+"/app/Views/cadastro.php");
}

function cadastro() {
    document.querySelector('#cadastro-form').addEventListener('submit', event => {
        event.preventDefault()
    })

    let email = document.querySelector("#cad-email").value
    let nome = document.querySelector("#cad-nome").value
    let senha = document.querySelector("#cad-senha").value

    let data = {
        email: email,
        nome: nome,
        senha: senha
    }

    let options = {
        method : "POST",
        body : JSON.stringify(data),
        headers : {
            "Content-Type" : "application/json"
        }
    }

    fetch(BASE_URL+"/route.php?url=Auth/cadastro",options)
        .then(response => response.json())
        .then(data => {
            console.log(data)
        }).catch(error => {
            console.log(error)
    })


}
