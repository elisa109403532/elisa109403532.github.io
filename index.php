<!DOCTYPE html>
<html>
    <head>
        <title>ELISA'S INTRODUCTION</title>
        <link rel="stylesheet" href="mystyle.css">
        <meta name="author" content="余采庭">
        <meta name="description" content="109403532">
        <meta charset="utf-8">
        <script>onload = showmsg();
                function showmsg(){
                    alert('確定觀看ELISA的個人資料?');
                }
        </script>
    </head>
    <body>
        <?php
             echo '<p>Hello, World!</p>';
        ?>
        <button onclick="myFunction()">Change Mode</button>
        <div id="rainbow">
            Elisa's personal instroduction
        </div>
        <table border="1">
            <tbody>
            <tr>
                <th colspan="2"><img src = "instro1.jpg" alt="我的照片" width="200" height="200"><h6>This is my profile</h6></th>
            </tr>
            <tr>
                <th align="left">Name</th>
                <td>Elisa Yu</td>
            </tr>
            <tr>
                <th align="left">Gender</th>
                <td>G</td>
            </tr>
            <tr>
                <th align="left">Phone number</th>
                <td>
                    <ul>
                        <li>Home number:(03)9885-0145</li>
                        <li>Personal number:0956825859</li>
                        <li>Company number:(02)9856-7854</li>
                    </ul>
                </td>
            </tr>
            <tr>
                <th align="left">Address</th>
                <td>
                    新北市板橋區大同街龍翠里
                    <a href="https://www.google.com.tw/maps/place/220%E6%96%B0%E5%8C%97%E5%B8%82%E6%9D%BF%E6%A9%8B%E5%8D%80%E5%A4%A7%E5%90%8C%E8%A1%97/@25.0274849,121.4762653,17z/data=!3m1!4b1!4m5!3m4!1s0x3442a847ca04a565:0x6d0b3a6c3ef0b949!8m2!3d25.0274849!4d121.478454?hl=zh-TW">在google map開啟</a>
                </td>
            </tr>
            <tr>
                <th align="left">Education</th>
                <td>
                    <ol>
                        <li>文聖國民小學</li>
                        <li>裕德雙語學校</li>
                        <li>國立臺灣師範大學附屬高級中學</li>
                        <li>國立中央大學資管系</li>
                    </ol>
                </td>
            </tr>
        </tbody>
        </table>
    </body>
    <script src="./myscript.js"></script>
</html>