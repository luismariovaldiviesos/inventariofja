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



    function openModalLaptop(afId, observacionesLa){

        var modal = document.getElementById('modalChangesLa')
        @this.afId = afId
        @this.observacionesLa = observacionesLa
        //@this.af = af

        modal.classList.add("overflow-y-auto", "show")
        modal.style.cssText = "margin-top: 0px; margin-left: -100px;  z-index: 10000;"
    }

    function closeModalLa()
    {
        var modal = document.getElementById('modalChangesLa')
        modal.classList.remove("overflow-y-auto", "show")
		modal.style.cssText = ""
    }

       // listeners que vienen desde el front -end
       window.addEventListener('close-modal-changes-la', event => {
        closeModalLa()
    })



    /// MONITOR

    function openModalMonitor(afId, observacionesLa){

        var modal = document.getElementById('modalChangesMo')
        @this.afId = afId
        @this.observacionesLa = observacionesLa
        //@this.af = af

        modal.classList.add("overflow-y-auto", "show")
        modal.style.cssText = "margin-top: 0px; margin-left: -100px;  z-index: 10000;"
    }

    function closeModalMo()
    {
        var modal = document.getElementById('modalChangesMo')
        modal.classList.remove("overflow-y-auto", "show")
		modal.style.cssText = ""
    }

    // listeners que vienen desde el front -end
    window.addEventListener('close-modal-changes-mo', event => {
        closeModalMo()
    })

     /// teclado

        function openModalTeclado(afId, observacionesLa){

        var modal = document.getElementById('modalChangesTe')
        @this.afId = afId
        @this.observacionesLa = observacionesLa
        //@this.af = af

        modal.classList.add("overflow-y-auto", "show")
        modal.style.cssText = "margin-top: 0px; margin-left: -100px;  z-index: 10000;"
        }

    function closeModalTe()
    {
    var modal = document.getElementById('modalChangesTe')
    modal.classList.remove("overflow-y-auto", "show")
    modal.style.cssText = ""
    }

    // listeners que vienen desde el front -end
    window.addEventListener('close-modal-changes-te', event => {
    closeModalTe()
    })



    /// mosuse

    function openModalRaton(afId, observacionesLa){
        var modal = document.getElementById('modalChangesRa')
        @this.afId = afId
        @this.observacionesLa = observacionesLa
        //@this.af = af

        modal.classList.add("overflow-y-auto", "show")
        modal.style.cssText = "margin-top: 0px; margin-left: -100px;  z-index: 10000;"
    }

    function closeModalRa()
    {
    var modal = document.getElementById('modalChangesRa')
    modal.classList.remove("overflow-y-auto", "show")
    modal.style.cssText = ""
    }

    // listeners que vienen desde el front -end
    window.addEventListener('close-modal-changes-ra', event => {
    closeModalRa()
    })






</script>
