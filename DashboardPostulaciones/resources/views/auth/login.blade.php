<x-guest-layout>
<style>
    * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}
body {
    display: flex;
    align-items: center;
    justify-content: center;
    min-height: 100vh;
    background: #444;
}
.container {
    position: relative;
    width: 70vw;
    height: 80vh;
    background: #fff;
    border-radius: 15px;
    box-shadow: 0 4px 20px 0 rgba(0, 0, 0, 0.3), 0 6px 20px 0 rgba(0, 0, 0, 0.3);
    overflow: hidden;
}
.container::before {
    content: "";
    position: absolute;
    top: 0;
    left: -50%;
    width: 100%;
    height: 100%;
    background: linear-gradient(-45deg, #4a8bdf, #520852);
    z-index: 6;
    transform: translateX(100%);
    transition: 1s ease-in-out;
}
.signin-signup {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    display: flex;
    align-items: center;
    justify-content: space-around;
    z-index: 5;
}
form {
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
    width: 40%;
    min-width: 238px;
    padding: 0 10px;
}
form.sign-in-form {
    opacity: 1;
    transition: 0.5s ease-in-out;
    transition-delay: 1s;
}
form.sign-up-form {
    opacity: 0;
    transition: 0.5s ease-in-out;
    transition-delay: 1s;
}
.title {
    font-size: 35px;
    color: #4a7edf;
    margin-bottom: 10px;
}
.input-field {
    width: 100%;
    height: 50px;
    background: #f0f0f0;
    margin: 10px 0;
    border: 2px solid #4a59df;
    border-radius: 50px;
    display: flex;
    align-items: center;
}
.input-field i {
    flex: 1;
    text-align: center;
    color: #666;
    font-size: 18px;
}
.input-field input {
    flex: 5;
    background: none;
    border: none;
    outline: none;
    width: 100%;
    font-size: 18px;
    font-weight: 600;
    color: #444;
}
.btn {
    width: 150px;
    height: 50px;
    border: none;
    border-radius: 50px;
    background: #4a90df;
    color: #fff;
    font-weight: 600;
    margin: 10px 0;
    text-transform: uppercase;
    cursor: pointer;
}
.btn:hover {
    background: #3c5fc0;
}
.social-text {
    margin: 10px 0;
    font-size: 16px;
}
.social-media {
    display: flex;
    justify-content: center;
}
.social-icon {
    height: 45px;
    width: 45px;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #444;
    border: 1px solid #444;
    border-radius: 50px;
    margin: 0 5px;
}
a {
    text-decoration: none;
}
.social-icon:hover {
    color: #4a59df;
    border-color: #654adf;
}
.panels-container {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    display: flex;
    align-items: center;
    justify-content: space-around;
}
.panel {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: space-around;
    width: 35%;
    min-width: 238px;
    padding: 0 10px;
    text-align: center;
    z-index: 6;
}
.left-panel {
    pointer-events: none;
}
.content {
    color: #fff;
    transition: 1.1s ease-in-out;
    transition-delay: 0.5s;
}
.panel h3 {
    font-size: 24px;
    font-weight: 600;
}
.panel p {
    font-size: 15px;
    padding: 10px 0;
}
.image {
    width: 100%;
    transition: 1.1s ease-in-out;
    transition-delay: 0.4s;
}
.left-panel .image,
.left-panel .content {
    transform: translateX(-200%);
}
.right-panel .image,
.right-panel .content {
    transform: translateX(0);
}
.account-text {
    display: none;
}
/*Animation*/
.container.sign-up-mode::before {
    transform: translateX(0);
}
.container.sign-up-mode .right-panel .image,
.container.sign-up-mode .right-panel .content {
    transform: translateX(200%);
}
.container.sign-up-mode .left-panel .image,
.container.sign-up-mode .left-panel .content {
    transform: translateX(0);
}
.container.sign-up-mode form.sign-in-form {
    opacity: 0;
}
.container.sign-up-mode form.sign-up-form {
    opacity: 1;
}
.container.sign-up-mode .right-panel {
    pointer-events: none;
}
.container.sign-up-mode .left-panel {
    pointer-events: all;
}
/*Responsive*/
@media (max-width:779px) {
    .container {
        width: 100vw;
        height: 100vh;
    }
}
@media (max-width:635px) {
    .container::before {
        display: none;
    }
    form {
        width: 80%;
    }
    form.sign-up-form {
        display: none;
    }
    .container.sign-up-mode2 form.sign-up-form {
        display: flex;
        opacity: 1;
    }
    .container.sign-up-mode2 form.sign-in-form {
        display: none;
    }
    .panels-container {
        display: none;
    }
    .account-text {
        display: initial;
        margin-top: 30px;
    }
}
@media (max-width:320px) {
    form {
        width: 90%;
    }
}
</style>
        <x-slot name="logo">
            <x-authentication-card-logo />
        </x-slot>
        <x-validation-errors class="mb-4 px-6 py-4" />
        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600 dark:text-green-400">
                {{ session('status') }}
            </div>
        @endif

        <div class="container">
            <div class="signin-signup">
                <form method="POST" action="{{ route('login') }}" class="sign-in-form">
                    @csrf
                    <h2 class="title">Inicio de Sesión</h2>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <x-label for="email" value="{{ __('') }}" />
                        <x-input id="email" placeholder="Correo" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <x-label for="password" value="{{ __('') }}" />
                        <x-input id="password" placeholder="Contraseña" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
                    </div>
                    <div class="social-text mt-4">
                        @if (Route::has('password.request'))
                            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('password.request') }}">
                                {{ __('Olvidaste tu contraseña?') }}
                            </a>
                        @endif
                    </div>
                    <x-button type="submit" value="Login" class=" btn ml-4" id="btn-login">
                        {{ __('Iniciar sesión') }}
                    </x-button>
                    <div class="social-text mt-4">
                            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('index') }}">
                                {{ __('Volver al inicio') }}
                            </a>
                    </div>
                </form>
                <form method="POST" action="{{ route('register') }}" class="sign-up-form">
                    @csrf
                    <h2 class="title">Registro</h2>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <x-label for="name" value="{{ __('') }}" />
                        <x-input id="name" placeholder="Nombre" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                    </div>

                    <div class="input-field">
                        <i class="fas fa-envelope"></i>
                        <x-label for="email" value="{{ __('') }}" />
                        <x-input id="email" placeholder="Correo" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
                    </div>

                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <x-label for="password" value="{{ __('') }}" />
                        <x-input id="password" placeholder="Contraseña" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
                    </div>

                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <x-label for="password_confirmation" value="{{ __('') }}" />
                        <x-input id="password_confirmation" placeholder="Confirmar Contraseña" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
                    </div>

                    @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                        <div class="mt-4">
                            <x-label for="terms">
                                <div class="flex items-center">
                                    <x-checkbox name="terms" id="terms" required />
                                    <div class="ml-2">
                                        {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                                'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Terms of Service').'</a>',
                                                'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Privacy Policy').'</a>',
                                        ]) !!}
                                    </div>
                                </div>
                            </x-label>
                        </div>
                    @endif

                    <x-button type="submit" value="Sign up" class="btn ml-4">
                        {{ __('Registrar Usuario') }}
                    </x-button>
                    <div class="social-text mt-4">
                        <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('index') }}">
                            {{ __('Volver al inicio') }}
                        </a>
                    </div>
                </form>
            </div>
            <div class="panels-container">
                <div class="panel left-panel">
                    <div class="content">
                        <h3>Ya tienen una cuenta?</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque accusantium dolor, eos incidunt minima iure?</p>
                        <button class="btn" id="sign-in-btn">Iniciar Sesión</button>
                    </div>
                </div>
                <div class="panel right-panel">
                    <div class="content">
                        <h3>No tienes cuenta?</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque accusantium dolor, eos incidunt minima iure?</p>
                        <button class="btn" id="sign-up-btn">Registrar</button>
                    </div>
                </div>
            </div>
        </div>
<script>
    const sign_in_btn = document.querySelector("#sign-in-btn");
    const sign_up_btn = document.querySelector("#sign-up-btn");
    const container = document.querySelector(".container");
    const sign_in_btn2 = document.querySelector("#sign-in-btn2");
    const sign_up_btn2 = document.querySelector("#sign-up-btn2");
    sign_up_btn.addEventListener("click", () => {
        container.classList.add("sign-up-mode");
    });
    sign_in_btn.addEventListener("click", () => {
        container.classList.remove("sign-up-mode");
    });
    sign_up_btn2.addEventListener("click", () => {
        container.classList.add("sign-up-mode2");
    });
    sign_in_btn2.addEventListener("click", () => {
        container.classList.remove("sign-up-mode2");
    });
</script>
</x-guest-layout>
