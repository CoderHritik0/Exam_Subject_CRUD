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

        <link
            rel="stylesheet"
            href="{{ asset('dist/css/adminlte.min.css?v=3.2.0') }}"
        />

        <link
            rel="stylesheet"
            href="//cdn.datatables.net/1.12.0/css/jquery.dataTables.min.css"
        />
    </head>
    <body class="bg-secondary">
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
        <div class="card card-primary m-3">
            <div class="card-header mb-2">
                <h3 class="card-title">Database</h3>
            </div>
            <div class="card-body">
                <table id="exam_subject" class="table table-bordered table-hover text-center bg-light">
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
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
        <script
            src="https://code.jquery.com/jquery-3.6.0.min.js"
            integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
            crossorigin="anonymous"
        ></script>
        <script src="//cdn.datatables.net/1.12.0/js/jquery.dataTables.min.js"></script>
        <script>
            $(document).ready(function () {
                $("#exam_subject").DataTable();
            });
        </script>
    </body>
</html>