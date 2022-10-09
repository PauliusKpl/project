@error('iso_code')
    <p style="color: red; margin: 1px; font-size: 15px;">{{$message}}</p>
    <style>
        input[name="iso_code"]{
            border: 1px solid red;
        }
    </style>
    @enderror