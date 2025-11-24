<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl">
        <div class="modal-content">
            <div class="modal-body p-0">
                <div class="container-fluid">
                    <div class="row gy-4">
                        <!-- <div class="col-lg-4 col-sm-12 bg-cover"
              style="background-image: url(template_user/img/c2.jpg); min-height:300px;">
            </div> -->
                        <div class="col-lg-8">
                            <form action="./actions/message.php" method="post" class="p-lg-5 col-12 row g-3">
                                <div>
                                    <h4>
                                        Jika ada pertanyaan, saran, kritik, atau hal-hal yang kurang jelas terkait website atau layanan kami,
                                        silakan kirim pesan melalui form ini
                                    </h4>
                                </div>
                                <div class="col-12">
                                    <label for="name" class="form-label">Nama</label>
                                    <input type="text" class="form-control" placeholder="Masukan nama..." id="Name" name="name"
                                        aria-describedby="name">
                                </div>
                                <div class="col-12">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" class="form-control" placeholder="Masukan email..." name="email" id="email"
                                        aria-describedby="email">
                                </div>
                                <div class="col-12">
                                    <label for="message" class="form-label">Pesan</label>
                                    <textarea placeholder="Masukan pesan..." class="form-control" id="message" name="message"
                                        rows="4"></textarea>
                                </div>
                                <div class="col-12">
                                    <label for="phone" class="form-label">No.Telepon</label>
                                    <input type="phone" class="form-control" placeholder="Masukan No.Telepon..." name="phone" id="phone"
                                        aria-describedby="phone">
                                </div>
                                <div class="col-12">
                                    <button type="submit" name="tombol" class="btn btn-brand" style="background-color: #FA886E;">Kirim</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Custom Border Style -->
<style>
    .form-control {
        border: 2px solid #555 !important;
        /* border abu tebal */
        border-radius: 6px;
        /* sudut melengkung */
        padding: 10px;
    }

    .form-control:focus {
        /* border-color: #FA886E !important; */
        /* oranye saat fokus */
        box-shadow: 0 0 6px rgba(250, 136, 110, 0.4);
    }
</style>