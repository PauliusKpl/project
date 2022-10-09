@error('country')
    <p style="color: red; margin: 1px; font-size: 15px;">{{$message}}</p>
    <style>
        select[name="country"]{
            border: 1px solid red;
        }
    </style>
@enderror