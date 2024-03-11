<?php

function registerComponent()
{
    return ' <div id="fontSync" class="flex justify-center flex-col items-center h-screen">
    <form method="post">
        <div class="bg-gradient-to-br from-slate-500 to-slate-700 shadow-2xl flex flex-col space-y-6 rounded-md p-11">
            <div class="flex flex-col items-center p-3 justify-center w-full">
                <h1 class="text-5xl text-white font-bold">Cadastro</h1>
            </div>
            <div class="flex flex-wrap -mx-3 mb-6">
                <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                    <label class="block uppercase tracking-wide text-white text-xs font-bold mb-2">
                        Nome Completo
                        <i class="fas fa-user text-white"></i>
                    </label>
                    <input class="appearance-none block w-full bg-gray-200 text-gray-700 border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" name="username" required type="text">
                </div>
                <div class="w-full md:w-1/2 px-3">
                    <label class="block uppercase tracking-wide text-white text-xs font-bold mb-2">
                        Email
                        <i class="fas fa-envelope text-white"></i>
                    </label>
                    <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" name="email" required type="text">
                </div>
            </div>
            <div>
            <div class="flex flex-wrap -mx-3 mb-6">
                <div class="w-full px-3">
                    <label class="block uppercase tracking-wide text-white text-xs font-bold mb-2">
                        Senha
                        <i id="togglePasswordR" class="fas fa-eye cursor-pointer text-white"></i>
                    </label>
                    <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" name="password" required id="id_passwordR" type="password">
                </div>
            </div>
            <div class="w-full flex flex-wrap space-x-5 justify-center">
                <div id="button-login">
                    <button type="submit" name="submit" class="text-white border border-blue-700 bg-blue-600 hover:bg-blue-800 focus:ring-4 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Criar conta</button>
                </div>
                <div id="criarconta">
                    <a href="../pages/login.php">
                        <button type="button" class="text-white border border-green-700 bg-green-600 hover:bg-green-800 focus:ring-4 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Voltar</button>
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