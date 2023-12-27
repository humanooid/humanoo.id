@extends('f._layout')
@section('meta')
<style>
    table,
    th,
    td {
        color: white;
    }
</style>
@endsection
@section('content')
<section id="home" class="home d-flex align-items-center light">

    <div class="container">

        <div class="row">
            <div class="col-2">
                <div class="name">Student's name</div>
                <div class="school">School's name</div>
                <div class="group mb-3">ID's</div>
            </div>

            <div class="col-10">
                <div class="name">: Gilang Aryadi</div>
                <div class="school">: SMKN 12 Bandung</div>
                <div class="group mb-3">: 012300001</div>
            </div>
        </div>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Modul class</th>
                    <th scope="col">Exam Date</th>
                    <th scope="col">Instructor</th>
                    <th scope="col">Score</th>
                    <th scope="col">Status</th>
                    <th scope="col">Sertificate</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Front-end Web Development (Basic I)</td>
                    <td>26 December 2023</td>
                    <td>Gilang Aryadi a.k.a Marchites</td>
                    <td>85</td>
                    <th scope="col">Passed</th>
                    <td><button>Download</button></td>
                </tr>
            </tbody>
        </table>

    </div>
</section>
@endsection