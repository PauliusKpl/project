@error('title')
    <p style="color: red; margin: 1px; font-size: 15px;">{{$message}}</p>
    <style>
        input[name="title"]{
            border: 1px solid red;
        }
    </style>
    @enderror