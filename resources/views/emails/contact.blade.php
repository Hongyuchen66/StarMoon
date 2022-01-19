<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        table {
            margin: 0 auto;
            border-collapse: collapse;
            border: 1px solid black;
        }

        td,
        th {
            border: 1px solid black;
            text-align: center;
            vertical-align: center;
            min-width: 100px;
        }
    </style>
</head>

<body>
    <table>

        <td align="left" style="font-size:0px;padding:10px 25px;word-break:break-word;">
            <div style="font-family:helvetica;font-size:20px;line-height:1;text-align:left;color:#F45E43;">管理者 您好，以下是來自網站使用者的訊息！</div>
        </td>
    </table>

    <table>
        <tr>
            <td>姓名</td>
            <td>{{$contact->name}}</td>
        </tr>
        <tr>
            <td>電話</td>
            <td>{{$contact->phone}}</td>
        </tr>
        <tr>
            <td>信箱</td>
            <td>{{$contact->email}}</td>
        </tr>
        <tr>
            <td>內容</td>
            <td>{{$contact->content}}</td>
        </tr>
    </table>
    <!-- <mjml>
        <mj-body>
            <mj-section>
                <mj-column>
                    <mj-image width="100px" src="https://mjml.io/assets/img/logo-small.png"></mj-image>
                    <mj-divider border-color="#F45E43"></mj-divider>
                    <mj-text font-size="20px" color="#F45E43" font-family="helvetica">管理者 您好，以下是來自網站使用者的訊息！</mj-text>
                    <table>
                        <tr>
                            <td>姓名</td>
                            <td>{{$contact->name}}</td>
                        </tr>
                        <tr>
                            <td>電話</td>
                            <td>{{$contact->phone}}</td>
                        </tr>
                        <tr>
                            <td>信箱</td>
                            <td>{{$contact->email}}</td>
                        </tr>
                        <tr>
                            <td>內容</td>
                            <td>{{$contact->content}}</td>
                        </tr>
                    </table>
                </mj-column>
            </mj-section>
        </mj-body>
    </mjml> -->
</body>

</html>