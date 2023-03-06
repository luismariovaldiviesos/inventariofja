<script>

    window.addEventListener('close-customer-modal', event => {
        closeModalCustomer()
    })

    function openModalCustomer() {
		var modal = document.getElementById("modalUsuario")
		modal.classList.add("overflow-y-auto", "show")
		modal.style.cssText = "margin-top: 0px; margin-left: -100px;  z-index: 1000;"
	}




    function closeModalCustomer() {
		var modal = document.getElementById("modalUsuario")
		modal.classList.remove("overflow-y-auto", "show")
		modal.style.cssText = ""
	}


    //sincronizar valor de propiedades
    const input =  document.getElementById('usuario-search')
    input.addEventListener('change', (e) =>{
        @this.searchUsuario = e.target.value
    })

     //sincronizar valor de propiedades
    //  const input2 =  document.getElementById('product-search')
    // input2.addEventListener('change', (e) =>{
    //     @this.searchProduct = e.target.value
    // })

        // const inputCash =  document.getElementById('cash')
        // inputCash.addEventListener('change', (e) =>{
        //     @this.cash = e.target.value
        // })


    // document.addEventListener('click', (e) => {
    //     if(e.target.getAttribute('data-type') === 'qty'){
    //         KioskBoard.run('#' + e.target.id, {})
    //         document.getElementById( e.target.id).blur()
    //         document.getElementById( e.target.id).focus()
    //     }
    // })


</script>
