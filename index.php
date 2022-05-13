<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="">
        <input type="text" class="form-control quantity-input input-text qty text" onkeypress="return isNumberKey(event)" name="total" value="{{ old('total') }}" id="total" required>
    </form>

    <script type="text/javascript">
        $(document).ready(function() {
            $('.quantity-input').bind("cut copy paste drag drop", function(e) {
                e.preventDefault();
            });
        });

        function isNumberKey(e) {
            var charCode = (e.which) ? e.which : e.keyCode;
            if (charCode > 31 && (charCode < 48 || charCode > 57)) {
                return false;
            }
            return true;
        }
    </script>
</body>

</html>