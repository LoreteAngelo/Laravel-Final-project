<html>
<head> 
        <title>Name</title>
   
</head>
<body>
<center><br><br><br><br><br><br><br>
    
        <h1>Election Age Verifier</h1>
         <form method="POST" action="/InputAge">
    
          <label for="InputAge">Enter your Age: </label>
          <input type="test" id="InputAge" name="InputAge" required /><br>
          <br><br><input type="submit" name="submit" />
        </form>
     
        @if($age >= 18)
         Age: {{$age}}
         <h1>you are eligible</h1>
        @elseif($age >=15 && $age<=17)
         <h1>age: {{$age}}</h1>
         <h1>you are eligible</h1>
        @elseif($age >=1 && $age<=14)
        age:{{$age}}
        <h3>you are not eligible</h1>
        @else
        <h1>Put a number</h>
        @endif

</center>

</body>
</html>
