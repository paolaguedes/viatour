import {handleEnd} from './modules/apiEnd.js'
import {handleScroll} from './modules/scroll.js'
import {validaInput} from './modules/masker.js'

endereco.addEventListener('click', handleEnd)
document.getElementById("submit").addEventListener("click", validaInput)
handleScroll