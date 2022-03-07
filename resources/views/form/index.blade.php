<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fino Tech form</title>
    <!-- Bootstrap css-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <!-- Bootstrap js-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

</head>

<body dir="rtl">
    <div class="row row-sm">
        <div class="col-lg-12 col-md-12">
            <div class="card custom-card">
                <div class="card-body">
                    <div>
                        <h6 class="main-content-label mb-1">مقادیر خواسته شده را وارد کنید</h6>
                    </div>
                </div>
                <form
                    action="https://apibeta.finnotech.ir/{{env('APP_URL_CallBack')}}/oak/v2/clients/1/transferTo?trackId=12321"
                    method="post">
                    <div class="card-body">
                        <input type="hidden" name="sourceFirstName" value="{{ Auth::user()->name }}">
                        <input type="hidden" name="sourceLastName" value="{{ Auth::user()->name }}">
                        <input type="hidden" name="description" value="شرح تراکنش">
                        <div class="form-group">
                            <label for=""> مقدار پول به تومان</label>
                            <input type="number" name="paymentNumber" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="">نام کاربر مقصد را وارد کنید</label>
                            <input type="text" class="form-control" name="destinationLastname" required>
                        </div>
                        <div class="form-group">
                            <label for="">شماره شبا کارت مقصد</label>
                            <input type="text" class="form-control" placeholder=" مثال :IR120620000000302876732005" name="destinationNumber" required>
                        </div>
                        <br>
                        <input type="submit" value='ارسال' class='btn btn-success'>
                    </div>
                </form>
            </div>
        </div>
    </div>

</body>

</html>
