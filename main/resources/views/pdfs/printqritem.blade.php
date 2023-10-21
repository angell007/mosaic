<!DOCTYPE html>
<html>

<head>

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

    <title>Templete</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <style type="text/css">
        div.noticia {
            text-align: center !important;
            width: 6rem;
            box-sizing: border-box;
            box-sizing: content-box;
        }

        div.noticia2 {
            text-align: center !important;
            width: 5.8rem;
            box-sizing: border-box;
            box-sizing: content-box;
        }

        p {

            width: 90px;
            font-size: 1rem;
            font-family: Arial, Helvetica, sans-serif;
            white-space: nowrap;
            overflow: hidden;
            margin-top: 0.1px;
        }

        .overflow-visible {
            white-space: initial;
        }

        div.noticia img.derecha {
            margin: -5px 0 !important;
        }

        table {
            border-collapse: collapse;
        }

        td {
            border-top: 20px solid rgb(255, 255, 255);
            padding: 0px;
        }

        .spacetd1 {
            border-top: 30px solid rgb(255, 255, 255);
            padding: 0px;
        }

        .spacetd2 {
            border-top: 30px solid rgb(255, 255, 255);
            padding: 0px;
        }

        .spacetd3 {
            border-top: 30px solid rgb(255, 255, 255);
            padding: 0px;
        }

        .spacetd4 {
            border-top: 23px solid rgb(255, 255, 255);
            padding: 0px;
        }

        .spacetd5 {
            border-top: 26px solid rgb(255, 255, 255);
            padding: 0px;
        }

        .spacetd6 {
            border-top: 26px solid rgb(255, 255, 255);
            padding: 0px;
        }

        .spacetd7 {
            border-top: 25px solid rgb(255, 255, 255);
            padding: 0px;
        }

        .spacetd8 {
            border-top: 26px solid rgb(255, 255, 255);
            padding: 0px;
        }
    </style>

</head>



