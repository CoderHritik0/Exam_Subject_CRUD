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
    </head>
    <body class="bg-secondary">
        <nav class="navbar navbar-expand-lg bg-light navbar-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">CRUD_APP</a>
                <button
                    class="navbar-toggler"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent"
                    aria-expanded="false"
                    aria-label="Toggle navigation"
                >
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div
                    class="collapse navbar-collapse"
                    id="navbarSupportedContent"
                >
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a
                                class="nav-link active"
                                aria-current="page"
                                href="/Crud"
                                >Home</a
                            >
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/Table">Table</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="card card-primary m-3 text-dark bg-light">
            <div class="card-header">
                <h3 class="card-title">CRUD Form for exam_subject table</h3>
            </div>

            <form class="form-horizontal" action="/Crud" method="POST">
                @csrf
                <div class="card-body">
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-3 col-form-label"
                            >Exam_Subject_Marks ID</label
                        >
                        <div class="col-sm-9">
                            <input
                                type="number"
                                min="0"
                                name="Exam_Subject_Marks_ID"
                                class="form-control"
                                placeholder="Enter Exam_Subject_Marks ID"
                                required
                            />
                        </div>
                    </div>
                    <div class="form-group row">
                        <label
                            for="inputPassword3"
                            class="col-sm-3 col-form-label"
                            >Exam ID</label
                        >
                        <div class="col-sm-9">
                            <input
                                type="number"
                                min="0"
                                class="form-control"
                                name="Exam_ID"
                                placeholder="Exam ID"
                                required
                            />
                        </div>
                    </div>
                    <div class="form-group row">
                        <label
                            for="inputPassword3"
                            class="col-sm-3 col-form-label"
                            >sds ID</label
                        >
                        <div class="col-sm-9">
                            <input
                                type="number"
                                min="0"
                                class="form-control"
                                name="sds_ID"
                                placeholder="sds ID"
                                required
                            />
                        </div>
                    </div>
                    <div class="form-group row">
                        <label
                            for="inputPassword3"
                            class="col-sm-3 col-form-label"
                            >Date Of Written Exam</label
                        >
                        <div class="col-sm-9">
                            <input
                                type="date"
                                class="form-control"
                                name="Date_Of_Written_Exam"
                            />
                        </div>
                    </div>
                    <div class="form-group row">
                        <label
                            for="inputPassword3"
                            class="col-sm-3 col-form-label"
                            >Total Marks of Written Exam</label
                        >
                        <div class="col-sm-9">
                            <input
                                type="number"
                                min="0"
                                max="9999"
                                class="form-control"
                                name="Total_Marks_of_Written_Exam"
                                placeholder="Total Marks of Written Exam"
                            />
                        </div>
                    </div>
                    <div class="form-group row">
                        <label
                            for="inputPassword3"
                            class="col-sm-3 col-form-label"
                            >Passing Marks of Written Exam</label
                        >
                        <div class="col-sm-9">
                            <input
                                type="number"
                                min="0"
                                max="9999"
                                class="form-control"
                                name="Passing_Marks_of_Written_Exam"
                                placeholder="Passing Marks of Written Exam"
                            />
                        </div>
                    </div>
                    <div class="form-group row">
                        <label
                            for="inputPassword3"
                            class="col-sm-3 col-form-label"
                            >Date Of Oral Exam</label
                        >
                        <div class="col-sm-9">
                            <input
                                type="date"
                                class="form-control"
                                name="Date_Of_Oral_Exam"
                            />
                        </div>
                    </div>
                    <div class="form-group row">
                        <label
                            for="inputPassword3"
                            class="col-sm-3 col-form-label"
                            >Total Marks of Oral Exam</label
                        >
                        <div class="col-sm-9">
                            <input
                                type="number"
                                min="0"
                                max="9999"
                                class="form-control"
                                name="Total_Marks_of_Oral_Exam"
                                placeholder="Total Marks of Oral Exam"
                            />
                        </div>
                    </div>
                    <div class="form-group row">
                        <label
                            for="inputPassword3"
                            class="col-sm-3 col-form-label"
                            >Passing Marks of Oral Exam</label
                        >
                        <div class="col-sm-9">
                            <input
                                type="number"
                                min="0"
                                max="9999"
                                class="form-control"
                                name="Passing_Marks_of_Oral_Exam"
                                placeholder="Passing Marks of Oral Exam"
                            />
                        </div>
                    </div>
                    <div class="form-group row">
                        <label
                            for="inputPassword3"
                            class="col-sm-3 col-form-label"
                            >Date Of Practical Exam</label
                        >
                        <div class="col-sm-9">
                            <input
                                type="date"
                                class="form-control"
                                name="Date_Of_Practical_Exam"
                            />
                        </div>
                    </div>
                    <div class="form-group row">
                        <label
                            for="inputPassword3"
                            class="col-sm-3 col-form-label"
                            >Total Marks of Practical Exam</label
                        >
                        <div class="col-sm-9">
                            <input
                                type="number"
                                min="0"
                                max="9999"
                                class="form-control"
                                name="Total_Marks_of_Practical_Exam"
                                placeholder="Total Marks of Practical Exam"
                            />
                        </div>
                    </div>
                    <div class="form-group row">
                        <label
                            for="inputPassword3"
                            class="col-sm-3 col-form-label"
                            >Passing Marks of Practical Exam</label
                        >
                        <div class="col-sm-9">
                            <input
                                type="number"
                                min="0"
                                max="9999"
                                class="form-control"
                                name="Passing_Marks_of_Practical_Exam"
                                placeholder="Passing Marks of Practical Exam"
                            />
                        </div>
                    </div>
                </div>

                <div class="card-footer">
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <button type="submit" class="btn btn-outline-primary">
                            Add Data
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </body>
</html>