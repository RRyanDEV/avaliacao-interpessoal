<?php
function loginComponent()
{
    return '<div id="fontSync" class="flex justify-center h-screen overflow-y-hidden flex-col items-center">
    <form method="POST">
        <div class="bg-white shadow-2xl flex flex-col space-y-6 rounded-md p-11">
            <div class="flex flex-col items-center p-3 justify-center w-full">
                <h1 class="text-4xl text-black font-bold">Login</h1>
                <p class="font-light text-2xl tracking-wide text-center text-black">Use
                    suas
                    credenciais para
                    logar</p>
            </div>
            <div class="flex flex-wrap mb-6">
                <div class="w-full px-3">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                        Email
                        <i class="fas fa-envelope text-gray-700"></i>
                    </label>
                    <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" name="email" required type="text">
                </div>
            </div>
            <div id="align">
            <div class="flex flex-wrap mb-6">
                <div class="w-full px-3">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                        Senha
                        <i id="togglePassword" class="fas fa-eye cursor-pointer text-gray-700"></i>
                    </label>
                    <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" name="password" required id="id_password" type="password">
                </div>
            </div>
            <div class="w-full flex flex-wrap space-x-5 justify-center">
                <div id="button-login">
                    <button type="submit" name="submit" class="text-white border border-blue-700 bg-blue-600 hover:bg-blue-800 focus:ring-4 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Entrar</button>
                </div>
                <div id="criarconta">
                    <a href="../pages/register.php">
                        <button type="button" class="text-white border border-green-700 bg-green-600 hover:bg-green-800 focus:ring-4 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Criar conta</button>
                    </a>
                </div>
            </div>
        </div>
</div>
</form>
</div>';
}
?>

<!-- . -->