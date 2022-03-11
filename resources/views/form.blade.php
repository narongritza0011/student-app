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
                @if (session()->has('success'))
                    <div class="alert alert-success">
                        {{ session()->get('success') }}
                    </div>
                @endif

                @if (session()->has('error'))
                    <div class="alert alert-danger">
                        {{ session()->get('error') }}
                    </div>
                @endif
                <div class="">
                    <div class="mb-5 mt-5 text-center">
                        <h3>เเบบประเมินความคิดเห็นของนักศึกษาสาขาเทคโนโลยีสารสนเทศ ปี 61 <br>
                            คณะวิทยาศาสตร์ มหาลัยราชภัฏพิบูลสงคราม</h3>
                    </div>
                    <hr>
                    <form action="{{ route('add.data') }}" method="post">
                        @csrf
                        <div class="card-body m-3 shadow-sm">

                            <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0"
                                class=" p-2 ">
                                <tr>
                                    <td width="75%" rowspan="2" align="center"><strong>รายการ</strong></td>
                                    <td colspan="5" align="center"><strong>ระดับความคิดเห็น</strong></td>
                                </tr>
                                <tr>
                                    <td width="5%" align="center"><strong>ดีมาก</strong></td>
                                    <td width="5%" align="center"><strong>ดี</strong></td>
                                    <td width="5%" align="center"><strong>ปานกลาง</strong></td>
                                    <td width="5%" align="center"><strong>น้อย</strong></td>
                                    <td width="5%" align="center"><strong>น้อยที่สุด</strong></td>
                                </tr>
                                <tr>
                                    <td height="30" colspan="6" bgcolor="#F4F4F4">
                                        <strong>ด้านเกี่ยวกับสาขาเทคโนโลยีสารสนเทศ</strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td height="30">&nbsp; 1.ความยากในการเรียนสาขาเทคโนโลยีสารสนเทศ</td>

                                    <td height="30" align="center"><input type="radio" name="it1" value="5"
                                            required="required" /></td>
                                    <td height="30" align="center"><input type="radio" name="it1" value="4" /></td>
                                    <td height="30" align="center"><input type="radio" name="it1" value="3" /></td>
                                    <td height="30" align="center"><input type="radio" name="it1" value="2" /></td>
                                    <td height="30" align="center"><input type="radio" name="it1" value="1" /></td>
                                </tr>
                                <tr>
                                    <td height="30">&nbsp; 2.คุณภาพของห้องเเลปเเละอุปกรณ์การเรียน</td>

                                    <td width="5%" height="30" align="center"><input type="radio" name="it2" value="5"
                                            required="required" /></td>
                                    <td width="5%" height="30" align="center"><input type="radio" name="it2"
                                            value="4" />
                                    </td>
                                    <td width="5%" height="30" align="center"><input type="radio" name="it2"
                                            value="3" />
                                    </td>
                                    <td width="5%" height="30" align="center"><input type="radio" name="it2"
                                            value="2" />
                                    </td>
                                    <td width="5%" height="30" align="center"><input type="radio" name="it2"
                                            value="1" />
                                    </td>
                                </tr>


                            </table>
                        </div>
                </div>
                <div class="card-body ">

                    <div class="mb-3 ">
                        <label class="form-label">ความคิดเห็นเกี่ยวกับการเรียน
                            ม.ราชภัฏพิบูลสงคราม สาขาไอที </label>
                        <textarea class="form-control shadow-sm" rows="3" name="detail_learn_it"></textarea>
                        @error('detail_learn_it')
                            <div class="my-2">
                                <span class="text-danger">{{ $message }}</span>
                            </div>
                        @enderror
                    </div>


                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1"
                            class="form-label">ข้อเสนอเเนะเกี่ยวกับสาขาวิชา</label>
                        <textarea class="form-control shadow-sm" rows="3" name="introduce_it"></textarea>
                        @error('introduce_it')
                            <div class="my-2">
                                <span class="text-danger">{{ $message }}</span>
                            </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label">อาชีพในอนาคต</label>
                        <textarea class="form-control shadow-sm " rows="3" name="future_career"></textarea>
                        @error('future_career')
                            <div class="my-2">
                                <span class="text-danger">{{ $message }}</span>
                            </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label">นักศึกษามีความคิดเห็นอย่างไร
                            เกี่ยวกับ การเรียนช่วง โควิด 19</label>
                        <textarea class="form-control shadow-sm" rows="3" name="comment_covid"></textarea>
                        @error('comment_covid')
                            <div class="my-2">
                                <span class="text-danger">{{ $message }}</span>
                            </div>
                        @enderror
                    </div>
                </div>
                <button type="submit" class="btn btn-outline-success mt-3 mb-1 ">บันทึกข้อมูล</button>
            </div>



            </form>
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
