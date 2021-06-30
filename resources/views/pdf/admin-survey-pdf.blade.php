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
            <h1 align="center">Survey Form</h1>
        </td>
    </tr>
    <tr>
        <td style="margin-left: 15px;">Name</td>
        <td style="margin-left: 15px;">{{ $name }}</td>
    </tr>
    <tr>
        <td><div style="height: 20px;"> </div></td>
    </tr>
    <tr>
        <td style="margin-left: 15px;">Age</td>
        <td style="margin-left: 15px;">{{ $age }}</td>
    </tr>
    <tr>
        <td><div style="height: 20px;"> </div></td>
    </tr>
    <tr>
        <td style="margin-left: 15px;">Gender</td>
        <td style="margin-left: 15px;">{{ $gender }}</td>
    </tr>
    <tr>
        <td><div style="height: 20px;"> </div></td>
    </tr>
</table>
<?php $count = 0; $answers = json_decode($answers, true); ?>
@foreach(config('questions') as $key => $questions)
    <h4>{{ strtoupper(str_replace('_', ' ', $key)) }}</h4>
    <table class="table table-bordered" border="1">
        @foreach($questions as $question)
            <tr>
                <td style="padding: 7px;">{{ $question }}</td>
                <td style="padding: 7px;">{{ $answers[$count] == 'yes' ? 'Accepted' : 'Not Accepted' }}</td>
            </tr>
            <?php $count++; ?>
        @endforeach
    </table>
@endforeach
</body>
</html>