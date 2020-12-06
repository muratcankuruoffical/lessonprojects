<template>
    <div>
        <div class="row mt-4">
            <div class="col-md-5">
                <div class="card">
                    <div class="card-header text-center">
                        Ticket Form
                    </div>
                    <div class="card-body">
                        <form v-on:submit.prevent="addTicket">
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
                                <input type="text" id="title" class="form-control" v-model="ticket.title">
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="department">Departman</label>
                                        <select name="" id="department" class="form-control" v-model="ticket.department_id">
                                            <option v-for="department in departments" :value="department.id">{{ department.name }}</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="priority">Öncelik</label>
                                        <select name="" id="priority" class="form-control" v-model="ticket.priority_id">
                                            <option v-for="priority in priorities" :value="priority.id">{{ priority.name }}</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="message">Mesaj</label>
                                <textarea name="" id="message" class="form-control" cols="30" rows="10" v-model="ticket.message"></textarea>
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
                            <tr v-for="ticket in tickets">
                                <td v-for="department in ticket.departments">
                                    {{ department.name }}
                                </td>
                                <td>{{ ticket.title }}</td>
                                <td>
                                    <span class="badge badge-pill badge-success p-2">Aktif</span>
                                </td>
                                <td>{{ ticket.updated_at }}</td>
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
import axios from 'axios';
export default {
    name: "Home",
    created() {
        this.getDepartments()
        this.getPriorities()
        this.getTickets()
    },
    data() {
        return {
            departments : {},
            priorities : {},
            ticket : {},
            tickets : {}
        }
    },
    methods: {
        getDepartments(){
            axios.get('http://127.0.0.1:8000/api/departments')
            .then((response) => {
                this.departments = response.data.departments
            })
        },
        getPriorities(){
            axios.get('http://127.0.0.1:8000/api/priorities')
            .then((response) => {
                this.priorities = response.data.priorities
            })
        },
        addTicket(){
            axios.post('http://127.0.0.1:8000/api/ticket/add', this.ticket)
            .then((response) => {
                console.log(response)
                if  (response.status == 201) {
                    this.getTickets()
                }
            })
        },
        getTickets(){
            axios.get('http://127.0.0.1:8000/api/tickets')
            .then((response) => {
                this.tickets = response.data.tickets
                console.log(response.data)
            })
        }
    }
}
</script>

<style scoped>

</style>
