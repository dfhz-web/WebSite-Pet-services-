<div>
    <form action="" method="post">
            
        @csrf
         <label>
            Symptoms:
              <br>
              <input type="text" name="symptoms" value="{{old('symptoms')}}">
          </label>

        @error('name')
            <br>
            <small>*{{$message}}</small>
     
        @enderror

        <br>
        <label>
            <br>
            Email:
            <br>
            <input type="email" name="email" value="{{old('email')}}">
        </label>
        @error('email')
        <br>
        <small>*{{$message}}</small>
 
       @enderror

        <br>


        <label>
            <br>
            Address:
            
            <br>
            <textarea name="address" rows="5">{{old('address')}}</textarea>
        </label>

        @error('address')
        <br>
        <small>*{{$message}}</small>
 
    @enderror

        <BR>
            <button class="btn btn-primary" type="submit">Send</button>
</form>



</div>
