@extends('system_layouts.master_sys')
@section('icerik')
    <div class="page-wrapper">
        <div class="page-body">
            <div class="row">
                <html>
                <head></head>
                <body onload="InitThis();">
                <script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
                <script type="text/javascript" src="JsCode.js"></script>
                <div align="center">
                    <canvas id="myCanvas" width="800" height="300"  style="border:2px solid black"></canvas>
                    <br /><br />
                    <button onclick="javascript:clearArea();return false;">Clear Area</button>
                    Line width : <select id="selWidth">
                        <option value="1">1</option>
                        <option value="3">3</option>
                        <option value="5">5</option>
                        <option value="7">7</option>
                        <option value="9" selected="selected">9</option>
                        <option value="11">11</option>
                    </select>
                    Color : <select id="selColor">
                        <option value="black">black</option>
                        <option value="blue" selected="selected">blue</option>
                        <option value="red">red</option>
                        <option value="green">green</option>
                        <option value="yellow">yellow</option>
                        <option value="gray">gray</option>
                    </select>
                </div>
                </body>
                </html>
            </div>
            <div class="row">
                <input type="button" class="btn btn-sm btn-primary" value="List All Data" id="GetUsers">
                <div class="clearfix"></div>
                <table class="table">
                    <thead>
                    <tr>
                        <th>Ad</th>
                        <th>Soyad</th>
                        <th>Email</th>
                    </tr>
                    </thead>
                    <tbody id="users">
        
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function () {
     
     });
    </script>
    
    <script>
        var mousePressed = false;
        var lastX, lastY;
        var ctx;

        function InitThis() {
            ctx = document.getElementById('myCanvas').getContext("2d");

            $('#myCanvas').mousedown(function (e) {
                mousePressed = true;
                Draw(e.pageX - $(this).offset().left, e.pageY - $(this).offset().top, false);
            });

            $('#myCanvas').mousemove(function (e) {
                if (mousePressed) {
                    Draw(e.pageX - $(this).offset().left, e.pageY - $(this).offset().top, true);
                }
            });

            $('#myCanvas').mouseup(function (e) {
                mousePressed = false;
            });
            $('#myCanvas').mouseleave(function (e) {
                mousePressed = false;
            });
        }

        function Draw(x, y, isDown) {
            if (isDown) {
                ctx.beginPath();
                ctx.strokeStyle = $('#selColor').val();
                ctx.lineWidth = $('#selWidth').val();
                ctx.lineJoin = "round";
                ctx.moveTo(lastX, lastY);
                ctx.lineTo(x, y);
                ctx.closePath();
                ctx.stroke();
            }
            lastX = x; lastY = y;
        }

        function clearArea() {
            // Use the identity matrix while clearing the canvas
            ctx.setTransform(1, 0, 0, 1, 0, 0);
            ctx.clearRect(0, 0, ctx.canvas.width, ctx.canvas.height);
        }
    </script>

    <script type="text/javascript">
        $(document).ready(function () {
            $('#GetUsers').click(function () {

                const http=new XMLHttpRequest();
                http.open('GET',"{{url('veri')}}",true);
                http.onload=function(){
                    if(this.status===200){
                        //console.log(this.responseText);
                        
                       // console.log(JSON.parse(this.responseText));
                        let  datam=JSON.parse(this.responseText);
                        let verim;
                        datam.forEach(element=> {
                            verim += '<tr>' +
                                        '<td>'+ element.name +'</td>' +
                                        '<td>'+ element.surname +'</td>' +
                                        '<td>'+ element.email +'</td>' +
                                     '</tr>';
                        });
                        //alert(datam.email);
                        //document.querySelector('#employees').innerHTML=verim;
                        $('#users').html(verim);
                    }
                };
                http.send();
            }) ;
        })
        //document.querySelector('#getEmployee').addEventListener('click', loadEmployee());
        </script>
    @endsection
