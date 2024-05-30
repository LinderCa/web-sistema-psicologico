//MENU HAMBURGUESA
const menu_header=document.querySelector('.menu-header');
const lista=document.querySelector('.lista-hamburguesa');
menu_header.addEventListener('click',()=>{
    lista.classList.toggle('hidden');
});

function mostrarTest(){
    //seleccionamos los elementos que se ocultaran
    const sesion_preguntas=document.querySelector('.sesion-preguntas');
    const session_instrucciones=document.querySelector('.session-instrucciones');

    //remocemos la sesion de preguntas
    sesion_preguntas.classList.remove('hidden');
    session_instrucciones.classList.add('hidden');
}

function verificar(e){
    const numerico=document.querySelector('.item-numerico');
    let value=e.target.value;
    if(!(/^\d*$/.test(value))){
        //Si el valor no es numerico, eliminamos los caracteres no numericos
        e.target.value=value.replace(/[^\d]/g, '');
    }
    if(parseInt(value) > 4 || parseInt(value)==0){
        e.target.value= '';
    }
}

/*
const numerico= document.querySelectorAll('.item-numerico');
console.log(numerico);

numerico.forEach((input)=>{
    input.addEventListener('input',(e)=>{
        let value=numerico.value;
        console.log(value);
        if (!(/^\d*$/.test(value))) {
            // Si el valor no es un número, eliminamos los caracteres no numéricos
            input.value = value.replace(/[^\d]/g, '');
        }
        if(parseInt(value) > 4){
            input.value='';
        }
    });
});

*/

