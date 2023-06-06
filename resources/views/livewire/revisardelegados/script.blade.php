<script>

// listeners que vienen desde el front -end
window.addEventListener('show-modal-observaciones', event => {
    openModalObservaciones()
    })

    function openModalObservaciones(){
        var modal = document.getElementById('modalObservaciones')
        modal.classList.add("overflow-y-auto", "show")
        modal.style.cssText = "margin-top: 0px; margin-left: -100px;  z-index: 10000;"

        //console.log('si llegamos');
        // window.livewire.on('show-modal', Msg =>{
        //     $('#modalObservaciones').modal('show')
        // })
    }











</script>
