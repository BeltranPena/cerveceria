"use strict"


/*let comentarios = [];

async function getComentarios(){
    let response = await fetch('comentarios');
    comentarios = await response.json();
    let tabla = document.querySelector("#tabla");
    tabla.innerHTML = "";
    for(let comentario of comentarios){
        tabla.innerHTML +=`
            <tr>
                <td>${comentario.usuario}</td>
                <td>${comentario.comentario}</td>
                <td>${comentario.calificacion}</td>
            </tr>`
    }
}

document.querySelector("#submit").addEventListener("click", agregarComentario());

function agregarComentario(){
    let comentario = document.querySelector("#comentario").value;
    let calificacion = document.querySelector("#calificacion").value;

    let nuevoComentario = {
        "comentario" : comentario,
        "calificacion" : calificacion
    }
    console.log(nuevoComentario);

    fetch('comentarios', {
        method: 'POST',
        headers: {'Content-Type': 'application/json'},       
        body: JSON.stringify(nuevoComentario) 
     })
     .then(response => {
         comentarios.push(nuevoComentario);
     })
     .catch(error => console.log(error));*/

     let app = new Vue({
        el: '#vue-comment',
        data: {
            comentarios: [],
            admin: ''  
        },
        methods: {        
            remove: function(id_comentario){
                deleteComentario(id_comentario);
            },
            add: function(){
                addComentario();
    
            }
        }
    });

    document.addEventListener('DOMContentLoaded', () => {
        //let id_cerveza = document.querySelector("input[name=id_cerveza]").value;
     
        getComentarios();
        document.querySelector('#submit').addEventListener('submit', e => {   
        
        
        e.preventDefault();
        addComentario();
    });
    });
    
       
    function getComentarios() {
        fetch('api/comentarios')
        .then(response => response.json())
        .then(comment => app.comentarios = comment)
        .catch(error => console.log(error));
    }
    
    
    
    function addComentario() {
        //e.preventDefault();
        
        let comentarios = {
            id_usuario: document.querySelector("input[name=input_user]").value,  
            texto: document.querySelector("input[name=comentario]").value,
            puntaje: document.querySelector("input[name=puntaje]").value,
            id_cerveza: document.querySelector("input[name=id_cerveza]").value
        }
    
        let data = {
            "thing": comentarios
        }
        fetch('api/comentarios', {
            method: 'POST',
            headers: {'Content-Type': 'application/json'},       
            body: JSON.stringify(data) 
         })
         
         .then(response => response.json())
            .then(comment => app.comentarios.push(comment))
            .catch(error => console.log(error));
        }
    
        function deleteComentario(id_comentario) {
            let id_cerveza = document.querySelector("input[name=id_cerveza]").value;
            fetch('api/comentario/' + id_comentario, {
                method: 'DELETE',
                headers: {"Content-Type": "application/json"},
            })
            .then(response => {
                getComentarios(id_cerveza); 
            })
            .catch(error => console.log(error));
        }