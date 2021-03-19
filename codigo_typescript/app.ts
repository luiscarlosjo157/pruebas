//comentarios de una sola linea
/*
comentarios de multiples lineas
para typescrip
*/

//imprimir por consola 
console.log("hola mundo")

//variables
let nombrePersona = "luis"

nombrePersona = "Juan"

//constantes
const HOST_DATABASE = 'localhost'

 /*
String
number
boolean 
null
undefined
object
 */

let primerNombre: string
let edad: number
let isMayorEdad: boolean

let segundoNombre = 'Luis'
/*
operadores
comparacion
>
<
>=
<=
==
===

logicos
&& => and
|| => or
!= => diferente
!== => diferente
! => negacion
*/

//if
edad = 18

if(edad>18){
    console.log("es mayor de edad")
}else if(edad<18 && edad>12){
    console.log("eres joven")
}else{
    console.log("eres niño")
}
//JSON
let persona = {
    nombre:"carlos",
    apellido:"jurado"
}
console.log(persona.apellido)

//areglos
let numbers = [1,2,3,4,5,6,7,8]

console.log(numbers[0])

let personas = [
    {
        nombre:"juan",
        apellido:"perez",
        edad:22
    },
    {
        nombre:"ayde",
        apellido:"jojoa",
        edad:29
    }
]

console.log(personas[0].nombre)

//funciones

function sumar(num1:number, num2:number){
    return num1 + num1
}

let resultado = sumar(12, 15)

console.log(resultado)