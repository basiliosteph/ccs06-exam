<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<title> Grades </title>
</head>
<body>
    <div class="container-sm">
    <h1> Student's Grades </h1>

    <form action="/compute-grades" method="POST">
        <input type="hidden" name="student_1" value="{{ $student_1 }}">
        <input type="hidden" name="student_2" value="{{ $student_2 }}">
        <input type="hidden" name="student_3" value="{{ $student_3 }}">
        <input type="hidden" name="student_4" value="{{ $student_4 }}">
        <input type="hidden" name="student_5" value="{{ $student_5 }}">
        @csrf
        <div class="row">
            <label> Student: <strong>{{ $student_1 }} </strong> </label>
            <div class="col col-md-4">
            <label> Midterm Grade </label>
            <input type="number" name="s1_mgrade" class="form-control">
       </div>
       <div class="col col-md-4">
            <label> Finals Grade </label>
            <input type="number" name="s1_fgrade" class="form-control">
       </div>
       <div class="row">
            <label> Student: <strong>{{ $student_2 }} </strong> </label>
            <div class="col col-md-4">
            <label> Midterm Grade </label>
            <input type="number" name="s2_mgrade" class="form-control">
       </div>
       <div class="col col-md-4">
            <label> Finals Grade </label>
            <input type="number" name="s2_fgrade" class="form-control">
       </div>
       <div class="row">
            <label> Student: <strong>{{ $student_3 }} </strong> </label>
            <div class="col col-md-4">
            <label> Midterm Grade </label>
            <input type="number" name="s3_mgrade" class="form-control">
       </div>
       <div class="col col-md-4">
            <label> Finals Grade </label>
            <input type="number" name="s3_fgrade" class="form-control">
       </div>
       <div class="row">
            <label> Student: <strong>{{ $student_4 }} </strong> </label>
            <div class="col col-md-4">
            <label> Midterm Grade </label>
            <input type="number" name="s4_mgrade" class="form-control">
       </div>
       <div class="col col-md-4">
            <label> Finals Grade </label>
            <input type="number" name="s4_fgrade" class="form-control">
       </div>
       <div class="row">
            <label> Student: <strong>{{ $student_5 }} </strong> </label>
            <div class="col col-md-4">
            <label> Midterm Grade </label>
            <input type="number" name="s5_mgrade" class="form-control">
       </div>
       <div class="col col-md-4">
            <label> Finals Grade </label>
            <input type="number" name="s5_fgrade" class="form-control">
       </div>
</div>
<hr />
<div class="row">
    <button class="btn btn-primary btn-lg" type="submit"> Compute Average Grade </button>
</div>
</form>
</div>

<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>


