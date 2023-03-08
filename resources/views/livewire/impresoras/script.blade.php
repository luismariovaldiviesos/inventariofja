<script>


//cerar modal usuario en este caso

    window.addEventListener('close-usuario-modal', event => {
        closeModalUsuario()
    })




    function openModalCustomer() { //modal usuario
		var modal = document.getElementById("modalUsuario")
		modal.classList.add("overflow-y-auto", "show")
		modal.style.cssText = "margin-top: 0px; margin-left: -100px;  z-index: 1000;"
	}




    function closeModalUsuario() { //modal usuario
		var modal = document.getElementById("modalUsuario")
		modal.classList.remove("overflow-y-auto", "show")
		modal.style.cssText = ""
	}


    //sincronizar valor de propiedades
    const input =  document.getElementById('usuario-search')
    input.addEventListener('change', (e) =>{
        @this.searchUsuario = e.target.value
    })




</script>
