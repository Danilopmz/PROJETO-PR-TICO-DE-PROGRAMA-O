<?php
session_start();
include('verifica_login.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- TAILWIND CSS -->
    <link href="assets/css/tailwind.css" rel="stylesheet">
    <!-- ALPINE JS -->
    <script src="assets/js/alpine.js" defer></script>

    <title></title>
</head>
<body class="antialiased bg-gray-100">
    <div class="flex relative" x-data="{navOpen: false}">
        <!-- NAV -->
        <nav class="absolute md:relative w-64 transform -translate-x-full md:translate-x-0 h-screen overflow-y-scroll bg-black transition-all duration-300" :class="{'-translate-x-full': !navOpen}">
            <div class="flex flex-col justify-between h-full">
                <div class="p-4">
                    <!-- LOGO -->
                    <a class="flex items-center text-white space-x-4" href="">
                        <svg class="w-7 h-7 bg-indigo-600 rounded-lg p-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path></svg>
                        <span class="text-2xl font-bold">HAX INFORMÁTICA PAINEL</span>
                    </a>

                    <!-- SEARCH BAR -->
                    <div class="border-gray-700 py-5 text-white border-b rounded">
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 flex items-center pl-2">
                                <svg class="w-5 h-5 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                            </div>
                            <form action="" method="GET">
                                <input type="search" class="w-full py-2 rounded pl-10 bg-gray-800 border-none focus:outline-none focus:ring-0" placeholder="Search">
                            </form>
                        </div>
                        <!-- SEARCH RESULT -->
                    </div>

                    <!-- NAV LINKS -->
                    <div class="py-4 text-gray-400 space-y-1">
                        <!-- BASIC LINK -->
                        <a href="painel.php" class="block py-2.5 px-4 flex items-center space-x-2 bg-gray-800 text-white hover:bg-gray-800 hover:text-white rounded">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 8v8m-4-5v5m-4-2v2m-2 4h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                            <span>Painel de produtos</span>
                        </a>
                        <a href="cadastroproduto.php" class="block py-2.5 px-4 flex items-center space-x-2 bg-gray-800 text-white hover:bg-gray-800 hover:text-white rounded">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 8v8m-4-5v5m-4-2v2m-2 4h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                            <span>Cadastro de produtos</span>
                        </a>
                        <a href="alterarproduto.php" class="block py-2.5 px-4 flex items-center space-x-2 bg-gray-800 text-white hover:bg-gray-800 hover:text-white rounded">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 8v8m-4-5v5m-4-2v2m-2 4h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                            <span>Alterar/Deletar produtos</span>
                        </a>
                        
                        <!-- DROPDOWN LINK -->
                        <div class="block" x-data="{open: false}">
                            <div @click="open = !open" class="flex items-center justify-between hover:bg-gray-800 hover:text-white cursor-pointer py-2.5 px-4 rounded">
                                <div class="flex items-center space-x-2">
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path></svg>
                                    <span>Perfil</span>
                                </div>
                                <svg x-show="open" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7"></path></svg>
                                <svg x-show="!open" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>    
                            </div>
                            <div x-show="open" class="text-sm border-l-2 border-gray-800 mx-6 my-2.5 px-2.5 flex flex-col gap-y-1">
                                <a href="#" class="block py-2 px-4 hover:bg-gray-800 hover:text-white rounded">
                                    Alterar dados cadastrais
                                </a>
                                
                            </div>
                        </div>
                    </div>
                </div>

                <!-- PROFILE -->
                <div class="text-gray-200 border-gray-800 rounded flex items-center justify-between p-2">
                    <div class="flex items-center space-x-2">
                        <!-- AVATAR IMAGE BY FIRST LETTER OF NAME -->
                        <img src="https://ui-avatars.com/api/?name=Habib+Mhamadi&size=128&background=ff4433&color=fff" class="w-7 w-7 rounded-full" alt="Profile">
                        <h2><?php echo $_SESSION['usuario'];?></h2>
                    </div>
                    <a  href="logout.php" class="hover:bg-gray-800 hover:text-white p-2 rounded">
                        <form id="logoutForm" action="" method="POST"></form>
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path></svg>            
                        </form>
                    </a>
                </div>

            </div>
        </nav>
        <!-- END OF NAV -->
        <!-- DADOS DO BANCO -->


        <!-- PAGE CONTENT -->
        <main class="flex-1 h-screen overflow-y-scroll overflow-x-hidden">
            <div class="md:hidden justify-between items-center bg-black text-white flex">
                <h1 class="text-2xl font-bold px-4">Better Code</h1>
                <button @click="navOpen = !navOpen" class="btn p-4 focus:outline-none hover:bg-gray-800">
                    <svg class="w-6 h-6 fill-current" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path></svg>
                </button>
            </div>
            <section class="max-w-7xl mx-auto py-4 px-5">
                <div class="flex justify-between items-center border-b border-gray-300">
                    <h1 class="text-2xl font-semibold pt-2 pb-6">Seja bem vindo à HAX INFORMÁTICA - Painel de produtos</h1>
                    
                </div>
                
                <!-- TABLE -->

                <?php

                $conn = mysqli_connect('127.0.0.1', 'root', '','projeto' );
                $query = "select * from produtos";

                $result = mysqli_query($conn, $query);
                ?>

                <!-- TABLE -->
                <div class="bg-white shadow rounded-sm my-2.5 overflow-x-auto">
                    <table class="min-w-max w-full table-auto">
                        <thead>
                            <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                                <th class="py-3 px-6 text-left whitespace-nowrap">Categoria</th>
                                <th class="py-3 px-6 text-left">Nome do produto</th>
                                <th class="py-3 px-6 text-center">Valor</th>
                                <th class="py-3 px-6 text-center">Descrição</th>
                                <th class="py-3 px-6 text-center">ID</th>
                                <th class="py-3 px-6 text-center">Deletar</th>
                            </tr>
                        </thead>
                        <tbody class="text-gray-600 text-sm">
                            <?php while ($dado = $result->fetch_array() ){ ?>
                            <tr class="border-b border-gray-200 hover:bg-gray-100">
                                <!-- Categoria -->
                                <td class="py-3 px-6 text-left whitespace-nowrap">
                                        <?php  echo $dado['categoria']; ?>
                                    </div>
                                </td>
                                    <!-- Nome produto -->
                                <td class="py-3 px-6 text-left">
                                    <div class="flex items-center">
                                        <div class="mr-2">
                                            
                                        </div>
                                        <span>
                                        <?php  echo $dado['nomeproduto']; ?>
                                        </span>
                                    </div>
                                </td>
                                    <!-- Valor -->
                                    <td class="py-3 px-6 text-center">
                                        <?php  echo $dado['valor']; ?>
                                    </td>
                                    <!-- Descrição -->
                                    <td class="py-3 px-6 text-center">
                                        <span>
                                        <?php  echo $dado['descricao']; ?>
                                        </span>
                                    </td>

                                    <td class="py-3 px-6 text-center">
                                        <span>
                                        <?php  echo $dado['idproduto']; ?>
                                        </span>
                                    </td>
                                    <td class="py-3 px-6 text-center">
                                    <?php
                                       echo '<button> <a href="delete.php?del='.$dado['idproduto'].'"> X
                                            </button>';
                                    ?>
                                    </td>
                                    </form>                                  
                            </tr>                          
                                <?php } ?>                            
                        </tbody>
            </section>
            
            <!-- END OF PAGE CONTENT -->
        </main>
    </div>
</body>
</html>