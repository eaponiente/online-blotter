<!DOCTYPE html>
<html>
    <head>
        <title></title>
    </head>

    <body>
        <table width="100%" style="width: 100%;" border="0">
            <tr>
                <td colspan="3" colspan="3" align="center">
                    <img src="{{ public_path() . '/assets/images/logo.png' }}" width="110" alt="logo">
                    <h1 align="center">{{ $control_no }}</h1>
                    {{ strtoupper($status) }}
                </td>
            </tr>
            <tr>
                <td colspan="2" style="margin-left: 15px;">First Name</td>
            </tr>
            <tr>
                <td colspan="2" style="margin-left: 15px;">{{ $first_name }}</td>
            </tr>
            <tr>
                <td><div style="height: 20px;"> </div></td>
            </tr>

            <tr>
                <td colspan="2" style="margin-left: 15px;">Last Name</td>
            </tr>
            <tr>
                <td colspan="2" style="margin-left: 15px;">{{ $last_name }}</td>
            </tr>
            <tr>
                <td><div style="height: 20px;"> </div></td>
            </tr>

            <tr>
                <td colspan="2" style="margin-left: 15px;">Address</td>
            </tr>
            <tr>
                <td colspan="2" style="margin-left: 15px;">{{ $present_address }}</td>
            </tr>
            <tr>
                <td><div style="height: 20px;"> </div></td>
            </tr>
            <tr>
                <td colspan="2" style="margin-left: 15px;">Assigned to Station</td>
            </tr>
            <tr>
                <td colspan="2" style="margin-left: 15px;">{{ $station['name'] }}</td>
            </tr>
            <tr>
                <td><div style="height: 20px;"> </div></td>
            </tr>

            <tr>
                <td colspan="2" style="margin-left: 15px;">Who: </td>
            </tr>
            <tr>
                <td colspan="2" style="margin-left: 15px;">{{ $who }}</td>
            </tr>
            <tr>
                <td><div style="height: 20px;"> </div></td>
            </tr>

            <tr>
                <td colspan="2" style="margin-left: 15px;">Where:</td>
            </tr>
            <tr>
                <td colspan="2" style="margin-left: 15px;">{{ $where }}</td>
            </tr>
            <tr>
                <td><div style="height: 20px;"> </div></td>
            </tr>

            <tr>
                <td colspan="2" style="margin-left: 15px;">When: </td>
            </tr>
            <tr>
                <td colspan="2" style="margin-left: 15px;">{{ $when }}</td>
            </tr>
            <tr>
                <td><div style="height: 20px;"> </div></td>
            </tr>

            <tr>
                <td colspan="2" style="margin-left: 15px;">Synopsis:</td>
            </tr>
            <tr>
                <td colspan="2" style="margin-left: 15px;">{{ $synopsis }}</td>
            </tr>
            <tr>
                <td><div style="height: 20px;"> </div></td>
            </tr>

            @if(filled($prepared_by_signature_filename) && filled($incharge_signature_filename))
            <tr>
                <td style="margin-left: 15px;"></td>
                <td style="margin-left: 15px;"></td>
            </tr>
            <tr>
                <td align="center">
                    <img src="{{ storage_path() . '/app/' . $prepared_by_signature_filename }}" width="150" alt="">
                    <br>
                    Prepared by
                    <br>
                    {{ strtoupper($user['first_name'] . ' ' . ucfirst(substr($user['middle_name'], 0, 1)) . ' ' . $user['last_name']) }}
                    <br>
                    {{ strtoupper($user['position']) }}
                </td>
                <td align="center">
                    <img src="{{ storage_path() . '/app/' . $incharge_signature_filename }}" width="150" alt="">
                    <br>
                    Station Commander
                    <br>
                    {{ $station['commander_name'] }}
                </td>
            </tr>
            <tr>
                <td><div style="height: 20px;"> </div></td>
            </tr>
                @endif
        </table>
    </body>
</html>