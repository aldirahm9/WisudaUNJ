<!doctype html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Bukti Pendaftaran</title>

    <style>
    .invoice-box {
        max-width: 800px;
        margin: auto;
        padding: 30px;
        border: 1px solid #eee;
        box-shadow: 0 0 10px rgba(0, 0, 0, .15);
        font-size: 16px;
        line-height: 24px;
        font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
        color: #555;
    }

    .invoice-box table {
        width: 100%;
        line-height: inherit;
        text-align: left;
    }

    .invoice-box table td {
        padding: 5px;
        vertical-align: top;
    }

    .invoice-box table tr td:nth-child(2) {
        text-align: right;
    }

    .invoice-box table tr.top table td {
        padding-bottom: 20px;
    }

    .invoice-box table tr.top table td.title {
        font-size: 45px;
        line-height: 45px;
        color: #333;
    }

    .invoice-box table tr.information table td {
        padding-bottom: 40px;
    }

    .invoice-box table tr.heading td {
        background: #eee;
        border-bottom: 1px solid #ddd;
        font-weight: bold;
    }

    .invoice-box table tr.details td {
        padding-bottom: 20px;
    }

    .invoice-box table tr.item td{
        border-bottom: 1px solid #eee;
    }

    .invoice-box table tr.item.last td {
        border-bottom: none;
    }

    .invoice-box table tr.total td:nth-child(2) {
        border-top: 2px solid #eee;
        font-weight: bold;
    }

    @media only screen and (max-width: 600px) {
        .invoice-box table tr.top table td {
            width: 100%;
            display: block;
            text-align: center;
        }

        .invoice-box table tr.information table td {
            width: 100%;
            display: block;
            text-align: center;
        }
    }

    /** RTL **/
    .rtl {
        direction: rtl;
        font-family: Tahoma, 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
    }

    .rtl table {
        text-align: right;
    }

    .rtl table tr td:nth-child(2) {
        text-align: left;
    }
    </style>
</head>

<body>
    <div class="invoice-box">
        <table cellpadding="0" cellspacing="0">
            <tr class="top">
                <td colspan="2">
                    <table>
                        <tr>
                            <td class="title" >
                                <img src="{{asset('logounj.png')}}" style="width:100%; max-width:100px;vertical-align: middle">
                                <span style="vertical-align: middle">Wisuda Digital UNJ</span>
                            </td>
                            <td><b><u>
                                #WisudaUNJ2020<br>
                                #WisudaBarengUNJ<br>
                                #WisudaDigitalUNJ
                                </u></b>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>

            <tr class="information">
                <td colspan="2">
                    <table>
                        <tr>
                            <td>
                                Kampus A, Universitas Negeri Jakarta<br>
                                Rawamangun Muka<br>
                                Jakarta Timur
                            </td>

                            <td>
                                Senin, 21/10/2020<br>
                                {{-- John Doe<br>
                                john@example.com --}}
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>

            <tr class="heading">
                <td>
                    Bukti Pendaftaran
                </td>

                <td>
                    {{-- Check # --}}
                </td>
            </tr>

            <tr class="item">
                <td>
                    Nama Mahasiswa
                </td>

                <td>
                    Aldi Rahmansyah
                </td>
            </tr>

            {{-- <tr class="heading">
                <td>
                    Item
                </td>

                <td>
                    Price
                </td>
            </tr> --}}

            <tr class="item">
                <td>
                    Nomor Registrasi
                </td>

                <td>
                    3145161324
                </td>
            </tr>

            <tr class="item">
                <td>
                    Fakultas
                </td>

                <td>
                    FMIPA
                </td>
            </tr>

            <tr class="item">
                <td>
                    Kode Unik
                </td>

                <td>
                    <strong>lorem ipsum</strong>
                </td>
            </tr>
        </table>


    </div>
</body>
</html>
