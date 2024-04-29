<x-layoutcomponent>
    <x-slot name="info">
        <main>
            <div class="container">
                <div class="row" style="margin-top: 250px; margin-left: 30px;">
                    <div class="card" style="width: 400px; padding: 15px; justify-content: center;">
                        <form class="signUp">
                            <h3>Login to an Account!</h3>
                            <a href="/login" class="btn btn-primary align-center" style="margin-top: 75px; width: 75%;">Login</a>
                        </form>
                    </div>
                    <div class="card" style="width: 400px; padding: 15px; justify-content: center; margin-left: 50px;">
                        <form class="signUp">
                            <h3>Register for an Account!</h3>
                            <a href="/register" class="btn btn-primary align-center" style="margin-top: 75px; width: 75%;">Register</a>
                        </form>   
                    </div>
                </div>
            </div> 
        </main>
    </x-slot>
</x-layoutcomponent>
