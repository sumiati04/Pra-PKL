<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<fieldset>
        <h2>StaffBranch</h2>
        <table border = 1>
            <tr>
                <td>StaffNo</td>
                <td>sName</td>
                <td>position</td>
                <td>salary</td>
                <td>branchNo</td>
                <td>bAddress</td>
            </tr>
            @foreach ($staff_branch as $data)
            <tr>
                <td>{{$data->staffNo}}</td>
                <td>{{$data->sName}}</td>
                <td>{{$data->position}}</td>
                <td>{{$data->salary}}</td>
                <td>{{$data->branchNo}}</td>
                <td>{{$data->bAddres}}</td>
            </tr>
            @endforeach
        </table>

        <h2>Staff</h2>
        <table border = 1>
            <tr>
                <td>StaffNo</td>
                <td>sName</td>
                <td>position</td>
                <td>salary</td>
                <td>branchNo</td>
            </tr>
            @foreach ($_staff as $data)
            <tr>
                <td>{{$data->staffNo}}</td>
                <td>{{$data->sName}}</td>
                <td>{{$data->position}}</td>
                <td>{{$data->salary}}</td>
                <td>{{$data->branchNo}}</td>
            </tr>
            @endforeach
        </table>

       <h2>Branch</h2>
        <table border = 1>
            <tr>
                <td>branchNo</td>
                <td>bAddress</td>
            </tr>
            @foreach ($_branch as $data)
            <tr>
                <td>{{$data->branchNo}}</td>
                <td>{{$data->bAddres}}</td>
            </tr>
            @endforeach
        </table>
    </fieldset>
</body>
</html>