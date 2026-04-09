<!DOCTYPE html>
<html lang='en'>
<head>
<meta charset='utf-8'>
<meta name='viewport' content='width=device-width, initial-scale=1'>
<title>get api country data from url to form</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

</head>
<body>


     <div class="w-50 mx-auto mt-5 p-5 border border-3 border-primary rounded">
     <form action="" method="post">
     <div class="mb-3">
        <label for="country" class="form-label">fetch Country Name via api</label>
        <select name="country" id="country" class="form-select">
        <option value="">select country</option>
        <?php 
        //  fetch api data from url and decode json data to php array
        $json=file_get_contents("http://localhost/php-10-12-tts/advanced-php/api/country_list_json.json");

        $data=json_decode($json,true);
        // print_r($data);
        foreach($data as $value)
            {
            //check api response data is array or not
            if(is_array($value))
            {
                foreach($value as $key=>$val)
                {
                    echo "<option value='$key'>api response is 404</option>";
                }
            }
            else
            {
                echo "<option value='$value'>$value</option>";
            } 
            ?>
        
        <?php 
            
            }
        ?>
    </select>

    </div>


</body>
</html>