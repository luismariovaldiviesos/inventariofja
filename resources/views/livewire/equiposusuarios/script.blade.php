<script>

    function openModal(afId, observaciones){

        var modal = document.getElementById('modalChanges')
        @this.afId = afId
        @this.observaciones = observaciones
        //@this.af = af

        modal.classList.add("overflow-y-auto", "show")
		modal.style.cssText = "margin-top: 0px; margin-left: -100px;  z-index: 10000;"
    }


    function closeModal()
    {
        var modal = document.getElementById('modalChanges')
        modal.classList.remove("overflow-y-auto", "show")
		modal.style.cssText = ""
    }

    // listeners que vienen desde el front -end
    window.addEventListener('close-modal-changes', event => {
        closeModal()
    })

    window.addEventListener('close-modal', event => {
        closeModal()
    })




</script>
