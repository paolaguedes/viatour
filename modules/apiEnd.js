import {
  cep,
  rua,
  cidade,
  estado
} from './elements.js'

export function handleEnd(e) {
  let url = `http://viacep.com.br/ws/${cep.value}/json/`

  fetch(url, {method: 'GET'})
    .then(response => {
      response.json()
        .then(data => {
          rua.value = data.logradouro
          cidade.value = data.localidade
          estado.value = data.uf
        })
    })
    .catch(err => {
      rua.value = ''
      cidade.value = ''
      estado.value = ''
    })
  e.preventDefault()
}