<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>one</title>
    <link rel="stylesheet" href="{{ asset('css/one.css') }}">

    <style>
        @font-face {
            font-family: 'Shabnam';
            src: url('{{ asset('font/shabnam/Shabnam.woff2') }}') format('woff2');
        }

        body {
            font-family: 'shabnam', sans-serif;
        }

        #massage {
            resize: none;
        }
    </style>

</head>

<body style="background-color: #C4E1E6; " dir="rtl">

    <h1 class="text-center mt-5">HBI</h1>
    <div class="container">
        <form action="{{ route('form') }}" method="POST" class=" px-5 py-4 card shadow bg-white border-0 rounded-4 mt-3 text-secondary"
            style=" margin: 0 auto; width: 444px;">
            @csrf
            <h4>دریافت اطلاعات</h4>
            <p class="mb-2">اطلاعات خود را وارد کنید</p>
            <hr>

            <label for="name" class="mb-2" style="font-size : 14px">نام</label>
            <input type="text" class="form-control bg-light" id="name" name="name" required>

            <label for="phone" class="mb-2 mt-2" style="font-size : 14px">شماره تماس</label>
            <input type="text" class="form-control bg-light" id="phone" name="phone" required>

            <label for="massage" class="mb-2 mt-2" style="font-size : 14px">پیام</label>
            <textarea type="text" class="form-control bg-light" id="massage" name="massage" required rows="5"></textarea>

            <div class="form-check mt-3">
                <input id="checkbox1" type="checkbox" class="form-check-input rounded-pill bg-info" required>
                <label for="checkbox1" class="form-check-lable d-block " style="font-size:14px;">ورود / ثبت نام شما به
                    معنای پذیرش <a href="#"> قوانین</a> میباشد </label>
            </div>
            <button type="submit" class="w-100 btn btn-primary mt-3">ادامه
    </button>
        </form>
    </div>
    <span style="font-size:12px" class="text-center d-block mt-3 text-secondary">همه حقوق برای HBI محفوظ است</span>

    <script src="{{ asset('js/one.js') }}"></script>
</body>

</html> 
<!-- <!DOCTYPE html>
<html>
<head>
    <title>فرم ساده</title>
</head>
<body>
    <h1>ارسال اطلاعات</h1>

    <form action="{{ route('form') }}" method="POST">
        @csrf
        <label>نام:</label>
        <input type="text" name="name" required><br><br>

        <label>شماره تماس:</label>
        <input type="text" name="phone" required><br><br>

        <label>پیام:</label>
        <textarea name="message" required></textarea><br><br>

        <button type="submit">ارسال</button>
    </form>
</body>
</html> -->