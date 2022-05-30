<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>CRUD</title>

        <!-- Fonts -->
        <link
            href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap"
            rel="stylesheet"
        />

        <link
            rel="stylesheet"
            href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback"
        />

        <link
            rel="stylesheet"
            href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}"
        />

        <link
            rel="stylesheet"
            href="{{ asset('dist/css/adminlte.min.css?v=3.2.0') }}"
        />

            <!-- Link For DataTable -->
        <link
            rel="stylesheet"
            href="//cdn.datatables.net/1.12.0/css/jquery.dataTables.min.css"
        />

        <link
            rel="stylesheet"
            href="{{ asset('plugins/bootstrap-5.0.2-dist/css/bootstrap.min.css') }}"
        />
    </head>
    <body class="bg-secondary">
        <!-- Modal For Editing Data -->
        <div class="modal fade text-dark" id="EditModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Edit Data</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form class="form-horizontal" action="/Table" method="POST">
                            @csrf
                            <input
                            type="hidden"
                            name="Exam_Subject_Marks_IDEdit"
                            id="Exam_Subject_Marks_IDEdit"
                            class="form-control"
                            placeholder="Enter Exam_Subject_Marks ID"
                            />
                            <div class="form-group row">
                                <label
                                    for="inputPassword3"
                                    class="col-sm-4 col-form-label"
                                    >Exam ID</label
                                >
                                <div class="col-sm-8">
                                    <input
                                        type="text"
                                        class="form-control"
                                        name="Exam_IDEdit"
                                        id="Exam_IDEdit"
                                        placeholder="Exam ID"
                                        required
                                    />
                                </div>
                            </div>
                            <div class="form-group row">
                                <label
                                    for="inputPassword3"
                                    class="col-sm-4 col-form-label"
                                    >sds ID</label
                                >
                                <div class="col-sm-8">
                                    <input
                                        type="text"
                                        class="form-control"
                                        name="sds_IDEdit"
                                        id="sds_IDEdit"
                                        placeholder="sds ID"
                                        required
                                    />
                                </div>
                            </div>
                            <div class="form-group row">
                                <label
                                    for="inputPassword3"
                                    class="col-sm-4 col-form-label"
                                    >Date Of Written Exam</label
                                >
                                <div class="col-sm-8">
                                    <input
                                        type="date"
                                        class="form-control"
                                        name="Date_Of_Written_ExamEdit"
                                        id="Date_Of_Written_ExamEdit"
                                    />
                                </div>
                            </div>
                            <div class="form-group row">
                                <label
                                    for="inputPassword3"
                                    class="col-sm-4 col-form-label"
                                    >Total Marks of Written Exam</label
                                >
                                <div class="col-sm-8">
                                    <input
                                        type="number"
                                        max="9999"
                                        class="form-control"
                                        name="Total_Marks_of_Written_ExamEdit"
                                        id="Total_Marks_of_Written_ExamEdit"
                                        placeholder="Total Marks of Written Exam"
                                    />
                                </div>
                            </div>
                            <div class="form-group row">
                                <label
                                    for="inputPassword3"
                                    class="col-sm-4 col-form-label"
                                    >Passing Marks of Written Exam</label
                                >
                                <div class="col-sm-8">
                                    <input
                                        type="number"
                                        max="9999"
                                        class="form-control"
                                        name="Passing_Marks_of_Written_ExamEdit"
                                        id="Passing_Marks_of_Written_ExamEdit"
                                        placeholder="Passing Marks of Written Exam"
                                    />
                                </div>
                            </div>
                            <div class="form-group row">
                                <label
                                    for="inputPassword3"
                                    class="col-sm-4 col-form-label"
                                    >Date Of Oral Exam</label
                                >
                                <div class="col-sm-8">
                                    <input
                                        type="date"
                                        class="form-control"
                                        name="Date_Of_Oral_ExamEdit"
                                        id="Date_Of_Oral_ExamEdit"
                                    />
                                </div>
                            </div>
                            <div class="form-group row">
                                <label
                                    for="inputPassword3"
                                    class="col-sm-4 col-form-label"
                                    >Total Marks of Oral Exam</label
                                >
                                <div class="col-sm-8">
                                    <input
                                        type="number"
                                        max="9999"
                                        class="form-control"
                                        name="Total_Marks_of_Oral_ExamEdit"
                                        id="Total_Marks_of_Oral_ExamEdit"
                                        placeholder="Total Marks of Oral Exam"
                                    />
                                </div>
                            </div>
                            <div class="form-group row">
                                <label
                                    for="inputPassword3"
                                    class="col-sm-4 col-form-label"
                                    >Passing Marks of Oral Exam</label
                                >
                                <div class="col-sm-8">
                                    <input
                                        type="number"
                                        max="9999"
                                        class="form-control"
                                        name="Passing_Marks_of_Oral_ExamEdit"
                                        id="Passing_Marks_of_Oral_ExamEdit"
                                        placeholder="Passing Marks of Oral Exam"
                                    />
                                </div>
                            </div>
                            <div class="form-group row">
                                <label
                                    for="inputPassword3"
                                    class="col-sm-4 col-form-label"
                                    >Date Of Practical Exam</label
                                >
                                <div class="col-sm-8">
                                    <input
                                        type="date"
                                        class="form-control"
                                        name="Date_Of_Practical_ExamEdit"
                                        id="Date_Of_Practical_ExamEdit"
                                    />
                                </div>
                            </div>
                            <div class="form-group row">
                                <label
                                    for="inputPassword3"
                                    class="col-sm-4 col-form-label"
                                    >Total Marks of Practical Exam</label
                                >
                                <div class="col-sm-8">
                                    <input
                                        type="number"
                                        max="9999"
                                        class="form-control"
                                        name="Total_Marks_of_Practical_ExamEdit"
                                        id="Total_Marks_of_Practical_ExamEdit"
                                        placeholder="Total Marks of Practical Exam"
                                    />
                                </div>
                            </div>
                            <div class="form-group row">
                                <label
                                    for="inputPassword3"
                                    class="col-sm-4 col-form-label"
                                    >Passing Marks of Practical Exam</label
                                >
                                <div class="col-sm-8">
                                    <input
                                        type="number"
                                        max="9999"
                                        class="form-control"
                                        name="Passing_Marks_of_Practical_ExamEdit"
                                        id="Passing_Marks_of_Practical_ExamEdit"
                                        placeholder="Passing Marks of Practical Exam"
                                    />
                                </div>
                            </div>
                            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                <button type="button" class="btn btn-sm btn-outline-secondary me-md-2" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-sm btn-outline-primary">Save changes</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal For Editing Data Ended -->
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg bg-light navbar-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="/Crud">CRUD_APP</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="/Crud">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="/Table">Table</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Navbar Ended -->
        <div class="card card-primary m-3">
            <div class="card-header mb-2">
                <h3 class="card-title">Database</h3>
            </div>
            <div class="card-body">
                <!-- Datatable -->
                <table id="exam_subject" class="table cell-border table-bordered table-hover text-center bg-light">
                    <thead>
                        <tr>
                            <th>Exam Subject Marks ID</th>
                            <th>Exam ID</th>
                            <th>sds ID</th>
                            <th>Date Of Written Exam</th>
                            <th>Total Marks of Written Exam</th>
                            <th>Passing Marks of Written Exam</th>
                            <th>Date Of Oral Exam</th>
                            <th>Total Marks of Oral Exam</th>
                            <th>Passing Marks of Oral Exam</th>
                            <th>Date Of Practical Exam</th>
                            <th>Total Marks of Practical Exam</th>
                            <th>Passing Marks of Practical Exam</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($Exam_Subjects as $i)
                            @if ($i["isDelete"]=="0" && $i["isDisable"]=="0")
                                <tr>
                                <td>{{ $i["esm_id"] }}</td>
                                <td>{{ $i["exam_id"] }}</td>
                                <td>{{ $i["sds_id"] }}</td>
                                <td>{{ $i["written_dateOfExam"] }}</td>
                                <td>{{ $i["written_totalMarks"] }}</td>
                                <td>{{ $i["written_passingMarks"] }}</td>
                                <td>{{ $i["oral_dateOfExam"] }}</td>
                                <td>{{ $i["oral_totalMarks"] }}</td>
                                <td>{{ $i["oral_passingMarks"] }}</td>
                                <td>{{ $i["practical_dateOfExam"] }}</td>
                                <td>{{ $i["practical_totalMarks"] }}</td>
                                <td>{{ $i["practical_passingMarks"] }}</td>
                                <td><button type="button" id={{$i['esm_id']}} class="edit btn btn-sm btn-outline-primary m-1" data-bs-toggle="modal" data-bs-target="#EditModal">Edit</button>
                                <a href={{'delete/'.$i['esm_id']}} onclick="return confirm('Are you sure to want to delete it?')"><button class='delete btn btn-sm btn-outline-danger m-1'>Delete</button></a>
                                <a href={{'disable/'.$i['esm_id']}} onclick="return confirm('Are you sure to want to disable it?')"><button class='disable btn btn-sm btn-outline-warning m-1'>Disable</button></a></td>
                            </tr>
                            @endif
                        @endforeach 
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>Exam Subject Marks ID</th>
                            <th>Exam ID</th>
                            <th>sds ID</th>
                            <th>Date Of Written Exam</th>
                            <th>Total Marks of Written Exam</th>
                            <th>Passing Marks of Written Exam</th>
                            <th>Date Of Oral Exam</th>
                            <th>Total Marks of Oral Exam</th>
                            <th>Passing Marks of Oral Exam</th>
                            <th>Date Of Practical Exam</th>
                            <th>Total Marks of Practical Exam</th>
                            <th>Passing Marks of Practical Exam</th>
                            <th>Actions</th>
                        </tr>
                    </tfoot>
                </table>
                <!-- Datatable Ended -->
            </div>
        </div>
        <!-- JQuery Link -->
        <script
            src="https://code.jquery.com/jquery-3.6.0.min.js"
            integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
            crossorigin="anonymous"
        ></script>
        <!-- Datatable Link -->
        <script src="//cdn.datatables.net/1.12.0/js/jquery.dataTables.min.js"></script>
        <!-- Datatable Function -->
        <script>
            $(document).ready(function () {
                $("#exam_subject").DataTable();
            });
        </script>
        <!-- JavaScript For Editing Data -->
        <script>
            edits = document.getElementsByClassName('edit');
            Array.from(edits).forEach((element)=>{
                element.addEventListener("click",(e)=>{
                    tr = e.target.parentNode.parentNode;
                    esm_id = tr.getElementsByTagName("td")[0].innerText;
                    exam_id = tr.getElementsByTagName("td")[1].innerText;
                    sds_id = tr.getElementsByTagName("td")[2].innerText;
                    written_dateOfExam = tr.getElementsByTagName("td")[3].innerText;
                    written_totalMarks = tr.getElementsByTagName("td")[4].innerText;
                    written_passingMarks = tr.getElementsByTagName("td")[5].innerText;
                    oral_dateOfExam = tr.getElementsByTagName("td")[6].innerText;
                    oral_totalMarks = tr.getElementsByTagName("td")[7].innerText;
                    oral_passingMarks = tr.getElementsByTagName("td")[8].innerText;
                    practical_dateOfExam = tr.getElementsByTagName("td")[9].innerText;
                    practical_totalMarks = tr.getElementsByTagName("td")[10].innerText;
                    practical_passingMarks = tr.getElementsByTagName("td")[11].innerText;
                    Exam_Subject_Marks_IDEdit.value = esm_id;
                    Exam_IDEdit.value = exam_id;
                    sds_IDEdit.value = sds_id;
                    Date_Of_Written_ExamEdit.value = written_dateOfExam;
                    Total_Marks_of_Written_ExamEdit.value = written_totalMarks;
                    Passing_Marks_of_Written_ExamEdit.value = written_passingMarks;
                    Date_Of_Oral_ExamEdit.value = oral_dateOfExam;
                    Total_Marks_of_Oral_ExamEdit.value = oral_totalMarks;
                    Passing_Marks_of_Oral_ExamEdit.value = oral_passingMarks;
                    Date_Of_Practical_ExamEdit.value = practical_dateOfExam;
                    Total_Marks_of_Practical_ExamEdit.value = practical_totalMarks;
                    Passing_Marks_of_Practical_ExamEdit.value = practical_passingMarks;
                })
            })
        </script>
        <script src="{{ asset('plugins/bootstrap-5.0.2-dist/js/bootstrap.min.js') }}"></script>
    </body>
</html>