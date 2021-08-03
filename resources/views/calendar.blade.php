<!DOCTYPE html>
<html lang="zh-tw">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>小日曆</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body>
    <div class="container">

        <div class="row">
            <div class="col-md-8">
                hehlo
            </div>
            <div class="col-md-4">
                <div class="row">
                    <div class="col-1">
                        日
                    </div>
                    <div class="col-1">
                        一
                    </div>
                    <div class="col-1">
                        二
                    </div>
                    <div class="col-1">
                        三
                    </div>
                    <div class="col-1">
                        四
                    </div>
                    <div class="col-1">
                        五
                    </div>
                    <div class="col-1">
                        六
                    </div>
                </div>
                <div class="row">
                    <div class="col-1">

                    </div>
                    <div class="col-1">

                    </div>
                    <div class="col-1">
                        1
                    </div>
                    <div class="col-1">
                        2
                    </div>
                    <div class="col-1">
                        3
                    </div>
                    <div class="col-1">
                        4
                    </div>
                    <div class="col-1">
                        5
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4" id="mycontent"></div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
        </script>
        <script>
            var item = `<div class='row'><div class='col-xs-3'>日</div><div class='col-xs-1'>一</div><div class='col-xs-1'>二</div><div class='col-xs-1'>三</div><div class='col-xs-1'>四</div><div class='col-xs-1'>五</div><div class='col-xs-3'>六</div></div>`;
            // var item = '';
            for (let i = 1; i < 31; i++) {
                if (i % 7 === 1) {
                    item += `<div class='row'><div class='col-xs-3'>${i}</div>`;
                }
                else if(i % 7 === 0){
                    item += `<div class='col-xs-3'>${i}</div></div>`;
                }
                else{
                item += `<div class='col-xs-1'>${i}</div>`;
                }
            }
            console.log(item)
            document.getElementById('mycontent').innerHTML = item;
        </script>
</body>

</html>
