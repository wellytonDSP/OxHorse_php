<?php if(!empty($flassMessage["msg"])): ?>
<div class="modal fade" id="modal-1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p><?=$flassMessage["msg"]?></p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>

<script>
window.onload = function() {
    var modal = new bootstrap.Modal(document.getElementById('modal-1'));
    modal.show();
};
</script>
<?php endif; ?>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

<footer id="text-center" class="footer">
    <section class="container p-4 pb-0 mb-4 text-center">
        <a class="btn p-4" href="#"><i class="bi bi-whatsapp"></i></a>
        <a class="btn p-4" href="#!"><i class="bi bi-instagram"></i></a>
        <a class="btn p-4" href="#!"><i class="bi bi-twitter"></i></a>
    </section>
    <div class="p-3 text-center">
        2023 <i class="bi bi-c-circle"></i> Desenvolvido por Wellyton/Giovana | Projeto StartupModel.
    </div>
</footer>
</body>

</html>
<!-- rodapé -->