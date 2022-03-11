<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        google.charts.load('current', {
            'packages': ['corechart']
        });
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {

            var data = google.visualization.arrayToDataTable([
                ['Task', 'Hours per Day'],
                ['ดีมาก', {{ $data_per_it1_5 }}],
                ['ดี', {{ $data_per_it1_4 }}],
                ['ปลานกลาง', {{ $data_per_it1_3 }}],
                ['น้อย', {{ $data_per_it1_2 }}],
                ['น้อยที่สุด', {{ $data_per_it1_1 }}]
            ]);

            var options = {
                title: ''
            };

            var chart = new google.visualization.PieChart(document.getElementById('piechart'));

            chart.draw(data, options);
        }
    </script>

    <script type="text/javascript">
        google.charts.load("current", {
            packages: ["corechart"]
        });
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {
            var data = google.visualization.arrayToDataTable([
                ['Task', 'Hours per Day'],
                ['ดีมาก', {{ $data_per_it2_5 }}],
                ['ดี', {{ $data_per_it2_4 }}],
                ['ปลานกลาง', {{ $data_per_it2_3 }}],
                ['น้อย', {{ $data_per_it2_2 }}],
                ['น้อยที่สุด', {{ $data_per_it2_1 }}]
            ]);

            var options = {
                title: '',
                pieHole: 0.4,
            };

            var chart = new google.visualization.PieChart(document.getElementById('donutchart'));
            chart.draw(data, options);
        }
    </script>


</head>

<body
    background="https://img.pikbest.com/backgrounds/20190326/simple-hospital-treatment-medical-system-information-technology-poster-background_1881710.jpg!w340">

    <div class="container">

        <div class="content mt-3">
            <div class="card">
                <div class="card-header bg-white shadow">
                    <nav class="navbar navbar-expand-lg navbar-light bg-white ">
                        <div class="container-fluid">
                            <a class="navbar-brand" href="/">IT 61</a>
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
                    @if (session()->has('success'))
                        <div class="alert alert-success">
                            {{ session()->get('success') }}
                        </div>
                    @endif
                    <h3>รายงานผลการประเมิน</h1>
                        <a href="{{ route('reset') }}" class="btn btn-outline-info">ล้างข้อมูล</a>
                </div>
                <hr>
                <div class="card-body ">



                    <h5><strong>ด้านเกี่ยวกับสาขาเทคโนโลยีสารสนเทศ</strong></h5>
                    <div class="row mb-3 card p-3">
                        <h6> 1.ความยากในการเรียนสาขาเทคโนโลยีสารสนเทศ</h6>
                        <div id="piechart" style="width: 900px; height: 500px;"></div>



                    </div>

                    <div class="row mb-3 card p-3">
                        <h6> 2.คุณภาพของห้องเเลปเเละอุปกรณ์การเรียน</h6>
                        <div id="donutchart" style="width: 900px; height: 500px;"></div>

                    </div>



                </div>
                <div class="card-body ">
                    <h5><strong>ความคิดเห็นเกี่ยวกับการเรียน ม.ราชภัฏพิบูลสงคราม สาขาไอที ทั้งหมด</strong></h5>
                    <hr>
                    <div class="row mb-3 shadow p-3">
                        <h5> ความคิดเห็น</h5>

                        <p>
                            @if (empty($data_learn_it->detail_learn_it))
                                ไม่มีข้อมูล
                            @else
                                {{ $data_learn_it->detail_learn_it }}
                            @endif
                        </p>
                        <a href="{{ route('detail_learn_it') }}" class="btn btn-outline-primary"><svg
                                xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-eye-fill" viewBox="0 0 16 16">
                                <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z" />
                                <path
                                    d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z" />
                            </svg> ดูทั้งหมด</a>


                    </div>

                </div>

                <div class="card-body ">
                    <h5><strong>ข้อเสนอเเนะเกี่ยวกับสาขาวิชา</strong></h5>
                    <hr>
                    <div class="row mb-3 shadow p-3">
                        <h5> ความคิดเห็น </h5>

                        <p>

                            @if (empty($data_introduce_it->introduce_it))
                                ไม่มีข้อมูล
                            @else
                                {{ $data_introduce_it->introduce_it }}
                            @endif
                        </p>
                        <a href="{{ route('introduce_it') }}" class="btn btn-outline-primary"><svg
                                xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-eye-fill" viewBox="0 0 16 16">
                                <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z" />
                                <path
                                    d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z" />
                            </svg> ดูทั้งหมด</a>


                    </div>

                </div>

                <div class="card-body ">
                    <h5><strong>อาชีพในอนาคต</strong></h5>
                    <hr>
                    <div class="row mb-3 shadow p-3">
                        <h5> ความคิดเห็น</h5>

                        <p>

                            @if (empty($data_future_career->future_career))
                                ไม่มีข้อมูล
                            @else
                                {{ $data_future_career->future_career }}
                            @endif
                        </p>

                        <a href="{{ route('future_career') }}" class="btn btn-outline-primary"><svg
                                xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-eye-fill" viewBox="0 0 16 16">
                                <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z" />
                                <path
                                    d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z" />
                            </svg> ดูทั้งหมด</a>
                    </div>


                </div>

                <div class="card-body ">
                    <h5><strong>นักศึกษามีความคิดเห็นอย่างไร เกี่ยวกับ การเรียนช่วง โควิด 19</strong></h5>
                    <hr>
                    <div class="row mb-3 shadow p-3">
                        <h5> ความคิดเห็น</h5>

                        <p>


                            @if (empty($data_comment_covid->comment_covid))
                                ไม่มีข้อมูล
                            @else
                                {{ $data_comment_covid->comment_covid }}
                            @endif
                        </p>

                        <a href="{{ route('comment_covid') }}" class="btn btn-outline-primary"> <svg
                                xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-eye-fill" viewBox="0 0 16 16">
                                <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z" />
                                <path
                                    d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z" />
                            </svg> ดูทั้งหมด</a>

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
