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
            if (data.result){
                window.location = BASE_URL+"/app/Views/template.php";
            }else{
                alert("Dados Incorretos");
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
            if (data){
                alert("Usuario Cadastrado")
            }else{
                alert("Usuario não Cadastrado")
            }
        }).catch(error => {
        console.log(error)
    })
}

function sortable() {
    new Sortable(example1, {
        animation: 150,
        ghostClass: 'blue-background-class'
        /*  swap: true, // Enable swap plugin
         swapClass: 'highlight', // The class applied to the hovered swap item
         animation: 150 */
    });
}

function timesTabela(times){

    let divprimaria = document.querySelector("#botaumid")
    let ol = document.createElement("ol")
    ol.setAttribute('id','example1')
    ol.setAttribute('class','list-group custom-counter')

    for (let time of times) {
        let li = document.createElement("li")
        li.setAttribute("class","listitem")

        let img = document.createElement('img')
        img.setAttribute('src',time.logo)
        li.appendChild(img)

        let nome = document.createTextNode(time.nome);
        li.appendChild(nome)
        ol.appendChild(li)
    }

    divprimaria.appendChild(ol)
    sortable()
    ///console.log(divprimaria)
}

function loadTimes(){
    fetch(BASE_URL + "/route.php?url=Times/times")
        .then(response => response.json())
        .then(times =>{
            //console.log(times)
            timesTabela(times)
        }).catch(error => {
        console.log(error)
    })
}

function anyRank(rank) {

}

function getPosicoes() {
    let ol = document.getElementById('example1').children
    let palpite = [];
    Object.keys(ol).forEach((key) => palpite.push(ol[key].innerText));
    return palpite;
}

function enviarPalpite() {

    //console.log(JSON.stringify(palpite))
    let options = {
        method : "POST",
        body : JSON.stringify(getPosicoes()),
        headers : {
            "Content-Type" : "application/json"
        }
    }

    fetch(BASE_URL+"/route.php?url=Rank/palpite", options)
         .then((response) => response.json())
         .then((res) => {
             if (res){
                 alert("Palpite Efetuado!!!")
             }else{
                 alert("Você já fez um palpite")
             }
             console.log(res);
         }).catch(error => {
             console.log(error)
    })

}

function atualizarPosicoesTimes() {

    let options = {
        method : "POST",
        body : JSON.stringify(getPosicoes()),
        headers : {
            "Content-Type" : "application/json"
        }
    }

    fetch(BASE_URL+"/route.php?url=Times/atualizarPosicoes", options)
        .then((response) => response.json())
        .then((res) => {
            if (res){
                alert("Posicoes Atualizadas!!!")
            }else{
                alert("Ooops")
            }
            console.log(res);
        }).catch(error => {
        console.log(error)
    })
}

