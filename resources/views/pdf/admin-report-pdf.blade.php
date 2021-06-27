<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>

<body>
<table width="100%" style="width: 100%;" border="0">
    <tr>
        <td colspan="3" colspan="3" align="center">
            <div style="margin-bottom: 20px;">
                <img src="{{ public_path() . '/assets/images/logo.png' }}" width="90" alt="logo">
                <h1 align="center">Incident Report for {{ $control_no }}</h1>

            </div>
        </td>
    </tr>

    <tr>
        <td>First Name: {{ strtoupper($first_name) }}</td>
        <td>Last Name: {{ strtoupper($last_name) }}</td>
    </tr>

    <tr>
        <td>Middle Initial: {{ strtoupper($middle_name) }}</td>
        <td>Citizenship: {{ strtoupper($citizenship) }}</td>
    </tr>
    <tr>
        <td>Suffix: {{ strtoupper($suffix) }}</td>
        <td>Email: {{ $email }}</td>
    </tr>

    <tr>
        <td>Gender: {{ strtoupper($gender) }}</td>
        <td>Date of birth: {{ \Carbon\Carbon::parse($date_of_birth)->format('F d, Y') }}</td>
    </tr>

    <tr>
        <td>Civil Status: {{ strtoupper($civil_status) }}</td>
        <td>Age: {{ \Carbon\Carbon::parse($date_of_birth)->age }}</td>
    </tr>
    <tr>
        <td><div style="height: 15px;"> </div></td>
    </tr>

    <tr>
        <td colspan="2">Present Address: {{ $present_address }}</td>
    </tr>
    <tr>
        <td colspan="2">Permanent Address: {{ $permanent_address }}</td>
    </tr>
    <tr>
        <td><div style="height: 10px;"> </div></td>
    </tr>

    <tr>
        <td colspan="2">Contact #: {{ $mobile }}</td>
    </tr>

    <tr>
        <td colspan="2">
            <h2>Case Details</h2>
        </td>
    </tr>

    <tr>
        <td>Type: {{ strtoupper($type) }}</td>
        <td>Status: {{ strtoupper($status) }}</td>
    </tr>

    <tr>
        <td colspan="2">Station: {{ $station['name'] }}</td>
    </tr>
    <tr>
        <td><div style="height: 10px;"> </div></td>
    </tr>
    <tr>
        <td colspan="2">Who: {{ $who }}</td>
    </tr>
    <tr>
        <td><div style="height: 10px;"> </div></td>
    </tr>
    <tr>
        <td colspan="2">Where: {{ $where }}</td>
    </tr>
    <tr>
        <td><div style="height: 10px;"> </div></td>
    </tr>
    <tr>
        <td colspan="2">When: {{ $when }}</td>
    </tr>
    <tr>
        <td><div style="height: 10px;"> </div></td>
    </tr>
    <tr>
        <td colspan="2">Synopsis: {{ $synopsis }}</td>
    </tr>
    <tr>
        <td><div style="height: 10px;"> </div></td>
    </tr>
    <tr>
        <td colspan="2">Valid ID:</td>
    </tr>
    <tr>
        <td colspan="2">
            <img src="{{ storage_path() . '/app/' . $filename }}" width="150" alt="">
        </td>
    </tr>
    <tr>
        <td><div style="height: 18px;"> </div></td>
    </tr>

    @if(filled($prepared_by_signature_filename) && filled($incharge_signature_filename))
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
    @endif




</table>
</body>
</html>