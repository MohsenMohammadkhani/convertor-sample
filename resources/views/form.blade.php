<!DOCTYPE html>
<html lang="fa" dir="rtl">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>

  <div class="container p-3">
    <div class="row justify-content-center">
      <div class="col-6 bg-info p-3 rounded">
        <form method="POST" action="/">
          <div class="form-group text-right">
            <span>مقدار </span>
            <input type="number" name="amount" class="form-control" required>
          </div>
          <div class="form-group text-right">
            <span>از به </span>
            <select class="form-control" name="from">
              <option value="kg">kg </option>
              <option value="pound">IB پوند</option>
              <option value="meter">متر</option>
              <option value="yard">یارد</option>
            </select>
          </div>


          <div class="form-group text-right">
            <span>به </span>

            <select class="form-control" name="to">
              <option value="kg">kg </option>
              <option value="pound">IB پوند</option>
              <option value="meter">متر</option>
              <option value="yard">یارد</option>
            </select>


          </div>
          {{ csrf_field() }}

          <button type="submit" class="btn btn-warning w-100">تبدیل</button>
        </form>
      </div>
    </div>
  </div>


  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
  </script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
  </script>
</body>

</html>