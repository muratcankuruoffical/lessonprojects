<template>
    <div>
        <div class="row mt-4">
            <div class="col-md-5">
                <div class="card">
                    <div class="card-header text-center">
                        Ticket Form
                    </div>
                    <div class="card-body">
                        <form>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="name">İsim</label>
                                        <input type="text" id="name" class="form-control" disabled>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="email">E-posta Adresi</label>
                                        <input type="text" id="email" class="form-control" value="muratcankuruoffical@gmail.com" disabled>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="title">Başlık</label>
                                <input type="text" id="title" class="form-control">
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="department">Departman</label>
                                        <select name="" id="department" class="form-control">
                                            <option value="">1</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="priority">Öncelik</label>
                                        <select name="" id="priority" class="form-control">
                                            <option value="">1</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="message">Mesaj</label>
                                <textarea name="" id="message" class="form-control" cols="30" rows="10"></textarea>
                            </div>
                            <div class="text-center">
                                <button class="btn btn-light border">Gönder</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-7">
                <div class="card">
                    <div class="card-header text-center">
                        Ticket List
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered text-center">
                            <thead>
                            <th>Departman</th>
                            <th>Başlık</th>
                            <th>Durum</th>
                            <th>Son Güncelleme</th>
                            </thead>
                            <tbody>
                            <tr>
                                <td></td>
                                <td></td>
                                <td>
                                    <span class="badge badge-pill badge-success p-2">Aktif</span>
                                </td>
                                <td></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
name: "Home"
}
</script>

<style scoped>

</style>
