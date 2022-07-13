<!DOCTYPE html>
<html>
    <head>
        <script src="jquery.js"></script>
        <script>
            function(){
                document.getElementByTagClass("ds").setAttribute("type","text");
            }
        </script>

        <style>
            *{
                margin:0%;
                padding:0%;
            }
            .card{
                position:relative;
                display:flex;
                flex-direction:column;
                justify-content:center;
                align-items:center;
                min-width:100px;

            }
            .exact{
                position:relative;
                display:flex;
                flex-direction:column;

            }
            .unit{
                display:block;
                /* outline:solid 2px red; */
            }
            .unit label{
                display:block;
                /* outline:solid 1px green; */
                font-size:18px;
                color:dodgerblue;
            }
            .unit label:hover{
                color:green;
                font-size:16px;
            }
            .unit input{
                /* display:; */
                border:none;
                border-bottom: solid 2px dodgerblue;
                background-color:lightgray;
            }
        </style>
    </head>
    
    <body>
        <div class="card">
            <div class="upper">

            </div>
            <div class="exact">
                <form action="" method="post">
                    <div class="unit">
                        <label for="">Name</label>
                        <input type="text">
                    </div>
                   
                    <div class="unit">
                        <label for="">Company</label>
                        <input type="text">
                    </div>

                    <div class="unit">
                        <label for="">Mission</label>
                        <input type="text">
                    </div>

                    <div class="unit">
                        <label for="">Vision</label>
                        <input type="hidden">
                    </div>

                    <div class="unit">
                        <label for="">Objectives</label>
                        <input type="hidden" onClick="dis" class="ds">
                    </div>
                    
                </form>
            </div>
        </div>

    </body>
</html>