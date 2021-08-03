<!DOCTYPE html>
<html lang="zh-tw">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>翻譯DB</title>
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

    </script>
</head>

<body>
    將以下內容貼至翻譯器
    <br>推薦以下翻譯(繁中2)
    <br>
    https://zhcnt.ilovetranslation.com/
    <div id="show">

    </div>
    將翻譯的結果貼進此區域，並送出
    <textarea name="mytext" id="mytext" cols="30" rows="10"></textarea>
    <button onclick="savedb()">儲存翻譯結果</button>

    <script>
        var contentString = '';
        $.ajax({
            type: "POST",
            url: 'fromdb',
            success: function(d) {
                d.forEach((el, k) => {
                    if (d.length > (k + 1)) {
                        contentString += '<span>' + el.id + ':' + el.title_en + ',</span>';
                    } else {
                        contentString += '<span>' + el.id + ':' + el.title_en + '</span>';
                    }
                });
                $('#show').html(contentString)
            }
        });

        function savedb() {
            var mo = $('#mytext').val().trim().split(/，|,/);

            $(mo).each((k, el) => {
                el = el.split(/：|:/);
                if(el[1]){
                $.ajax({
                    type: "POST",
                    url: 'savedb',
                    data: {
                        k: el[0],
                        v: el[1]
                    },
                    success: function(d) {
                        console.log(el);
                    }
                });
                }
            })
        }

    </script>
</body>

</html>
