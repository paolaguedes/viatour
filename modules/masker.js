import {
    cep,
    email,
    telefone
} from './elements.js'

export function validaInput() {

    const cepValue = cep.value
    const emailValue = email.value
    const telefoneValue = telefone.value

    const regex = [ /^[a-z0-9.]+[@][a-z0-9]+\.[a-z0-9]+$/ , /^\(?[1-9]{2}\)? ?(?:[2-8]|9[1-9])[0-9]{3}\-?[0-9]{4}$/, /^\d{5}-\d{3}$/]

    const emailVal = regex[0].test(emailValue)
    const telVal = regex[1].test(telefoneValue)
    const cepVal = regex[2].test(cepValue)

    if (!emailVal) {
        alert("O email não foi inserido corretamente. Tente algo como email@email.com")
    } else if (!telVal) {
        alert("O telefone não foi inserido corretamente. Tente algo como XX XXXXX-XXXX")
    } else if (!cepVal){
        alert("Digite o cep corretamente.")
    }
}


VMasker(document.querySelector('#telefone')).maskPattern('(99) 99999-9999')
VMasker(document.querySelector('#cep')).maskPattern('99999-999')
