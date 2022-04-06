<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<title> Grades </titles>
</head>
<body>
    <div class="containter-sm">
        <h1> Compute Grades </h1>

        <table class="table table-striped table-hover">
        <thead>
        <tr>
            <th scope="col"> Student Name </th>
            <th scope="col"> Midterm Grade </th>
            <th scope="col"> Final Grade </th>
            <th scope="col"> Average Grade </th>
        </tr>
</thead>
</tbody>
<tr>
    <td>{{ $student_1 }} </td>
    <td>{{ $s1_mgrade }} </td>
    <td>{{ $s1_fgrade }} </td>
    <td>{{ $s1_agrade }} </td>
    <td>{{ $s1_remarks }} </td>
</tr>
<tr>
    <td>{{ $student_2 }} </td>
    <td>{{ $s2_mgrade }} </td>
    <td>{{ $s2_fgrade }} </td>
    <td>{{ $s2_agrade }} </td>
    <td>{{ $s2_remarks }} </td>
</tr>
<tr>
    <td>{{ $student_3 }} </td>
    <td>{{ $s3_mgrade }} </td>
    <td>{{ $s3_fgrade }} </td>
    <td>{{ $s3_agrade }} </td>
    <td>{{ $s3_remarks }} </td>
</tr>
<tr>
    <td>{{ $student_4 }} </td>
    <td>{{ $s4_mgrade }} </td>
    <td>{{ $s4_fgrade }} </td>
    <td>{{ $s4_agrade }} </td>
    <td>{{ $s4_remarks }} </td>
</tr>
<tr>
    <td>{{ $student_5 }} </td>
    <td>{{ $s5_mgrade }} </td>
    <td>{{ $s5_fgrade }} </td>
    <td>{{ $s5_agrade }} </td>
    <td>{{ $s5_remarks }} </td>
</tr>
</tbody>
</table>

<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
