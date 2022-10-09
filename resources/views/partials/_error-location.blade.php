@error('location')
    <p style="color: red; margin: 1px; font-size: 15px;">{{$message}}</p>
    <style>
        input[name="location"]{
            border: 1px solid red;
        }
    </style>
    @enderror