<body width="100%"
    style="margin: 1.8px 0 0 0; padding: 0; font-size: 0.9rem; line-height: 0.5rem; font-family: Arial, Helvetica, sans-serif;">

    <table width="100% ">

        <tbody>

            {{-- 1 --}}

            <tr>

                <td style="vertical-align: top; height: 90px !important; ">

                    <div class="noticia">

                        <img class="derecha" width="90px" src="{{ asset('/imgs/items/' . $elemetn->qr . '.png') }}"
                            alt="">

                        <p class="overflow-visible"
                            style=" font-size: 0.5rem; font-family: Arial, Helvetica, sans-serif;">
                            {{ $elemetn->name }}
                        </p>

                    </div>

                </td>

                <td style="vertical-align: top; height: 90px !important; ">

                    <div class="noticia">

                        <img class="derecha" width="90px" src="{{ asset('/imgs/items/' . $elemetn->qr . '.png') }}"
                            alt="">

                        <p class="overflow-visible"
                            style=" font-size: 0.5rem; font-family: Arial, Helvetica, sans-serif;">
                            {{ $elemetn->name }}
                        </p>

                    </div>

                </td>

                <td style="vertical-align: top; height: 90px !important; ">

                    <div class="noticia">

                        <img class="derecha" width="90px" src="{{ asset('/imgs/items/' . $elemetn->qr . '.png') }}"
                            alt="">

                        <p class="overflow-visible"
                            style=" font-size: 0.5rem; font-family: Arial, Helvetica, sans-serif;">
                            {{ $elemetn->name }}
                        </p>

                    </div>

                </td>

                <td style="vertical-align: top; height: 90px !important; ">

                    <div class="noticia">

                        <img class="derecha" width="90px" src="{{ asset('/imgs/items/' . $elemetn->qr . '.png') }}"
                            alt="">
                        <p class="overflow-visible"
                            style=" font-size: 0.5rem; font-family: Arial, Helvetica, sans-serif;">
                            {{ $elemetn->name }}
                        </p>

                    </div>

                </td>

                <td style="vertical-align: top; height: 90px !important; ">

                    <div class="noticia">

                        <img class="derecha" width="90px" src="{{ asset('/imgs/items/' . $elemetn->qr . '.png') }}"
                            alt="">
                        <p class="overflow-visible"
                            style=" font-size: 0.5rem; font-family: Arial, Helvetica, sans-serif;">
                            {{ $elemetn->name }}
                        </p>

                    </div>

                </td>

                <td style="vertical-align: top; height: 90px !important; ">

                    <div class="noticia">

                        <img class="derecha" width="90px" src="{{ asset('/imgs/items/' . $elemetn->qr . '.png') }}"
                            alt="">
                        <p class="overflow-visible"
                            style=" font-size: 0.5rem; font-family: Arial, Helvetica, sans-serif;">
                            {{ $elemetn->name }}
                        </p>

                    </div>

                </td>

            </tr>
            {{-- 2 --}}

            <tr>
                <td style="vertical-align: top; height: 90px !important; ">

                    <div class="noticia">

                        <img class="derecha" width="90px" src="{{ asset('/imgs/items/' . $elemetn->qr . '.png') }}"
                            alt="">
                        <p class="overflow-visible"
                            style=" font-size: 0.5rem; font-family: Arial, Helvetica, sans-serif;">
                            {{ $elemetn->name }}
                        </p>

                    </div>

                </td>

                <td style="vertical-align: top; height: 90px !important; ">

                    <div class="noticia">

                        <img class="derecha" width="90px" src="{{ asset('/imgs/items/' . $elemetn->qr . '.png') }}"
                            alt="">
                        <p class="overflow-visible"
                            style=" font-size: 0.5rem; font-family: Arial, Helvetica, sans-serif;">
                            {{ $elemetn->name }}
                        </p>

                    </div>

                </td>

                <td style="vertical-align: top; height: 90px !important; ">

                    <div class="noticia">

                        <img class="derecha" width="90px" src="{{ asset('/imgs/items/' . $elemetn->qr . '.png') }}"
                            alt="">
                        <p class="overflow-visible"
                            style=" font-size: 0.5rem; font-family: Arial, Helvetica, sans-serif;">
                            {{ $elemetn->name }}
                        </p>

                    </div>

                </td>

                <td style="vertical-align: top; height: 90px !important; ">

                    <div class="noticia">

                        <img class="derecha" width="90px" src="{{ asset('/imgs/items/' . $elemetn->qr . '.png') }}"
                            alt="">
                        <p class="overflow-visible"
                            style=" font-size: 0.5rem; font-family: Arial, Helvetica, sans-serif;">
                            {{ $elemetn->name }}
                        </p>

                    </div>

                </td>

                <td style="vertical-align: top; height: 90px !important; ">

                    <div class="noticia">

                        <img class="derecha" width="90px" src="{{ asset('/imgs/items/' . $elemetn->qr . '.png') }}"
                            alt="">
                        <p class="overflow-visible"
                            style=" font-size: 0.5rem; font-family: Arial, Helvetica, sans-serif;">
                            {{ $elemetn->name }}
                        </p>

                    </div>

                </td>

                <td style="vertical-align: top; height: 90px !important; ">

                    <div class="noticia">

                        <img class="derecha" width="90px" src="{{ asset('/imgs/items/' . $elemetn->qr . '.png') }}"
                            alt="">
                        <p class="overflow-visible"
                            style=" font-size: 0.5rem; font-family: Arial, Helvetica, sans-serif;">
                            {{ $elemetn->name }}
                        </p>

                    </div>

                </td>

            </tr>
            {{-- 3 --}}

            <tr>

                <td style="vertical-align: top; height: 90px !important; ">

                    <div class="noticia">

                        <img class="derecha" width="90px"
                            src="{{ asset('/imgs/items/' . $elemetn->qr . '.png') }}" alt="">
                        <p class="overflow-visible"
                            style=" font-size: 0.5rem; font-family: Arial, Helvetica, sans-serif;">
                            {{ $elemetn->name }}
                        </p>

                    </div>

                </td>

                <td style="vertical-align: top; height: 90px !important; ">

                    <div class="noticia">

                        <img class="derecha" width="90px"
                            src="{{ asset('/imgs/items/' . $elemetn->qr . '.png') }}" alt="">
                        <p class="overflow-visible"
                            style=" font-size: 0.5rem; font-family: Arial, Helvetica, sans-serif;">
                            {{ $elemetn->name }}
                        </p>

                    </div>

                </td>

                <td style="vertical-align: top; height: 90px !important; ">

                    <div class="noticia">

                        <img class="derecha" width="90px"
                            src="{{ asset('/imgs/items/' . $elemetn->qr . '.png') }}" alt="">
                        <p class="overflow-visible"
                            style=" font-size: 0.5rem; font-family: Arial, Helvetica, sans-serif;">
                            {{ $elemetn->name }}
                        </p>

                    </div>

                </td>

                <td style="vertical-align: top; height: 90px !important; ">

                    <div class="noticia">

                        <img class="derecha" width="90px"
                            src="{{ asset('/imgs/items/' . $elemetn->qr . '.png') }}" alt="">

                        <p class="overflow-visible"
                            style=" font-size: 0.5rem; font-family: Arial, Helvetica, sans-serif;">
                            {{ $elemetn->name }}
                        </p>

                    </div>

                </td>

                <td style="vertical-align: top; height: 90px !important; ">

                    <div class="noticia">

                        <img class="derecha" width="90px"
                            src="{{ asset('/imgs/items/' . $elemetn->qr . '.png') }}" alt="">

                        <p class="overflow-visible"
                            style=" font-size: 0.5rem; font-family: Arial, Helvetica, sans-serif;">
                            {{ $elemetn->name }}
                        </p>

                    </div>

                </td>

                <td style="vertical-align: top; height: 90px !important; ">

                    <div class="noticia">

                        <img class="derecha" width="90px"
                            src="{{ asset('/imgs/items/' . $elemetn->qr . '.png') }}" alt="">

                        <p class="overflow-visible"
                            style=" font-size: 0.5rem; font-family: Arial, Helvetica, sans-serif;">
                            {{ $elemetn->name }}
                        </p>

                    </div>

                </td>

            </tr>
            {{-- 4 --}}

            <tr>

                <td class="spacetd4" style="vertical-align: top; height: 90px !important; ">

                    <div class="noticia">

                        <img class="derecha" width="90px"
                            src="{{ asset('/imgs/items/' . $elemetn->qr . '.png') }}" alt="">

                        <p class="overflow-visible"
                            style=" font-size: 0.5rem; font-family: Arial, Helvetica, sans-serif;">
                            {{ $elemetn->name }}
                        </p>

                    </div>

                </td>

                <td class="spacetd4" style="vertical-align: top; height: 90px !important; ">

                    <div class="noticia">

                        <img class="derecha" width="90px"
                            src="{{ asset('/imgs/items/' . $elemetn->qr . '.png') }}" alt="">

                        <p class="overflow-visible"
                            style=" font-size: 0.5rem; font-family: Arial, Helvetica, sans-serif;">
                            {{ $elemetn->name }}
                        </p>

                    </div>

                </td>

                <td class="spacetd4" style="vertical-align: top; height: 90px !important; ">

                    <div class="noticia">

                        <img class="derecha" width="90px"
                            src="{{ asset('/imgs/items/' . $elemetn->qr . '.png') }}" alt="">

                        <p class="overflow-visible"
                            style=" font-size: 0.5rem; font-family: Arial, Helvetica, sans-serif;">
                            {{ $elemetn->name }}
                        </p>

                    </div>

                </td>

                <td class="spacetd4" style="vertical-align: top; height: 90px !important; ">

                    <div class="noticia">

                        <img class="derecha" width="90px"
                            src="{{ asset('/imgs/items/' . $elemetn->qr . '.png') }}" alt="">

                        <p class="overflow-visible"
                            style=" font-size: 0.5rem; font-family: Arial, Helvetica, sans-serif;">
                            {{ $elemetn->name }}
                        </p>

                    </div>

                </td>

                <td class="spacetd4" style="vertical-align: top; height: 90px !important; ">

                    <div class="noticia">

                        <img class="derecha" width="90px"
                            src="{{ asset('/imgs/items/' . $elemetn->qr . '.png') }}" alt="">

                        <p class="overflow-visible"
                            style=" font-size: 0.5rem; font-family: Arial, Helvetica, sans-serif;">
                            {{ $elemetn->name }}
                        </p>

                    </div>

                </td>

                <td class="spacetd4" style="vertical-align: top; height: 90px !important; ">

                    <div class="noticia">

                        <img class="derecha" width="90px"
                            src="{{ asset('/imgs/items/' . $elemetn->qr . '.png') }}" alt="">

                        <p class="overflow-visible"
                            style=" font-size: 0.5rem; font-family: Arial, Helvetica, sans-serif;">
                            {{ $elemetn->name }}
                        </p>

                    </div>

                </td>

            </tr>
            {{-- 5 --}}

            <tr>
                <td class="spacetd5" style=" vertical-align: top; height: 90px !important; ">

                    <div class="noticia">

                        <img class="derecha" width="90px"
                            src="{{ asset('/imgs/items/' . $elemetn->qr . '.png') }}" alt="">

                        <p class="overflow-visible"
                            style=" font-size: 0.5rem; font-family: Arial, Helvetica, sans-serif;">
                            {{ $elemetn->name }}
                        </p>

                    </div>

                </td>

                <td class="spacetd5" style=" vertical-align: top; height: 90px !important; ">

                    <div class="noticia">

                        <img class="derecha" width="90px"
                            src="{{ asset('/imgs/items/' . $elemetn->qr . '.png') }}" alt="">

                        <p class="overflow-visible"
                            style=" font-size: 0.5rem; font-family: Arial, Helvetica, sans-serif;">
                            {{ $elemetn->name }}
                        </p>

                    </div>

                </td>

                <td class="spacetd5" style=" vertical-align: top; height: 90px !important; ">

                    <div class="noticia">

                        <img class="derecha" width="90px"
                            src="{{ asset('/imgs/items/' . $elemetn->qr . '.png') }}" alt="">

                        <p class="overflow-visible"
                            style=" font-size: 0.5rem; font-family: Arial, Helvetica, sans-serif;">
                            {{ $elemetn->name }}
                        </p>

                    </div>

                </td>

                <td class="spacetd5" style=" vertical-align: top; height: 90px !important; ">

                    <div class="noticia">

                        <img class="derecha" width="90px"
                            src="{{ asset('/imgs/items/' . $elemetn->qr . '.png') }}" alt="">

                        <p class="overflow-visible"
                            style=" font-size: 0.5rem; font-family: Arial, Helvetica, sans-serif;">
                            {{ $elemetn->name }}
                        </p>

                    </div>

                </td>

                <td class="spacetd5" style=" vertical-align: top; height: 90px !important; ">

                    <div class="noticia">

                        <img class="derecha" width="90px"
                            src="{{ asset('/imgs/items/' . $elemetn->qr . '.png') }}" alt="">

                        <p class="overflow-visible"
                            style=" font-size: 0.5rem; font-family: Arial, Helvetica, sans-serif;">
                            {{ $elemetn->name }}
                        </p>

                    </div>

                </td>

                <td class="spacetd5" style=" vertical-align: top; height: 90px !important; ">

                    <div class="noticia">

                        <img class="derecha" width="90px"
                            src="{{ asset('/imgs/items/' . $elemetn->qr . '.png') }}" alt="">

                        <p class="overflow-visible"
                            style=" font-size: 0.5rem; font-family: Arial, Helvetica, sans-serif;">
                            {{ $elemetn->name }}
                        </p>

                    </div>

                </td>



            </tr>

            {{-- 6 --}}
            <tr>
                <td class="spacetd6" style=" vertical-align: top; height: 90px !important; ">

                    <div class="noticia">

                        <img class="derecha" width="90px"
                            src="{{ asset('/imgs/items/' . $elemetn->qr . '.png') }}" alt="">

                        <p class="overflow-visible"
                            style=" font-size: 0.5rem; font-family: Arial, Helvetica, sans-serif;">
                            {{ $elemetn->name }}
                        </p>

                    </div>

                </td>

                <td class="spacetd6" style="vertical-align: top; height: 90px !important; ">

                    <div class="noticia">

                        <img class="derecha" width="90px"
                            src="{{ asset('/imgs/items/' . $elemetn->qr . '.png') }}" alt="">

                        <p class="overflow-visible"
                            style=" font-size: 0.5rem; font-family: Arial, Helvetica, sans-serif;">
                            {{ $elemetn->name }}
                        </p>

                    </div>

                </td>

                <td class="spacetd6" style="vertical-align: top; height: 90px !important; ">

                    <div class="noticia">

                        <img class="derecha" width="90px"
                            src="{{ asset('/imgs/items/' . $elemetn->qr . '.png') }}" alt="">

                        <p class="overflow-visible"
                            style=" font-size: 0.5rem; font-family: Arial, Helvetica, sans-serif;">
                            {{ $elemetn->name }}
                        </p>

                    </div>

                </td>

                <td class="spacetd6" style="vertical-align: top; height: 90px !important; ">

                    <div class="noticia">

                        <img class="derecha" width="90px"
                            src="{{ asset('/imgs/items/' . $elemetn->qr . '.png') }}" alt="">

                        <p class="overflow-visible"
                            style=" font-size: 0.5rem; font-family: Arial, Helvetica, sans-serif;">
                            {{ $elemetn->name }}
                        </p>

                    </div>

                </td>

                <td class="spacetd6" style="vertical-align: top; height: 90px !important; ">

                    <div class="noticia">

                        <img class="derecha" width="90px"
                            src="{{ asset('/imgs/items/' . $elemetn->qr . '.png') }}" alt="">

                        <p class="overflow-visible"
                            style=" font-size: 0.5rem; font-family: Arial, Helvetica, sans-serif;">
                            {{ $elemetn->name }}
                        </p>

                    </div>

                </td>

                <td class="spacetd6" style="vertical-align: top; height: 90px !important; ">

                    <div class="noticia">

                        <img class="derecha" width="90px"
                            src="{{ asset('/imgs/items/' . $elemetn->qr . '.png') }}" alt="">

                        <p class="overflow-visible"
                            style=" font-size: 0.5rem; font-family: Arial, Helvetica, sans-serif;">
                            {{ $elemetn->name }}
                        </p>

                    </div>

                </td>

            </tr>

            {{-- 7 --}}
            <tr>

                <td class="spacetd7" style="vertical-align: top; height: 90px !important; ">

                    <div class="noticia">

                        <img class="derecha" width="90px"
                            src="{{ asset('/imgs/items/' . $elemetn->qr . '.png') }}" alt="">

                        <p class="overflow-visible"
                            style=" font-size: 0.5rem; font-family: Arial, Helvetica, sans-serif;">
                            {{ $elemetn->name }}
                        </p>

                    </div>

                </td>

                <td class="spacetd7" style="vertical-align: top; height: 90px !important; ">

                    <div class="noticia">

                        <img class="derecha" width="90px"
                            src="{{ asset('/imgs/items/' . $elemetn->qr . '.png') }}" alt="">

                        <p class="overflow-visible"
                            style=" font-size: 0.5rem; font-family: Arial, Helvetica, sans-serif;">
                            {{ $elemetn->name }}
                        </p>

                    </div>

                </td>

                <td class="spacetd7" style="vertical-align: top; height: 90px !important; ">

                    <div class="noticia">

                        <img class="derecha" width="90px"
                            src="{{ asset('/imgs/items/' . $elemetn->qr . '.png') }}" alt="">

                        <p class="overflow-visible"
                            style=" font-size: 0.5rem; font-family: Arial, Helvetica, sans-serif;">
                            {{ $elemetn->name }}
                        </p>

                    </div>

                </td>

                <td class="spacetd7" style="vertical-align: top; height: 90px !important; ">

                    <div class="noticia">

                        <img class="derecha" width="90px"
                            src="{{ asset('/imgs/items/' . $elemetn->qr . '.png') }}" alt="">

                        <p class="overflow-visible"
                            style=" font-size: 0.5rem; font-family: Arial, Helvetica, sans-serif;">
                            {{ $elemetn->name }}
                        </p>

                    </div>

                </td>

                <td class="spacetd7" style="vertical-align: top; height: 90px !important; ">

                    <div class="noticia">

                        <img class="derecha" width="90px"
                            src="{{ asset('/imgs/items/' . $elemetn->qr . '.png') }}" alt="">

                        <p class="overflow-visible"
                            style=" font-size: 0.5rem; font-family: Arial, Helvetica, sans-serif;">
                            {{ $elemetn->name }}
                        </p>

                    </div>

                </td>

                <td class="spacetd7" style="vertical-align: top; height: 90px !important; ">

                    <div class="noticia">

                        <img class="derecha" width="90px"
                            src="{{ asset('/imgs/items/' . $elemetn->qr . '.png') }}" alt="">

                        <p class="overflow-visible"
                            style=" font-size: 0.5rem; font-family: Arial, Helvetica, sans-serif;">
                            {{ $elemetn->name }}
                        </p>

                    </div>

                </td>

            </tr>

            {{-- 8 --}}
            <tr>
                <td class="spacetd8" style="vertical-align: top; height: 90px !important; ">

                    <div class="noticia">

                        <img class="derecha" width="90px"
                            src="{{ asset('/imgs/items/' . $elemetn->qr . '.png') }}" alt="">

                        <p class="overflow-visible"
                            style=" font-size: 0.5rem; font-family: Arial, Helvetica, sans-serif;">
                            {{ $elemetn->name }}
                        </p>

                    </div>

                </td>

                <td class="spacetd8" style="vertical-align: top; height: 90px !important; ">

                    <div class="noticia">

                        <img class="derecha" width="90px"
                            src="{{ asset('/imgs/items/' . $elemetn->qr . '.png') }}" alt="">

                        <p class="overflow-visible"
                            style=" font-size: 0.5rem; font-family: Arial, Helvetica, sans-serif;">
                            {{ $elemetn->name }}
                        </p>

                    </div>

                </td>

                <td class="spacetd8" style="vertical-align: top; height: 90px !important; ">

                    <div class="noticia">

                        <img class="derecha" width="90px"
                            src="{{ asset('/imgs/items/' . $elemetn->qr . '.png') }}" alt="">

                        <p class="overflow-visible"
                            style=" font-size: 0.5rem; font-family: Arial, Helvetica, sans-serif;">
                            {{ $elemetn->name }}
                        </p>

                    </div>

                </td>

                <td class="spacetd8" style="vertical-align: top; height: 90px !important; ">

                    <div class="noticia">

                        <img class="derecha" width="90px"
                            src="{{ asset('/imgs/items/' . $elemetn->qr . '.png') }}" alt="">

                        <p class="overflow-visible"
                            style=" font-size: 0.5rem; font-family: Arial, Helvetica, sans-serif;">
                            {{ $elemetn->name }}
                        </p>

                    </div>

                </td>

                <td class="spacetd8" style="vertical-align: top; height: 90px !important; ">

                    <div class="noticia">

                        <img class="derecha" width="90px"
                            src="{{ asset('/imgs/items/' . $elemetn->qr . '.png') }}" alt="">

                        <p class="overflow-visible"
                            style=" font-size: 0.5rem; font-family: Arial, Helvetica, sans-serif;">
                            {{ $elemetn->name }}
                        </p>

                    </div>

                </td>

                <td class="spacetd8" style="vertical-align: top; height: 90px !important; ">

                    <div class="noticia">

                        <img class="derecha" width="90px"
                            src="{{ asset('/imgs/items/' . $elemetn->qr . '.png') }}" alt="">

                        <p class="overflow-visible"
                            style=" font-size: 0.5rem; font-family: Arial, Helvetica, sans-serif;">
                            {{ $elemetn->name }}
                        </p>

                    </div>

                </td>

            </tr>

        </tbody>

    </table>

</body>

</html>
