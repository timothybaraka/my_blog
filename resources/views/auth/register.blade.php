<x-layout>
    <h1 class="title">Register New Account</h1>

    <div class="mx-auto max-w-screen-sm card">
        <form action="{{route('register')}}" method="post">
            @csrf
            {{--username--}}
            <div class="mb-4">
                <label for="username">Username</label>
                <input type="text" name="username" class="input" value="{{old ('username')}}">
                @error('username')
                    <p class="error"> {{$message}} </p>
                @enderror
            </div>

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

            {{--confirm password--}}
            <div class="mb-8">
                <label for="password_confirmation">Confirm Password</label>
                <input type="password" name="password_confirmation" class="input">
                @error('password')
                    <p class="error"> {{$message}} </p>
                @enderror
            </div>

            {{--Submit Button--}}
            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Register</button>

        </form>
    </div>
</x-layout>





