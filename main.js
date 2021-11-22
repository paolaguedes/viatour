import {handleEnd} from './modules/apiEnd.js'

endereco.addEventListener('click', handleEnd)

let submit = document.getElementById("submit")
submit.addEventListener('click', event => {
  event.preventDefault() 
})