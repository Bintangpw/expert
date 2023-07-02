<!-- Modal Edit gangguan -->
<div class="modal fade modal-fullscreen-md-down" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Ubah Gangguan Makan</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          {{-- form --}}
          <form id="edit-gangguan" action="" method="post">
            @method("put")
            @csrf
            <div class="input-form d-flex">
                <input type="hidden" name="id" id="id_gangguan">
                <div class="form-floating mb-3 p-2 mx-2">
                    <input type="text" class="form-control" id="kode-gangguan" name="kode_gangguan" readonly>
                    <label for="kode-gangguan">Kode Gangguan Makan</label>
                </div>
                <div class="form-floating mb-3 p-2 mx-2">
                    <input type="text" class="form-control" id="gangguan" name="gangguan">
                    <label for="gangguan">Gangguan Makan</label>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">ubah</button>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
</div>
{{-- end modal edit gangguan --}}

{{-- modal tambah gangguan --}}
<div class="modal fade modal-fullscreen-md-down" id="gangguanModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Gangguan Makan</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          {{-- form edit --}}
          <form id="tambah-gangguan" action="{{ route('gangguan.store') }}" method="post">
            @csrf
            <div class="input-form d-flex">
                <input type="hidden" name="id" id="id_gangguan">
                <div class="form-floating mb-3 p-2 mx-2">
                    <input type="text" class="form-control" id="kode-gangguan" name="kode_gangguan" placeholder="kode gangguan" required>
                    <label for="kode-gangguan">Kode Gangguan Makan</label>
                </div>
                <div class="form-floating mb-3 p-2 mx-2">
                    <input type="text" class="form-control" id="gangguan" name="gangguan" placeholder="gangguan" required>
                    <label for="gangguan">Gangguan Makan</label>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">simpan</button>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
</div>
{{-- end modal tambah gangguan --}}

<script>
    function updateInput(idgangguan, kode, gangguan){
        document.getElementById("kode-gangguan").value = kode;
        document.getElementById("gangguan").value = gangguan;
        document.getElementById("id_gangguan").value = idgangguan;
    }

    function actionUbahgangguan(params) {
        const formgangguan = document.getElementById('edit-gangguan');
        formgangguan.setAttribute('action', params);
        formgangguan.setAttribute('method', 'POST');
        console.log(formgangguan);
    }

</script>
