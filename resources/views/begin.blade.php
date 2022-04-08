<!doctype html>
<html lang="en">
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<title> Begin </title>
</head>
<body>
    <div class="container-sm">
    <h1> Enter the name of the students </h1>

    <form action="/enter-grades" class="uniqueNames" method="POST">
    @csrf
    @for ($i =1; $i <=5; $i++)
      <div class="row">
        <label> Student {{ $i }} Name: </label>
        <input type="text" name="name_{{ $i }}" class="form-control" required>
</div>
@endfor
<hr>
<div class="row">
    <button class="btn btn-primary btn-lg>"> Save Students </button>
</div>
</form>
</div>

<script type="text/javascript">
    var frm = document.querySelector('form.uniqueNames');
    var inputs = frm.querySelectorAll('input[type=text]');
    frm.addEventListener('submit', function(e) {
        e.preventDefault();
        var classArr = [];
        for(var i = 0; i < inputs.length; i++) 
        {
            if(classArr.indexOf(inputs[i].value) != -1) {
                        inputs[i].style.color = "#A93226";
                        alert("You have entered a same student name, kindly enter a unique one.");
                        return false;
            }
            else
            classArr.push(inputs[i].value);
        }
        frm.submit();
    });
    for(var j = 0; j < inputs.length; j++) {
        inputs[j].addEventListener('focus', function() {
            this.style.backgroundColor = "#FDFEFE";
            this.style.color = "#2471A3";
        });
    }
    </script>

<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
