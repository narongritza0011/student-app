<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <style>


    </style>
</head>

<body
    background="https://img.pikbest.com/backgrounds/20190326/simple-hospital-treatment-medical-system-information-technology-poster-background_1881710.jpg!w340">

    <div class="container">

        <div class="content mt-3">
            <div class="card">
                <div class="card-header bg-white shadow">
                    <nav class="navbar navbar-expand-lg navbar-light bg-white ">
                        <div class="container-fluid">
                            <a class="navbar-brand" href="/">Navbar</a>
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <ul class="navbar-nav me-auto mb-2 mb-lg-0">


                                    <li class="nav-item">
                                        <a class="nav-link active " href="/" tabindex="-1">หน้าหลัก</a>
                                    </li>
                                </ul>
                                <div class="d-flex">
                                    <a class="btn btn-outline-primary shadow" href="{{ url('/report') }}"
                                        type="submit"> <span class="text-center"><svg
                                                xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="currentColor" class="bi bi-house-door-fill" viewBox="0 0 16 16">
                                                <path
                                                    d="M6.5 14.5v-3.505c0-.245.25-.495.5-.495h2c.25 0 .5.25.5.5v3.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5z" />
                                            </svg> ดูรายงาน</span></a>
                                </div>
                            </div>
                        </div>
                    </nav>
                </div>

                <div class="p-3 mt-5">
                    <h3>รายงานผลการประเมิน</h1>
                </div>
                <hr>

                <div class="card-body ">
                    <h5>ความคิดเห็นเกี่ยวกับการเรียน ม.ราชภัฏพิบูลสงคราม สาขาไอที ทั้งหมด</h5>
                    <hr>
                    @foreach ($data as $row)
                        <div class="row mb-3 card p-3">
                            <h4> ความคิดเห็น</h4>

                            <p>
                                {{ $row->detail_learn_it }}
                            </p>
                        </div>
                    @endforeach

                </div>

            </div>






        </div>
    </div>




    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
</body>

</html>
