<?php

use function Laravel\Folio\{middleware, name};

middleware('auth');
name('sms');
?>

<x-layouts.app>
    <x-app.container x-data="{ success: false }" class="lg:space-y-6" x-cloak>
        <div class="space-y-4">
            <h1 class="text-2xl font-semibold">Envio de SMS</h1>

            <!-- Feedback Message -->
            <div x-show="success" class="p-4 bg-green-100 text-green-800 rounded-md">
                SMS enviado com sucesso!
            </div>

            <!-- SMS Form -->
            <form method="POST" action="/send-sms" @submit.prevent="success = true" class="space-y-4">
                @csrf
                <div>
                    <label for="recipient" class="block text-sm font-medium text-gray-700">Número do destinatário</label>
                    <input 
                        type="text" 
                        id="recipient" 
                        name="recipient" 
                        required 
                        class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                        placeholder="+1234567890">
                </div>

                <div>
                    <label for="message" class="block text-sm font-medium text-gray-700">Mensagem</label>
                    <textarea 
                        id="message" 
                        name="message" 
                        required 
                        rows="4" 
                        class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                        placeholder="Digite sua mensagem aqui"></textarea>
                </div>

                <div>
                    <button 
                        type="submit" 
                        class="inline-flex justify-center px-4 py-2 bg-indigo-600 border border-transparent rounded-md font-medium text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                        Enviar SMS
                    </button>
                </div>
            </form>

            <!-- SMS History -->
            <div class="mt-6">
                <h2 class="text-xl font-semibold">Histórico de SMS</h2>
                <ul class="space-y-2">
                    <li class="p-4 border rounded-md">
                        <p><strong>Para:</strong> +1234567890</p>
                        <p><strong>Mensagem:</strong> Olá! Este é um exemplo de mensagem.</p>
                        <p class="text-sm text-gray-500">Enviado em: 2025-01-14</p>
                    </li>
                    <!-- Adicione mais mensagens aqui -->
                </ul>
            </div>
        </div>
    </x-app.container>
</x-layouts.app>
