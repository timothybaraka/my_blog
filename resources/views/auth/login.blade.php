<x-layout>
    <h1 class="title">Welcome back!</h1>

    <div class="mx-auto max-w-screen-sm card">
        <form action="{{route('login')}}" method="post">
            @csrf
            
             {{--email--}}
             <div class="mb-4">
                <label for="email">Email</label>
                <input type="text" name="email" class="input" value="{{old ('email')}}">
                @error('email')
                    <p class="error"> {{$message}} </p>
                @enderror
            </div>

            {{--password--}}
            <div class="mb-4">
                <label for="password">Password</label>
                <input type="password" name="password" class="input">
                @error('password')
                    <p class="error"> {{$message}} </p>
                @enderror
            </div>
            {{--Remember checkbox--}}
             <div class="mb-4">
                <input type="checkbox" name="remember" id="rememmber"><label for="remember">Remember me</label>
            </div>

            @error('failed')
                    <p class="error"> {{$message}} </p>
                @enderror
          {{--Submit Button--}}
            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Login</button>

        </form>
    </div>
</x-layout>





